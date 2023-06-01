<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('css/style.css')}}"> 
<title>Document</title>
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
            <a class="nav-link" href="http://127.0.0.1:8000/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{route('patient.register')}}">Patient</a>
            <li class="nav-item">
              <a class="nav-link" href="{{route('doctor.login')}}">Doctor</a>
              <li class="nav-item">
                <a class="nav-link" href="{{route('medicine.read')}}">Medicines</a>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('patient.register')}}">Patient Register</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('report.read')}}">View Report</a>
                </li>
        </ul>
      </div>
    </div>
  </nav>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>