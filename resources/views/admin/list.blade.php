@extends('layouts.app')

@section('content')
    <p>Reserveringen</p>
    <table>
        <tr>
            <th>Id</th>
            <th>Naam</th>
            <th>Email</th>
            <th>Telefoonnummer</th>
            <th>Datum</th>
        </tr>
        @foreach ($data as $booking)
            <tr>
                <td><a href="detail/{{ $booking->id }}">{{ $booking->id }}</a></td>
                <td>{{ $booking->name }}</td>
                <td>{{ $booking->email }}</td>
                <td>{{ $booking->phone }}</td>
                <td>{{ $booking->date }}</td>
                <td><a href="edit/{{ $booking->id }}">bewerken</a></td>
                <td>verwijderen</td>
            </tr>
        @endforeach
    </table>
@endsection