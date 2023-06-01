<!DOCTYPE html>
<html>
<head>
 <title>Contact Form</title>
 <style>
     body{
            background: radial-gradient(#fff,#967b7b);
            text-align: center;
        }
 </style>
</head>

<body >
<div class="flexcontainer"> 
  
 
 <div><form action="{{ route ('sendmail') }}" method="post">
 @csrf
 
 
 
 <label for="exampleInputEmail1">Subject:</label>
 <input type="text" name="subject" class="form-control" id="subject" placeholder="Enter your subject here"><br><br>

 <label for="mail">Mail:</label><br>
 <textarea  class="form-control" name="body" id="mail" rows="8" placeholder="Type ypur mail here ....."></textarea>

 <br><br> 
 <button type="submit" class="btn bta-primary">send</button>

</div>
 </form>
</body>
</html>



