<?php $titre = 'Mon Blog'; ?> 
<?php ob_start() ?> 
<h1>en cours de maintenance : <?=$msgErreur?></h1>
<?php $contenue = ob_get_clean(); ?> 
<?php require 'gabarit.php'; ?> 