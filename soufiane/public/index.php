<?php
require_once "../config.php";
if(!isset($_GET['page'])){
    include ROOT_PATH."/view/index.php" ;
}elseif(in_array($_GET['page'],PUBLIC_PAGES)){

   // si la variable get corespond a une valeurs 
   // accpter dans le tableau
   include ROOT_PATH."/view/".$_GET['page'].".php";
}else{

    include ROOT_PATH."/view/404.php";
}