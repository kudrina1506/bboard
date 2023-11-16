@extends('layouts.app')

@section('title','Главная')

@section('content')
    <h2>{{ $bb->title }}</h2>
    <p>{{ $bb->content }}</p>
    <p>{{ $bb->price }} руб.</p>
    <p>Автор: {{ $bb->user->name }}</p>
    <a href="{{ route('index') }}">На перечень объявлений</a>
@endsection('content')
