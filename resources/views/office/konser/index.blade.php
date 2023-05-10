<x-dashboard-layout>
    <div class="section-header">
        <h1>Data Konser</h1>
        <div class="section-header-button">
          <a href="{!! route('konser.create') !!}" class="btn btn-primary btn-icon"> <i class="bi bi-person-add"></i> Create Konser</a>
        </div>
        <x-section-header
            basepage="Office"
            page="Konser - List"
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
                          'Name Konser',
                          'Date Konser',
                          'Time Konser',
                          'Location Konser',
                          'Action'
                      ]
                  ])
                  <tbody>
                    @foreach ($konser as $k)
                    <tr>
                        <td>{{ $k->name_konser }}</td>
                        <td>{{ $k->date_konser->format('d-M-Y') }}</td>
                        <td>{{ $k->time_konser }}</td>
                        <td>{{ $k->location_konser }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{!! route('konser.show', $k->name_konser) !!}" class="btn btn-info">Show</a>
                                <a href="{!! route('konser.update', [$k->name_konser, 'konser_id' => $k->id]) !!}" class="btn btn-primary" style="margin-left: 10px;">Edit</a>
                                <a href="#" class="btn btn-danger" style="margin-left: 10px;">Delete</a>
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
</x-dashboard-layout>
