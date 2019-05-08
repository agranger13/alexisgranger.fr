<?php


$images = array("banner"=>array(),"comp" =>array(), "dessin" => array(), "intro" => array(), "logo" => array(), "num" => array());
if($liste = opendir('./images/travaux/')){
	while(($doss = readdir($liste))!== false){
		if ($doss == "." || $doss == ".."){
					continue;}
		if($listeImg = opendir('./images/travaux/'.$doss)){
			while(($fichier = readdir($listeImg))!== false){
				if ($fichier == "." || $fichier == ".."){
					continue;}
				array_push($images[$doss], $fichier);
			}
		}
	}
}
?>