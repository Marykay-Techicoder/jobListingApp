<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recruiter Login</title>
  <style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
  }

  body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: linear-gradient(135deg, #8e44ad, #3498db, #16a085);
    background-size: 300% 300%;
    animation: gradientAnimation 8s ease infinite;
  }

  .container {
    display: flex;
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    overflow: hidden;
    width: 90%;
    max-width: 900px;
  }

  /* Left Image Section */
  .image-section {
    flex: 1;
  }


  /* Right Form Section */
  .form-section {
    flex: 1;
    padding: 40px;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  h2 {
    font-size: 2rem;
    margin-bottom: 20px;
    color: #8e44ad;
    text-align: center;
  }

  input {
    width: 100%;
    padding: 12px;
    margin-bottom: 15px;
    border: 2px solid #ddd;
    border-radius: 8px;
    font-size: 1rem;
    transition: box-shadow 0.3s, transform 0.3s;
    background: #f9f9f9;
  }

  input:focus {
    box-shadow: 0 0 10px rgba(142, 68, 173, 0.6);
    border: 2px solid #8e44ad;
    outline: none;
    transform: scale(1.02);
  }

  button {
    width: 100%;
    padding: 12px;
    background: linear-gradient(135deg, #8e44ad, #3498db);
    color: white;
    border: none;
    border-radius: 30px;
    cursor: pointer;
    font-size: 1.1rem;
    font-weight: bold;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  button:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(142, 68, 173, 0.5);
  }

  p {
    text-align: center;
    margin-top: 20px;
    font-size: 1rem;
  }

  p a {
    color: #3498db;
    text-decoration: none;
    font-weight: bold;
  }

  p a:hover {
    text-decoration: underline;
  }

  /* Responsive Design */
  @media (max-width: 768px) {
    .container {
      flex-direction: column;
    }

    .image-section {
      height: 200px;
    }

    h2 {
      font-size: 1.8rem;
    }
  }

  /* Gradient Animation */
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
  </style>
</head>

<body>
  <div class="container">
    <!-- Image Section -->
    <div class="image-section"><img src="{{ asset('img/jobb.jpg') }}" alt="Job Opportunities">
    </div>

    <!-- Form Section -->
    <div class="form-section">
      <form method="POST" action="{{ route('recruiter.login.submit') }}">
        @csrf
        <h2>Recruiter Login</h2>

        @if(session('success'))
        <div class="success">{{ session('success') }}</div>
        @endif

        @if($errors->has('login'))
        <div class="error">{{ $errors->first('login') }}</div>
        @endif

        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
        @error('email') <div class="error">{{ $message }}</div> @enderror

        <input type="password" name="password" placeholder="Password">
        @error('password') <div class="error">{{ $message }}</div> @enderror

        <button type="submit">Login</button>

        <p>Don't have an account yet? <a href="{{ route('recruiter.register.form') }}">Register</a></p>
      </form>
    </div>
  </div>
</body>

</html>