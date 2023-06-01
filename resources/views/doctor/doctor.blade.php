<!DOCTYPE html>
<html>
<head>
	<title>Our Doctors</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
			margin: 0;
			padding: 0;
		}

		h1 {
			text-align: center;
			margin-top: 50px;
			color: #333;
		}

		.container {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			margin-top: 50px;
		}

		.card {
			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
			max-width: 300px;
			margin: 10px;
			text-align: center;
			background-color: #fff;
			border-radius: 10px;
			overflow: hidden;
			padding-bottom: 20px;
		}

		.card img {
			width: 100%;
			height: 200px;
			object-fit: cover;
		}

		.card h2 {
			font-size: 24px;
			margin-top: 20px;
			color: #333;
		}

		.card p {
			font-size: 16px;
			margin-top: 10px;
			color: #666;
		}

		.card ul {
			list-style: none;
			padding: 0;
			margin: 10px 0;
			font-size: 16px;
			color: #666;
		}

		.card li {
			margin-bottom: 5px;
		}
	</style>
</head>
<body>
	<h1>Our Doctors</h1>
	<div class="container">
		<div class="card">
			<img src="doctor.jpeg" alt="Dr.Saeed Ahmed">
			<h2>Dr. Saeed Ahmed</h2>
			<ul>
				<li>Qualifications: MBBS, RMP</li>
				<li>Specialization: Child specialist, Physician</li>
				<li>Availability Time: 10 pm -- 10 am</li>
			</ul>
		</div>

		<div class="card">
			<img src="dr.jpeg" alt="Dr.Muhammad Kashif">
			<h2>Dr. Muhammad Kashif</h2>
			<ul>
				<li>Qualifications: MBBS, RMP</li>
				<li>Specialization: Child specialist, Physician</li>
				<li>Availability Time: 2 pm -- 6 pm</li>
			</ul>
		</div>

		<div class="card">
			<img src="dr4.jpg" alt="Dr.Farisa Zaidi">
			<h2>Dr. Farisa Zaidi</h2>
			<ul>
				<li>Qualifications: DPT</li>
				<li>Specialization: None</li>
				<li>Availability Time: 5 pm -- 8 pm</li>
			</ul>
		</div>

		<div class="card">
            <img src="doctor.jpeg" alt="Dr.Naila Tahir">
            <h2>Dr. Naila Tahir</h2>
            <ul>
                <li>Qualifications: BSc, MSc, ADCP</li>
                <li>Specialization: Therapist</li>
                <li>Availability Time: 11 am -- 2 pm</li>
            </ul>
        </div>
    
        <div class="card">
            <img src="doctor.jpeg" alt="Dr.Muhammad Nasir Nawaz">
            <h2>Dr. Muhammad Nasir Nawaz</h2>
            <ul>
                <li>Qualifications: MBBS, FCPS</li>
                <li>Specialization: Bones and Joints</li>
                <li>Availability Time: 2 pm -- 4 pm</li>
            </ul>
        </div>
    
        <div class="card">
            <img src="doctor.jpeg" alt="Dr.Shazia Ishtiaq Niazi">
            <h2>Dr. Shazia Ishtiaq Niazi</h2>
            <ul>
                <li>Qualifications: MBBS, RMP, DPT</li>
                <li>Specialization: Gayne Cardiologist</li>
                <li>Availability Time: 4 pm</li>
            </ul>
        </div>
    
        <div class="card">
            <img src="doctor.jpeg" alt="Dr.Zeeshan Malik">
            <h2>Dr. Zeeshan Malik</h2>
            <ul>
                <li>Qualifications: MBBS, FCPS</li>
                <li>Specialization: Surgical</li>
                <li>Availability Time: None</li>
            </ul>
        </div>
    
        <div class="card">
            <img src="doctor.jpeg" alt="Dr.Shahid Saleem">
            <h2>Dr. Shahid Saleem</h2>
            <ul>
                <li>Qualifications: MBBS, FCPS</li>
                <li>Specialization: Medical</li>
                <li>Availability Time: 1 pm -- 3 pm</li>
            </ul>
        </div>
    
        <div class="card">
            <img src="doctor.jpeg" alt="Dr.Ct. Arshad Javed">
            <h2>Dr. Ct. Arshad Javed</h2>

            @foreach ($doctors as $doctor)
    <div class="card">
        <img src="{{ $doctor->picture }}" alt="{{ $doctor->name }}">
        <h2>{{ $doctor->name }}</h2>
        <ul>
            <li>Qualifications: {{ $doctor->qualifications }}</li>
            <li>Specialization: {{ $doctor->specialization }}</li>
            <li>Availability Time: {{ $doctor->availability }}</li>
        </ul>
        <a href="/doctors/{{ $doctor->id }}">View Profile</a>
    </div>
@endforeach

        