<template>
	<header>
		<nav
			:class="[
				'w-full px-10 pt-8',
				'flex justify-between mx-auto items-center',
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
					<logo dark />
				</a>
			</div>

			<div
				:class="[
					'flex items-center',
				]"
			>
				<ul
					:class="[
						'hidden md:flex',
					]"
				>
					<li
						v-for="(item , index) in $props.nav"
						:key="index"
					>
						<a
							:class="[
								'mx-10 no-underline',
							]"
							:href="item.url"
							v-text="item.title"
						/>
					</li>
				</ul>

				<div
					:class="[
						'mx-auto max-w-logo',
						'md:mx-0',
					]"
				>
					<button
						@click="$root.$data.overlay = true"
					>
						<icon
							:class="[
								'e-h3 ml-8',
							]"
							name="hamburger"
						/>
					</button>
				</div>
			</div>
		</nav>
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
		},
	};
</script>
