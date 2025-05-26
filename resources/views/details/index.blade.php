<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Details</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
  <div class="container mt-5">
    <h1 class="mb-4"> Details</h1>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Address</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($Details as $detail)
        <tr>
          <td>{{ $detail->id }}</td>
          <td>{{ $detail->name }}</td>
          <td>{{ $detail->email }}</td>
          <td>{{ $detail->phone }}</td>
          <td>{{ $detail->address }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>

</html>