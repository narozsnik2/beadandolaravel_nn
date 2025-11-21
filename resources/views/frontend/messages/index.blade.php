@extends('frontend.master')

@section('title', 'Üzenetek')

@section('content')
<h1>Üzeneteim</h1>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<a href="{{ route('messages.create') }}" class="btn btn-primary mb-3">Új üzenet küldése</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Feladó</th>
            <th>Üzenet</th>
            <th>Dátum</th>
        </tr>
    </thead>
    <tbody>
        @forelse($messages as $msg)
            <tr>
            <td>{{ $msg->user?->name ?? 'Ismeretlen feladó' }}</td>
                <td>{{ $msg->content }}</td>
                <td>{{ $msg->created_at->format('Y-m-d H:i') }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="3">Nincsenek üzenetek</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection