<?php
$envoi = isset($_POST['avis']);
$deja = isset($_COOKIE['avis']);

if ($envoi && !$deja) {
	setcookie('avis',$_POST['avis'],time()+60*2,'/');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Document</title>
</head>
<body>
 
<?php
        if($envoi) {
			if (!$deja) {
    ?>
				<div class="alert alert-success">
					<h4>Vote enregistré. Merci pour votre temps.</h4>                
				</div>
	<?php
			} else {
	?>        
				<div class="alert alert-danger">
					<h4>Vous avez déjà voté : <?= $_COOKIE['avis'] ?>!</h4>                
				</div>
    <?php
			}
        }
        
    ?>


</body>
</html>
