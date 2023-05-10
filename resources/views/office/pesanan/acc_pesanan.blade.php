<x-dashboard-layout>
    <div class="section-header">
        <h1>Confirmed Tiket Number</h1>
        <x-section-header basepage="Office" page="Pesanan Ticket" page2="Confirmed" />
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header justify-content-between d-flex align-items-center">
                    <h4 class="card-title">Create Konser</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-12">
                            <form action="{{ route('pesanan.ticket.detail') }}" method="GET">
                                @csrf
                                <div class="form-group">
                                    <div class="mb-3 row">
                                        <label for="ticket_id" class="form-label" style="margin-top:10px;">Ticket ID:</label>
                                        <div class="col-md-10">
                                            <input type="text" name="ticket_id" id="ticket_id" class="form-control"
                                                placeholder="Masukkan Ticket ID">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary mt-3">Cari</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>
