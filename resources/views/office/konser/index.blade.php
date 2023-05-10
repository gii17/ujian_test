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
              </x-core-table>
            </div>
          </div>
        </div>
      </div>
</x-dashboard-layout>
