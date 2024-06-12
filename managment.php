<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="manage.css">
</head>
<body>
    <header id="head">
        <a href="#" id="logo"><i class=" fas fa-heartbeat"></i>       Medo</a>
        <nav>

            <a href="index.php"> Home</a>
            <a href="service.php"> services</a>
            <a href="managment.php"> Management</a>
            <a href="doctors.php"> Doctors</a>
            <a href="book.php"> Boking</a>
    
        </nav>
    </header>
    <div id="contain">
        <h1>For  Managements  Only</h1>
        <form action="details.php" method="post">
            User_Id : <input type="text" name="userid" id="i1" required>
            Password : <input type="text" name="password" id="i1" required>
            <input type="submit" name="submit" value="submit" id="login">
            <!-- <button id="login">LOGIN</button> -->

        </form>
    </div>
    <?php
        $conn=mysqli_connect('localhost','root','purnima','hospital');
        error_reporting(0);
        if($_POST["submit"])
        {
            $userid=$_POST['userid'];
            $pass=$_POST['password'];
            $q="select * from managment where userid='$userid' and password='$pass'";
            $data=mysqli_query($conn,$q);
            $udata=mysqli_fetch_assoc($data);
            if ($udata['userid']==$userid and $udata['password']==$pass)
            {
                header("Location: ./control.php");
                exit();
            }
            else
            {
                echo"login fail";
            }

        }
    ?>   
</body>
<script src="manage.js"></script>
</html>