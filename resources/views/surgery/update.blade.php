<!DOCTYPE html>
<html>

<head>
    <title>Update Surgery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <h2 style="border: 1px solid black; background-color:DodgerBlue; text-align:center;">
        Update Surgery
    </h2>
    <form action="{{ route('surgery.update',$surgery->id) }}" method="post">
        @csrf
        <label for="sertype">Surgery Type: &nbsp;</label>
        <input type="text" id="sertype" name="sertype" value="{{$surgery->sertype}}"><br><br>
        <label for="description">Description: &nbsp;</label>
        <input type="text" id="description" name="description" value="{{$surgery->description}}"><br><br>
        <label for="date">Date: &nbsp;</label>
        <input type="text" id="date" name="date" value="{{$surgery->date}}"><br><br>
        <label for="time">Time: &nbsp;</label>
        <input type="text" id="time" name="time" value="{{$surgery->time}}"><br><br>
        <label for="room">Room Number: &nbsp;</label>
        <input type="text" id="room" name="room" value="{{$surgery->room}}"><br><br>
        <label for="patient">Patient: &nbsp;</label>
        <select id="dropdown" name="patient">
                @foreach($patient as $patient)
                <option value="{{$patient->id}}">
                {{$patient->name}}
                </option>
                @endforeach
            </select>
            <br><br>
        <label for="doctor">Doctor: &nbsp;</label>
        <select id="dropdown" name="doctor">
                @foreach($doctor as $doctor)
                <option value="{{$doctor->id}}">
                {{$doctor->name}}
                </option>
                @endforeach
        </select>
            <br><br>
        <input type="submit" value="Update Surgery">
    </form>
</body>

</html>