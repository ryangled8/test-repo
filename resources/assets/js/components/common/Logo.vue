<template>
	<placeholder
		class="pt-logo"
	>
		<img
			:src="cUrl"
			alt="Brand Logo"
		>
	</placeholder>
</template>

<script>
	export default {
		props: {
			dark: Boolean,
		},

		computed: {
			cUrl() {
				const base = '/static/img/branding/';

				const type = this.$props.dark
					? 'logo-dark.png'
					: 'logo.png';

				return `${base}${type}`;
			},
		},
	};
</script>
