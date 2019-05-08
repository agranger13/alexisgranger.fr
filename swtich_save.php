<?php 
include 'lire_images.php';
?>

<?php 
foreach ($images as $doss => $listeF){
		

	echo '<div class="modal">
		<div class="modal-background"></div>
			<div class="modal-content">';

				$i=0;

				if (isset($_GET['next'])){
					$i++;
				}

				else if (isset($_GET['previous'])){
					$i--;
				}


				echo "<p>						  
					<img src='./images/travaux/".$_GET['id']."/".$images[$_GET['id']][$i]."' id='modal-image' alt=''>
					</p>";


			echo '</div>';
					echo $_GET['id']; 

					echo "
					<button class='button' id='previous' name='previous' value='".$_GET['id']."'> < </button>
					<button class='button' id='next' name='next' value='".$_GET['id']."'> > </button> ";
			echo '<button class="modal-close is-large" aria-  label="close"></button>';
	echo "</div>";
}
?>