@extends('layouts.app')

@section('content')
    <p>Detail</p>

    <p>Naam: {{ $booking->name }}</p>
    <p>Email: {{ $booking->email }}</p>
    <p>Telefoonnummer: {{ $booking->phone }}</p>
    <p>Datum: {{ $booking->date }}</p>
@endsection