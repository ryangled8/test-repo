<template>
	<footer
		:class="[
			'mt-32 w-full bg-brand-blue-dark',
		]"
	>
		<div
			:class="[
				'color-white py-32 w-3/4 mx-auto text-center',
				'md:flex md:justify-between md:items-center md:text-left',
			]"
		>
			<div
				:class="[
					'mx-auto w-full max-w-logo mb-10',
					'md:mx-0 md:mb-0',
				]"
			>
				<a
					:href="$props.home"
				>
					<logo />
				</a>
			</div>

			<div>
				<ul>
					<li
						v-for="(item, index) in $props.nav"
						:key="index"
						:class="[
							'my-2',
						]"
					>
						<a
							:class="[
								'text-white no-underline text-base',
								'hover:underline',
							]"
							:href="item.url"
							v-text="item.title"
						/>
					</li>
				</ul>
			</div>

			<div>
				<ul>
					<li
						v-for="(item, index) in $props.nav"
						:key="index"
						:class="[
							'my-2',
						]"
					>
						<a
							:class="[
								'text-white no-underline text-base',
								'hover:underline',
							]"
							:href="item.url"
							v-text="item.title"
						/>
					</li>
				</ul>
			</div>
		</div>
	</footer>
</template>

<script>
	import Logo from '../common/Logo';

	export default {
		components: {
			Logo,
		},

		props: {
			nav: {
				type: Array,
				default: null,
			},
		},
	};
</script>
