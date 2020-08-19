<template>
	<div class="e-container">
		<section
			:class="[
				'w-3/4 mx-auto my-32 text-brand-blue-dark',
				'md:flex md:w-full',
				'lg:w-3/4',
			]"
		>
			<h1 class="sr-only">
				Welcoming you back to our home
			</h1>

			<aside
				:class="[
					'w-1/2 text-left pr-10 pt-2 mb-6',
					'md:text-right md:mb-0',
				]"
			>
				<h1
					:class="[
						'font-bold text-xs',
					]"
					v-text="$props.author"
				/>

				<p
					:class="[
						'text-xs opacity-50',
					]"
					v-text="$props.date"
				/>
			</aside>

			<aside
				:class="[
					'w-full',
				]"
			>
				<h1
					:class="[
						'text-6xl w-full leading-tight',
						'md:w-3/4',
					]"
					v-text="$props.title"
				/>

				<h2
					:class="[
						'text-xxs uppercase tracking-wide pb-8 pt-4 font-bold',
						'text-brand-primary',
					]"
					v-text="$props.subtitle"
				/>

				<p
					:class="[
						'opacity-50 leading-loose w-full text-sm mb-8',
						'md:w-3/4',
					]"
					v-text="$props.content"
				/>

				<a
					:class="[
						'text-xs text-brand-primary font-bold',
					]"
					:href="$props.link.url"
					v-text="$props.link.title"
				/>
			</aside>
		</section>
	</div>
</template>

<script>
	export default {
		props: {
			title: {
				type: String,
				default: null,
			},

			subtitle: {
				type: String,
				default: null,
			},

			content: {
				type: String,
				default: null,
			},

			author: {
				type: String,
				default: null,
			},

			date: {
				type: String,
				default: null,
			},

			link: {
				type: Object,
				default: null,
			},
		},
	};
</script>
