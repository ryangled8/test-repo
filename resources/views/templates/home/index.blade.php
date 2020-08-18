@extends('app/page/index', [
	'model' => [
		//
		'page-builder' => [
			[
				'type' => 'intro',
				'value' => [
					'title' => 'Welcoming you back to our home.',
					'subtitle' => 'Read how we have ensured maximum cleanliness.',
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
		],
	],
])
