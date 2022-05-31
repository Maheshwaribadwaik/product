<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>product form</h1>
<form action="{{Route('store')}}" method="POST">
    @csrf
    <label>First Name</label>
    <input type="text" name="first_name">
    <label>Last Name</label>
    <input type="text" name="last_name">
    <label>Mobile No</label>
    <input type="number" name="mob_no">
    <button>Submit</button>







</form>
</body>
</html>
