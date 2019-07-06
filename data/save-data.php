<?php
$name=$_POST['User']['name']; //1
$id=$_POST['User']['id']; //2
$dob=$_POST['User']['dob']; //3
$password=md5($_POST['User']['password']); //4
$gender=$_POST['User']['gender']; //5
$region=$_POST['User']['region']; //6
if(!isset($_POST['User']['hobbies'])){ //7
    $hobbies='';
}
else{
    $hobbies=$_POST['User']['hobbies'];
    $hobbies=implode(', ', $hobbies);
}
//$note=$_POST['User']['note']; //8


try {
    $dbh = new PDO('mysql:host=localhost;dbname=web_design', 'root', '');
    $query = "INSERT INTO wd_user VALUE(null, :name, :dob, :gender, :region, :hobbies, :avatar, :password)";
    $avatar='no-image.jpg';
    $stmt = $dbh->prepare($query);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":dob", $dob);
    $stmt->bindParam(":gender", $gender);
    $stmt->bindParam(":region", $region);
    $stmt->bindParam(":hobbies", $hobbies);
    $stmt->bindParam(":avatar", $avatar);
    $stmt->bindParam(":password", $password);
    if ($stmt->execute())
        header('../form.php');
    else
        var_dump($stmt->errorInfo());

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
