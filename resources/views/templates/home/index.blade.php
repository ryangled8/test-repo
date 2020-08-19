@extends('app/page/index', [
	'model' => [
		//
		'page-builder' => [
			[
				'type' => 'intro',
				'value' => [
					'title' => 'Welcoming you back to our home',
					'subtitle' => 'Read how we have ensured maximum cleanliness',
					'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos quaerat alias labore delectus minus excepturi totam veniam laborum dolore consectetur culpa, nam eius. Tempore modi deleniti earum, sint laudantium molestias.',
					'author' => 'Ryan Gledhill, Owner',
					'date' => '10 August 2020',
					'link' => [
						'title' => 'Read more',
						'url' => '/',
					],
				],
			],
			[
				'type' => 'ImageGallery',
				'value' => [
					'items' => [
						[
							'image' => [
								'src' => 'https://via.placeholder.com/1500x800',
								'alt' => 'alt text',
							],
						],
					],
				],
			],
			[
				'type' => 'SplitText',
				'value' => [
					'title' => '"Quos quaerat alias labore delectus minus excepturi totam veniam laborum dolore consectetur culpa, nam eius. Tempore modi"',
					'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos quaerat alias labore delectus minus excepturi totam veniam laborum dolore consectetur culpa, nam eius. Tempore modi deleniti earum, sint laudantium molestias excepturi totam veniam laborum dolore consectetur culpa, nam eius. Tempore modi deleniti earum, sint laudantium molestias adipisicing elit. Quos quaerat alias labore delectus minus excepturi totam veniam laborum dolore consectetur culpa, nam eius.<br><br>
					Sit amet consectetur adipisicing elit. Quos quaerat alias labore delectus minus, nam eius. Tempore modi deleniti earum, sint laudantium molestias.
					<br><br>
					Excepturi totam veniam laborum dolore consectetur culpa, nam eius. Tempore modi deleniti earum, sint laudantium molestias adipisicing elit. Quos quaerat alias labore delectus minus excepturi totam veniam laborum dolore consectetur culpa, nam eius.',
					'link' => [
						'title' => 'Read more',
						'url' => '/',
					],
				],
			],
			[
				'type' => 'SplitImage',
				'value' => [
					'title' => 'A beautifully restored building in the countryside',
					'subtitle' => 'escape to the countryside',
					'tag' => 'featured property',
					'cta-gallery' => [
						'title' => 'View gallery',
						'url' => '/',
					],
					'cta-book' => [
						'title' => 'Book your stay',
						'url' => '/',
					],
					'left-image' => [
						'src' => 'https://via.placeholder.com/800x600',
						'alt' => 'alt text',
					],
					'right-image' => [
						'src' => 'https://via.placeholder.com/600x600',
						'alt' => 'alt text',
					],
				],
			],
			[
				'type' => 'Amenities',
				'value' => [
					'title' => 'Amenities',
					'items' => [
						[
							'title' => 'Lift',
							'image' => [
								'src' => 'https://image.flaticon.com/icons/svg/899/899061.svg',
								'alt' => 'alt text',
							],
						],
						[
							'title' => 'Wifi',
							'image' => [
								'src' => 'https://image.flaticon.com/icons/svg/1076/1076745.svg',
								'alt' => 'alt text',
							],
						],
						[
							'title' => 'Kitchen',
							'image' => [
								'src' => 'https://image.flaticon.com/icons/svg/1076/1076745.svg',
								'alt' => 'alt text',
							],
						],
						[
							'title' => 'Dryer',
							'image' => [
								'src' => 'https://image.flaticon.com/icons/svg/899/899061.svg',
								'alt' => 'alt text',
							],
						],
						[
							'title' => 'Hair dryer',
							'image' => [
								'src' => 'https://image.flaticon.com/icons/svg/1076/1076745.svg',
								'alt' => 'alt text',
							],
						],
						[
							'title' => 'Iron',
							'image' => [
								'src' => 'https://image.flaticon.com/icons/svg/1609/1609177.svg',
								'alt' => 'alt text',
							],
						],
						[
							'title' => 'TV',
							'image' => [
								'src' => 'https://image.flaticon.com/icons/svg/1609/1609177.svg',
								'alt' => 'alt text',
							],
						],
						[
							'title' => 'Fireplace',
							'image' => [
								'src' => 'https://image.flaticon.com/icons/svg/1609/1609177.svg',
								'alt' => 'alt text',
							],
						],
						[
							'title' => 'Breakfast included',
							'image' => [
								'src' => 'https://image.flaticon.com/icons/svg/899/899061.svg',
								'alt' => 'alt text',
							],
						],
						[
							'title' => 'On site rental car',
							'image' => [
								'src' => 'https://image.flaticon.com/icons/svg/1609/1609177.svg',
								'alt' => 'alt text',
							],
						],
						[
							'title' => 'Pet friendly',
							'image' => [
								'src' => 'https://image.flaticon.com/icons/svg/899/899061.svg',
								'alt' => 'alt text',
							],
						],
					],
				],
			],
			[
				'type' => 'ImageGrid',
				'value' => [
					'items-left' => [
						[
							'image' => [
								'src' => 'https://via.placeholder.com/450x450',
								'alt' => 'image alt text',
							],
						],
						[
							'image' => [
								'src' => 'https://via.placeholder.com/450x450',
								'alt' => 'image alt text',
							],
						],
					],
					'items-right' => [
						[
							'image' => [
								'src' => 'https://via.placeholder.com/450x450',
								'alt' => 'image alt text',
							],
						],
					],
				],
			],
		],
	],
])
