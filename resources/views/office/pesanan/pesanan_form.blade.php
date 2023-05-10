@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
<form method="POST" action="{{ route('Services.update', $pesanan->id) }}">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $pesanan->customer->name }}">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $pesanan->customer->email }}">
    </div>

    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" value="{{ $pesanan->customer->phone }}">
    </div>

    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address" value="{{ $pesanan->customer->address }}">
    </div>

    <div class="form-group">
        <label for="quantity">Quantity</label>
        <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $pesanan->quantity }}">
    </div>

    <div class="form-group">
        <label for="quantity">Ticket Number</label>
        <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $pesanan->ticket_number }}">
    </div>

    <div class="form-group">
        <label for="status">Status</label>
        <select class="form-control" id="status" name="status">
            <option value="Not Confirmed" {{ $pesanan->status == "Not Confirmed" ? "selected" : "" }}>Not Confirmed</option>
            <option value="Confirmed" {{ $pesanan->status == "Confirmed" ? "selected" : "" }}>Confirmed</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
