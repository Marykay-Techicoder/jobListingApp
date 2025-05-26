<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  /* Body Background with Vibrant Gradient */
  body {
    background: linear-gradient(105deg, #8e44ad, #3498db, #16a085);
    animation: gradientAnimation 8s ease infinite;
    min-height: 100vh;
    margin: 0;
    font-family: 'Arial', sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .container {
    background: linear-gradient(135deg, #ffffff, #f2f2f2);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    border-radius: 20px;
    padding: 40px;
    max-width: 500px;
    max-height: 600px;
    width: 100%;
    animation: fadeIn 0.8s ease-in-out;
    transition: all 0.3s;
  }

  .form-title {
    font-size: 2.2rem;
    margin-bottom: 10px;
    color: #8e44ad;
    text-align: center;
    text-transform: uppercase;
    font-weight: bold;
  }

  label {
    font-size: 0.9rem;
    font-weight: bold;
    margin-bottom: 5px;
    display: inline-block;
    color: #333;
  }

  .form-control {
    border: 2px solid #ddd;
    border-radius: 8px;
    padding: 7px;
    width: 100%;
    font-size: 1rem;
    margin-bottom: 20px;
    transition: box-shadow 0.3s, transform 0.3s;
    background-color: #f9f9f9;
  }

  .form-control:focus {
    box-shadow: 0 0 10px rgba(142, 68, 173, 0.6);
    transform: scale(1.02);
    outline: none;
    border: 2px solid #8e44ad;
  }

  /* Submit Button */
  .btn-submit {
    background: linear-gradient(135deg, #8e44ad, #3498db);
    color: #fff;
    border: none;
    padding: 8px 10px;
    border-radius: 30px;
    width: 100%;
    font-size: 1.1rem;
    font-weight: bold;
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  /* Hover and Active Effects */
  .btn-submit:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(142, 68, 173, 0.5);
  }

  .btn-submit:active {
    transform: scale(0.98);
    box-shadow: none;
  }

  /* Responsive Design */
  @media (max-width: 768px) {
    .container {
      padding: 20px;
      margin: 10px;
    }

    .form-title {
      font-size: 1.8rem;
    }
  }

  /* Gradient Animation for Background */
  @keyframes gradientAnimation {
    0% {
      background-position: 0% 50%;
    }

    50% {
      background-position: 100% 50%;
    }

    100% {
      background-position: 0% 50%;
    }
  }

  /* Fade-in Animation */
  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translateY(30px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
</style>

<body>
  @extends('layouts.app')

  @section('content')
  <div class="container">
    <h2 class="form-title">Post a Job</h2>
    <form action="{{ route('jobs.store') }}" method="POST" class="job-form">
      @csrf
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Location</label>
        <input type="text" name="location" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Salary</label>
        <input type="number" name="salary" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Information</label>
        <textarea name="information" class="form-control" rows="3" required></textarea>
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" name="contact" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-submit">Post Job</button>
    </form>
  </div>
  @endsection

</body>

</html>