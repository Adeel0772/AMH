<!DOCTYPE html>
<html>

<head>
    <title>Add New Surgery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    
</head>

<body>
@include('./header')
<div class="container-fluid bg-white ">
        <div class="d-flex justify-content-between">
            <img class='logo-appointment' src="https://marketplace.canva.com/EAE8eSD-Zyo/1/0/1600w/canva-blue%2C-white-and-green-medical-care-logo-oz1ox2GedbU.jpg" alt="">
            <!-- <button type="button" class="btn btn-make-appoitment mt-4 ">Make Appointment</button> -->

        </div>
   <div class="container">
   <div class="row">
        <div class="col-12 col-md-8">
        <img class='medicine-create-img' src="https://img.freepik.com/free-photo/young-handsome-physician-medical-robe-with-stethoscope_1303-17818.jpg?w=740&t=st=1679852531~exp=1679853131~hmac=48b9333c81c5132dfe63a9df77664751f69cd7c96258fa116d6809a40aaf4bca" alt="">
        </div>
        <div class="col-12 col-md-4">
            <div class="card medicine-card">
                <div class="card-body medicine-card-body mx-3">
                <h2 >Add New Surgery</h2>
        <form action="{{ route ('surgery.store') }}" method="post">
            @csrf
            <label for="sertype">Surgery Type: &nbsp;</label>
            <input type="text" id="sertype" name="sertype" ><br><br>
            <label for="description">Surgery Description: &nbsp;</label>
            <input type="text" id="description" name="description" ><br><br>
            <label for="date">Date: &nbsp;</label>
            <input type="date" id="date" name="date" ><br><br>
            <label for="time">Time: &nbsp;</label>
            <input type="time" id="time" name="time" ><br><br>
            <label for="room">Room Number: &nbsp;</label>
            <input type="text" id="room" name="room" ><br><br>
            <label for="patient">Patient: &nbsp;</label>
            <select id="dropdown" name="patient">
                @foreach($patient as $patient)
                <option value="{{$patient->id}}">
                {{$patient->name}}
                </option>
                @endforeach
            </select>
            <br><br>
            <label for="doctor">Doctor: &nbsp;</label>
            <select id="dropdown" name="doctor">
                @foreach($doctor as $doctor)
                <option value="{{$doctor->id}}">
                {{$doctor->name}}
                </option>
                @endforeach
            </select>
            <br><br>

            <input class='btn-add-medicine' type="submit" value="Add Surgery">
        </form>
                </div>
            </div>
       
        </div>
    </div>
   </div>
</body>

</html>