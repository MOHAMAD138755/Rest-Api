<?php

namespace App\Request;
// include "Connection.php";
use App\Request\Connection;
class Query extends Connection
{
    public function all_users()
    {
        $conn = new Connection();

        $sql = "CREATE TABLE `Users` (`id` INT PRIMARY KEY AUTO_INCREMENT,
                `username` varchar(100) NOT NULL, `email` varchar(100) NOT NULL ) ";

        return $conn->Query($sql);
    }

    public static function get_users($limit): array
    {
        $conn = new Connection();

        // if($id == null){
        //     $sql = "SELECT * FROM `Users`";
        //     return $conn->Query($sql)->fetch_all();
        // }
            $sql = "SELECT * FROM `Users` LIMIT ?,5";
            return $conn->Query($sql,[$limit])->fetch_all();
    }

}

//$obj = new Query();
////$obj->all_users();
//
//if(isset($_GET['id'])){
//    $id = $_GET['id'];
//    var_dump($obj->get_users($id));
//}else{
//    var_dump($obj->get_users());
//}



// $obj = new Query();
// //$obj->all_users();

// if(isset($_GET['limit'])){
//     $limit = $_GET['limit'];
//     var_dump($obj->get_users($limit));
// }else{
//     var_dump($obj->get_users(0));   
// }