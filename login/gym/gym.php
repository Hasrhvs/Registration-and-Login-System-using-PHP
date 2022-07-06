<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&family=Baloo+Bhaijaan+2:wght@500;600&family=Festive&family=Fredoka&family=IBM+Plex+Sans+Thai+Looped:wght@300&family=Lato&family=Oswald&family=Poppins:ital,wght@1,100&family=Roboto&display=swap" rel="stylesheet">

    <title>Harsh fitness</title>
    <style>
        body{
            font-family: 'Baloo 2', cursive;
            margin:0px;
            padding: 0px;
            background: url('gymm.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }
        .left{
            display: inline-block;
            /* border: 2px solid red;    */
            position: absolute;
            left: 40px;
            top: 25px; 
            text-align: center;
                
        }
        .mid{
            display: block;
            width: 50%;
            margin: 25px auto;
            /* border: 2px solid  green; */
        }
        .right{
            position: absolute;
            right: 30px;
            top: 25px;
           /* border: 2px solid yellow; */
        }
        .navbar li{
            display: inline-block;
            font-size: 25px;
        }
        .navbar li a{
            color: white;
            text-decoration: none;
            padding: 34px;
        }
        .navbar li a:hover{
            color: pink;
            text-decoration: underline;
        }
        .left div{
            text-align: center;
        }
        .left img{
            width:78px;
            filter:invert(100%);
        }
        .imgg{
            border-radius: 50%;
        }
        .btn{
            font-family: 'Baloo 2', cursive;
            margin: 0px 10px;
            background-color: black;
            color: white;
            padding: 4px 14px;
            border: 2px solid grey;
            border-radius: 20px;
            font-size: 20px;
            cursor: pointer;
        }
        .btn:hover{
            background-color: grey;
            color: yellow;
        }

        .container{
            border: 4px solid grey;
            display: inline-block;
            width: 550px;
            height: 370px;
            margin: 120px 160px;
            padding: 25px 50px;
            border-radius: 55px;
        }
        .container form{
            margin-left: 100px;
            margin-top: 0px;
        }
        
        .input{
            padding: 7px;   
        }
        .in{
            font-family: 'Baloo 2', cursive;
            width: 350px;
            font-size: 20px;
            text-align: center;
            border-radius: 25px;
        }
        .container h3{
            font-size: 25px;
            text-align: center;
            margin-top: 0px;
        }
        .subb{
            align-items: center;
            border: 2px solid  black;
        }
        .sub{
            font-family: 'Baloo 2', cursive;
            border-radius: 20px;
            font-size: 18px;
            cursor: pointer;
            margin-top: 10px;
            margin-left: 140px;
            width: 80px;
        }
        .sub:hover{
            background-color: aquamarine;
            color: green;
        }
    
        .select{
            border-radius: 15px;
            font-size: 25px;
        }
        .reset{
            font-family: 'Baloo 2', cursive;
            font-size: 15px;
            border-radius: 15px;
            margin-left: 50px;
        }
        .container label{
            margin-left: 70px;
        }
        .gender{
            margin-top: 5px;
            margin-left: 70px;
        }
    </style>
</head>
<body>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbharsh2"; 

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("The Server was connect successfully".mysqli_connect_error());

} 
else {
$sql = "INSERT INTO `db2` (`NAME`, `EMAIL`) VALUES ('$name', '$email');";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your form was submitted successfully.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
} 
else {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> Your form was not submitted successfully.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}
}
}
?>
    <header class="header">
        <div class="left">
       <img class="imgg" src="gy.png" alt="not found">
       <div>harsh fitness</div>
        </div>

        <div class="mid">
            <ul class="navbar">
                <li><a href="#"> Home </a></li>
                <li><a href="#"> About Us</a></li>
                <li><a href="#"> Call Us</a></li>
                <li><a href="#"> Mail Us</a></li>
            </ul>
        </div>

        <div class="right">
        <button class="btn">Call Us</button>
        <button class="btn">Email Us</button>
        </div>
    </header>

    <div class="container">
        <center><h3>REGISTRATION FORM</h3></center>
        <form action="gym.php" method="post">
            <div class="input">
                <input class="in" type="text" placeholder="Enter your Name" name="name">
            </div>
            <div class="input">
                <input class="in" type="email" placeholder="Enter your Email" name="email">
            </div>
            <div class="input">
                <input class="in" type="password" placeholder="Enter your password" name="pass">
            </div>
            <div class="input">
                <input class="in" type="number" placeholder="Enter your Contact No" name="number">
            </div>
            <div class="gender">
                Male:<input type="radio" name="same">
                Female:<input type="radio" name="same">
                Others:<input type="radio" name="same">
            </div>
            <div class="op">
                <label for="woo">Type:</label>
                <select name="option" id="woo">
                    <option class="select" value="Weights">Weights</option>
                    <option class="select" value="Cardio">Cardio</option>
                    <option class="select" value="Both">Both</option>
                </select>
                <input class="reset" type="reset" >
            </div>
            <div class="subb">
             <input class="sub" type="submit"> 
            </div>
        </form>
    </div>
</body>
</html>