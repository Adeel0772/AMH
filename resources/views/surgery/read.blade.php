<!doctype html>

<head>
    <title>View Surgeries</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

<style>
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
    

</style>

</head>




<body>
@include('./header')
    <div class="container-fluid bg-white ">
            <div class="d-flex justify-content-between">
                <img class='logo-appointment' src="https://marketplace.canva.com/EAE8eSD-Zyo/1/0/1600w/canva-blue%2C-white-and-green-medical-care-logo-oz1ox2GedbU.jpg" alt="">
                <!-- <button type="button" class="btn btn-make-appoitment mt-4 ">Make Appointment</button> -->
    </div>
            </div>
            <div class="container">
        <h2 class='view-surgery-title'>View Surgery</h2>
        <hr/>
        <table id="surgery">
        <thead>
            <tr>
                <th>Surgery ID</th>
                <th>Surgery Name</th>
                <th>Surgery Description</th>
                <th>Date</th>
                <th>Time</th>
                <th>Room Number</th>
                <th>Patient</th>
                <th>Doctor</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <p id="forDeleteCode"></p>
            @foreach ($surgery ?? '' as $surgery)
            <tr>
                <td>{{$surgery->id}}</td>
                <td>{{$surgery->sertype}}</td>
                <td>{{$surgery->description}}</td>
                <td>{{$surgery->date}}</td>
                <td>{{$surgery->time}}</td>
                <td>{{$surgery->room}}</td>
                <td>{{$surgery->patient->name}}</td>
                <td>{{$surgery->doctor->name}}</td>
                <td>
                <a class="btn btn-update" style="border: 1px solid;" href="{{URL::to('surgery/edit', $surgery->id)}}" title="Edit -> {{$surgery->id}}"> <i class="fa fa-edit"></i></a>
                <a class="btn btn-update" style="border: 1px solid;" href="{{URL::to('surgery/delete', $surgery->id)}}" onclick="return confirm ('Are you sure to delete the Surgery {{$surgery->id}} having surgery type {{$surgery->sertype}}?')" title="Delete -> {{$surgery->id}}"> <i class="fa fa-trash"></i></a> 
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
        </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> 
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>  
    <script> 
        $(document).ready( function () {
        $('#surgery').DataTable();
        } );
    </script>
<!-- @include('./footer')   -->
    
</body>

</html>