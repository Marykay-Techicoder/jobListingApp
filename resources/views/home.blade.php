@extends('layouts.app')

@section('content')
<!-- Header Component -->
<header>
  <x-header />
</header>

<!-- Hero Section -->
<main>
  <section>
    <x-hero />
  </section>

  <!-- Body Section (Jobs Listing) -->
  <section class="job-listings">
    @include('components.body', ['jobs' => $jobs])
    <!-- Pass $jobs to the body component -->
  </section>
</main>
@endsection