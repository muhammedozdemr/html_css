<?php
try{
$db=new PDO("mysql:host=localhost;dbname=cart;charset-utf8",'username','password');
}
catch(PDOExpception $e){
echo $e->getMessage();
}

?>
