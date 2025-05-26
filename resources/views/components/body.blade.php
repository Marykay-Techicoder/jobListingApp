<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JobHive</title>
  <style>
  .job-card {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
    padding: 20px;
  }

  .card {
    background-color: #f5f5f5;
    border-radius: 20px;
    border: 1px solid #ddd;
    padding: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s, box-shadow 0.2s;
  }

  .card a {
    text-decoration: none;
    color: inherit;
  }

  .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
  }

  /* Responsive styles */
  @media (max-width: 768px) {
    .job-card {
      grid-template-columns: 1fr;
      padding: 10px;
    }

    .card {
      padding: 15px;
    }
  }
  </style>
</head>

<body>
  <div class="container">
    <h2>Available Jobs</h2>

    <!-- Job Cards Section -->
    <section class="job-card">
      @foreach ($jobs as $job)
      <div class="card">
        <h3>{{ $job->title }}</h3>
        <p>Skills Required: {{ $job->skills_required ?? 'Not specified' }}</p>
        <p>Key Responsibilities: {{ $job->key_responsibilities ?? 'Not specified' }}</p>
        <p>Salary Range: ${{ number_format($job->salary, 2) }}</p>
        <button class="btn">
          <a href="{{ route('job.show', $job->id) }}">View more</a>
        </button>
      </div>
      @endforeach
    </section>
  </div>
</body>

</html>