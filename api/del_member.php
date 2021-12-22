<?php
include_once "./db.php";
// echo $_POST["del"];
// foreach($_POST['id'] as $key => $id){
//     print_r($_POST['del']);
//     if(isset($_POST['del']) && in_array($id,$_POST['del'])){    
//         // del('users', $id);
//         // echo $_POST["del"];
//     }
// }

$member=find('users',$_GET['id']);
print_r($member) ;
del('users',$_GET['id']);

to("../backend/index.php?do=member")
?>