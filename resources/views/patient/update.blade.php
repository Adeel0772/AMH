<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Patient</title>
</head>
<body>
    <form action="{{ route('patient.update',$patient->id) }}" method="post">
    @csrf
    <center><h1 class="head"><b>Update Patient</b></h1></center><br>
    <label for="name"><b>Name:</b></label><br>
    <input class="UserInput" type="text" id="name" name="name" placeholder="Enter your Name" value="{{ $patient->name }}" size="30px"><br>
    <label for="gender"><b>Gender:</b></label><br>
    <input class="UserInput" type="text" id="gender" name="gender" placeholder="Enter your Gender" value="{{ $patient->gender }}" size="30px"><br>
    <label for="dob"><b>Date of Birth:</b></label><br>
    <input class="UserInput" type="text" id="dob" name="dob" placeholder="Enter your Date of Birth" value="{{ $patient->dob }}" size="30px"><br>
    <label for="age"><b>Age:</b></label><br>
    <input class="UserInput" type="text" id="age" name="age" placeholder="Enter your Age" value="{{ $patient->age }}" size="30px"><br>
    <label for="sickness"><b>Sickness:</b></label><br>
    <input class="UserInput" type="text" id="sickness" name="sickness" placeholder="Enter your Sickness" value="{{ $patient->sickness }}" size="30px"><br>
    <input type="submit" value="Update" class="addButton">
    <br>
    </fieldset>
    </form>
</body>
</html>