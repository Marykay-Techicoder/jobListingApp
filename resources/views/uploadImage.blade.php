<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Upload</title>
</head>

<body>
  <h1>Upload an Image</h1>
  <form action="{{ route('image.upload') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="image">Choose an image:</label>
    <input type="file" name="image" id="image" required>
    <button type="submit">Upload</button>
  </form>
  @if (session('path'))
  <h3>Uploaded Image:</h3>
  <img src="{{ asset(str_replace('public', 'storage', session('path'))) }}" alt="Uploaded Image" width="300">
  @endif

  @if (session('success'))
  <p style="color: green;">{{ session('success') }}</p>
  @endif

  @if (session('error'))
  <p style="color: red;">{{ session('error') }}</p>
  @endif

</body>

</html>