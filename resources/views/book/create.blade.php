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
                <div class="row">
                    <div class="col-md-6 mx0auto d-grid gap-2">
                        <form action="{{ url('book') }}" method="POST">
                            @csrf

                                    <div><label class="form-label">Title</label> <input type="text" name="Title" class="form-control"></div>
                                    <div><label class="form-label">Author</label> <input type="text" name="Author" class="form-control"></div>
                                    <div><label class="form-label">Description</label> <input type="text" name="Description" class="form-control"></div>
                                    <div><label class="form-label">ISBN</label> <input type="text" name="ISBN" class="form-control"></div>
                                    <div><label class="form-label">Published Year</label> <input type="text" name="Published Year" class="form-control"></div>
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