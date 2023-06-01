<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
<title>Add New Appointment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        .appointment-text{
        color: #559af3;
        text-align: center;
        font-size:25px;
        font-weight:700;
        text-transform:uppercase;
        
    }
   
    label {
        display: block;
        margin-bottom: 10px;
        color: #333;
    }

    input[type="text"],
    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: none;
        border-radius: 3px;
        background-color: #e9e8e8;
        color: #555;
        box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
    }

    input[type="submit"] {
        background-color: #008080;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #005959;
    }

    select {
        width: 100%;
    }
    .appointment-card{
        box-shadow:0px 4px 16px rgba(0,0,0,0.15);
    }
   .logo-appointment{
    width:10%;
   }
   .btn-make-appoitment{
    border: none;
    padding: 18px 28px 18px 20px;
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
   .fix-appoitment-btn{
    border: none;
    padding: 18px 28px 18px 20px;
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
</style>
</head>
<body>
@include('./header')
    <div class="container mt-4 mb-3">
    <div class="row">
<div class="col-12 col-md-8">
<img class='img-fluid' src="https://cdn.pixabay.com/photo/2017/03/14/03/20/woman-2141808_960_720.jpg" alt="">
</div>
<div class="col-12 col-md-4">


<div class="card appointment-card">
    <div class="card-body">
    <h2 class="appointment-text">Add New Appointment</h2>
    <form id="appointment-form" action="{{ route('addappointment.store') }}" method="post"    >
        @csrf
        <label class='mt-3 ' for="apptype">Enter the Type of your Appointment:</label>
        <input type="text" id="apptype"  name="apptype" required>
        <label for="number">Enter Your Phone Number:</label>
        <input type="tel" id="number"  name="number"  required>
        <label for="date">Date:</label>
        <input type="date" id="date" required name="date">
        <label for="area">Select the area:</label>
        <select id="dropdown" required name="area">
            <option value="Taxila">Taxila</option>
            <option value="Wah cantt ">Wah Cantt </option>
            <option value="Islamabad">Islamabad</option>
            <option value="Rawalpindi">Rawalpindi</option>
        </select>

        <label for="area">Select the Disease:</label>
        <select id="dropdown" required name="disease">
            <option value="Flu">Flu</option>
            <option value="Temperature ">Temperature </option>
            <option value="Skin Issues">Skin Issues</option>
            <option value="Diziness">Diziness</option>
            <option value="Cancer">Cancer</option>
            <option value="Cough">Cough</option>
            <option value="HIV">HIV</option>
            <option value="Pneumonia">Pneumonia</option>
            <option value="Others">Others</option>
            

            
        </select>
        <label for="email">Email:</label>
        <input type="text" id="email" required name="email">
        <label for="description">Description:</label>
        <input type="text" id="description" required name="description">

        <label for="doctor">Select Doctor:</label>
        <select id="dropdown" required name="doctor">
            @foreach($doctor as $doctor)
            <option value="{{$doctor->id}}">{{$doctor->name}}</option>
            @endforeach
        </select>
        

        <input class='fix-appoitment-btn' type="submit" value="Fix Appointment">

        
</form>
    </div>
</div>


</div>
    </div>
    </div>
<!-- <script>
    // document.getElementById("appointment-form").addEventListener("submit", function(event) {
    // Prevent the form from submitting and refreshing the page
    

    // Display the confirmation message on the screen
    var message = "Your appointment has been requested. Please wait for the email confirmation.";
    alert(message);
});
</script> -->

    @include('./footer')
             
</body>
</html>