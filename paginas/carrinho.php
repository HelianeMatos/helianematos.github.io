<?php

session_start();

if(!isset($_SESSION['itens'])){
    $_SESSION['itens'] = array();
}

?>