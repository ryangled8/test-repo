<template>
	<component
		:is="cElement"
		:class="[
			'e-button',
			`e-button--${$props.type}`,
			$props.icon
				? 'pl-10 pr-8'
				: 'px-10',
		]"
		:href="$props.url"
	>
		<span
			class="uppercase tracking-wide"
			v-html="$props.title"
		/>
		<icon
			v-if="$props.icon"
			class="ml-4"
			:name="$props.icon"
		/>
	</component>
</template>

<script>
	export default {
		props: {
			title: {
				type: String,
				required: true,
			},

			url: {
				type: String,
				default: null,
			},

			type: {
				type: String,
				default: 'primary',
			},

			icon: {
				type: String,
				default: null,
			},

		},

		computed: {
			cElement() {
				return this.$props.url ? 'a' : 'button';
			},
		},
	};
</script>
