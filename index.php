<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require __DIR__.'/vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php include_once 'resources/views/layout/head.php'; ?>

<body class="antialiased font-drim text-base text-slate-400 font-normal"
    style="background-image: linear-gradient(to right, #141e30, #243b55);">

    <?php include_once 'resources/views/layout/header.php'; ?>

	<main>
		<?php include_once 'resources/views/intro.php'; ?>

		<article>
			<?php include_once 'resources/views/about.php'; ?>
			<?php include_once 'resources/views/projects.php'; ?>
			<?php include_once 'resources/views/why.php'; ?>
			<?php include_once 'resources/views/pricing.php'; ?>
		</article>
	</main>

    <?php include_once 'resources/views/layout/footer.php'; ?>
</body>
</html>
