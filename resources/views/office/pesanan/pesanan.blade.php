<x-dashboard-layout>
    <style>
        table, th, td {
        padding: 10px;
          border:1px solid black;
        }
        </style>
        <div class="section-header">
            <h1>List Pemesanan</h1>
            <div class="section-header-button">
                <a href="{!! route('pesanan.pesanan-trash') !!}" class="btn btn-danger btn-icon"> <i class="bi bi-trash"></i> Trash Data  </a>
            </div>
            <x-section-header basepage="Office" page="Pesanan Ticket" page2="List" />
        </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <table style="width:100%">
                            <thead>
                            <tr>
                                <th>ticket number</th>
                                <th>name Customer</th>
                                <th>email Customer</th>
                                <th>phone Customer</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($pesanan as $p)
                                <tr>
                                    <td>{{ $p->ticket_number }}</td>
                                    <td>{{ $p->customer->name }}</td>
                                    <td>{{ $p->customer->email }}</td>
                                    <td>{{ $p->customer->phone }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{!! route('pesanan.editPesanan', $p->ticket_number) !!}" class="btn btn-primary" style="margin-left:5px;">Edit</a>
                                            {!! Form::open([
                                                'route' => ['Services.destroy.pesanan', $p->id],
                                                'method' => 'DELETE',
                                            ]) !!}
                                            {!! Form::submit('Remove',['class' => "btn btn-danger delete", 'style' => "margin-left:10px;"]) !!}
                                            {!! Form::close() !!}
                                        </div>
                                    </td>
                                </tr>
                        @endforeach
                            </tbody>
                        </table>
                    </div>
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
                  title: 'Kamu yakin ingin menghapus ticket  ini?',
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
