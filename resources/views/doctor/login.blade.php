<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dcotor Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
    /* Made with love by Mutiullah Samim*/

@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('https://cdn.sanity.io/images/0vv8moc6/contobgyn/bcb9eacdaab44c515a8c72981cd76deaaf0f243d-7360x4912.jpg?fit=crop&amp;auto=format');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
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
input#email {
    font-size: 18px;
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

.links{
color: white;
}

.links a{
margin-left: 4px;
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
   .card-footer{
    background-color:rgba(0,0,0,0.7) !important;
   }
   input#password {
    font-size: 18px;
}
</style>
</head>
<body>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
@include('./header')
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3 class='text-center'>Doctor Login</h3>
			</div>
			<div class="card-body">
            <form action="{{ route('doctor.check') }}" method="post">
    @csrf
    <fieldset>
    @if(Session::get('fail'))
    <div style="color: red;" class="alert alert-danger">
    Note:: {{ Session::get('fail') }}
    </div>
    @endif
    <label class='text-white' for="email"><b>Email Address:</b></label>
    <input class="UserInput h-50" type="email" id="email"
    name="email" placeholder="Enter your Email" value="{{ old('email') }}"
    size="30px"><br>
    <span style="margin-left: 20%; color: red;" class="text-danger">@error('email'){{ $message }} @enderror</span><br><br>
    <label class='text-white'
    for="password"><b>Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
    <input class="UserInput h-50" type="password" id="password"
    name="password" placeholder="Enter Password" size="30px"><br>
    <span style="margin-left: 20%; color: red;" class="text-danger">@error('password'){{ $message }} @enderror</span><br><br>
    <input class='btn-make-appoitment'  type="submit" value="Log In" class="addButton">
    <br>
    </fieldset>
    </form>
			</div>
			<div class="card-footer">				
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</div>
@include('./footer')  
</body>

</html>