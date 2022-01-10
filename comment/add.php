
<!DOCTYPE html>
<html>
<head>
    	<link rel="stylesheet" a href="form.css">
<style> body{color:white;}
#id{background-color:white;color:black;
</style>
</head>
<body>
    <?php
    
    $host="localhost";
$uname="id15049113_ahmed";
$password="Aa@123456789";
$db="id15049113_comment";
 $Id=$_POST["name"];
    $age=$_POST["age"];
    $gender=$_POST["gender"];
    $address=$_POST["address"];
    $comment=$_POST["comment"];
    $want=$_POST["want"];
   
$connection=mysqli_connect($host,$uname,$password,$db);

        $s=$connection->prepare("insert into comments (Name,Age,Gender,Address,Comment,Want) values(?,?,?,?,?,?)");
        mysqli_set_charset($connection,'utf8mb4');
    $s->bind_param("ssssss",$Id,$age,$gender,$address,$comment,$want);
    $s->execute();
            echo "<h1> Successful operation, شكرا لك </h1>"; 
            echo "<h1>تم ارسال التعليق بنجاح , ربنا يبارك فيك ويسعدك ويفرح قلبك.</h1>";  
?>
<a id="go" href="https://abohosny.000webhostapp.com/">
    <button><h1>اضغط للذهاب للشاشه الرئيسيه</h1></button></a>
</body>
</html>
