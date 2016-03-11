@extends('layout')

@section('title')
  Room
@endsection

@section('content')
  <div class="container">
    <h1>Editar Room</h1>
    <form action="/rooms/{{ $room->id }}" method="post">
      {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="form-group">
      <label for="name">Nombre:</label>
      <input type="text" name="name" class="form-control" value="{{ $room->name }}">
    </div>
    <div class="form-group">
      <label for="state">Estado:</label>
      <input type="text" name="state" class="form-control" value="{{ $room->state }}">
    </div>
    <div class="form-group">
      <label for="beds">Plazas:</label>
      <input type="text" name="beds" class="form-control" value="{{ $room->beds }}">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Actualizar Room</button>
    </div>
  </form>
  </div>
@endsection
