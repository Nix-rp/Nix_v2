<?php
ini_set('display_errors',true);

//Initialisations diverses
session_start();

include_once('includes/html_header.php');
include_once('includes/html_footer.php');

$dispForm = true;
$wrong = false;

//Définition répertoire
define('root_path', 'Nix_v2/');
define('db_path', '../../db.php');
define('title', 'Nix - Connection');

html_header(title);

//Traitements

	//Déconnection

if (isset($_GET['action']) && $_GET['action'] == 'disconnection')
{
	if ($_SESSION['connected'])
	{
		$_SESSION['connected'] = false;

		?><p>À bientôt <?=$_SESSION['name']?>.</p><?php

		$dispForm = false;
	}
	else
	{
		?><p>Vous n'êtes pas connecté. De ce fait vous ne pouvez pas vous déconnecter.</p><?php

		$dispForm = false;
	}
}

if (isset($_POST['action']))
{
	

	//Connection

	if ($_POST['action'] == 'connection' && isset($_POST['pseudo']) && $_POST['pseudo'] && isset($_POST['pwd']) && $_POST['pwd'])
	{
		include(db_path);
		$db = init_db();

		$answer = $db->prepare('SELECT password, name, id, rank, title, activate FROM members WHERE name = ?');
		$answer->execute(array(htmlspecialchars($_POST['pseudo'])));
		$line = $answer->fetch();
		
		if ($line && password_verify($_POST['pwd'], $line['password']))
		{
			$_SESSION['connected'] = true;

			$_SESSION['name'] = $line['name'];
			$_SESSION['id'] = $line['id'];
			$_SESSION['rank'] = $line['rank'];
			$_SESSION['title'] = $line['title'];

			$_SESSION['alertEmail'] = ($line['activate'] != 'true') ? true : false;

			?><p>Bonjour <?=$_SESSION['name']?>.</p><?php

			$dispForm = false;
		}

		$wrong = true;
	}
}
else if ($_SESSION['connected'])
{
	?><p>Vous êtes déjà connecté <?=$_SESSION['name']?>.</p><?php
	
	$dispForm = false;
}

//Affichage du formulaire

if ($dispForm)
{
	?>
	<form method="POST" action="login.php">
		<label for ="pseudo">Pseudo :</label><input type="text" id="pseudo" name="pseudo" /><br />
		<label for="pwd">Mot de passe :</label><input type="password" id="pwd" name="pwd" /><br />

		<input type="submit" value="Connection" />
		<input type="reset" value="Annuler" />
		<input type="hidden" name="action" value="connection" /><?php if ($wrong) { ?>
		<p>Pseudo ou mot de passe incorrect.</p><?php } ?>
	</form>
	<?php
}

html_footer();
?>
