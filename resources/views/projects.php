<?php
?>

<section id="projects" class="section" aria-label="Recent Projects">

    <div>
        <h3 class="mb-12 font-heading text-2xl font-bold tracking-tight lg:mb-24 lg:text-5xl">
            Projects
            <span class="block pt-4 text-2xl font-light text-slate-500">
                Selected works that showcase my expertise
            </span>
        </h3>

        <div class="mb-12 grid grid-cols-2 gap-16 sm:grid-cols-4">

            <?php foreach (array_slice(projects(), 0, 2) as $project) { ?>

                <a href="<?php echo 'https://'.$project['url']; ?>"
                    target="_blank"
                    rel="noopener"
                    class="group <?php echo $project['boxColors']; ?> col-span-2 block overflow-hidden 2xl border transition-transform duration-300 ease-linear hover:-translate-y-4"
                    aria-label="Visit <?php echo $project['title']; ?>">

                    <div class="p-8">
                        <h4
                            class="<?php echo $project['textColor']; ?> mb-3 font-heading text-3xl font-bold">
                            <?php echo icon($project['icon'], 'mb-4 size-12 stroke-1 text-violet-950', ['aria-hidden' => 'true']); ?>
                            <?php echo $project['title']; ?>
                        </h4>

                        <p class="<?php echo $project['textColor']; ?>">
                            <?php echo $project['description']; ?>
                        </p>
                    </div>

                    <img src="/assets/images/<?php echo $project['url']; ?>.webp"
                        alt="Screenshot of <?php echo $project['title']; ?>"
                        loading="lazy"
                        decoding="async"
                        class="mt-8 ml-16 aspect-3/2 w-full t-3xl transition-transform duration-300 ease-linear group-hover:translate-y-4">
                </a>
            <?php } ?>

            <?php foreach (array_slice(projects(), 2) as $project) { ?>

                <a href="<?php echo 'https://'.$project['url']; ?>"
                    target="_blank"
                    rel="noopener"
                    class="group <?php echo $project['boxColors']; ?> col-span-2 block overflow-hidden 2xl border transition-transform duration-300 ease-linear hover:-translate-y-4 md:col-span-1">

                    <div class="p-4">
                        <h4
                            class="<?php echo $project['textColor']; ?> mb-3 font-heading text-xl font-bold">
                            <?php echo icon($project['icon'], 'mb-3 size-8 stroke-1 text-violet-950', ['aria-hidden' => 'true']); ?>
                            <?php echo $project['title']; ?>
                        </h4>

                        <p class="<?php echo $project['textColor']; ?> text-sm">
                            <?php echo $project['description']; ?>
                        </p>
                    </div>

                    <img src="/assets/images/<?php echo $project['url']; ?>.webp"
                        alt="Screenshot of <?php echo $project['title']; ?>" loading="lazy" decoding="async"
                        class="ml-6 aspect-3/2 w-full t-xl transition-transform duration-300 ease-linear group-hover:translate-y-4">
                </a>
            <?php } ?>
        </div>
    </div>
</section>
