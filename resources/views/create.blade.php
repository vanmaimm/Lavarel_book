<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <i class="fa fa-500px"></i>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<div class="col-md-4">
      <form action="/book" method="POST" role="form">
      @csrf
          <legend>Insert book</legend>
     
          <div class="form-group">
              <label for="">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Input title" name="name">
          </div>
          <div class="form-group">
              <label for="">Author</label>
              <input type="text" class="form-control" id="author" placeholder="Description" name="author">
          </div>  
          <div class="form-group">
              <label for="">Category</label>
              <input type="text" class="form-control" id="category" placeholder="Input title" name="category">
          </div>
          <div class="form-group">
              <label for="">Description </label>
              <input type="text" class="form-control" id="description" placeholder="Description" name="description">
          </div>  
          <div class="form-group">
              <label for="">Price </label>
              <input type="text" class="form-control" id="price" placeholder="Description" name="price">
          </div>    
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>