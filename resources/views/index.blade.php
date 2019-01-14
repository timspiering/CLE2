@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Reservering</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                {!! Form::open(['action' => 'Form\BookingController@store', 'method' => 'POST']) !!}
                    <div class="form-group">
                        {{ Form::label('name', 'Naam') }}
                        {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Naam']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('phone', 'Telefoon') }}
                        {{ Form::text('phone', '', ['class' => 'form-control', 'placeholder' => 'Telefoon']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('email', 'Email') }}
                        {{ Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Email']) }}
                    </div>

                    <div class="form-group">
                        <i class="fas fa-calendar-day"></i>
                        {{ Form::text('date', '', ['class' => 'test datepicker-here', 'placeholder' => 'Datum', 'data-language="nl"', 'autocomplete="off"']) }}
                    </div>

                        {{ Form::submit('Verzenden', ['class' => 'btn btn-primary']) }}
                {!! Form::close() !!}
            </div>
            <div class="col-sm-6">
                <p>Test</p>
            </div>
        </div>
    </div>
@endsection