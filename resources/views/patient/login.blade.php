<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
   
    <title>Patient Login</title>
    <style>
        html,body{
background-image: url('https://limcllc.com/wp-content/uploads/2017/03/Lafayette-Internal-Medicine-patient-portal.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
box-shadow: inset 0 0 0 2000px rgba(0, 0, 0, 0.6);
}

.container{
height: 100%;
align-content: center;
justify-content:center;
align-items:center;
}

.card{
height: 370px;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}


.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.btn-make-appoitment{
    border: none;
    padding: 10px 20px 10px 20px;
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
   .patient-login-title{
    font-size: 25px;
    font-weight:700 ;
   }
   .btn-make-appoitment{
    margin-top:-10px !important;
    border: none;
    padding: 10px 20px 10px 20px;
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
    height:5%;
    
   }
   .login-patient-text{ 
    font-size:15px;
    color:#fff;
    margin-top:'-21%'!important;
   }
   #password {
    height: 40px !important;
    border-radius: 0px !important;
    margin-bottom:0px !important;
    font-size:18px;
}
.card-footer{
    background-color: #7F7F7F !important;
}
.d-flex.justify-content-center.links.txtacc {
    font-size: 15px;
}
a.forgotpasstxt.text-black {
    font-size: 14px;
}
.btn-signup{
    font-size:12px;
}
.forgotpasstxt:{
    text-decoration:'underline';
}
input#email {
    font-size: 19px;
}
</style>
</head>
<body>
@include('./header')
<div class="container ">
	<div class="d-flex justify-content-center h-100">
		<div class="card ">
			<div class="card-header">
				<h3 class='text-center patient-login-title'>Patient Login</h3>
			</div>
			<div class="card-body">
            <form action="{{ route('patient.check') }}" method="post">
    @csrf
    <fieldset>
    @if(Session::get('fail'))
    <div style="color: red;" class="alert alert-danger">
    Note:: {{ Session::get('fail') }}
    </div>
    @endif
    <label class='login-patient-text' for="email"><b>Email Address:</b></label>
    <input class="form-control h-50 mb-0" type="text" id="email"
    name="email" placeholder="Enter your Email" value="{{ old('email') }}"
    size="30px"><br>
    <span style="font-size:17px;margin-left: 20%; color: red; margin: bottom 0;" class="text-danger">@error('email'){{ $message }} @enderror</span><br><br>
    <label class='login-patient-text '
    for="password"><b>Password:</b></label>
    <input class="form-control  mb-0 " type="password" id="password"
    name="password" placeholder="Enter Password" size="30px"><br>
    <span style="font-size:14px;margin-left: 20%; color: red;" class="text-danger">@error('password'){{ $message }} @enderror</span><br><br>
    <input type="submit" value="Log In" class="addButton btn-make-appoitment">
    <br>
    </fieldset>
    </form>
			</div>
			<div class="card-footer">
            <div class="d-flex justify-content-center links txtacc">
    Don't have an account?
    <a href="{{route('patient.register')}}">
        <button class="text-center mx-2 btn-signup text-black " >Sign Up</button>
    </a>
</div>
<hr class="bg-white"/>

				<div class="d-flex justify-content-center">
					<a class="forgotpasstxt text-black " href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</div>
@include('./footer')
</body>
</html>