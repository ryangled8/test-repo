<template>
	<div>
		<overlay
			v-if="$root.$data.overlay"
			v-bind="$props.siteHeader"
		/>

		<site-header
			v-bind="$props.siteHeader"
		/>

		<site-footer
			v-bind="$props.siteFooter"
		/>
	</div>
</template>

<script>
	import SiteHeader from './SiteHeader';
	import SiteFooter from './SiteFooter';
	import Overlay from './Overlay';

	export default {
		components: {
			SiteHeader,
			SiteFooter,
			Overlay,
		},

		props: {
			siteHeader: {
				type: Object,
				default: null,
			},
			siteFooter: {
				type: Object,
				default: null,
			},
		},
	};
</script>
