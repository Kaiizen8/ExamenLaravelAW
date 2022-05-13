@extends('layouts/layout')

@section('title', 'List of Tasks')

@section('main')
    <div class="task-list">
    <h2>{{ $task->title }}</h2>
  <p>{{ $task->description }}</p>
  <p>Le {{ $task->created_at->translatedFormat('d F Y à H\hi') }}</p>
    </div>
@endsection
