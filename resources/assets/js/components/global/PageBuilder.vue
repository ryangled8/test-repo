<template>
	<div>
		<div
			v-for="(component, index) in $props.components"
			:key="index"
		>
			<component
				:is="pascalCase(component.type)"
				v-if="$options.components[pascalCase(component.type)]"
				v-bind="component.value"
			/>
			<div
				v-else
				class="border border-blue p-5 overflow-scroll"
			>
				<span>component: {{ component.type }}</span>
				<div class="mt-4">
					<pre v-text="component.value" />
				</div>
			</div>
		</div>
	</div>
</template>
<script>
	import camelCase from 'lodash/camelCase';
	import upperFirst from 'lodash/upperFirst';

	import Intro from '../builder/Intro';
	import ImageGallery from '../builder/ImageGallery';
	import SplitText from '../builder/SplitText';

	export default {
		components: {
			Intro,
			ImageGallery,
			SplitText,
		},

		props: {
			components: {
				type: Array,
				default: null,
			},
		},

		methods: {
			pascalCase(name) {
				return upperFirst(camelCase(name));
			},
		},
	};
</script>
