<?php
?>

<section id="pricing" class="full-section text-slate-300">
	<div>
		<h2 class="mb-16 text-center text-white font-heading text-2xl lg:text-5xl font-bold tracking-tight">
			Hire an experienced web developer
		</h2>

		<div class="grid gap-12 sm:grid-cols-2 rounded-xl">
			<div class="p-6 pb-3 md:p-12 md:pb-8 bg-indigo-800 rounded-lg font-light">
				<h4 class="mb-3 font-bold text-slate-400">Subscription</h4>

				<h3 class="mb-12 text-2xl font-bold font-heading text-slate-200">
					Do you have an ongoing project and need help with solving issues?
				</h3>

				<p class="mb-4">
					Subscribe to a monthly plan and let's get to work!
				</p>

				<ul class="mb-3">
					<li class="flex items-center space-x-2">
						<?php echo icon('square-check-big', 'size-4 stroke-1 text-white'); ?>
						<span>Solving your issues for a month at a time</span>
					</li>
					<li class="flex items-center space-x-2">
						<?php echo icon('square-check-big', 'size-4 stroke-1 text-white'); ?>
						<span>Good choice when you need help with solving issues</span>
					</li>
				</ul>
				<ul>
					<li class="flex items-center space-x-2">
						<?php echo icon('square-check-big', 'size-4 stroke-1 text-white'); ?>
						<span>Pay by credit card or bank transfer</span>
					</li>
					<li class="flex items-center space-x-2">
						<?php echo icon('square-check-big', 'size-4 stroke-1 text-white'); ?>
						<span>Pause or cancel any time</span>
					</li>
				</ul>

				<p class="mb-12">
				</p>

				<button class="button bg-white hover:bg-indigo-300 border-none flex items-center space-x-2">
					<?php echo icon('square-arrow-up-right', 'size-6 text-orange-800'); ?>
					<span>Get Started for €2,400 per month</span>
				</button>
			</div>

			<div class="p-6 pb-3 md:p-12 md:pb-8 bg-orange-800 rounded-lg font-light">
				<h4 class="mb-3 font-bold text-slate-400">One-time payment</h4>

				<h3 class="mb-12 text-2xl font-bold font-heading text-slate-200">
					Do you have a new shiny idea in mind and want to bring it to life?
				</h3>

				<p class="mb-4">
					Get in touch and let's make your dream come true!
				</p>

				<ul class="mb-3">
					<li class="flex items-center space-x-2">
						<?php echo icon('square-check-big', 'size-4 stroke-1 text-white'); ?>
						<span>Bringing your idea to life</span>
					</li>
					<li class="flex items-center space-x-2">
						<?php echo icon('square-check-big', 'size-4 stroke-1 text-white'); ?>
						<span>Good choice when you want to start a new project</span>
					</li>
				</ul>
				<ul>
					<li class="flex items-center space-x-2">
						<?php echo icon('square-check-big', 'size-4 stroke-1 text-white'); ?>
						<span>Please send me details of your project</span>
					</li>
					<li class="flex items-center space-x-2">
						<?php echo icon('square-check-big', 'size-4 stroke-1 text-white'); ?>
						<span>I'll get back to you in a matter of hours, not days or weeks</span>
					</li>
				</ul>

				<p class="mb-12">
				</p>

				<button class="button hover:bg-orange-300 flex items-center space-x-2">
					<?php echo icon('square-arrow-up-right', 'size-6 text-indigo-800'); ?>
					<span>Get in touch for a quote</span>
				</button>
			</div>
		</div>

		<div class="mt-16 lg:mt-32 grid gap-12 sm:grid-cols-2 rounded-xl">
			<div>
				<h3 class="pt-6 mb-8 text-2xl lg:text-3xl font-heading font-bold tracking-tight">
					Frequently Asked Questions
				</h3>

				<div class="font-light">
					<div>
						<span class="block font-bold font-heading text-white">
							Can't find the answer you're looking for or want to talk to me first?
						</span>

						<span>
							Learn more about how I work and how I can help you with your project
						</span>
					</div>

					<button class="button mt-3 hover:bg-slate-300 uppercase text-xs">
						Get in touch
					</button>
				</div>
			</div>

			<div>
				<?php foreach (faqs() as $key => $faq) { ?>
					<details class="group marker:content-[''] border-b border-slate-500/40">
						<summary class="cursor-pointer py-6 flex items-center justify-between">
							<span class="grow pr-4 font-bold">
								<?php echo $faq; ?>
							</span>

							<?php echo icon('square-plus', 'stroke-[0.5px] shrink-0 block group-open:hidden size-6 text-slate-500'); ?>
							<?php echo icon('square-minus', 'stroke-[0.5px] shrink-0 hidden group-open:block size-6 text-slate-500'); ?>
						</summary>

						<div class="pb-6 text-slate-300 font-light">
							<?php include BASE_PATH."/resources/views/data/faq/$key.php"; ?>
						</div>
					</details>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
