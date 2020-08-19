<template>
	<div class="e-container">
		<section
			:class="[
				'my-32 w-3/4 mx-auto',
				'md:flex items-center',
			]"
		>
			<div
				:class="[
					'md:mr-2',
				]"
			>
				<div
					v-for="(item, index) in $props.itemsLeft"
					:key="index"
				>
					<img
						:class="[
							'mx-auto w-full mb-4',
						]"
						:src="item.image.src"
						:alt="item.image.alt"
					>
				</div>
			</div>

			<div
				:class="[
					'md:ml-2',
				]"
			>
				<div
					v-for="(item, index) in $props.itemsRight"
					:key="index"
				>
					<img
						:class="[
							'mx-auto w-full',
						]"
						:src="item.image.src"
						:alt="item.image.alt"
					>
				</div>
			</div>
		</section>
	</div>
</template>

<script>
	export default {
		props: {
			itemsLeft: {
				type: Array,
				default: null,
			},

			itemsRight: {
				type: Array,
				default: null,
			},
		},
	};
</script>
