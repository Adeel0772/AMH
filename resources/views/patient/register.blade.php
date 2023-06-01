<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .UserInput {
  box-sizing: border-box;
  width: 100%;
  padding: 10px;
  border: 2px solid #ccc;
  border-radius: 4px;
  margin-bottom: 10px;
  font-size: 16px;
}

    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Patient</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
@include('./header')
<div class='register-backround-img'>
<div class="container">
        <div class="card register-card ">
            <div class="card-body">
            <form action="{{ route('patient.save') }}" method="post">
    @csrf
    <fieldset>
    @if(Session::get('success'))
    <div style="color: red;" class="alert alert-success">
    {{ Session::get('success') }}
    </div>
    @endif
    @if(Session::get('fail'))
    <div style="color: red;" class="alert alert-danger">
    {{ Session::get('fail') }}
    </div>
    @endif
    <center><h1 class="head text-white"><b>Patient Register</b></h1></center><br>
    <label class="text-white" for="name"><b>Name:</b></label><br>
    <input class="UserInput" type="text" id="name" name="name" placeholder="Enter your Name" value="{{ old('name') }}" size="30px"><br>
    <select id="dropdown" required name="gender">
        <option value="Male">Male</option>
        <option value="Wah cantt">Female </option>
        <option value="Other">Other</option>
    </select>
    
    <label class="text-white" for="dob"><b>Date of Birth:</b></label><br>
<input class="UserInput" type="date" id="dob" name="dob" placeholder="Date of Birth" value="{{ old('dob') }}"><br>

<label class="text-white" for="age"><b>Age:</b></label><br>
<input class="UserInput" type="text" id="age" name="age" placeholder="Enter your Age" value="{{ old('age') }}"><br>

<label class="text-white" for="sickness"><b>Sickness:</b></label><br>
<input class="UserInput" type="text" id="sickness" name="sickness" placeholder="Enter your Sickness" value="{{ old('sickness') }}"><br>

<label class="text-white" for="email"><b>Email Address:</b></label><br>
<input class="UserInput" type="email" id="email" name="email" placeholder="Enter your Email" value="{{ old('email') }}"><br>
<span style="margin-left: 20%; color: red;" class="text-danger">@error('email'){{ $message }} @enderror</span><br><br>

<label class="text-white" for="password"><b>Password:</b></label><br>
<input class="UserInput" type="password" id="password" name="password" placeholder="Enter Password"><br>
<span style="margin-left: 20%; color: red;" class="text-danger">@error('password'){{ $message }} @enderror</span><br><br>

<input type="submit" value="Register" class="mb-2 addButton btn-make-appoitment">

    
    
    <br>
    </fieldset>

    </form>
    <div class="card-footer">
		
				<div class=" btn-make-appoitment mx-0" >
					<a class="text-white " href="{{route('patient.login')}}">LOGIN</a>
				</div>
			</div>
    
            </div>
        </div>
    </div>
 </div>

 
 @include('./footer')
</body>
</html>