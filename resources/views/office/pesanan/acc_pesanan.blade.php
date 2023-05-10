@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                <form action="{{ route('ticket.detail') }}" method="GET">
                    @csrf
                    <div class="form-group">
                        <label for="ticket_id">Ticket ID:</label>
                        <input type="text" name="ticket_id" id="ticket_id" class="form-control" placeholder="Masukkan Ticket ID">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Cari</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
