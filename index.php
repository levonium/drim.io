<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require __DIR__.'/vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<?php include_once 'resources/views/layout/head.php'; ?>

<body
    class="font-drim bg-linear-135 sm:bg-linear-105 from-28% from-[#fff1be] via-[#ee87cb] via-70% to-[#b060ff] text-base font-normal text-slate-800 antialiased">
    <?php include_once 'resources/views/layout/header.php'; ?>

    <?php include_once 'resources/views/intro.php'; ?>

    <main class="below-fold">
        <article>
            <?php include_once 'resources/views/about.php'; ?>
            <?php include_once 'resources/views/projects.php'; ?>
            <?php include_once 'resources/views/why.php'; ?>
            <?php include_once 'resources/views/pricing.php'; ?>
        </article>
    </main>

    <?php include_once 'resources/views/layout/footer.php'; ?>

    <aside class="contacts below-fold"></aside>

    <script src="/assets/js/app.js" defer></script>
</body>
</html>
