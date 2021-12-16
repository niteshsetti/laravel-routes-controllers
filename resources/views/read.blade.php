<head>
    <link rel="stylesheet" href="css/main.css">
</head>
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
    <th>Update</th>
    <th>Delete</th>
</tr>
<?php
use App\Models\Post;
use App\Http\Controllers\secondcontroller;
$students=Post::all();
foreach($students as $student){
?>
<tr>
<td>{{ $student->name}}</td>
<td>{{ $student->email}}</td>
<td>{{ $student->languages}}</td>
<td>{{ $student->gender}}</td>
<td>{{ $student->phone}}</td>
<td>{{ $student->description}}</td>
<td>{{ $student->country}}</td>
<td>{{ $student->state}}</td>
<td>{{ $student->city}}</td>
<td><img src="{{ asset('uploads/images/'.$student->image) }}" width="70"></td>
<td><a  href="{{url('update/'.$student->id)}}">Update</a></td>
<td><a  href="{{url('delete/'.$student->id)}}">Delete</a></td>
</tr>
<?php
}
