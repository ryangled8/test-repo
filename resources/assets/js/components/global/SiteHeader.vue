<template>
	<header>
		<nav
			:class="[
				'e-container',
				'md:flex md:justify-between md:items-center',
			]"
		>
			<div
				:class="[
					'w-full py-4 bg-brand-white',
					'md:w-1/2 md:py-8 md:pl-16',
				]"
			>
				<h1
					:class="[
						'mx-auto w-full max-w-logo',
						'md:mx-0',
					]"
				>
					<a :href="$props.home">
						<logo dark />
					</a>
				</h1>
			</div>

			<div
				:class="[
					'w-full',
					'md:w-1/2 md:pr-8',
					'lg:pr-4',
				]"
			>
				<ul
					:class="[
						'flex justify-center py-10 text-sm font-heading',
						'md:justify-end md:py-0',
					]"
				>
					<li
						v-for="(item , index) in $props.nav"
						:key="index"
						:class="[
							'mx-4',
							'md:ml-8 md:mx-0',
							'lg:ml-16',
						]"
					>
						<a
							:class="[
								'inline-flex items-center justify-center',
								'no-underline',
							]"
							:href="item.url"
							v-text="item.title"
						/>
					</li>
				</ul>
			</div>
		</nav>
		<!-- Nav end -->

		<div
			:class="[
				'e-container',
				'md:flex md:justify-between md:h-auto',
				'lg:h-screen',
			]"
		>
			<div
				:class="[
					'w-full px-10 py-20 bg-brand-white',
					'md:w-1/2 md:py-4 md:pl-16 md:flex md:items-center',
				]"
			>
				<div>
					<h1
						:class="[
							'text-5xl font-heading text-brand-green',
							'md:text-5xl',
							'lg:text-6xl',
						]"
						v-html="$props.bannerHeading"
					/>

					<p
						:class="[
							'font-hairline w-3/4 font-body text-brand-black mt-4',
						]"
						v-html="$props.bannerSubHeading"
					/>

					<button
						:class="[
							'e-button mt-10',
							'md:mt-20',
						]"
					>
						Book your table
					</button>
				</div>
			</div>

			<div
				:class="[
					'w-full shadow',
					'md:w-1/2 md:pl-8 md:flex md:items-center',
					'lg:pl-16',
				]"
			>
				<div>
					<img
						:src="$props.bannerImage.src"
					>
				</div>
			</div>
		</div>
	</header>
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

			bannerHeading: {
				type: String,
				default: '/',
			},

			bannerSubHeading: {
				type: String,
				default: '/',
			},

			bannerImage: {
				type: Object,
				default: null,
			},
			// banner: {
			// 	type: Array,
			// 	default: null,
			// },
		},
	};
</script>
