<?php
?>

<section id="pricing" class="section">

	<div>
		<h2 class="mb-12 lg:mb-24 text-center font-heading text-2xl lg:text-5xl font-bold tracking-tight">
			Hire an experienced web developer
		</h2>

		<div class="grid gap-12 sm:grid-cols-2 rounded-xl text-slate-300">
			<div class="p-6 md:p-12 md:pb-8 bg-indigo-800 rounded-lg font-light">
				<h4 class="mb-3 font-bold text-slate-200 bg-slate-800 px-3 max-w-max rounded">Subscription</h4>

				<h3 class="mb-12 text-2xl font-bold font-heading text-slate-200">
					Do you have an ongoing project and need help with solving issues?
				</h3>

				<p class="mb-4">
					Subscribe to a monthly plan and let's get to work!
				</p>

				<ul class="mb-3">
					<li class="flex items-center space-x-2">
						<?php echo icon('square-check-big', 'size-4 stroke-1', ['aria-hidden' => 'true']); ?>
						<span>Solving your issues for a month at a time</span>
					</li>
					<li class="flex items-center space-x-2">
						<?php echo icon('square-check-big', 'size-4 stroke-1', ['aria-hidden' => 'true']); ?>
						<span>Good choice when you need help with solving issues</span>
					</li>
				</ul>
				<ul>
					<li class="flex items-center space-x-2">
						<?php echo icon('square-check-big', 'size-4 stroke-1', ['aria-hidden' => 'true']); ?>
						<span>Pay by credit card or bank transfer</span>
					</li>
					<li class="flex items-center space-x-2">
						<?php echo icon('square-check-big', 'size-4 stroke-1', ['aria-hidden' => 'true']); ?>
						<span>Pause or cancel any time</span>
					</li>
				</ul>

				<p class="my-12 text-xl font-bold text-white flex items-center space-x-2">
					<?php echo icon('gem', 'size-4', ['aria-hidden' => 'true']); ?>
					<span>€2,400 per month</span>
				</p>

				<a href="#contact" class="button bg-white hover:bg-indigo-300 border-none inline-flex items-center space-x-2">
					<?php echo icon('square-arrow-up-right', 'size-6 shrink-0 text-orange-800', ['aria-hidden' => 'true']); ?>
					<span>Get Started</span>
				</a>
			</div>

			<div class="p-6 md:p-12 md:pb-8 bg-orange-800 rounded-lg font-light">
				<h4 class="mb-3 font-bold text-slate-200 bg-slate-800 px-3 max-w-max rounded">One-time payment</h4>

				<h3 class="mb-12 text-2xl font-bold font-heading text-slate-200">
					Do you have a new shiny idea in mind and want to bring it to life?
				</h3>

				<p class="mb-4">
					Get in touch and let's make your dream come true!
				</p>

				<ul class="mb-3">
					<li class="flex items-center space-x-2">
						<?php echo icon('square-check-big', 'size-4 stroke-1', ['aria-hidden' => 'true']); ?>
						<span>Bringing your idea to life</span>
					</li>
					<li class="flex items-center space-x-2">
						<?php echo icon('square-check-big', 'size-4 stroke-1', ['aria-hidden' => 'true']); ?>
						<span>Good choice when you want to start a new project</span>
					</li>
				</ul>
				<ul>
					<li class="flex items-center space-x-2">
						<?php echo icon('square-check-big', 'size-4 stroke-1', ['aria-hidden' => 'true']); ?>
						<span>Please send me details of your project</span>
					</li>
					<li class="flex items-center space-x-2">
						<?php echo icon('square-check-big', 'size-4 stroke-1', ['aria-hidden' => 'true']); ?>
						<span>I'll get back to you in a matter of hours, not days or weeks</span>
					</li>
				</ul>

				<p class="my-12 text-xl font-bold text-white flex items-center space-x-2">
					<?php echo icon('gem', 'size-4', ['aria-hidden' => 'true']); ?>
					<span>Get in touch for a quote</span>
				</p>

				<a href="#contact" class="button hover:bg-orange-300 inline-flex items-center space-x-2">
					<?php echo icon('square-arrow-up-right', 'size-6 shrink-0 text-indigo-800', ['aria-hidden' => 'true']); ?>
					<span>Get Started</span>
				</a>
			</div>
		</div>

		<div class="mt-16 lg:mt-32 grid gap-12 sm:grid-cols-2 rounded-xl">
			<div>
				<h3 class="pt-6 mb-8 text-2xl lg:text-3xl font-heading font-bold tracking-tight">
					Frequently Asked Questions
				</h3>

				<div class="font-light">
					<div>
						<span class="block font-bold font-heading">
							Can't find the answer you're looking for or want to talk to me first?
						</span>

						<span>
							Learn more about how I work and how I can help you with your project
						</span>
					</div>

					<a href="#contact" class="button inline-block mt-3 hover:bg-slate-300 uppercase text-xs">
						Get in touch
					</a>
				</div>
			</div>

			<div>
				<?php foreach (faqs() as $key => $faq) { ?>
					<details class="group marker:content-[''] border-b border-slate-500/40">
						<summary class="cursor-pointer py-6 flex items-center justify-between">
							<span class="grow pr-4 font-bold">
								<?php echo $faq; ?>
							</span>

							<?php echo icon('square-plus', 'stroke-[0.5px] shrink-0 block group-open:hidden size-6 text-slate-800', ['aria-hidden' => 'true']); ?>
							<?php echo icon('square-minus', 'stroke-[0.5px] shrink-0 hidden group-open:block size-6 text-slate-800', ['aria-hidden' => 'true']); ?>
						</summary>

						<div class="pb-6 pr-6 font-light">
							<?php include BASE_PATH."/resources/views/data/faq/$key.php"; ?>
						</div>
					</details>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
