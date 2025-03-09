<?php
?>

<section id="about" aria-label="About me" class="section text-lg">

	<div class="mb-48">

		<div class="relative grid grid-cols-2 md:grid-cols-3 items-center gap-x-8 md:gap-x-16 gap-y-16 md:gap-y-32">
			<div class="overflow-hidden rounded-4xl col-span-2 md:col-span-1">
				<img src="/assets/images/me.jpg" alt="my photo"
					class="aspect-3/4 block rounded-4xl transform hover:scale-105 transition-transform duration-300 ease-linear">
			</div>

			<div class="relative col-span-2">
				<h3 class="relative z-10 mb-4 text-3xl font-heading font-bold tracking-tight text-slate-700">
					A software engineer from planet Earth.
				</h3>

				<p class="relative z-1 mb-6">
					I've been doing web development for more than a decade now, and it's still very exciting to me.
					I love the web and the opportunities it provides,
					and it's a joy for me to create websites and web applications using different technologies.
				</p>

				<p class="mb-6">
					In the university, we learned Visual Basic.
					I remember the first time I made a simple calculator program with let's say not so user-friendly
					interface.
					It was something out of this world for me.
					The idea that I could type some characters and see the results on the screen was so thrilling for
					me, and I wanted to make more.
					And over they years I've been doing just that - typing characters on my keyboard.
				</p>

				<p>
					Now, instead of simple calculator programs, I make websites and web applications, and instead of
					Visual Basic, I use a variety of technologies.
					And the best part is that other people find it so useful that they agree to pay me for that.
				</p>

				<?php echo icon(
				    'sparkles',
				    'stroke-1 size-24 absolute right-4 md:right-0 -top-8 text-amber-400 z-0 transform -rotate-4',
				    ['aria-hidden' => 'true']
				); ?>
			</div>

			<div class="relative w-full shrink-0 col-span-2 md:col-span-1">
				<h3 class="mb-4 text-3xl font-heading font-bold tracking-tight text-slate-700">
					A nomad in digital era.
				</h3>

				<p class="mb-6">
					I really enjoy traveling around the world, and I have this probably unrealistic dream of visiting
					every country on earth.
					I've been living a nomadic life for many years now, I've still been to a couple of dozen countries
					only.
					A lot more to go.
				</p>

				<p class="mb-0 italic relative z-1">
					I love the idea of a flight, and the science that enables that big metal bird fly ~10km above the
					earth.
					It's very thrilling and very very scary at the same time.
				</p>

				<?php echo icon(
				    'plane',
				    'stroke-[0.5] size-48 absolute -left-24 -bottom-24 text-sky-400 opacity-60 z-0',
				    ['aria-hidden' => 'true']
				); ?>
			</div>

			<div class="overflow-hidden rounded-4xl md:col-span-1">
				<img src="/assets/images/clouds.jpg" alt="alt" width="341" height="455" loading="lazy"
					class="aspect-3/4 block rounded-4xl transform hover:scale-105 transition-transform duration-300 ease-linear">
			</div>
			<div class="overflow-hidden rounded-4xl md:col-span-1">
				<img src="/assets/images/river.jpg" alt="alt" width="341" height="455" loading="lazy"
					class="aspect-3/4 block rounded-4xl transform hover:scale-105 transition-transform duration-300 ease-linear">
			</div>

			<button
				class="absolute right-0 bottom-0 text-sky-400 cursor-pointer p-1 bg-white hover:bg-slate-200 rounded-full transition-[background-color] duration-300 ease-linear">
				<span class="sr-only">Next image</span>
				<?php echo icon('arrow-right', 'stroke-1 size-12 pointer-events-none', ['aria-hidden' => 'true']); ?>
			</button>
		</div>
	</div>

	<?php testimonial(testimonials()[0], 'max-w-5xl px-12'); ?>
</section>
