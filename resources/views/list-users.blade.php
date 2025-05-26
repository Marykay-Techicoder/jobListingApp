<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User List</title>
</head>

<body>
  <h1>List of users</h1>
  <table border="1">
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Address</th>
      <th>Email</th>
      <th>Student ID</th>
      <th>Date of birth</th>
      <th>Semester</th>
      <th>Favourite Color</th>
    </tr>
    @foreach ($users as $user)
    <tr>
      <td>{{ $user->first_name }}</td>
      <td>{{ $user->last_name }}</td>
      <td>{{ $user->address }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->student_id }}</td>
      <td>{{ $user->dob }}</td>
      <td>{{ $user->semester }}</td>
      <td>{{ $user->favorite_color }}</td>
    </tr>
    @endforeach
  </table>
  <a href="{{ route('users.create') }}"> back to user form</a>
</body>

</html>