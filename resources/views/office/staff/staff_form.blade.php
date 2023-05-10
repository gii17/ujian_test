<x-dashboard-layout>
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{ Route('staf.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
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
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-12">
                            {!! Form::model($model, ['route' => $route, 'method' => $method, 'files' => true]) !!}
                            <div class="mb-3 row">
                                {!! Form::label('name', 'Name Staff', ['class' => 'col-md-2 col-form-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::text('name', null, [
                                        'class' => 'form-control',
                                        'autofocus',
                                        'placeholder' => 'Choose Your Name Konser'
                                    ]) !!}
                                    @if($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="mb-3 row">
                                {!! Form::label('email', 'Email Staff', ['class' => 'col-md-2 col-form-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::email('email', null, [
                                        'class' => 'form-control',
                                        'placeholder' => 'Choose email'
                                    ]) !!}
                                    @if($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="mb-3 row">
                                {!! Form::label('phone', 'phone Staff', ['class' => 'col-md-2 col-form-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::number('phone', null, [
                                        'class' => 'form-control',
                                        'placeholder' => 'Choose phone'
                                    ]) !!}
                                    @if($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="mb-3 row">
                                {!! Form::label('address', 'address Staff', ['class' => 'col-md-2 col-form-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::text('address', null, [
                                        'class' => 'form-control',
                                        'placeholder' => 'Choose address'
                                    ]) !!}
                                    @if($errors->has('address'))
                                        <span class="text-danger">{{ $errors->first('address') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="mb-3 row">
                                {!! Form::label('password', 'Password Staff', ['class' => 'col-md-2 col-form-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::password('password',  [
                                        'class' => 'form-control',
                                        'placeholder' => 'Choose password'
                                    ]) !!}
                                    @if($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="mt-4 text-center">
                                {!! Form::submit($button, ['class' => 'btn btn-primary w-md']) !!}
                            </div>
                            {!! Form::close() !!}
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
