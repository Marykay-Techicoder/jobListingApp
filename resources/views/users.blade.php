<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Records</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>
    <h1>User Records</h1>

    <table>
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
            @foreach ($users as $user)
            <tr>
                <td>{{ $user['id'] }}</td>
                <td>{{ $user['first_name'] }}</td>
                <td>{{ $user['last_name'] }}</td>
                <td>{{ $user['email'] }}</td>
                <td><img src="{{ $user['avatar'] }}" alt="Avatar" width="50"></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @if ($current_page > 1)
    <a href="{{ route('users', ['page' => $current_page - 1]) }}">Previous</a>
    @endif

    @if ($current_page < $total_pages) <a href="{{ route('users', ['page' => $current_page + 1]) }}">Next</a>
        @endif

      
        <form action="{{ route('users.save') }}" method="POST" style="margin-top: 20px;">
            @csrf <!-- Protects the form from CSRF attacks -->
            <button type="submit">Save All to Database</button>
        </form>

</body>

</html>