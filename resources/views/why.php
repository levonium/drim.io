<?php
?>

<section id="why" class="section bg-white">
    <div class="px-3 sm:px-0">

        <h3 class="mb-16 font-heading text-2xl font-bold tracking-tight lg:text-5xl">
            I keep things simple

            <span class="block pt-4 text-2xl font-light text-slate-500">
                Here's what makes working together effective and enjoyable
            </span>
        </h3>

        <div class="lg:flex lg:items-center lg:justify-end">

            <div class="hidden justify-center overflow-hidden lg:flex lg:w-1/2 lg:justify-end lg:overflow-visible lg:pr-12">
                <div class="w-[33rem] flex-none lg:w-[45rem]">
                    <div class="relative flex aspect-square w-full justify-center lg:justify-end">
                        <svg viewBox="0 0 655 680" fill="none" class="h-full" aria-hidden="true">
                            <g clip-path="url(#:imageclip)" class="group">
                                <g class="origin-center scale-100 transition duration-500 motion-safe:group-hover:scale-105">
                                    <foreignObject width="655" height="680">
                                        <img alt="Working setup" loading="lazy" width="358" height="512" decoding="async"
                                            class="aspect-3/4 w-full bg-slate-100 object-cover brightness-[0.9] transition-all duration-300 hover:brightness-100"
                                            src="/assets/images/laptop.jpg">
                                    </foreignObject>
                                </g>
                            </g>
                            <defs>
                                <clipPath id=":imageclip">
                                    <path d="M537.827 9.245A11.5 11.5 0 0 1 549.104 0h63.366c7.257 0 12.7 6.64 11.277 13.755l-25.6 128A11.5 11.5 0 0 1 586.87 151h-28.275a15.999 15.999 0 0 0-15.689 12.862l-59.4 297c-1.98 9.901 5.592 19.138 15.689 19.138h17.275l.127.001c.85.009 1.701.074 2.549.009 11.329-.874 21.411-7.529 24.88-25.981.002-.012.016-.016.023-.007.008.009.022.005.024-.006l24.754-123.771A11.5 11.5 0 0 1 580.104 321h63.366c7.257 0 12.7 6.639 11.277 13.755l-25.6 128A11.5 11.5 0 0 1 617.87 472H559c-22.866 0-28.984 7.98-31.989 25.931-.004.026-.037.035-.052.014-.015-.02-.048-.013-.053.012l-24.759 123.798A11.5 11.5 0 0 1 490.87 631h-29.132a14.953 14.953 0 0 0-14.664 12.021c-4.3 21.502-23.18 36.979-45.107 36.979H83.502c-29.028 0-50.8-26.557-45.107-55.021l102.4-512C145.096 91.477 163.975 76 185.902 76h318.465c10.136 0 21.179-5.35 23.167-15.288l10.293-51.467Z" fill-rule="evenodd" clip-rule="evenodd"></path>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>

            <ul role="list" class="mt-16 px-3 text-base text-slate-600 lg:mt-0 lg:w-1/2 lg:min-w-[33rem] lg:pr-0 lg:pl-4">
                <?php foreach (reasons() as $key => $reason) { ?>
                    <li class="group mt-10 first:mt-0" data-period="360">
                        <div>
                            <div class="relative pt-10 group-first:pt-0 before:absolute before:top-0 before:left-0 before:h-px before:w-6 before:bg-slate-950 group-first:before:hidden after:absolute after:top-0 after:right-0 after:left-8 after:h-px after:bg-slate-950/10 group-first:after:hidden">
                                <strong class="mb-2 block text-lg font-semibold text-slate-950">
                                    <?php echo $reason; ?>
                                </strong>

                                <div class="text-slate-600">
                                    <?php include BASE_PATH."/resources/views/data/reasons/$key.php"; ?>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</section>
