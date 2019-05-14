@extends('layout')

@section('content')
<h1>test</h1>
    <table class="table table-bordered">
        <thead>
            <th>Titulo</th>
            <th>Status</th>
            <th>Fecha</th>
            <th>Tiempo</th>
        </thead>
        <tbody>
        @foreach($tickets as $ticket)
            <tr>
                <td>{{ $ticket->title }}</td>
                <td>{{ $ticket->status }}</td>
                <td>{{ $ticket->created_at }}</td>
                <td class="countdown-time" data-fecha="{{ $ticket->created_at }}"></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
