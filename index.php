<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require __DIR__.'/vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<?php include_once 'resources/views/layout/head.php'; ?>

<body class="antialiased font-drim text-base text-slate-800 font-normal bg-linear-135 sm:bg-linear-105 from-[#fff1be] from-28% via-[#ee87cb] via-70% to-[#b060ff]">
	<div id="progress-bar"
		class="fixed top-0 left-0 h-1 bg-brand-700 z-50 transition-all duration-300"
		style="width: 0%">
	</div>
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
	<?php include_once 'resources/views/layout/contact.php'; ?>

	<script src="/assets/js/app.js"></script>
</body>
</html>
