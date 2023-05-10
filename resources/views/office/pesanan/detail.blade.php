<x-dashboard-layout>
    <div class="section-header">
        <h1>Confirmed Tiket Number</h1>
        <x-section-header basepage="Office" page="Pesanan Ticket" page2="Confirmed" />
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        <form action="{{ route('ServicesAcc', $pesanan->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" name="name" class="form-control" value="{{ $pesanan->customer->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ $pesanan->customer->email }}" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Nomor Telepon</label>
                                <input type="text" name="phone" class="form-control" value="{{ $pesanan->customer->phone }}" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Alamat Lengkap</label>
                                <textarea name="address" class="form-control" required>{{ $pesanan->customer->address }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="quantity">Jumlah Tiket</label>
                                <input type="number" name="quantity" class="form-control" value="{{ $pesanan->quantity }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Confirmasi Pesanan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>
