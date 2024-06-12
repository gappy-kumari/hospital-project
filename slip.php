<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="slip.css">

</head>
<body>
    <div id="box">
    <form id="form" action="" method="post">
        <h1>Submit Your Contact no. To Print Your Slip </h1>
        <input type="text" name="contact" id="i1">
        <input type="submit" name="submit" value="PRINT" id="i2">
    </form>
</div>
 <!-- <?php
    $conn=mysqli_connect('localhost','root','purnima','hospital');
    error_reporting(0);
    if($_POST['submit'])
    {
    $contact=$_POST['contact'];
    $q="select * from medo where contact='$contact'";
    $data=mysqli_query($conn,$q);
    $rec=mysqli_fetch_assoc($data);
    $name=$rec['name'];
    $dob=$rec['dob'];
    $add=$rec['address'];
    $age=$rec['age'];
    $gender=$rec['gender'];
    $contact=$rec['contact'];
    header('Content-Type:image/jpeg');
    $image=imagecreatefromjpeg(".\img\medo.jpg");
    $font="fff.ttf";
    $color=imagecolorallocate($image,0,0,0);
    imagettftext($image,20,0,270,378,$color,$font,$name);
    imagettftext($image,20,0,680,378,$color,$font,$dob);
    imagettftext($image,20,0,200,435,$color,$font,$add);
    imagettftext($image,20,0,698,432,$color,$font,$contact);
    imagettftext($image,20,0,920,378,$color,$font,$age. "  years");
    imagettftext($image,20,0,960,436,$color,$font,$gender);
    imagejpeg($image);
    imagejpeg($image,"slip/$name.jpg");

    }
?>  -->
</body>
</html>
