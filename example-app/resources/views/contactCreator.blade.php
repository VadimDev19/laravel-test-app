@extends('layouts.app') @section('title')Contact Page.@endsection
@section('content')
<h1>Add new contact</h1>

@if($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<form action="{{ route('contacts.store') }}" method="post">
  @csrf

  <div class="form-group">
    <label for="name">Name</label>
    <input
      type="text"
      id="name"
      class="form-control"
      placeholder="name"
      name="name"
    />
  </div>

  <div class="form-group">
    <label for="surname">Surname</label>
    <input
      type="text"
      id="name"
      class="form-control"
      placeholder="surname"
      name="surname"
    />
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input
      type="text"
      id="email"
      class="form-control"
      placeholder="email"
      name="email"
    />
  </div>

  <div class="form-group">
    <label for="phone">Phone</label>
    <input
      type="text"
      id="phone"
      class="form-control"
      placeholder="phone"
      name="phone"
    />
  </div>

  <div class="form-group">
    <label for="category">Category</label>
    <select class="form-control" id="category" name="category_id">
      @foreach($categories as $category)
      <option value="{{ $category->id }}">{{ $category->title }}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="tags">Tags</label>
    <select multiple class="form-control" id="tags" name="tags[]">
      @foreach($tags as $tag)
      <option value="{{ $tag->id }}">{{ $tag->title }}</option>
      @endforeach
    </select>
  </div>

  <button type="submit" class="btn btn-success">Send</button>
</form>
@endsection