<template>
	<div class="e-container">
		<section class="my-32">
			<div class="w-3/4 mx-auto">
				<h1
					:class="[
						'text-3xl leading-tight mb-8',
						'md:w-full',
					]"
					v-text="$props.title"
				/>

				<div
					:class="[
						'grid grid-cols-1 gap-6',
						'md:grid-cols-2',
						'lg:grid-cols-3',
					]"
				>
					<div
						v-for="(item, index) in $props.items"
						:key="index"
						:class="[
							'flex items-center',
						]"
					>
						<img
							:class="[
								'mr-4 w-8',
							]"
							:src="item.image.src"
							:alt="item.image.alt"
						>

						<p
							:class="[
								'text-brand-primary text-xxs uppercase font-bold tracking-wide',
							]"
							v-text="item.title"
						/>
					</div>
				</div>
			</div>
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

			items: {
				type: Array,
				default: null,
			},
		},
	};
</script>
