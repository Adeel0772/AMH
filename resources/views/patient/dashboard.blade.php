<!DOCTYPE html>
<html lang="en">
<head>
<style>
  .heroContent {
    display: flex;
    flex-direction: column;
    align-items: center;
    
  }
  
  .heroContent button {
    width: 300px;
    margin-bottom: 20px;
    height: 40px;
    font-weight: bold;
    color: white;
    border-radius: 20px;
    
  }
  button {
  font-weight: bold;
  background-color: #007bff;
  border-color: #007bff;
  color: #fff;
  padding: 8px 16px;
  border-radius: 5px;
  margin-right: 10px;
}

button:hover {
  background-color: #0069d9;
  border-color: #0062cc;
}

</style>
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
<!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Dashboard</title>
</head>
<body>
    
  <nav class="navbar sticky-top navbar-expand-lg bg-white">
    <div class="container">
      <img class='logo-appointment' src="https://i.ibb.co/Sm9b2tF/Ahm-removebg-preview.png" alt="">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <i class="fas fa-bars"></i>
  </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto w-100 justify-content-end">
          <li class="nav-item active">
            
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://127.0.0.1:8000">Home</a>
            
            
              
                
                <li class="nav-item">
              <a class="btn btn-primary" href="{{route('patient.logout')}}">LOGOUT</a>
              <li class="nav-item">

        </ul>
      </div>
    </div>
  </nav>
  
  <div class="container-fluid">
  <h2 class='mt-4 mb-4 text-center doctor-dashboard-title'>Welcome to patient Dashboard</h2>
  <div class="row">
    <div class="col-12 position-relative">
      <img src="https://cdn.pixabay.com/photo/2021/10/11/17/37/doctor-6701410_960_720.jpg" alt="test" class="img-fluid w-100">
      <div class="heroContent position-absolute top-50 start-50 translate-middle" >
        <a href="{{route('addappointment.create')}}"><button class="btn btn-primary">BOOK APPOINTMENT</button> </a>
        <a href="{{route('medicine.read')}}"><button class="btn btn-primary">MEDICINE</button> </a>
        <a href="{{route('doctor.read')}}"><button class="btn btn-primary">DOCTORS</button> </a>
        <a href="{{route('report.read')}}"><button class="btn btn-primary">REPORTS</button> </a>
        <!-- <a href="{{route('addappointment.read')}}"><button class="btn btn-primary">VIEW APPOINTMENTS</button> </a>
        <a href="{{route('medicine.create')}}"><button class="btn btn-primary">ADD MEDICINE</button> </a>
        <a href="{{route('surgery.read')}}"><button class="btn btn-primary">SURGICAL HISTORY</button> </a> -->
      </div>
    </div>
  </div>
</div>

<div class="container mt-5 mb-5">
    <div class="row">
    <div class="col-md-3">
      <div class="card-counter primary">
        <i class="fa fa-code-fork"></i>
        <span class="count-numbers">12</span>
        <span class="count-name">Doctors</span>
      </div>
    </div>

    
    <div class="col-md-3">
      <div class="card-counter success">
        <i class="fa fa-database"></i>
        <span class="count-numbers">6875</span>
        <span class="count-name">Medicines</span>
      </div>
    </div>

    
</div>

</div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
 
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  @include('./footer')
</body>

</html>