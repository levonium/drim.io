<?php
?>

<section id="pricing" class="section">

    <div>
        <h2 class="mb-12 text-center font-heading text-2xl font-bold tracking-tight lg:mb-24 lg:text-5xl">
            Two ways to work together
        </h2>

        <div class="grid gap-12 rounded-xl text-slate-300 sm:grid-cols-2">
            <div class="rounded-l bg-indigo-800 p-6 md:p-12 md:pb-8g">
                <span class="mb-3 block max-w-max rounded bg-slate-800 px-3 font-bold text-slate-200">
                    Monthly Development
                </span>

                <h3 class="mb-12 font-heading text-2xl font-bold text-slate-200">
                    Need a reliable developer for your existing project?
                </h3>

                <p class="mb-4">
                    I'll be your go-to developer, helping you improve and maintain your codebase.
                </p>

                <ul class="mb-3">
                    <li class="flex items-start space-x-2">
                        <span class="flex h-[1lh] items-center">
                            <?php echo icon('square-check-big', 'size-4 stroke-1', ['aria-hidden' => 'true']); ?>
                        </span>
                        <span>Send me tasks and issues as they come up</span>
                    </li>
                    <li class="flex items-start space-x-2">
                        <span class="flex h-[1lh] items-center">
                            <?php echo icon('square-check-big', 'size-4 stroke-1', ['aria-hidden' => 'true']); ?>
                        </span>
                        <span>Get solutions and improvements throughout the month</span>
                    </li>
                </ul>
                <ul>
                    <li class="flex items-start space-x-2">
                        <span class="flex h-[1lh] items-center">
                            <?php echo icon('square-check-big', 'size-4 stroke-1', ['aria-hidden' => 'true']); ?>
                        </span>
                        <span>Direct communication, no project management overhead</span>
                    </li>
                    <li class="flex items-start space-x-2">
                        <span class="flex h-[1lh] items-center">
                            <?php echo icon('square-check-big', 'size-4 stroke-1', ['aria-hidden' => 'true']); ?>
                        </span>
                        <span>Pause or cancel anytime, no questions asked</span>
                    </li>
                </ul>

                <p class="my-12 flex items-center space-x-2 text-xl font-bold text-white">
                    <?php echo icon('sparkles', 'size-8 stroke-1 text-slate-300', ['aria-hidden' => 'true']); ?>
                    <span>€2,400 per month</span>
                </p>

                <a href="#contact" class="button inline-flex items-center space-x-2 border-none bg-white hover:bg-indigo-300">
                    <?php echo icon('square-arrow-up-right', 'size-6 shrink-0 text-orange-800', ['aria-hidden' => 'true']); ?>
                    <span>Get Started</span>
                </a>
            </div>

            <div class="rounded-lg bg-orange-800 p-6 md:p-12 md:pb-8">
                <span class="mb-3 block max-w-max rounded bg-slate-800 px-3 font-bold text-slate-200">
                    Project-based
                </span>

                <h3 class="mb-12 font-heading text-2xl font-bold text-slate-200">
                    Have a specific project or feature that needs to be built?
                </h3>

                <p class="mb-4">
                    Share your idea, and I'll help you plan and implement it with precision and care.
                </p>

                <ul class="mb-3">
                    <li class="flex items-start space-x-2">
                        <span class="flex h-[1lh] items-center">
                            <?php echo icon('square-check-big', 'size-4 stroke-1', ['aria-hidden' => 'true']); ?>
                        </span>
                        <span>Perfect for new features or specific improvements</span>
                    </li>
                    <li class="flex items-start space-x-2">
                        <span class="flex h-[1lh] items-center">
                            <?php echo icon('square-check-big', 'size-4 stroke-1', ['aria-hidden' => 'true']); ?>
                        </span>
                        <span>You focus on feedback, I handle the development</span>
                    </li>
                </ul>
                <ul>
                    <li class="flex items-start space-x-2">
                        <span class="flex h-[1lh] items-center">
                            <?php echo icon('square-check-big', 'size-4 stroke-1', ['aria-hidden' => 'true']); ?>
                        </span>
                        <span>Clear project scope and deliverables</span>
                    </li>
                    <li class="flex items-start space-x-2">
                        <span class="flex h-[1lh] items-center">
                            <?php echo icon('square-check-big', 'size-4 stroke-1', ['aria-hidden' => 'true']); ?>
                        </span>
                        <span>Fixed price based on project scope</span>
                    </li>
                </ul>

                <p class="my-12 flex items-center space-x-2 text-xl font-bold text-white">
                    <?php echo icon('sparkles', 'size-8 stroke-1 text-slate-300', ['aria-hidden' => 'true']); ?>
                    <span>Let's discuss your project</span>
                </p>

                <a href="#contact" class="button inline-flex items-center space-x-2 hover:bg-orange-300">
                    <?php echo icon('square-arrow-up-right', 'size-6 shrink-0 text-indigo-800', ['aria-hidden' => 'true']); ?>
                    <span>Get Started</span>
                </a>
            </div>
        </div>

        <div class="mt-16 grid gap-12 rounded-xl sm:grid-cols-2 lg:mt-32">
            <div>
                <h3 class="mb-8 pt-6 font-heading text-2xl font-bold tracking-tight lg:text-3xl">
                    Frequently Asked Questions
                </h3>

                <div>
                    <span class="block font-bold">
                        Can't find the answer you're looking for or want to talk to me first?
                    </span>

                    <span>
                        Learn more about how I work and how I can help you with your project
                    </span>
                </div>

                <a href="#contact" class="button mt-3 inline-block text-xs uppercase hover:bg-slate-300">
                    Get in touch
                </a>
            </div>

            <div>
                <?php foreach (faqs() as $key => $faq) { ?>
                    <details class="group border-b border-slate-500/40 marker:content-['']">
                        <summary class="flex cursor-pointer items-center justify-between py-6">
                            <span class="grow pr-4 font-bold">
                                <?php echo $faq; ?>
                            </span>

                            <?php echo icon('square-plus', 'block size-6 shrink-0 stroke-[0.5px] text-slate-800 group-open:hidden', ['aria-hidden' => 'true']); ?>
                            <?php echo icon('square-minus', 'hidden size-6 shrink-0 stroke-[0.5px] text-slate-800 group-open:block', ['aria-hidden' => 'true']); ?>
                        </summary>

                        <div class="pr-6 pb-6">
                            <?php include BASE_PATH."/resources/views/data/faq/$key.php"; ?>
                        </div>
                    </details>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
