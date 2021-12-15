<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
<table id="customers">
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Languages</th>
    <th>Gender</th>
    <th>Phone</th>
    <th>Description</th>
    <th>Country</th>
    <th>State</th>
    <th>City</th>
    <th>Image</th>
</tr>
<?php
use App\Models\Post;  
$students=Post::all();
foreach($students as $student){
?>
<tr>
<td>{{$student->name}}</td>
<td>{{ $student->email}}</td>
<td>{{ $student->languages}}</td>
<td>{{ $student->gender}}</td>
<td>{{ $student->phone}}</td>
<td>{{ $student->description}}</td>
<td>{{ $student->country}}</td>
<td>{{ $student->state}}</td>
<td>{{ $student->city}}</td>
<td><img src="{{ asset('uploads/images/'.$student->image) }}" width="70"></td>
</tr>
<?php
}