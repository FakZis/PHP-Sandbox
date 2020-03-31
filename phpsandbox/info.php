<?php
	require_once 'inc/_header.php';
	require_once 'inc/server-info.php';
?>

	<header>
		<h1>Info Page</h1>
	</header>

<?php
	// print_r($server);
	// print_r($client);

	// Kurzschreibweise bei Code-Blöcken
	// -> Anstelle von {geschweiften} Klammern wird ein :
	// (Doppelpunkt) für die Initialisierung eines Code-Blocks
	// verwendet.
?>

<?php if(isset($server)): ?>
	<ul class ="list-group">
		<?php foreach($server as $key => $value): ?>
			<li class="list-group-item">
				<strong> <?php echo $key; ?> : </strong>
				<?php echo $value; ?>
			</li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>

<?php require_once 'inc/_footer.php';?>
