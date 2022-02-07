<?php 
session_start();
require "../config/conexion.php";
require "../model/quoteModel.php";

$quotes = new Quotes();

$option = '';

if(isset($_POST['option'])){
    $option = $_POST['option'];
}

switch ($option){
    case 'save_sale':

        $save = $sales->save_sale($client_id,$user_id,$voucher_type,$voucher_serie,$voucher_number,$sale_subtotal,$tax,$sale_total,$contact,$payment_method,$delivery,$price_delivery,$validate_delivery);

        $data = json_decode($save,true);
        
        if(isset($data['last_id'])){

            $lastId = $data['last_id'];

            foreach($_SESSION['cart'] as $index => $article){

                $sales->save_sale_detail($article['id'],$lastId,$article['name'],$article['id_category'],$article['id_brand'],$article['description'],$article['sku'],$article['stock'],$article['purchase_price'],$article['sale_price'],$article['qty'],$article['subtotal'],$article['igv'],$article['total'],$article['shopper']);

            }

            unset($_SESSION["cart"]);
            $_SESSION["cart"] = [];

            echo $save;

        }else{

            echo $save;

        }

    break;
    case 'delete':

        if($_SESSION['rol'] == 0){

            $delete  = $sales->delete_sale($id);

        }else{

            $response = [

                "status" => "error",
                "message" => "No tienes permisos para realizar esta acción."

            ];

            echo json_encode($response);

        }

        

    break;
    default:
    $listAll = json_encode($quotes->get_quotes($option));
    echo '{"data":'.$listAll.'}';
    break;
}

?>