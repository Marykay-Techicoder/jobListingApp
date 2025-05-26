<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recruiter Registration</title>
  <style>
    /* Body with Gradient Background and Animation */
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #8e44ad, #3498db, #16a085);
      background-size: 300% 300%;
      animation: gradientAnimation 8s ease infinite;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    /* Registration Form Container */
    .registration-container {
      background: linear-gradient(135deg, #ffffff, #f8f8f8);
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
      width: 100%;
      max-width: 500px;
      animation: fadeIn 1s ease-in-out;
    }

    /* Form Title */
    h2 {
      text-align: center;
      font-size: 2rem;
      color: #8e44ad;
      margin-bottom: 20px;
    }

    /* Input Fields */
    input,
    textarea,
    button {
      display: block;
      width: 100%;
      margin-bottom: 15px;
      padding: 12px;
      border: 2px solid #ddd;
      border-radius: 10px;
      font-size: 1rem;
      transition: box-shadow 0.3s, transform 0.3s;
      background-color: #f9f9f9;
    }

    /* Focus Effect for Inputs */
    input:focus,
    textarea:focus {
      box-shadow: 0 0 10px rgba(142, 68, 173, 0.6);
      border: 2px solid #8e44ad;
      transform: scale(1.02);
      outline: none;
    }

    /* Error Message */
    .error {
      color: red;
      font-size: 0.9rem;
      margin-bottom: 10px;
    }

    /* Submit Button */
    button {
      background: linear-gradient(135deg, #8e44ad, #3498db);
      color: white;
      border: none;
      cursor: pointer;
      font-size: 1.1rem;
      font-weight: bold;
      padding: 12px;
      border-radius: 30px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    /* Button Hover Effect */
    button:hover {
      transform: translateY(-5px);
      box-shadow: 0 5px 15px rgba(142, 68, 173, 0.5);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .registration-container {
        padding: 20px;
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
</head>

<body>
  <div class="registration-container">
    <form method="POST" action="{{ route('recruiter.register.submit') }}" enctype="multipart/form-data">
      @csrf
      <h2>Recruiter Registration</h2>

      <input type="text" name="company_name" placeholder="Company Name" value="{{ old('company_name') }}">
      @error('company_name') <div class="error">{{ $message }}</div> @enderror

      <input type="text" name="contact_name" placeholder="Contact Person Name" value="{{ old('contact_name') }}">
      @error('contact_name') <div class="error">{{ $message }}</div> @enderror

      <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
      @error('email') <div class="error">{{ $message }}</div> @enderror

      <input type="text" name="phone_number" placeholder="Phone Number" value="{{ old('phone_number') }}">
      @error('phone_number') <div class="error">{{ $message }}</div> @enderror

      <input type="password" name="password" placeholder="Password">
      @error('password') <div class="error">{{ $message }}</div> @enderror

      <input type="file" name="company_logo" accept="image/*">
      @error('company_logo') <div class="error">{{ $message }}</div> @enderror

      <textarea name="company_description" placeholder="Company Description">{{ old('company_description') }}</textarea>
      @error('company_description') <div class="error">{{ $message }}</div> @enderror

      <button type="submit">Register</button>
    </form>
  </div>
</body>

</html>