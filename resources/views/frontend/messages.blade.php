@extends('frontend.master')

@section('title', 'Üzenetek')

@section('content')
    <h1>Üzenetek</h1>
    <ul>
        @forelse($messages as $msg)
            <li>{{ $msg->content }}</li>
        @empty
            <li>Nincsenek üzenetek</li>
        @endforelse
    </ul>
@endsection