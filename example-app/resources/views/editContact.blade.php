@extends('layouts.app') @section('title')Update.@endsection @section('content')
<h1>Update</h1>

@if($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<form action="{{ route('contacts.update', $contact->id) }}" method="post">
  @csrf @method('patch')

  <div class="form-group">
    <label for="name">Name</label>
    <input
      type="text"
      id="name"
      class="form-control"
      placeholder="name"
      name="name"
      value="{{ $contact->name }}"
    />
  </div>

  <div class="form-group">
    <label for="surname">Name</label>
    <input
      type="text"
      id="surname"
      class="form-control"
      placeholder="surname"
      name="surname"
      value="{{ $contact->surname }}"
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
      value="{{ $contact->email }}"
    />
  </div>

  <div class="form-group">
    <label for="phone">Theme</label>
    <input
      type="text"
      id="phone"
      class="form-control"
      placeholder="phone"
      name="phone"
      value="{{ $contact->phone }}"
    />
  </div>

  <div class="form-group">
    <label for="category">Category</label>
    <select class="form-control" id="category" name="category_id">
      @foreach($categories as $category)
      <option {{ $category->
        id === $contact->category_id ? 'selected' : '' }} value="{{
        $category->id }}">{{ $category->title }}
      </option>
      @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="tags">Tags</label>
    <select multiple class="form-control" id="tags" name="tags[]">
      @foreach($tags as $tag)
      <option 
      @foreach($contact->tags as $contactTag)
      {{ $contactTag->id === $tag->id ? 'selected' : '' }}
      @endforeach
      value="{{ $tag->id }}">{{ $tag->title }}</option>
      @endforeach
    </select>
  </div>

  <button type="submit" class="btn btn-success">Update</button>
</form>
@endsection