@extends('layouts.app')

@section('title')One Contact.@endsection

@section('content')
<h1>One Contact</h1>


<div class="alert alert-info">
<h3>{{ $contact->name }}</h3>
<h3>{{ $contact->surname }}</h3>
<h3>{{ $contact->email }}</h3>
<p>{{ $contact->phone }}</p>
<p><small>{{ $contact->created_at }}</small></p>
<a href="{{ route('contacts.edit', $contact->id) }}"><button class="btn btn-primary mb-3">Edit</button></a>
<form action="{{ route('contacts.destroy', $contact->id) }}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="Delete" class="btn btn-danger">
</form>

</div>
@endsection