<x-dashboard-layout>
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{ Route('konser.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Create Konser</h1>
        <x-section-header
            basepage="Office"
            page="Konser"
            page2="Create" />
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
                            {!! Form::model($model, ['route' => $route, 'method' => $method, 'files' => true]) !!}
                            <div class="mb-3 row">
                                {!! Form::label('name_konser', 'Name Konser', ['class' => 'col-md-2 col-form-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::text('name_konser', null, [
                                        'class' => 'form-control',
                                        'autofocus',
                                        'placeholder' => 'Choose Your Name Konser'
                                    ]) !!}
                                    @if($errors->has('name_konser'))
                                        <span class="text-danger">{{ $errors->first('name_konser') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="mb-3 row">
                                {!! Form::label('date_konser', 'Date', ['class' => 'col-md-2 col-form-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::date('date_konser', $model->date_konser, [
                                        'class' => 'form-control',
                                        'placeholder' => 'Choose Date'
                                    ]) !!}
                                    @if($errors->has('date_konser'))
                                        <span class="text-danger">{{ $errors->first('date_konser') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="mb-3 row">
                                {!! Form::label('time_konser', 'Time', ['class' => 'col-md-2 col-form-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::time('time_konser', null, [
                                        'class' => 'form-control',
                                        'placeholder' => 'Choose time'
                                    ]) !!}
                                    @if($errors->has('time_konser'))
                                        <span class="text-danger">{{ $errors->first('time_konser') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="mb-3 row">
                                {!! Form::label('location_konser', 'Location Konser', ['class' => 'col-md-2 col-form-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::text('location_konser', null, [
                                        'class' => 'form-control',
                                        'placeholder' => 'Enter Location Konser'
                                    ]) !!}
                                    @if($errors->has('location_konser'))
                                        <span class="text-danger">{{ $errors->first('location_konser') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="mb-3 row">
                                {!! Form::label('name_artist', 'Name Artist / Guest', ['class' => 'col-md-2 col-form-label']) !!}
                                <div class="col-md-10">
                                    @foreach($artis as $a)
                                        {!! Form::hidden('name_artist[]', $a, ['data-role' => 'tagsinput']) !!}
                                    @endforeach
                                    {!! Form::text('name_artist[]', null, ['data-role' => 'tagsinput', 'placholder' => 'Masukan Nama Guest Start', 'class' => 'form-control', 'autocomplate' => 'off']) !!}
                                    @if($errors->has('name_artist'))
                                        <span class="text-danger">{{ $errors->first('name_artist') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="mb-3 row">
                                {!! Form::label('price', 'Price', ['class' => 'col-md-2 col-form-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::text('price', null, ['placholder' => 'Masukan Price', 'class' => 'form-control nominal', 'autocomplate' => 'off']) !!}
                                    @if($errors->has('price'))
                                        <span class="text-danger">{{ $errors->first('price') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="mb-3 row">
                                {!! Form::label('ticket_available', 'Ticke Availabel', ['class' => 'col-md-2 col-form-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::number('ticket_available', null, ['placholder' => 'Masukan ticket_available', 'class' => 'form-control', 'autocomplate' => 'off']) !!}
                                    @if($errors->has('ticket_available'))
                                        <span class="text-danger">{{ $errors->first('ticket_available') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="mt-4 text-center">
                                {!! Form::submit($button, ['class' => 'btn btn-primary w-md']) !!}
                            </div>
                            {{-- {!! Form::close() !!} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('script')
    <script src="{{ asset('assets_dashboard/js/jquery.mask.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.nominal').mask("#.##0", {reverse: true});
        });
    </script>
    @endpush
</x-dashboard-layout>
