<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <header>
    <ul>
      <li><a href=""></a></li>
      <li><a href=""></a></li>
      <li><a href=""></a></li>
      <li><a href=""></a></li>
      <li><a href=""></a></li>
    </ul>
  </header>

  <form action="/csrfPage" method="post">
    @csrf
    <label for="">Firstname</label>
    <input type="text" name=Firstname>
    <br>
    <label for="">Last name</label>
    <input type="text" name="Lastname">
    <br>
    <label for="">Other name</label>
    <input type="text" name="othername">
    <br>
    <label for="">Address</label>
    <input type="text" name="Address">
    <br>
    <button type="submit">submit</button>
  </form>
</body>

</html>