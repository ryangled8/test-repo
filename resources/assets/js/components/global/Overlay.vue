<template>
	<div>
		<div
			:class="[
				'z-site-overlay absolute w-full h-full max-w-screen max-h-screen',
				'top-0 left-0 bg-brand-blue-dark',
			]"
		>
			<nav
				:class="[
					'w-full px-10 pt-8',
					'flex justify-between mx-auto items-center',
					'lg:max-w-screen-xl',
				]"
			>
				<div
					:class="[
						'w-full max-w-logo',
						'md:mx-0',
					]"
				>
					<a
						:href="$props.home"
					>
						<logo />
					</a>
				</div>

				<div
					:class="[
						'flex items-center',
					]"
				>
					<div
						:class="[
							'mx-auto max-w-logo z-site-overlay',
							'md:mx-0',
						]"
					>
						<button
							@click="$root.$data.overlay = false"
						>
							<icon
								:class="[
									'e-h3 ml-8',
								]"
								name="close"
							/>
						</button>
					</div>
				</div>
			</nav>

			<div
				:class="[
					'w-full h-full absolute top-0',
					'flex items-center justify-center',
				]"
			>
				<div
					:class="[
						'w-full',
						'md:w-1/2',
						'lg:max-w-screen-sm',
					]"
				>
					<div
						:class="[
							'text-white text-center',
							'md:flex md:items-center md:justify-between md:text-left',
						]"
					>
						<ul
							:class="[
								'mb-10',
								'md:mb-0',
							]"
						>
							<li
								v-for="(item , index) in $props.secondaryNav"
								:key="index"
								class="md:py-2"
							>
								<a
									:class="[
										'text-xl mx-10 no-underline text-white',
										'md:text-4xl',
									]"
									:href="item.url"
									v-text="item.title"
								/>
							</li>
						</ul>

						<div
							:class="[
								'block',
							]"
						>
							<div
								v-for="(item , index) in $props.navAddress"
								:key="index"
							>
								<p
									:class="[
										'text-sm opacity-25',
										'md:text-base',
									]"
									v-text="item.title"
								/>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	import Logo from '../common/Logo';

	export default {
		components: {
			Logo,
		},

		props: {
			home: {
				type: String,
				default: '/',
			},

			nav: {
				type: Array,
				default: null,
			},

			secondaryNav: {
				type: Array,
				default: null,
			},

			navAddress: {
				type: Array,
				default: null,
			},
		},
	};
</script>
