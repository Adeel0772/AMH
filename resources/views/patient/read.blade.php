<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <style>
        html,body{
background-image: url('https://limcllc.com/wp-content/uploads/2017/03/Lafayette-Internal-Medicine-patient-portal.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
box-shadow: inset 0 0 0 2000px rgba(0, 0, 0, 0);
}
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
        font-weight: bold;
        font-size: 15px;
    }
    
    th {
        background-color: darkgrey;
        font-weight: bold;
        font-size: 20px;
    }
    
    td:last-child {
        text-align: center;
        font-weight: bold;
        font-size: 20px;
        
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

<body class="background-image">
@include('./header')
    

<div class="container">

        <h2 class='view-appointment-title'>View Patient</h2>
        <hr/>
        <table id="patient">
        <thead>
            <tr>
                <th>Patient Name</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Age</th>
                <th>Sickness</th>
                <th>Accepted</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            
            <p id="forDeleteCode"></p>
            @foreach ($patient ??  '' as $patient)
            <tr>
            <td>{{$patient->name}}</td>
            <td>{{$patient->gender}}</td>
            <td>{{$patient->dob}}</td>
            <td>{{$patient->age}}</td>
            <td>{{$patient->sickness}}</td>
            <td>{{$patient->accepted}}</td>
            <td>{{$patient->email}}</td>
            <td>
            <a class="btn" style="border: 1px solid;" href="{{URL::to('patient/edit', $patient->id)}}" title="Edit -> {{$patient->id}}"> <i class="fa fa-edit"></i></a>
            <a class="btn" style="border: 1px solid;" href="{{URL::to('patient/delete', $patient->id)}}" onclick="return confirm ('Are you sure to delete the Patient {{$patient->id}} having name {{$patient->name}}?')" title="Delete -> {{$patient->id}}"> <i class="fa fa-trash"></i></a> 
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
        $('#patient').DataTable();
        } );
    </script>
</body>
</html>