<?php
  $status = "";
  if (count($errors)) $status= "has-error";
 ?>

@extends('layout')

@section('title')
  Nueva Room
@endsection

@section('content')
  <div class="container">
    <h1>Añadir Room</h1>
    <form class="" action="" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="hotel">Hotel:</label>
        <select name="hotel">
          @foreach($hotels as $hotel)
            <option value="{{ $hotel->id }}">{{ $hotel->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group {{$status}}">
        <label for="name">Nombre:</label>
        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
      </div>
      <div class="form-group">
        <label for="starts">Estado:</label>
        <select name="state">
          <option value="Libre">Libre</option>
          <option value="No disponible">No disponible</option>
        </select>
      </div>
      <div class="form-group {{$status}}">
        <label for="beds">Plazas:</label>
        <input type="text" name="beds" class="form-control" value="{{ old('beds') }}">
      </div>
      <div class="form-group">
         <button type="submit" class="btn btn-primary">Añadir room</button>
       </div>
    </form>
    @if( count($errors) )
        @foreach($errors->all() as $error)
          <span class="help-block">{{ $error }}</span>
        @endforeach
    @endif
    <a href="{{ URL::to('/') }}">Página Principal</a>
  </div>
@endsection
