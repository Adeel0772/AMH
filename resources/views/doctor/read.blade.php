<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View User</title>
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- DataTables CSS -->
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">


    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.6;
        }
     
    
    table {
        border-collapse: collapse;
        margin: 0 auto;
        max-width: 100%;
        width: 800px;
    }
    
    th,
    td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: center;
    }
    
    th {
        background-color: #559af3;
        font-weight: bold;
    }
    
    td:last-child {
        text-align: center;
    }
    
    .btn {
        display: inline-block;
        margin-right: 10px;
        padding: 10px;
        text-align: center;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }
    
    .btn:hover {
        background-color: #ddd;
    }
    
    .btn i {
        margin-right: 5px;
    }
    
    #forDeleteCode {
        display: none;
    }
    .logo-appointment{
    width:10%;
   }
   .btn-make-appoitment{
    border: none;
    padding: 18px 28px 18px 20px;
    text-transform: capitalize;
    border-radius: 6px;
    cursor: pointer;
    color: #fff;
    display: inline-block;
    font-size: 16px;
    background-size: 200%;
    transition: 0.6s;
    box-shadow: 0px 7px 21px 0px rgba(0,0,0,0.12);
    background-image: linear-gradient(to left, #559af3, #1462f3, #559af3);
    height:10%;
    
   }
   .view-appointment-title{
    color:#559af3;
    font-size: 28px;
        font-weight: bold;
        margin: 40px 0;
        text-align: center;
   }
   .btn-update{
    box-shadow: 0px 7px 21px 0px rgba(0,0,0,0.12);
    background-image: linear-gradient(to left, #559af3, #1462f3, #559af3);
    color:#ffff;
    
   }
</style>

</head>
<body>
<div class="container-fluid bg-white ">
        <div class="d-flex justify-content-between">
            <img class='logo-appointment' src="https://marketplace.canva.com/EAE8eSD-Zyo/1/0/1600w/canva-blue%2C-white-and-green-medical-care-logo-oz1ox2GedbU.jpg" alt="">
            <button type="button" class="btn btn-make-appoitment mt-5 ">Make Appointment</button>

        </div>
        <hr/>
</div>
    <div class="container">
    <table id="doctor">
        <thead>
            <tr>
                <th>Doctor Name</th>
                <th>Gender</th>
                <th>Experience</th>
                <th>Accepted</th>
                <th>Timings</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <p id="forDeleteCode"></p>
        @foreach ($doctor ??  '' as $doctor)
        <tr>
        <td>{{$doctor->name}}</td>
        <td>{{$doctor->gender}}</td>
        <td>{{$doctor->exp}}</td>
        <td>{{$doctor->accepted}}</td>
        <td>{{$doctor->timings}}</td>
        <td>{{$doctor->email}}</td>
        <td>
        <a class="btn btn-update" href="{{URL::to('doctor/edit', $doctor->id)}}" title="Edit -> {{$doctor->id}}"> <i class="fa fa-edit"></i> Edit</a>
        <a class="btn btn-update" href="{{URL::to('doctor/delete', $doctor->id)}}" onclick="return confirm ('Are you sure to delete the Doctor {{$doctor->id}} having name {{$doctor->name}}?')" title="Delete -> {{$doctor->id}}"> <i class="fa fa-trash"></i> Delete</a> 
        </td>
        @endforeach
        </tr>
    </tbody>
</table>
    </div>



    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> 
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>  
    <script> 
        $(document).ready( function () {
        $('#doctor').DataTable();
        } );
    </script>
</body>
</html>