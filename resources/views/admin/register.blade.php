<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Admin</title>
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
            <form action="{{ route('admin.save') }}" method="post">
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
    <center><h1 class="head text-white"><b>Admin Register</b></h1></center><br>
    <label class="text-white" for="name"><b>Name:</b></label><br>
    <input class="UserInput" type="text" id="name" name="name" placeholder="Enter your Name" value="{{ old('name') }}" size="30px" required><br>
    <label class="text-white" for="email"><b>Email Address:</b></label><br>
    <input class="UserInput" type="email" id="email" name="email" placeholder="Enter your Email" value="{{ old('email') }}" size="30px" required><br>
    <span style="margin-left: 20%; color: red;" class="text-danger">@error('email'){{ $message }} @enderror</span><br><br>
    <label class="text-white" for="password"><b>Password:</b></label><br>
    <input class="form-control" type="password" id="password" name="password" placeholder="Enter Password" size="30px" required><br>
    <span style="margin-left: 20%; color: red;" class="text-danger">@error('password'){{ $message }} @enderror</span><br><br>
    <input type="submit" value="Register" class="addButton btn-make-appoitment">
    
    <br>
    </fieldset>
    </form>
    
            </div>
        </div>
    </div>
 </div>
 <button > <a href="{{route('admin.login')}}"></a> LOGIN</button>
 @include('./footer')
</body>
</html>