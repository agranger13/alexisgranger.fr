<?php 
include 'lire_images.php';
?>

<?php 
foreach ($images as $doss => $listeF){
	for ($i = 0; $i <count($listeF);$i++){
	echo '<div class="modal" id="Modal-'.$doss.'-'.$i.'">
		<div class="modal-background"></div>
			<div class="modal-content">';
				if ($doss != "intro"){
					echo "<p>						  
						<img src='./images/travaux/".$doss."/".$listeF[$i]."' class='modal-image' alt=''>
						</p>";
				}
				else {
					echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/b1aGDbp55no" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
				}

			echo '</div>';
					echo "
					<div class='buttons are-small'>
					<button class='button previous' name='previous' value='1'> < </button>
					<button class='button next' name='next' value='1'> > </button> 
					</div>";
		echo '<button class="modal-close is-large" aria-  label="close"></button>';
	echo "</div>";
	}
}
?>