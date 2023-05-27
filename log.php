<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style>
    *{
        margin:0;
        padding:0
    }
    .body{
        margin:0px;
        margin-bottom:0px;
        padding:90px;
        background:url(Images/n1.jpg);
        background-size:cover;
        background-position:center;
        background-repeat:no-repeat;
 }
 .reg{
    width:40%;
    margin:auto;
    border:2px solid white;
    border-radius:3px;
    padding:25px;
 }
 /*label{
    color:white;
    font-size:16px;
    font-family:sans-serif;
 }*/
 #name{
    width:250px;
    padding:5px;
    border:none;
    border-bottom:2px solid white;
    background:none;

 }

    </style>
<body>
    <div class="body">
    <form method="post"action="log1.php" enctype="multipart/form-data">
        <div class="reg">
        <h1 align="center">REGISTRATION FORM</h1>
        <label for="name">enter your fist name</label><br>
        <input type="text" id="name" name="uname" ><br>
        <label for="">enter your password</label><br>
        <input type="password" id="name" name="pwd" ><br>
        <input type="submit"name="submit"class="btn btn-success"value="submit"> 
        </form>
</div>
</div>
</body>
</html>