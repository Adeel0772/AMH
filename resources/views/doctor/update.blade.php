<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Doctor</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!--Custom Stylesheet-->
    <title>Register Doctor</title>
</head>
<body>
@include('./header')
<div class='register-backround-img'>
    <div class="container">
        <div class="card register-card ">
            <div class="card-body">
    <form action="{{ route('doctor.update',$doctor->id) }}" method="post">
    @csrf
    <center><h1 class="head"><b>Update Doctor</b></h1></center><br>
    <label for="name"><b>Name:</b></label><br>
    <input class="UserInput" type="text" id="name" name="name" placeholder="Enter your Name" value="{{ $doctor->name }}" size="30px"><br>
    <label for="gender"><b>Gender:</b></label><br>
    <input class="UserInput" type="text" id="gender" name="gender" placeholder="Enter your Gender" value="{{ $doctor->gender }}" size="30px"><br>
    <label for="exp"><b>Experience Years:</b></label><br>
    <input class="UserInput" type="text" id="exp" name="exp" placeholder="Enter your Experience Years" value="{{ $doctor->exp }}" size="30px"><br>
    <label for="timings"><b>Timings:</b></label><br>
    <input class="UserInput" type="text" id="timings" name="timings" placeholder="Enter your Timings" value="{{ $doctor->timings }}" size="30px"><br>
    <input type="submit" value="Update" class="addButton">
    <br>
    </fieldset>
    </form>
    @include('./footer')
</body>
</html>