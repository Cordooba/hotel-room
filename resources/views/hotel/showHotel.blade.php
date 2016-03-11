@extends('layout')

@section('title')
  {{ $hotel->name }}
@endsection

@section('content')
  <div class="container">
    <h1><ins>{{ $hotel->name }}</ins></h1>
    <h2>Estrellas: {{ $hotel->starts }}*</h2>
    <hr>
    <table>
    @foreach($hotel->rooms as $room)
      <tr>
        <td>{{ $room->name }}</td>
        <td>
          <a href="{{ url('rooms/'.$room->id.'/edit') }}"><span class="glyphicon glyphicon-pencil"></span></a>
        </td>
        <td>
          <form class="" action="{{ url('rooms/'.$room->id) }}" method="post">
                {{ csrf_field() }}
                {{method_field('delete')}}
                <button type="submit"><span class="glyphicon glyphicon-trash"></span></button>
          </form>
        </td>
      </tr>
    @endforeach
  </table>
  <a href="{{ URL::to('/') }}">Página Principal</a>
  </div>
@endsection
