<x-dashboard-layout>
    <div class="section-header">
        <h1>Laporan</h1>
        <x-section-header
            basepage="Office"
            page="Konser"
            page2="Create" />
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <span>Confirmed</span>
                    </div>
                    <div class="card-body">
                        <x-core-table idTable="Confirmed">
                            @include('content.table-dashboard', [
                                'rows' => [
                                    'Ticket Number',
                                    'Name Customer',
                                    'Email Customer',
                                    'Phone Customer',
                                ]
                            ]);
                            <tbody>
                                @foreach ($confirmed as $c)
                                <tr>
                                    <td>{{ $c->ticket_number }}</td>
                                    <td>{{ $c->customer->name }}</td>
                                    <td>{{ $c->customer->email }}</td>
                                    <td>{{ $c->customer->phone }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </x-core-table>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <span>UnConfirmed</span>
                    </div>
                    <div class="card-body">
                        <x-core-table idTable="Confirmed">
                            @include('content.table-dashboard', [
                                'rows' => [
                                    'Ticket Number',
                                    'Name Customer',
                                    'Email Customer',
                                    'Phone Customer',
                                ]
                            ]);
                            <tbody>
                                @foreach ($unconfirmed as $c)
                                <tr>
                                    <td>{{ $c->ticket_number }}</td>
                                    <td>{{ $c->customer->name }}</td>
                                    <td>{{ $c->customer->email }}</td>
                                    <td>{{ $c->customer->phone }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </x-core-table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>
