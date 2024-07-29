<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    +
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
</head>
<body>
    <div>
        <div class="container" >
            <div class="row">
                <div class="col-12" >
                    <table clas="table table-hover table-stripped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Description</th>
                                <th>ISBN</th>
                                <th>Published Year</th> 
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                            <tr>
                                <td>{{ $book->Title }}</td>
                                <td>{{ $book->Author }}</td>
                                <td>{{ $book->Description }}</td>
                                <td>{{ $book->ISBN }}</td>
                                <td>{{ $book->PublishedYear }}</td>
                                <td>
                                    <a href="{{ url('book', $book->id)}}/edit" class="btn btn-outline-success-btn-sm">edit</a>
                                    <form action="{{ url('book', $book->id) }}" method="post">
                                        @method('method')
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure, you want to delete')">Delete</button>
                                    </form>
                                </td>
                            @endforeach
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</body>
</html>