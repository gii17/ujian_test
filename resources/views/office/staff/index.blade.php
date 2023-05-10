<x-dashboard-layout>
    <div class="section-header">
        <h1>Data Staff</h1>
        <div class="section-header-button">
          <a href="{!! route('staf.create') !!}" class="btn btn-primary btn-icon"> <i class="bi bi-person-add"></i> Create Staff</a>
        </div>
        <x-section-header
            basepage="Office"
            page="List - Staff"
            page2="all"/>
    </div>
    <div class="row mt-4">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="float-left">
                <select class="form-control selectric">
                  <option>Action For Selected</option>
                  <option>Move to Draft</option>
                  <option>Move to Pending</option>
                  <option>Delete Pemanently</option>
                </select>
              </div>
              <div class="clearfix mb-3"></div>

              <x-core-table idTable="data-siswa">
                  @include('content.table-dashboard', [
                      'rows' => [
                          'Name Staff',
                          'Phone Staff',
                          'Email Staff',
                          'Address Staff',
                          'Action'
                      ]
                  ])
                  <tbody>
                    @foreach ($staff as $s)
                        <tr>
                            <td>{{ $s->name }}</td>
                            <td>{{ $s->phone }}</td>
                            <td>{{ $s->email }}</td>
                            <td>{{ $s->address }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{!! route('staf.update', $s->name) !!}" class="btn btn-primary">Edit</a>
                                    {!! Form::open([
                                        'route' => ['Services.destroy', $s->id],
                                        'method' => 'DELETE',
                                    ]) !!}
                                    {!! Form::submit('Remove',['class' => "btn btn-danger delete", 'style' => "margin-left:10px;"]) !!}
                                    {!! Form::close() !!}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
              </x-core-table>
            </div>
          </div>
        </div>
      </div>
      @push('script')
      <script type="text/javascript">
          $('.delete').click(function(event) {
              var form =  $(this).closest("form");
              var name = $(this).data("name");
              event.preventDefault();
              Swal.fire({
                  title: 'Kamu yakin ingin menghapus staff ini?',
                  text: " klik oke untuk menlajutkan",
                  icon: 'question',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Delete'
                  }).then((result) => {
                  if (result.isConfirmed) {
                      Swal.fire(
                      'Berhasil!',
                      'Data ini berhasil di hapus',
                      'success'
                      ).then((willDelete) => {
                          if (willDelete) {
                          form.submit();
                          }
                      });
                  }

                  })
          });
      </script>
      @endpush
</x-dashboard-layout>
