@extends('layouts.app')

@section('content')
    <p>Edit</p>

    {!! Form::open(['route' => ['admin.edit', $booking->id],  'method' => 'POST']) !!}
    <div class="form-group">
        {{ Form::label('name', 'Naam') }}
        {{ Form::text('name', $booking->name, ['class' => 'form-control', 'placeholder' => 'Naam']) }}
    </div>

    <div class="form-group">
        {{ Form::label('phone', 'Telefoon') }}
        {{ Form::text('phone', $booking->phone, ['class' => 'form-control', 'placeholder' => 'Telefoon']) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', $booking->email, ['class' => 'form-control', 'placeholder' => 'Email']) }}
    </div>

    <div class="form-group">
        <i class="fas fa-calendar-day"></i>
        {{ Form::text('date', $booking->date, ['class' => 'test datepicker-here', 'placeholder' => 'Datum', 'data-language="nl"', 'autocomplete="off"']) }}
    </div>

    {{ Form::submit('Verzenden', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection