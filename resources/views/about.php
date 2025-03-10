<?php
?>

<section id="about" aria-label="About me" class="section text-lg">

    <div class="mb-48">

        <div class="relative grid grid-cols-2 md:grid-cols-3 items-center gap-x-8 md:gap-x-16 gap-y-16 md:gap-y-32">
            <div class="group relative col-span-2 overflow-hidden rounded-4xl md:col-span-1">

                <picture class="block aspect-3/4 h-full w-full transform rounded-4xl transition-transform duration-300 ease-linear group-hover:scale-105">
                    <source
                        type="image/webp"
                        srcset="/assets/images/me-200.webp 200w,
                                /assets/images/me-400.webp 400w,
                                /assets/images/me.webp 500w"
                        sizes="(max-width: 768px) calc(100vw - 3rem),
                                (max-width: 1152px) calc((100vw - 3rem)/3),
                                342px">

                    <img src="/assets/images/me.jpg"
                        srcset="/assets/images/me-200.jpg 200w,
                                /assets/images/me-400.jpg 400w,
                                /assets/images/me.jpg 500w"
                        sizes="(max-width: 768px) calc(100vw - 3rem),
                                (max-width: 1152px) calc((100vw - 3rem)/3),
                                342px"
                        alt="Levon"
                        class="rounded-lg"
                        loading="lazy"
                        decoding="async"
                        width="500"
                        height="667">
                </picture>
                <div
                    class="absolute inset-0 flex items-end bg-gradient-to-t from-black/50 to-transparent p-6 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                    <p class="text-sm text-white">Currently working from somewhere on planet Earth 🌍</p>
                </div>
            </div>

            <div class="relative col-span-2">
                <h3 class="relative z-10 mb-6 font-heading text-3xl font-bold tracking-tight text-slate-700">
                    Building on the web since 2010
                </h3>

                <p class="relative z-1 mb-6">
                    With over a decade of web development experience, I've evolved from creating simple calculator
                    programs to building complex web applications that solve real business problems. The web has changed
                    dramatically during this time, and I've grown with it, constantly learning and adapting to new technologies and
                    approaches.
                </p>

                <p class="mb-6">
                    My first encounter with programming was in university with Visual Basic, where I discovered the
                    thrill of bringing ideas to life through code. That excitement of seeing my code transform into
                    something useful has never faded - it's only grown stronger. Every project, whether big or small,
                    still brings that same sense of possibility and achievement.
                </p>

                <p>
                    Today, I specialize in creating high-performance web solutions that help businesses and individuals
                    achieve their goals. What makes my work truly rewarding is seeing how these digital solutions
                    make a real difference in people's businesses. I take pride in writing clean, maintainable code
                    that stands the test of time and delivers real value to users.
                </p>

                <?php echo icon(
                    'sparkles',
                    'absolute -top-8 right-4 z-0 size-24 -rotate-4 transform stroke-1 text-amber-400 md:right-0',
                    ['aria-hidden' => 'true']
                ); ?>
            </div>

            <div class="relative col-span-2 w-full shrink-0 md:col-span-1">
                <h3 class="mb-6 font-heading text-3xl font-bold tracking-tight text-slate-700">
                    Working remotely, living globally
                </h3>

                <p class="mb-6">
                    My passion for web development is matched by my love for exploration. I've made the conscious choice
                    to work remotely while traveling, which allows me to collaborate with clients worldwide while
                    experiencing different cultures and perspectives.
                </p>

                <p class="relative z-1 mb-0 italic">
                    This lifestyle not only enriches my personal experience but also brings a broader perspective
                    to my work, helping me create solutions that work effectively across cultural boundaries.
                </p>

                <?php echo icon(
                    'plane',
                    'absolute -bottom-24 -left-24 z-0 size-48 stroke-[0.5] text-sky-400 opacity-60',
                    ['aria-hidden' => 'true']
                ); ?>
            </div>

            <div class="group overflow-hidden rounded-4xl md:col-span-1">
                <picture class="block aspect-3/4 h-full w-full transform rounded-4xl transition-transform duration-300 ease-linear group-hover:scale-105">
                    <source
                        type="image/webp"
                        srcset="/assets/images/clouds-200.webp 200w,
                                /assets/images/clouds-400.webp 400w,
                                /assets/images/clouds.webp 500w"
                        sizes="(max-width: 768px) calc(100vw - 3rem),
                                (max-width: 1152px) calc((100vw - 3rem)/3),
                                342px">

                    <img src="/assets/images/clouds.jpg"
                        srcset="/assets/images/clouds-200.jpg 200w,
                                /assets/images/clouds-400.jpg 400w,
                                /assets/images/clouds.jpg 500w"
                        sizes="(max-width: 768px) calc(100vw - 3rem),
                                (max-width: 1152px) calc((100vw - 3rem)/3),
                                342px"
                        alt="View from above the clouds"
                        class="rounded-lg"
                        loading="lazy"
                        decoding="async"
                        width="500"
                        height="667">
                </picture>
            </div>
            <div class="group overflow-hidden rounded-4xl md:col-span-1">
                <picture class="block aspect-3/4 h-full w-full transform rounded-4xl transition-transform duration-300 ease-linear group-hover:scale-105">
                    <source
                        type="image/webp"
                        srcset="/assets/images/river-200.webp 200w,
                                /assets/images/river-400.webp 400w,
                                /assets/images/river.webp 500w"
                        sizes="(max-width: 768px) calc(100vw - 3rem),
                                (max-width: 1152px) calc((100vw - 3rem)/3),
                                342px">

                    <img src="/assets/images/river.jpg"
                        srcset="/assets/images/river-200.jpg 200w,
                                /assets/images/river-400.jpg 400w,
                                /assets/images/river.jpg 500w"
                        sizes="(max-width: 768px) calc(100vw - 3rem),
                                (max-width: 1152px) calc((100vw - 3rem)/3),
                                342px"
                        alt="Scenic river view"
                        class="rounded-lg"
                        loading="lazy"
                        decoding="async"
                        width="500"
                        height="667">
                </picture>
            </div>
        </div>
    </div>

    <div class="max-w-5xl px-6 sm:px-12">
        <div class="mb-6 flex space-x-1">
            <?php echo implode('', array_map(fn ($i) => icon('star', 'size-6 fill-current text-orange-600', ['aria-hidden' => 'true']), [1, 2, 3, 4, 5])); ?>
        </div>

        <div class="mb-6 text-lg/8 italic sm:text-xl/8">
            <?php include BASE_PATH.'/resources/views/data/testimonials/1.php'; ?>
        </div>

        <p>
            <span class="font-bold text-slate-700">David,</span>
            <span class="text-slate-600">CEO at MANERA Creative Agency</span>
        </p>
    </div>
</section>
