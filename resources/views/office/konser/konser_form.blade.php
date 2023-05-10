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
                            {{-- {!! Form::model($model, ['route' => $route, 'method' => $method, 'files' => true]) !!} --}}
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
                                {!! Form::label('date', 'Date', ['class' => 'col-md-2 col-form-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::date('date', null, [
                                        'class' => 'form-control',
                                        'placeholder' => 'Choose Date'
                                    ]) !!}
                                    @if($errors->has('date'))
                                        <span class="text-danger">{{ $errors->first('date') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="mb-3 row">
                                {!! Form::label('time', 'Time', ['class' => 'col-md-2 col-form-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::time('time', null, [
                                        'class' => 'form-control',
                                        'placeholder' => 'Choose time'
                                    ]) !!}
                                    @if($errors->has('time'))
                                        <span class="text-danger">{{ $errors->first('time') }}</span>
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
                                {!! Form::label('ticket_price', 'Ticket Price', ['class' => 'col-md-2 col-form-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::number('ticket_price', null, [
                                        'class' => 'form-control',
                                        'placeholder' => 'Enter Ticket Price',
                                        'min' => '0'
                                    ]) !!}
                                    @if($errors->has('ticket_price'))
                                        <span class="text-danger">{{ $errors->first('ticket_price') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tags</label>
                                <input type="text" class="form-control inputtags">
                              </div>
                            <div class="mt-4 text-center">
                                {{-- {!! Form::submit($button, ['class' => 'btn btn-primary w-md']) !!} --}}
                            </div>
                            {{-- {!! Form::close() !!} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('script')
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/js/standalone/selectize.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#tags-input').selectize({
                delimiter: ',',
                persist: false,
                create: function(input) {
                    return {
                        value: input,
                        text: input
                    };
                }
            });
        });
    </script>
    @endpush
</x-dashboard-layout>
