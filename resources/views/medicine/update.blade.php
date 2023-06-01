<!DOCTYPE html>
<html>

<head>
    <title>Update Medicine</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <h2 style="border: 1px solid black; background-color:DodgerBlue; text-align:center;">
        Update Medicine
    </h2>
    <form action="{{ route('medicine.update',$medicine->id) }}" method="post">
        @csrf
        <label for="name">Medicine Name: &nbsp;</label>
        <input type="text" id="name" name="name" value="{{$medicine->name}}"><br><br>
        <label for="medtype">Medicine Type: &nbsp;</label>
        <input type="text" id="medtype" name="medtype" value="{{$medicine->medtype}}" ><br><br>
        <label for="date">Date: &nbsp;</label>
        <input type="text" id="date" name="date" value="{{$medicine->date}}"><br><br>
        <label for="description">Description: &nbsp;</label>
        <input type="text" id="description" name="description" value="{{$medicine->description}}"><br><br>
        <input type="submit" value="Update Medicine">
    </form>
</body>

</html>