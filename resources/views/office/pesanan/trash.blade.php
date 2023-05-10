<x-dashboard-layout>
    <style>
        table, th, td {
        padding: 10px;
          border:1px solid black;
        }
        </style>
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{ Route('pesanan.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Trash Data Pesanan / Ticket</h1>
        <x-section-header
            basepage="Office"
            page="Konser"
            page2="Create" />
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
              <th>Action</th>
              <x-core-table idTable="data-siswa">
                  @include('content.table-dashboard', [
                      'rows' => [
                          'Ticket Number',
                          'Name Customer',
                          'Email Customer',
                          'Phone Customer',
                          'Action'
                      ]
                  ])
                  <tbody>
                    @foreach ($pesanan as $p)
                    <tr>
                        <td>{{ $p->ticket_number }}</td>
                        <td>{{ $p->customer->name }}</td>
                        <td>{{ $p->customer->email }}</td>
                        <td>{{ $p->customer->phone }}</td>
                        <td>
                            <form action="{{ route('pesanan-restore', $p->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-icon icon-left btn-success restore"> <i class="bi bi-arrow-counterclockwise"></i> Restore</button>
                            </form>
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
