@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Laporan Pemesanan') }}</div>
                <div class="card-body">
                    <ul class="nav nav-pills mb-4">
                        <li class="nav-item">
                            <a class="nav-link{{ !$status ? ' active' : '' }}" href="{{ route('laporan') }}">Semua</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link{{ $status === 'not_confirmed' ? ' active' : '' }}" href="{{ route('laporan', 'not_confirmed') }}">Belum Dikonfirmasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link{{ $status === 'confirmed' ? ' active' : '' }}" href="{{ route('laporan', 'confirmed') }}">Dikonfirmasi</a>
                        </li>
                    </ul>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No. Telepon</th>
                                    <th>Alamat</th>
                                    <th>Konser</th>
                                    <th>Ticket ID</th>
                                    <th>Jumlah</th>
                                    <th>Total Harga</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pesanans as $pesanan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pesanan->customer->name }}</td>
                                    <td>{{ $pesanan->customer->email }}</td>
                                    <td>{{ $pesanan->customer->phone }}</td>
                                    <td>{{ $pesanan->customer->address }}</td>
                                    <td>{{ $pesanan->konser->name }}</td>
                                    <td>{{ $pesanan->ticket_number }}</td>
                                    <td>{{ $pesanan->quantity }}</td>
                                    <td>Rp {{ number_format($pesanan->total_price, 0, ',', '.') }}</td>
                                    <td>{{ $pesanan->status }}</td>
                                    <td>
                                        @if ($pesanan->status === 'not_confirmed')
                                        <a href="{{ route('ServicesAcc', $pesanan->id) }}" class="btn btn-success btn-sm">Konfirmasi</a>
                                        @endif
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
</div>
@endsection
