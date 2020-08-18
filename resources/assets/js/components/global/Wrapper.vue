<template>
	<div>
		<overlay
			v-if="$root.$data.overlay"
			v-bind="$props.siteHeader"
		/>

		<site-header
			v-bind="$props.siteHeader"
		/>

		<main
			:class="[
				'flex-auto z-site-content',
			]"
		>
			<page-builder
				v-if="$props.pageBuilder.length"
				:components="$props.pageBuilder"
			/>
		</main>

		<site-footer
			v-bind="$props.siteFooter"
		/>
	</div>
</template>

<script>
	import SiteHeader from './SiteHeader';
	import SiteFooter from './SiteFooter';
	import Overlay from './Overlay';
	import PageBuilder from './PageBuilder';

	export default {
		components: {
			SiteHeader,
			SiteFooter,
			Overlay,
			PageBuilder,
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

			pageBuilder: {
				type: Array,
				default: null,
			},
		},
	};
</script>
