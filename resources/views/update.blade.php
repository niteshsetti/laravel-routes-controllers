<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/task.css">
</head>
<style>
* {
    box-sizing: border-box;
  }

  input[type=text],input[type=email],input[type=file], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
  }

  label {
    padding: 12px 12px 12px 0;
    display: inline-block;
  }

  input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
  }

  input[type=submit]:hover {
    background-color: #45a049;
  }

  .container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }

  .fn{
    float: left;
    width: 25%;
    margin-top: 6px;
  }

  .fnt{
    float: left;
    width: 75%;
    margin-top: 6px;
  }
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
  @media screen and (max-width: 600px) {
    .fn, .fnt, input[type=submit] {
      width: 100%;
      margin-top: 0;
    }
  }

</style>
<body>
<h2><center>Form</center></h2>
<div class="alert alert-success">
        {{ session('status') }}
</div>
<div class="container">
  <form  method="post" action="/update/{{$users[0]->id}}" enctype="multipart/form-data">
  @csrf
  <div class="row">
    <div class="fn">
      <label for="fname">Name</label>
    </div>
    <div class="fnt">
      <input type="text" id="fname" name="name" placeholder="Enter Your Name" value="{{$users[0]->name}}">
    </div>
  </div>
  <div class="row">
    <div class="fn">
      <label for="lname">Email</label>
    </div>
    <div class="fnt">
      <input type="email" id="lname" name="email" placeholder="Enter your Email" value={{$users[0]->email}}>
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
    <?php
     if($users[0]->gender=="Male"){
     ?>
    <div class="fnt">
    </br>
     <input type="radio" name="gen" value="Male" checked>Male
    </div>
    <div class="fnt">
    </br>
     <input type="radio" name="gen" value="Female">Female
    </div>
    <?php
     }
     else{
     ?>
      <div class="fnt">
    </br>
     <input type="radio" name="gen" value="Male">Male
    </div>
    <div class="fnt">
    </br>
     <input type="radio" name="gen" value="Female" checked>Female
    </div>
    <?php
     }
     ?>
  </div>
  <br>
  <div class="row">
    <div class="fn">
      <label for="lname">Phone</label>
    </div>
    <div class="fnt">
      <input type="text" id="lname" name="phone" placeholder="Enter your Phone" value={{$users[0]->phone}}>
    </div>
  </div>
  <div class="row">
    <div class="fn">
      <label for="subject">Description</label>
    </div>
    <div class="fnt">
      <textarea id="subject" name="subject" placeholder="Write something About Description.." style="height:200px">{{$users[0]->description}}</textarea>
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
  {{-- <div class="row">
    <div class="fn">
      <label for="lname">Image-Upload</label>
    </div>
    <div class="fnt">
      <input type="file" id="lname" name="image">
    </div>
  </div>
  <br> --}}
  <br>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>
</body>
</html>
