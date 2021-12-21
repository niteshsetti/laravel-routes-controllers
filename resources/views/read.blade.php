<?php
use App\Models\Post;
use App\Http\Controllers\secondcontroller;
$students=Post::all();
?>
<link href="css/data.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="jss/data.js"></script>
<div class="container">
    <div class="row header" style="text-align:center;color:green">
        <h3>Student Records</h3>
    </div>
    <table id="example" class="table table-striped table-bordered" style="width:40%">
        <thead>
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
        </thead>
        <tbody>
        <?php
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
                <td><a  href="update/{{$student->id}}">Update</a></td>
                <td><a  href="delete/{{$student->id}}">Delete</a></td>
            </tr>
     <?php
    }
    ?>
     </tbody>
    </table>
</div>
