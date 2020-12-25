<?php 
include("conn.php");

 if(isset($_POST['add'])){
    
    $kaydet=$db->prepare("INSERT INTO words SET
    name=:name
   
    ");
    $insert=$kaydet->execute(array(
     'name' => $_POST['name']
     ));

     if ($insert) {
       
          
         header("Location:index.php");
          
        }
        
}

if ($_GET['delete']=="ok") {
 
 
    $sil=$db->prepare("DELETE FROM words WHERE name=:name");
    $kontrol=$sil->execute(array(
     'name' => $_GET['name']
    ));

    if ($kontrol) {
   
      
     header("Location:index.php?durum=ok");
      
    }
         
    
   }

?>