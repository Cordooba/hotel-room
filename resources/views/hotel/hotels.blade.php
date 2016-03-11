@extends('layout')

@section('title')
  Lista de Hoteles
@endsection

@section('content')
  <div class="container">
    <h1>Lista de Hoteles</h1>
    <ul>
  @foreach($hotels as $hotel)
    <a style="display:block" href="{{ url($hotel->id) }}">{{ $hotel->name }}</a>
  @endforeach
    </ul>
  </div>
@stop
