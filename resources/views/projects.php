<?php
?>

<section id="projects" class="section" aria-label="Recent Projects">

    <div>
        <h3 class="mb-12 lg:mb-24 text-2xl lg:text-5xl font-heading font-bold tracking-tight">
            Projects
            <span class="block pt-4 text-slate-500 text-2xl font-light">work and fun, a little bit of both</span>
        </h3>

        <div class="mb-12 grid grid-cols-2 sm:grid-cols-4 gap-16">

            <?php foreach (array_slice(projects(), 0, 4) as $project) { ?>

                <a href="<?php echo 'https://'.$project['url']; ?>"
                    target="_blank"
                    class="group col-span-2 block overflow-hidden border <?php echo $project['boxColors']; ?> rounded-2xl hover:-translate-y-4 transition-transform duration-300 ease-linear">

                    <div class="p-8">
                        <h4
                            class="mb-3 text-3xl font-heading font-bold <?php echo $project['textColor']; ?>">
                            <?php echo icon($project['icon'], 'stroke-1 size-12 mb-4 text-violet-950', ['aria-hidden' => 'true']); ?>
                            <?php echo $project['title']; ?>
                        </h4>
                        <p class="<?php echo $project['textColor']; ?>">
                            <?php echo $project['description']; ?>
                        </p>
                    </div>

                    <img src="/assets/images/<?php echo $project['url']; ?>.png"
                        alt="<?php echo $project['url']; ?>" loading="lazy" decoding="async"
                        class="mt-8 ml-16 rounded-t-3xl group-hover:translate-y-4 transition-transform duration-300 ease-linear">
                </a>
            <?php } ?>

            <?php foreach (array_slice(projects(), 4) as $project) { ?>

                <a href="<?php echo 'https://'.$project['url']; ?>"
                    target="_blank"
                    class="group col-span-2 md:col-span-1 block overflow-hidden border <?php echo $project['boxColors']; ?> rounded-2xl hover:-translate-y-4 transition-transform duration-300 ease-linear">

                    <div class="p-4">
                        <h4
                            class="mb-3 text-xl font-heading font-bold <?php echo $project['textColor']; ?>">
                            <?php echo icon($project['icon'], 'stroke-1 size-8 mb-3 text-violet-950', ['aria-hidden' => 'true']); ?>
                            <?php echo $project['title']; ?>
                        </h4>
                    </div>

                    <img src="/assets/images/<?php echo $project['url']; ?>.png"
                        alt="<?php echo $project['url']; ?>" loading="lazy" decoding="async"
                        class="ml-6 rounded-t-xl group-hover:translate-y-4 transition-transform duration-300 ease-linear">
                </a>
            <?php } ?>
        </div>
    </div>
</section>
