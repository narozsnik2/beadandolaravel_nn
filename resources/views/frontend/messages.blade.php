@extends('frontend.master')

@section('title', 'Üzenetek')

@section('content')
    <h1>Üzenetek</h1>

    @if($messages->isEmpty())
        <p>Nincsenek üzenetek.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Dátum</th>
                    <th>Üzenet</th>
                </tr>
            </thead>
            <tbody>
                @foreach($messages as $msg)
                    <tr>
                        <td>{{ $msg->created_at->format('Y-m-d H:i') }}</td>
                        <td>{{ $msg->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection