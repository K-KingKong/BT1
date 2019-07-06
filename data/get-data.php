<meta charset="x-UTF-8"/>
<?php

/*if(!isset($_POST['name']) || !isset($_POST['id']) || !isset($_POST['dob']) ||
    !isset($_POST['password']) || !isset($_POST['gender']) || !isset($_POST['region']) ||
    !isset($_POST['hobbies']) || !isset($_POST['note']))*/

//GET
/*if(!isset($_GET['User']))
    header('location: ../form.php');
else{
    $name=$_GET['User']['name'];
    $id=$_GET['User']['id'];
    $dob=$_GET['User']['dob'];
    $password=$_GET['User']['password'];
    $gender=$_GET['User']['gender'];
    $region=$_GET['User']['region'];
    if(!isset($_GET['User']['hobbies'])){
        $hobbies='';
    }
    else{
        $hobbies=$_GET['User']['hobbies'];
        $hobbies=implode(', ', $hobbies);
    }
    $note=$_GET['User']['note'];
    $convert_year=date("Y", strtotime($_GET['User']['dob']));
    $convert_month=date("m", strtotime($_GET['User']['dob']));
    $convert_date=date("d", strtotime($_GET['User']['dob']));
    echo "year: ".$convert_year."\n";
    echo "month: ".$convert_month."\n";
    echo "date: ".$convert_date."\n";
    $age=date("Y")-$convert_year;
    echo "age: ".$age."\n".'Your hobbies: '.$hobbies;
}*/

//_POST
if(!isset($_POST['User']))
    header('location: ../form.php');
else{
    $name=$_POST['User']['name']; //1
    $id=$_POST['User']['id']; //2
    $dob=$_POST['User']['dob']; //3
    $password=$_POST['User']['password']; //4
    $gender=$_POST['User']['gender']; //5
    $region=$_POST['User']['region']; //6
    if(!isset($_POST['User']['hobbies'])){ //7
        $hobbies='';
    }
    else{
        $hobbies=$_POST['User']['hobbies'];
        $hobbies=implode(', ', $hobbies);
    }
    $note=$_POST['User']['note']; //8
    $convert_year=date("Y", strtotime($_POST['User']['dob']));
    $convert_month=date("m", strtotime($_POST['User']['dob']));
    $convert_date=date("d", strtotime($_POST['User']['dob']));
    echo "year: ".$convert_year."\n";
    echo "month: ".$convert_month."\n";
    echo "date: ".$convert_date."\n";
    $age=date("Y")-$convert_year;
    echo "age: ".$age."\n".'Your hobbies: '.$hobbies;
}

