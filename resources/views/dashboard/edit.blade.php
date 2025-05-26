@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Edit Job</h2>

  <!-- Display validation errors -->
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <!-- Edit Form -->
  <form action="{{ route('jobs.update', $job->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label><strong>Name</strong></label>
      <input type="text" name="name" class="form-control" value="{{ $job->name }}" required>
    </div>

    <div class="mb-3">
      <label><strong>Title</strong></label>
      <input type="text" name="title" class="form-control" value="{{ $job->title }}" required>
    </div>

    <div class="mb-3">
      <label><strong>Location</strong></label>
      <input type="text" name="location" class="form-control" value="{{ $job->location }}" required>
    </div>

    <div class="mb-3">
      <label><strong>Salary</strong></label>
      <input type="number" name="salary" class="form-control" value="{{ $job->salary }}" required>
    </div>

    <div class="mb-3">
      <label><strong>Information</strong></label>
      <textarea name="information" class="form-control" rows="3" required>{{ $job->information }}</textarea>
    </div>

    <div class="mb-3">
      <label><strong>Contact</strong></label>
      <input type="email" name="contact" class="form-control" value="{{ $job->contact }}" required>
    </div>

    <!-- Submit Button -->
    <button type="submit" class="btn btn-success">Save Changes</button>
    <a href="{{ route('index') }}" class="btn btn-secondary">Cancel</a>
  </form>
</div>
@endsection