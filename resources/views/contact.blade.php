<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>

<body>
    <div class="main">
        <h1>Contact Us</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores est dolor velit? Doloremque, asperiores cupiditate.</p>

        <div class="container">
            <form action="">
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
                <label for="age">Age</label>
                <input type="text" name="age" id="age">
                <br>
                <br>
                <input type="submit" value="submit">
            </form>
            <br>
            <a href="{{ url('/about')}}">About</a>
        </div>
    </div>
</body>

</html>

<?php
/*
My name is {{$nama}} and I am {{$age}} old 
*/
?>