<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job Details</title>
  <style>
    .job-details {
      padding: 40px;
      background-color: #f9f9f9;
      border-radius: 10px;
      margin: 20px auto;
      max-width: 800px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .job-details h1 {
      font-size: 2rem;
      margin-bottom: 20px;
    }

    .job-details p {
      font-size: 1.1rem;
      margin-bottom: 10px;
    }

    .back-btn {
      margin-top: 20px;
      display: inline-block;
      background-color: #007bff;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
    }

    .back-btn:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>
  <div class="job-details">
    <h1>{{ $job->title }}</h1>
    <p><strong>Location:</strong> {{ $job->location }}</p>
    <p><strong>Salary:</strong> ${{ $job->salary }}</p>
    <p><strong>Information:</strong> {{ $job->information }}</p>
    <p><strong>Contact:</strong> {{ $job->contact }}</p>
    <a href="{{ route('home') }}" class="back-btn">Back to Jobs</a>
  </div>
</body>

</html>