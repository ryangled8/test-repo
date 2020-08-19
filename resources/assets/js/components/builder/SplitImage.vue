<template>
	<div>
		<section
			:class="[
				'my-32',
				'md:flex md:items-center',
			]"
		>
			<h1 class="sr-only">
				Featured component
			</h1>

			<aside class="md:mr-2 relative">
				<div>
					<img
						:src="$props.leftImage.src"
						:alt="$props.leftImage.alt"
					>
				</div>

				<div
					:class="[
						'absolute bottom-0 pl-20 pb-40',
					]"
				>
					<h1
						:class="[
							'text-xxs uppercase tracking-wide pb-6 font-bold',
							'text-brand-blue',
						]"
						v-html="$props.subtitle"
					/>

					<h1
						:class="[
							'text-3xl w-3/4 leading-tight',
							'md:w-full',
						]"
						v-html="$props.title"
					/>
				</div>

				<div
					:class="[
						'absolute bottom-0 right-0 py-6 px-20 bg-white',
					]"
				>
					<a
						:class="[
							'text-xxs text-brand-black no-underline uppercase tracking-wide font-bold',
						]"
						:href="$props.ctaGallery.url"
						v-text="$props.ctaGallery.title"
					/>
				</div>
			</aside>

			<aside class="md:ml-2 relative">
				<div>
					<img
						:class="[
							'mx-auto w-full mt-5',
							'md:mt-0',
						]"
						:src="$props.rightImage.src"
						:alt="$props.rightImage.alt"
					>
				</div>

				<div
					:class="[
						'absolute top-0 right-0 py-6 px-20 bg-white',
					]"
				>
					<a
						:class="[
							'text-xxs text-brand-black no-underline uppercase tracking-wide font-bold',
						]"
						:href="$props.tag"
						v-text="$props.tag"
					/>
				</div>

				<div
					:class="[
						'absolute bottom-0 left-0 py-6 px-20 bg-white',
					]"
				>
					<a
						:class="[
							'text-xxs text-brand-black no-underline uppercase tracking-wide font-bold',
						]"
						:href="$props.ctaBook.url"
						v-text="$props.ctaBook.title"
					/>
				</div>
			</aside>
		</section>
	</div>
</template>

<script>
	export default {
		props: {
			title: {
				type: String,
				default: null,
			},

			subtitle: {
				type: String,
				default: null,
			},

			tag: {
				type: String,
				default: null,
			},

			ctaGallery: {
				type: String,
				default: null,
			},

			ctaBook: {
				type: String,
				default: null,
			},

			leftImage: {
				type: Object,
				default: null,
			},

			rightImage: {
				type: Object,
				default: null,
			},
		},
	};
</script>
