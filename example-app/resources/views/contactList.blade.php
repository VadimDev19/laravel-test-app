@extends('layouts.app') @section('title')All Messages.@endsection
@section('content')
<h1>All Messages</h1>

@foreach($data as $dataEl)
<div class="alert alert-info">
  <h3>{{ $dataEl->name }}</h3>
  <h3>{{ $dataEl->surname }}</h3>
  <p><small>{{ $dataEl->created_at }}</small></p>
  <a href="{{ route('contacts.show', $dataEl->id) }}"
    ><button class="btn btn-warning">More details</button></a
  >
</div>
@endforeach @endsection




