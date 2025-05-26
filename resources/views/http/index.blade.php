<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>API Users</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
  <div class="container mt-5">
    <h1 class="mb-4">Users from API</h1>

    @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
    @endif

    <form action="{{ route('http.save') }}" method="POST">
      @csrf
      <button type="submit" class="btn btn-primary mb-3">Save to Database</button>
    </form>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Avatar</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
        <tr>
          <td>{{ $user['id'] }}</td>
          <td>{{ $user['first_name'] }}</td>
          <td>{{ $user['last_name'] }}</td>
          <td>{{ $user['email'] }}</td>
          <td>
            <img src="{{ $user['avatar'] }}" alt="Avatar" class="img-thumbnail" width="50">
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>

</html>