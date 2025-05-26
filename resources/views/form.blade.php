<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="">
  <title>Enter Your Details</title>
</head>

<body>
  <h1>Enter Your Details</h1>

  <form action="/submit" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="birth_year">Year of Birth:</label>
    <input type="number" id="birth_year" name="birth_year" required><br>

    <label for="age">Age:</label>
    <input type="number" id="age" name="age" required><br>

    <button type="submit">Submit</button>
  </form>
</body>

</html>