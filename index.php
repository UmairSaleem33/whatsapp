<?php
include('WhatsappAPI.php'); // include given API class

$obj = new WhatsappAPI; // create an object of the WhatsappAPI class
$status = $obj->send("+923124598339", "Hello%0AWorld"); // NOTE: Phone Number should be with country code
if($status){
    echo "Message has been send successfull";
}
else {
    echo "err";
}
$status = json_decode($status);

print_r($status);
?>