<!doctype html>

<head>
    <title>View Reports</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

<style>
    html,body{
background-image: url('https://limcllc.com/wp-content/uploads/2017/03/Lafayette-Internal-Medicine-patient-portal.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
box-shadow: inset 0 0 0 2000px rgba(0, 0, 0, 0);
}
 table {
        border-collapse: collapse;
        margin: 0 auto;
        max-width: 100%;
        width: 800px;
    }
    
    th,
    td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: center;
        font-weight: bold;
        font-size:20px
    }
    
    th {
        background-color: darkgrey;
        font-weight: bold;
        font-size:15px
    }
    
    td:last-child {
        text-align: center;
    }
    

</style>

</head>




<body class="background-image">
@include('./header')

<div class="container">
  <form id="search-form" action="{{ route('report.read') }}" method="GET">
    <div class="input-group">
      <input type="text" class="form-control form-control-lg rounded-pill" placeholder="Search by labid" id="search-input" name="labid">
      <div class="input-group-append">
        <button class="btn btn-primary rounded-pill" type="submit"><i class="fa fa-search"></i></button>
      </div>
    </div>
  </form>
</div>




    
        <h2 class='view-medicine-title'>View Report</h2>
        <hr/>
        <table id="report">
        <thead>
            <tr>
                <th>labid</th>
                <th>Report Name</th>
                <th>patient email</th>
                <th>Report Type</th>
                <th>Report Result</th>
                <th>Description</th>
                <th>Download</th>

            </tr>
        </thead>
       
<tbody>
    <p id="forDeleteCode"></p>
    @foreach ($report->where('labid', request('labid')) as $report)
        <tr>
            <td>{{$report->labid}}</td>
            <td>{{$report->name}}</td>
            <td>{{$report->email}}</td>
            <td>{{$report->testType}}</td>
            <td>{{$report->testResults}}</td>
            <td>{{$report->description}}</td>
            <td>
  <a href="{{ route('report.download', $report->id) }}" class="btn btn-primary">
    Download
  </a>
</td>

        </tr>
    @endforeach
</tbody>




        
    </table>
        </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> 
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>  
    <script> 
        $(document).ready( function () {
        $('#report').DataTable();
        } );
    </script>

    
</body>

</html>