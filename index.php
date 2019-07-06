<?php
//sum
//$a=1;
//$b=2;
//$str='sum = ';
//$res= $a+$b;
//echo $str.$res;
//
//echo "\r\n";

//print # w format
//$c=10000000000.12345;
//echo number_format($c,2, '.', ',');
//echo "\n";

//BT separate name
//$str='Son Tung MTP';
//$arr=explode(' ', $str);
//var_dump($arr);
//
//$name=array_pop($arr);
//var_dump($arr);
//
//$last=implode(' ', $arr);
//var_dump($arr);
//
//echo "\n".'First Name: '.$name."\n".'Last Name: '.$last."\n";

//Reverse Name
//$arr=array_reverse($arr);
//echo "<pre>";
//var_dump($arr);
//echo "</pre>";
//
//$str=implode(' ', $arr);
//echo $str;

//Print # array
//$arr_so=array(1, 2, 3, 4, 5);
//echo "<ul>";
//for($so=0; $so<=4; $so++)
//    echo "<li> $arr_so[$so]</li>";
//echo "</ul>";

//Print mixed array
//$arr_mix=array('name'=>'Son Tung', 'dob' => '1994', 'job' => "singer");
//foreach ($arr_mix as $index => $item)
//    echo "{$item}"."\n";

//Print table
$arr_db = array(
    array('Name' => 'Son Tung 1', 'DOB' => '1994', 'Job' => 'singer', 'Place' => 'VN'), //index = 0
    array('Name' => 'Son Tung 2', 'DOB' => '1993', 'Job' => 'singer', 'Place' => 'VN'), //index = 1
    array('Name' => 'Son Tung 3', 'DOB' => '1992', 'Job' => 'singer', 'Place' => 'VN'),
    array('Name' => 'Son Tung 4', 'DOB' => '1991', 'Job' => 'singer', 'Place' => 'VN'),
    array('Name' => 'Son Tung 5', 'DOB' => '1990', 'Job' => 'singer', 'Place' => 'VN'),
    array('Name' => 'Son Tung 6', 'DOB' => '1995', 'Job' => 'singer', 'Place' => 'VN'),
    array('Name' => 'Son Tung 7', 'DOB' => '1996', 'Job' => 'singer', 'Place' => 'VN'),
    array('Name' => 'Son Tung 8', 'DOB' => '1997', 'Job' => 'singer', 'Place' => 'VN'),
    array('Name' => 'Son Tung 9', 'DOB' => '1998', 'Job' => 'singer', 'Place' => 'VN'), //index = 8
);
?>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>DOB</th>
            <th>Job</th>
            <th>Place</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($arr_db as $index => $item): ?>
            <tr>
                <td><?php echo $index + 1; ?></td>
                <td><?php echo $item['Name'] ?></td>
                <td><?php echo $item['DOB'] ?></td>
                <td><?php echo $item['Job'] ?></td>
                <td><?php echo $item['Place'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
/**
 * Install Xampp 1.7 => Launchpad/Xampp/manager => Manage Server => MySQL Running, ProFTPD Stop, Apache Running
 * Put src code folder in Application folder/Xampp folder/htdocs
 * Chrome: http://localhost/phpmyadmin/
 * http://localhost/bt1/index.php
 */


?>


















