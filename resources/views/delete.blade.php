<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/task.css">
</head>
<body>

<h2><center>Delete Confirmation</center></h2>
<div class="alert alert-success">
        {{ session('status') }}
</div>
<div class="container">
  <form name="task"  method="post" action="{{url('store-formss')}}">
  @csrf
  <div class="row">
    <div class="fn">
      <label for="fname">Are You Sure Want To Delete Record </label>
    </div>
    <div class="fnt">
      <input type="hidden" id="fname" name="names" placeholder="{{$getss}}" value="{{$getss}}">
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Delete">
  </div>
  </form>
</div>

</body>
</html>

