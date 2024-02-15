<?php 
    $firstName = $_POST['firstName'];
    $lastName =$_POST['lastName'];
    $choiceObject = $_POST['choiceObject'];
    $callNumber = $_POST['callNumber'];
    $courriel = $_POST['courriel'];
    $message = $_POST['message'];
?>
<p>Merci <?= $firstName?>  <?= $lastName?>  de nous avoir contacté à propos de "<?=$choiceObject ?>".</p>

<p>Un de nos conseillers vous contactera soit à l'adresse mail <?= $courriel?> ou par téléphone au <?= $callNumber ?> dans les plus brefs délais pour traiter votre demande:
<?= $message ?>
</p> 