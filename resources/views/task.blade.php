<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/task.css">
</head>
<body>

<h2><center>Form</center></h2>
<div class="alert alert-success">
        {{ session('status') }}
</div>
<div class="container">
  <form name="task"  method="post" action="/form" enctype="multipart/form-data">
  @csrf
  <div class="row">
    <div class="fn">
      <label for="fname">Name</label>
    </div>
    <div class="fnt">
      <input type="text" id="fname" name="name" placeholder="Enter Your Name">
    </div>
  </div>
  <div class="row">
    <div class="fn">
      <label for="lname">Email</label>
    </div>
    <div class="fnt">
      <input type="email" id="lname" name="email" placeholder="Enter your Email">
    </div>
  </div>
  <div class="row">
    <div class="fn">
      <label for="languages">Languages</label>
    </div>
    <div class="fnt">
      <select id="languages" name="languages">
        <option value="Telugu">Telugu</option>
        <option value="Hindi">Hindi</option>
        <option value="English">English</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="fn">
      <label for="subject">Gender</label>
    </div>
    <div class="fnt">
    </br>
     <input type="radio" name="gen" value="Male">Male
    </div>
    <div class="fnt">
    </br>
     <input type="radio" name="gen" value="Female">Female
    </div>
  </div>
  <br>
  <div class="row">
    <div class="fn">
      <label for="lname">Phone</label>
    </div>
    <div class="fnt">
      <input type="text" id="lname" name="phone" placeholder="Enter your Phone">
    </div>
  </div>
  <div class="row">
    <div class="fn">
      <label for="subject">Description</label>
    </div>
    <div class="fnt">
      <textarea id="subject" name="subject" placeholder="Write something About Description.." style="height:200px"></textarea>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="fn">
      <label for="languages">Country</label>
    </div>
    <div class="fnt">
      <select id="languages" name="country">
        <option value="India">India</option>
        <option value="America">America</option>
        <option value="Austraila">Austraila</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="fn">
      <label for="languages">State</label>
    </div>
    <div class="fnt">
      <select id="languages" name="state">
        <option value="Andhrapradesh">Andhrapradesh</option>
        <option value="Sanfransisco">Sanfransisco</option>
        <option value="canberra">canberra</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="fn">
      <label for="languages">City</label>
    </div>
    <div class="fnt">
      <select id="languages" name="city">
        <option value="Tadepalligudem">Tadepalligudem</option>
        <option value="Algeribia">Algeribia</option>
        <option value="Cisfto">Cisfto</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="fn">
      <label for="lname">Image-Upload</label>
    </div>
    <div class="fnt">
      <input type="file" id="lname" name="image">
    </div>
  </div>
  <br>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>

</body>
</html>
