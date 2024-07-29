<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
</head>    
<body>
    <div>
        <div class= "container m,y-5">
            <div class="d-flex justify-content-end">
                <a href="{{ url('book') }}" class="btn btn-primary">book list</a>

            </div>
                <div class="row">
                    <div class="col-md-6 mx0auto d-grid gap-2">
                        <form action="{{ url('book', $book->id) }}" method="POST">
                            @csrf

                                    <div><label class="form-label">Fname</label> <input type="text" name="Title" class="form-control" value="{{ $book->Title  }}"></div>
                                    <div><label class="form-label">Lname</label> <input type="text" name="Author" class="form-control" value="{{ $book->Author  }}"></div>
                                    <div><label class="form-label">Email</label> <input type="text" name="Description" class="form-control" value="{{ $book->Description  }}"></div>
                                    <div><label class="form-label">Phone Number</label> <input type="text" name="ISBN" class="form-control" value="{{ $book->ISBN  }}"></div>
                                    <div><label class="form-label">Address</label> <input type="text" name="Published Year" class="form-control" value="{{ $book->Published Year  }}"></div>
                                    <div><label class="form-label">City</label> <input type="text" name="city" class="form-control" value="{{ $book->fname  }}"></div>
                                    <div class="form-group mb-3">
                                        <button class="btn btn-primary">Save Changes</button>
                                    </div>

                        </form>
                     </div>
                </div>
            </div>
        </div>
</body>


</html>