<template>
	<div class="e-container">
		<section
			:class="[
				'w-3/4 mx-auto my-32 text-brand-blue-dark',
				'md:flex md:w-full',
				'lg:w-3/4',
			]"
		>
			<aside
				:class="[
					'w-full text-left pr-10 mb-6',
					'md:text-right md:mb-0 md:w-1/2',
				]"
			>
				<h1
					:class="[
						'font-bold text-2xl text-brand-blue',
						'md:w-full',
					]"
					v-text="$props.title"
				/>
			</aside>

			<aside
				:class="[
					'w-full',
				]"
			>
				<p
					:class="[
						'opacity-50 leading-loose w-full text-sm mb-8',
					]"
					v-html="$props.content"
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

			content: {
				type: String,
				default: null,
			},
		},
	};
</script>
