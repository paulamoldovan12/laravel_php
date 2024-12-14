@extends('layouts.master')
@section('content')

    <form action="{{ route('successStories.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" required><br>

        <label for="story">Story:</label>
        <textarea name="story" required></textarea><br>

        <label for="member_id">Member name:</label>
        <input type="text" name="member_id" required><br>

        <button type="submit">Add Story</button>
    </form>

@endsection
