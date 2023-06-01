<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Doctor</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!--Custom Stylesheet-->
    
</head>
<body>
@include('./header')
<div class='register-backround-img'>
    <div class="container">
        <div class="card register-card ">
            <div class="card-body">
            <form action="{{ route('doctor.save') }}" method="post">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-8">
                    @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                    @endif
                    <h1 class="text-center mb-5 doctor-register-title"><b>Doctor Register</b></h1>
                    <div class="form-group">
                        <label class='text-white' for="name"><b>Name:</b></label>
                        <input class="form-control" type="text" id="name" name="name" placeholder="Enter your Name" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label class='text-white' for="exp"><b>Experience:</b></label>
                        <input class="form-control" type="text" id="exp" name="exp" placeholder="Enter your Experience" value="{{ old('gender') }}">
                    </div>
                    <div class="form-group">
                    <select id="dropdown" required name="gender">
                        <option value="Male">Male</option>
                        <option value="Wah cantt">Female </option>
                        <option value="Other">Other</option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label class='text-white' for="timings"><b>Timings:</b></label>
                        <input class="form-control" type="text" id="timings" name="timings" placeholder="00am-00pm" value="{{ old('timings') }}">
                    </div>
                    <div class="form-group">
                        <label class='text-white' for="email"><b>Email Address:</b></label>
                        <input class="form-control" type="email" id="email" name="email" placeholder="Enter your Email" value="{{ old('email') }}">
                        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                    <label class='text-white' for="password"><b>Password:</b></label><br>
    <input class="form-control" type="password" id="password" name="password" placeholder="Enter Password" size="30px"><br>
    <span style="margin-left: 20%; color: red;" class="text-danger">@error('password'){{ $message }} @enderror</span><br><br>
    <input type="submit" value="Register" class="addButton btn-make-appoitment">
    
    </fieldset>
    </form>
    <button class="btn-login"><a  href="{{route('doctor.login')}}"></a> LOGIN</button>
    </div>
        </div>
    </div>
  
    </div>
</div>
</div>

    @include('./footer')

 
</body>



</html>
