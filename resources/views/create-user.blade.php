<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create User</title>
  <style>
  /* General Reset */
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
  }

  body {
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(135deg, #8e44ad, #3498db, #16a085);
    background-size: 300% 300%;
    animation: gradientAnimation 8s ease infinite;
    padding: 20px;
  }

  .container {
    background: #fff;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    max-width: 500px;
    width: 100%;
  }

  .container h1 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 1.8rem;
    color: #8e44ad;
  }

  label {
    font-weight: bold;
    color: #555;
    margin-bottom: 5px;
    display: block;
  }

  input[type="text"],
  input[type="email"],
  input[type="date"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 2px solid #ddd;
    border-radius: 8px;
    background: #f9f9f9;
    font-size: 1rem;
    transition: border-color 0.3s, box-shadow 0.3s;
  }

  input:focus {
    border-color: #8e44ad;
    box-shadow: 0 0 10px rgba(142, 68, 173, 0.3);
    outline: none;
  }

  .success-message {
    color: green;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
  }

  button {
    width: 100%;
    padding: 12px;
    background: linear-gradient(135deg, #8e44ad, #3498db);
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 1rem;
    font-weight: bold;
    transition: transform 0.3s, box-shadow 0.3s;
  }

  button:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(142, 68, 173, 0.5);
  }

  a {
    display: block;
    text-align: center;
    margin-top: 20px;
    color: #3498db;
    text-decoration: none;
    font-weight: bold;
  }

  a:hover {
    text-decoration: underline;
  }

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
    @if (session('success'))
    <div class="success-message">{{ session('success') }}</div>
    @endif

    <h1>Create New User</h1>
    <form action="{{ route('users.store') }}" method="POST">
      @csrf
      <label for="first_name">First Name:</label>
      <input type="text" name="first_name" id="first_name" required>

      <label for="last_name">Last Name:</label>
      <input type="text" name="last_name" id="last_name" required>

      <label for="address">Address:</label>
      <input type="text" name="address" id="address" required>

      <label for="email">Email:</label>
      <input type="email" name="email" id="email" required>

      <label for="student_id">Student ID:</label>
      <input type="text" name="student_id" id="student_id" required>

      <label for="dob">Date of Birth:</label>
      <input type="date" name="dob" id="dob" required>

      <label for="semester">Semester:</label>
      <input type="text" name="semester" id="semester" required>

      <label for="favorite_color">Favourite Color:</label>
      <input type="text" name="favorite_color" id="favorite_color" required>

      <button type="submit">Create a New User</button>
    </form>

    <a href="{{ route('users.index') }}">View All Users</a>
  </div>
</body>

</html>