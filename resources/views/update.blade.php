<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="/css/task.css">
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
  <form name="task"  method="post" action="{{url('store-forms')}}">
  @csrf
  <div class="row">
    <div class="fn">
      <label for="fname">Your ID </label>
    </div>
    <div class="fnt">
      <input type="text" id="fname" name="names" placeholder="{{$gets}}" value="{{$gets}}" readonly>
    </div>
  </div>
  <div class="row">
    <div class="fn">
      <label for="languages">Select Your Field</label>
    </div>
    <div class="fnt">
      <select id="languages" name="changes">
        <option value="name">Name</option>
        <option value="email">Email</option>
        <option value="languages">Languages</option>
        <option value="gender">Gender</option>
        <option value="phone">Phone</option>
        <option value="description">Description</option>
        <option value="country">Country</option>
        <option value="state">State</option>
        <option value="city">City</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="fn">
      <label for="lname">Enter Updated Value</label>
    </div>
    <div class="fnt">
      <input type="text" id="lname" name="new" placeholder="Enter your Updated Value">
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
