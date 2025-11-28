<?php
include "../../../AutoLoader.php";
use App\Request\Connection;
use App\Response\Response;
use App\Request\Query;


// $obj = new Query();

// if(isset($_GET['id'])) {
//     $id = $_GET['id'];
//     $data = Query::get_users($id);
// }else{
//     $data = Query::get_users();
// }


$obj = new Query();
//$obj->all_users();

if(isset($_GET['limit'])){
    $limit = $_GET['limit'];
    $data = $obj->get_users($limit);
}else{
    $data = $obj->get_users(0); 
}

//$data = Query::get_users( (object) [1,2,3]);
    $method = $_SERVER['REQUEST_METHOD'];


//switch ($method) {
//    case 'GET':
//    case 'POST':
//        case 'PUT':
//            case 'DELETE':
//        echo Response::response_data($data,200);
//        break;
//        default:
//            echo Response::response_data($data,405);
//            break;
//}
    echo match ($method) {
        'GET', 'POST', 'PUT', 'DELETE' => Response::response_data($data, 200),
        default => Response::response_data([], 405),
    };