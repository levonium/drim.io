<?php
?>

<section id="projects" class="full-section" aria-label="Recent Projects">

    <div class="py-24">

        <h3 class="mb-24 text-2xl lg:text-5xl text-white font-heading font-bold tracking-tight">
            Recent Projects
        </h3>

        <div class="mb-12 grid sm:grid-cols-2 gap-16">

            <?php foreach (projects() as $project) { ?>

                <a href="<?php echo 'https://'.$project['url']; ?>"
                    target="_blank"
                    class="group block overflow-hidden border <?php echo $project['bgColor']; ?> rounded-2xl hover:-translate-y-4 transition-transform duration-300 ease-linear">

                    <div class="p-8">
                        <h4
                            class="mb-3 text-3xl font-heading font-bold <?php echo $project['textColor']; ?>">
                            <?php echo icon($project['icon'], 'stroke-1 size-12 mb-4 text-violet-950'); ?>
                            <?php echo $project['title']; ?>
                        </h4>
                        <p class="<?php echo $project['textColor']; ?>">
                            <?php echo $project['description']; ?>
                        </p>
                    </div>

                    <img src="/assets/images/<?php echo $project['url']; ?>.png"
                        alt="<?php echo $project['url']; ?>" loading="lazy"
                        class="mt-8 ml-16 rounded-t-3xl group-hover:translate-y-4 transition-transform duration-300 ease-linear">
                </a>
            <?php } ?>

        </div>
    </div>
</section>
