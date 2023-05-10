@extends('layouts.app')

@section('content')
<style>
    table, th, td {
      border:1px solid black;
    }
    </style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <table style="width:100%">
                        <thead>
                        <tr>
                            <th>ticket number</th>
                            <th>name Customer</th>
                            <th>email Customer</th>
                            <th>phone Customer</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($pesanan as $p)
                            <tr>
                                <td>{{ $p->ticket_number }}</td>
                                <td>{{ $p->customer->name }}</td>
                                <td>{{ $p->customer->email }}</td>
                                <td>{{ $p->customer->phone }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{!! route('editPesanan', $p->ticket_number) !!}" class="btn btn-primary" style="margin-left:5px;">Edit</a>
                                        {!! Form::open([
                                            'route' => ['Service.destroy', $p->id],
                                            'method' => 'DELETE',
                                        ]) !!}
                                        {!! Form::submit('Remove',['class' => "btn btn-danger", 'style' => "margin-left:10px;"]) !!}
                                        {!! Form::close() !!}
                                    </div>
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
@endsection
