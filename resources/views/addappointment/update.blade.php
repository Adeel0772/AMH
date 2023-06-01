<!DOCTYPE html>
<html>

<head>
    <title>Update Appointment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    .logo-appointment{
        width: 10%;
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
   .update-appointment-title{
        font-size:25px;
        font-weight: 700;
        color:#559af3 ;
   }
   .update-appointment-img{
    width: 100%;
   }
   .update-appointment-card-text{
    font-size:20px
   }
   
   label {
        display: block;
        margin-bottom: 10px;
        color: #333;
    }

    input[type="text"],
    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: none;
        border-radius: 3px;
        background-color: #e9e8e8;
        color: #555;
        box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
    }

    input[type="submit"] {
        background-image: linear-gradient(to left, #559af3, #1462f3, #559af3);
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-image: linear-gradient(to left, #559af3, #1462f3, #559af3);
    }

    select {
        width: 100%;
    }
</style>
<body>
<div class="container-fluid bg-white ">
        <div class="d-flex justify-content-between">
            <img class='logo-appointment' src="https://marketplace.canva.com/EAE8eSD-Zyo/1/0/1600w/canva-blue%2C-white-and-green-medical-care-logo-oz1ox2GedbU.jpg" alt="">
            <button type="button" class="btn btn-make-appoitment mt-4 ">Make Appointment</button>

        </div>
        <hr class="m-0"/>
</div>
   <div class="container">
    <div class="row">
        <div class="col-12 col-md-7 mt-5">
            <img class='update-appointment-img' src="https://img.freepik.com/free-vector/appointment-booking-with-calendar_52683-39831.jpg?w=740&t=st=1679833506~exp=1679834106~hmac=28cbf75acaa8f84c26bd9bd7b8531e75b9b27b28428129a088eb241b38fdcee6" alt="">

        </div>
        <div class="col-12 col-md-5 mt-5">
            <div class="card">
                <div class="card-body">
                <h2 class='update-appointment-title text-center'>Update Appointment</h2>
    <form action="{{ route ('addappointment.update', [$addappointment->id]) }}" method="post">
        @csrf
        <label class='update-appointment-card-text mt-4' for="apptype">Type: &nbsp;</label>
        <input type="text" id="apptype" name="apptype" value="{{$addappointment->apptype}}" ><br><br>
        <label class='update-appointment-card-text' for="number">Number: &nbsp;</label>
        <input type="text" id="number" name="number" value="{{$addappointment->number}}"><br><br>
        <label class='update-appointment-card-text' for="date">Date: &nbsp;</label>
        <input type="text" id="date" name="date" value="{{$addappointment->date}}"><br><br>
        <label class='update-appointment-card-text' for="area">City: &nbsp;</label>
        <input type="text" id="area" name="area" value="{{$addappointment->area}}"><br><br>
        <label class='update-appointment-card-text' for="disease">Disease: &nbsp;</label>
        <input type="text" id="disease" name="disease" value="{{$addappointment->disease}}"><br><br>
        <label class='update-appointment-card-text' for="email">Email: &nbsp;</label>
        <input type="text" id="email" name="email" value="{{$addappointment->email}}"><br><br>
        <label class='update-appointment-card-text' for="description">Description: &nbsp;</label>
        <input type="text" id="description" name="description" value="{{$addappointment->description}}"><br><br>
        <!-- For the dropdown Doctor-->
        <label class='update-appointment-card-text' for="doctor">Doctor:</label>
        <select name="doctor">
        @foreach ($doctor as $id => $name)
            <option value="{{ $id }}">{{ $name }}</option>
        @endforeach
</select>

<br><br>
        <input type="submit" value="Update Appointment">
    </form>
                </div>
            </div>
       
        </div>
    </div>
   </div>
</body>

</html>