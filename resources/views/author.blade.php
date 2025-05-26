<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <table>
    <thead>
      <tr>
        <th> ID</th>
        <th>Author Name</th>
        <th>Description</th>
        <th>Title</th>
        <th>Genre</th>
        <th>published_year</th>
      </tr>
    </thead>
    <tbody>
      @foreach($authors as $author)
      <tr>
        <td>{{$author->id}}</td>
        <td>{{$author->first_name}}</td>
        <td>{{$author->description}}</td>
        <td>
          @if($author->books->isEmpty())
          <p>NO books available</p>
          @else
          <ul>
            @foreach($author->books as $book)
            <li>{{$book->title}},

            </li>
            @endforeach
          </ul>
          @endif
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>

</html>