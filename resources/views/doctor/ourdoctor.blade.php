@include('./header')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doctor's Information</title>
    <!-- Link Bootstrap stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
      html,body{
background-image: url('https://limcllc.com/wp-content/uploads/2017/03/Lafayette-Internal-Medicine-patient-portal.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
box-shadow: inset 0 0 0 2000px rgba(0, 0, 0, 0);
}
      body {
        background-image: url('https://limcllc.com/wp-content/uploads/2017/03/Lafayette-Internal-Medicine-patient-portal.jpg');
        background-size: cover;
      }
      .container {
        background-color: rgba(255, 255, 255, 0.7);
        border-radius: 10px;
        padding: 20px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <img src="{{asset('doctorimage/dr1.jpeg')}}" alt="Doctor's Image" class="img-fluid">
        </div>
        <div class="col-md-8">
          <h2>Dr. kashif</h2>
          <p><strong>Availability:</strong> Monday-Friday, 9am-5pm</p>
          <p><strong>Fees:</strong> RS. 1000/- per appointment</p>
          <button class="nav-link btn btn-primary" onclick="location.href='{{route('addappointment.create')}}'">Book Appointment</button>
        </div>
        
      </div>
    </div>
    <div class="container">
        <div class="row">
          <div class="col-md-4">
            <img src="{{asset('doctorimage/dr3.jpeg')}}" alt="Doctor's Image" class="img-fluid">
          </div>
          <div class="col-md-8">
            <h2>Dr. asif aslam</h2>
            <p><strong>Availability:</strong> Monday-Friday, 9am-5pm</p>
            <p><strong>Fees:</strong> RS. 1000/- per appointment</p>
            <button class="nav-link btn btn-primary" onclick="location.href='{{route('addappointment.create')}}'">Book Appointment</button>
          </div>
          
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <img src="{{asset('doctorimage/dr4.jpg')}}" alt="Doctor's Image" class="img-fluid">
          </div>
          <div class="col-md-8">
            <h2>Dr. Rashid Hassan</h2>
            <p><strong>Availability:</strong> Monday-Friday, 9am-5pm</p>
            <p><strong>Fees:</strong> RS. 1000/- per appointment</p>
            <button class="nav-link btn btn-primary" onclick="location.href='{{route('addappointment.create')}}'">Book Appointment</button>
          </div>
          
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <img src="{{asset('doctorimage/dr6.jpeg')}}" alt="Doctor's Image" class="img-fluid">
          </div>
          <div class="col-md-8">
            <h2>Dr. John Doe</h2>
            <p><strong>Availability:</strong> Monday-Friday, 9am-5pm</p>
            <p><strong>Fees:</strong> RS. 1000/- per appointment</p>
            <button class="nav-link btn btn-primary" onclick="location.href='{{route('addappointment.create')}}'">Book Appointment</button>
          </div>
          
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <img src="{{asset('doctorimage/doctor.jpeg')}}" alt="Doctor's Image" class="img-fluid">
          </div>
          <div class="col-md-8">
            <h2>Dr. John Doe</h2>
            <p><strong>Availability:</strong> Monday-Friday, 9am-5pm</p>
            <p><strong>Fees:</strong> RS. 1000/- per appointment</p>
            <button class="nav-link btn btn-primary" onclick="location.href='{{route('addappointment.create')}}'">Book Appointment</button>
          </div>
          
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <img src="{{asset('doctorimage/doctor.jpeg')}}" alt="Doctor's Image" class="img-fluid">
          </div>
          <div class="col-md-8">
            <h2>Dr. John Doe</h2>
            <p><strong>Availability:</strong> Monday-Friday, 9am-5pm</p>
            <p><strong>Fees:</strong> RS. 1000/- per appointment</p>
            <button class="nav-link btn btn-primary" onclick="location.href='{{route('addappointment.create')}}'">Book Appointment</button>
          </div>
          
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <img src="{{asset('doctorimage/doctor.jpeg')}}" alt="Doctor's Image" class="img-fluid">
          </div>
          <div class="col-md-8">
            <h2>Dr. John Doe</h2>
            <p><strong>Availability:</strong> Monday-Friday, 9am-5pm</p>
            <p><strong>Fees:</strong> RS. 1000/- per appointment</p>
            <button class="nav-link btn btn-primary" onclick="location.href='{{route('addappointment.create')}}'">Book Appointment</button>
          </div>
          
        </div>
      </div>
    <!-- Link Bootstrap script -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>

