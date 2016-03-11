<?php
  $status = "";
  if (count($errors)) $status= "has-error";
 ?>

@extends('layout')

@section('title')
  Nuevo Hotel
@endsection

@section('content')
  <div class="container">
    <h1>Añadir Hotel</h1>
    <form class="" action="" method="post">
      {{ csrf_field() }}
      <div class="form-group {{$status}}">
        <label for="name">Nombre:</label>
        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
      </div>
      <div class="form-group {{$status}}">
        <label for="starts">Estrellas:</label>
        <input type="text" name="starts" class="form-control" value="{{ old('starts') }}">
      </div>
      <div class="form-group">
         <button type="submit" class="btn btn-primary">Añadir hotel</button>
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
