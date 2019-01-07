<?php 
require_once('../enhanced_CS.php');

if(isset($_GET['kata'])){
			$teksAsli = strtolower($_GET['kata']);
			echo "Teks asli : ".$teksAsli.'<br/>';
			$stemming = Enhanced_CS($teksAsli);
			echo "Kata dasar : ".$stemming.'<br/>';
    }
    
?>