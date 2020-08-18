<template>
	<div>
		<section
			v-for="(item, index) in $props.items"
			:key="index"
			class="my-32"
		>
			<div>
				<img
					class="mx-auto"
					:src="item.image.src"
					:alt="item.image.alt"
				>
			</div>
		</section>
	</div>
</template>

<script>
	export default {
		props: {
			test: {
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
