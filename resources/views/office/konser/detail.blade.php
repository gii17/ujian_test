<x-dashboard-layout>
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{ Route('konser.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Detail Konser</h1>
        <x-section-header
            basepage="Office"
            page="Konser"
            page2="Detail" />
    </div>
    <div class="col-lg-12" style="margin-top: 90px;">
        <div class="card profile-widget">
            <div class="profile-widget-description pb-0">
                <div class="profile-widget-name" style="text-align: center;"><div class="text-muted d-inline font-weight-normal">
                    <h4 style="color:black">{{ $konser->name_konser }}</h4>
                </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row mt-4" style="margin-left: 1px;">
                            <div>
                                <p style="font-weight: bold;">Name Konser <span class="pull-right">:</span>
                                </p>
                            </div>
                            <div><span style="margin-left: 10px;">{{ $konser->name_konser }}</span>
                            </div>
                        </div>
                        <div class="row" style="margin-left: 1px;">
                            <div>
                                <p style="font-weight: bold;">Location / Address <span class="pull-right">:</span>
                                </p>
                            </div>
                            <div><span style="margin-left: 10px;">{{ $konser->location_konser }}</span>
                            </div>
                        </div>
                        <div class="row" style="margin-left: 1px;">
                            <div>
                                <p style="font-weight: bold;">Date / Tanggal <span class="pull-right">:</span>
                                </p>
                            </div>
                            <div><span style="margin-left: 10px;">{{ $konser->date_konser->format('d-M-Y') }}</span>
                            </div>
                        </div>
                        <div class="row" style="margin-left: 1px;">
                            <div>
                                <p style="font-weight: bold;">Time / Waktu <span class="pull-right">:</span>
                                </p>
                            </div>
                            <div><span style="margin-left: 10px;">{{ $konser->time_konser }}</span>
                            </div>
                        </div>
                        <div class="row" style="margin-left: 1px;">
                            <div>
                                <p style="font-weight: bold;">Price <span class="pull-right">:</span>
                                </p>
                            </div>
                            <div><span style="margin-left: 10px;">{{ $konser->formatRupiah('price') }}</span>
                            </div>
                        </div>
                        <div class="row" style="margin-left: 1px;">
                            <div>
                                <p style="font-weight: bold;"> Ticket Available <span class="pull-right">:</span>
                                </p>
                            </div>
                            <div><span style="margin-left: 10px;">{{ $konser->ticket_available }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <x-core-table idTable="show">
                            @include('content.table-dashboard', [
                                'rows' => [
                                    'Name Artis',
                                ]
                            ])
                            <tbody>
                                @foreach ($konser->guest as $ks)
                                    <tr>
                                        <td>{{ $ks->name_artist }}</td>
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
