<?php
// isset() : Cheking wheter an element existe or NOt
if (isset ( $_GET ['nom'] ) and isset ( $_GET ['prenom'] )) {
	echo 'Bonjour' . $_GET ['nom'] . ' ' . $_GET ['prenom'];
}

?>
	