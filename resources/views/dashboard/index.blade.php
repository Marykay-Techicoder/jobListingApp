@extends('layouts.app')

@section('content')
<style>
body {
  font-family: 'Arial', sans-serif;
  background: linear-gradient(105deg, #8e44ad, #3498db, #16a085);
  margin: 0;
  padding: 0;
}

.container {
  max-width: 1200px;
  margin: 50px auto;
  background: #ffffff;
  border-radius: 12px;
  box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
  padding: 30px;
}

h2 {
  text-align: center;
  font-size: 2rem;
  color: #283e51;
  margin-bottom: 20px;
}

.alert-success {
  color: #155724;
  background-color: #d4edda;
  border-color: #c3e6cb;
  padding: 10px;
  border-radius: 8px;
  margin-bottom: 20px;
}

.table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}

.table thead tr {
  background: linear-gradient(105deg, #8e44ad, #3498db, #16a085);
}

.table th,
.table td {
  text-align: left;
  padding: 12px 15px;
  border: 1px solid #ddd;
}

.table tbody tr:nth-child(even) {
  background-color: #f9f9f9;
}

.table tbody tr:nth-child(odd) {
  background-color: #ffffff;
}

.table tbody tr:hover {
  background-color: #f1f1f1;
  cursor: pointer;
}

.btn {
  padding: 8px 16px;
  border: none;
  border-radius: 5px;
  font-size: 0.9rem;
  cursor: pointer;
  transition: all 0.3s ease;
}

.btn-warning {
  background-color: #f0ad4e;
  color: white;
}

.btn-warning:hover {
  background-color: #ec971f;
}

.btn-danger {
  background-color: #d9534f;
  color: white;
}

.btn-danger:hover {
  background-color: #c9302c;
}

/* Pagination Styling */
.pagination {
  display: flex;
  justify-content: center;
  margin-top: 20px;
  list-style: none;
  padding: 0;
}

.pagination li {
  margin: 0 5px;
}

.pagination a,
.pagination span {
  display: flex;
  align-items: center;
  justify-content: center;
  color: #ffffff;
  background: linear-gradient(135deg, #283e51, #4b79a1);
  /* Gradient for pagination */
  margin: 0 5px;
  padding: 8px 12px;
  text-decoration: none;
  border-radius: 5px;
  font-size: 14px;
  font-weight: bold;
  transition: background-color 0.3s, color 0.3s, transform 0.3s;
}

.pagination a:hover {
  background: #4b79a1;
  /* Slightly lighter on hover */
  color: #ffffff;
  transform: scale(1.1);
}

.pagination .active {
  background: #283e51;
  /* Darker for active page */
  color: #ffffff;
  border: 1px solid #283e51;
}

.pagination svg {
  width: 14px;
  /* Adjust arrow size */
  height: 14px;
}

/* Responsive Design */
@media (max-width: 768px) {
  .table thead {
    display: none;
  }

  .table,
  .table tbody,
  .table tr,
  .table td {
    display: block;
    width: 100%;
  }

  .table tr {
    margin-bottom: 10px;
    border-bottom: 1px solid #ddd;
  }

  .table td {
    text-align: right;
    padding-left: 50%;
    position: relative;
  }

  .table td::before {
    content: attr(data-label);
    position: absolute;
    left: 10px;
    width: calc(50% - 20px);
    font-weight: bold;
    text-align: left;
  }
}

.pages {
  width: 100px;
  height: 80px;
  display: flex;
}
</style>

<div class="container">
  <h2>Job Dashboard</h2>
  @if (session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
  @endif
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Title</th>
        <th>Location</th>
        <th>Salary</th>
        <th>Information</th>
        <th>Contact</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @isset($jobs)
      @foreach ($jobs as $job)
      <tr>
        <td data-label="Name">{{ $job->name }}</td>
        <td data-label="Title">{{ $job->title }}</td>
        <td data-label="Location">{{ $job->location }}</td>
        <td data-label="Salary">${{ $job->salary }}</td>
        <td data-label="Information">{{ $job->information }}</td>
        <td data-label="Contact">{{ $job->contact }}</td>
        <td data-label="Actions">
          <a href="{{ route('jobs.edit', $job->id) }}" class="btn btn-warning">Edit</a>
          <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" style="display:inline;">
            @csrf @method('DELETE')
            <button class="btn btn-danger" onclick="return confirm('Delete this job?')">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
      @else
      <tr>
      </tr>
      @endisset
    </tbody>
  </table>
  <button class="btn"><a href="{{ route('create') }}">Add Jobs</a></button>
  <div class="pages">
    {{ $jobs->links() }}

  </div>
  <!-- Pagination -->
</div>
@endsection