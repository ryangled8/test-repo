<?php

namespace App\Http\ViewComposers;

use Engage\LaravelFrontend\PageDefaultsViewComposer as BaseViewComposer;

class PageDefaultsViewComposer extends BaseViewComposer
{
/**
 * Returns developer-defined application default variables.
 *
 * @return array
 */
	protected function app(): array
	{
		return [
			'page' => [
				'title' => trans('meta.default.title'),
				'description' => trans('meta.default.description'),
				'site_name' => 'Site Name',
				'social_image' => asset('/static/img/meta/share.png'),
				'url' => url()->current(),
				'creator_twitter_handle' => '@author_handle',
				'site_twitter_handle' => '@site_handle',
				'share_title' => trans('meta.default.share_title'),
				'share_description' => trans('meta.default.share_description'),
				'type' => 'article',
				'js' => [
					'sprite' => (string) mix('/compiled/img/sprite.svg'),
				],
			],
			'links' => [
				'home' => route('home.show'),
			],
		];
	}

	/**
	 * Returns developer-defined frontend default variables.
	 *
	 * @return array
	 */
	protected function templates(): array
	{
		return [
			'links' => [
				'home' => route('templates.show', 'home/index'),
			],
			'site_header' => [
				'home' => route('templates.show', 'home/index'),
				'nav' => [
					[
						'title' => 'Food',
						'url' => route('templates.show', 'food'),
					],
					[
						'title' => 'Drink',
						'url' => route('templates.show', 'drink'),
					],
					[
						'title' => 'Book',
						'url' => route('templates.show', 'book'),
					],
					[
						'title' => 'Contact',
						'url' => route('templates.show', 'contact'),
					],
				],
				'bannerHeading' => 'Welcome to <br> The Black Horse',
				'bannerSubHeading' => 'Supporting the local suppliers by using their high qulaity, fresh produce.',
				'bannerImage' => [
					// 'src' => 'https://images.pexels.com/photos/704982/pexels-photo-704982.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260',
					'src' => 'https://images.pexels.com/photos/1528013/pexels-photo-1528013.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260',
					'url' => '',
				],
				// 'banner' => [
				// 	[
				// 		'image' => [
				// 			'src' => 'https://dummyimage.com/600x600',
				// 			'alt' => 'Alt text',
				// 		],
				// 		'title' => 'Welcome to The Black horse',
				// 		'subTitle' => 'Sourcing and preparing the finest local products.',
				// 	],
				// ],
			],
			'site_footer' => [
				'title' => 'Shop',
				'nav' => [
					[
						'title' => 'Food',
						'url' => route('templates.show', 'food'),
					],
					[
						'title' => 'Drink',
						'url' => route('templates.show', 'drink'),
					],
					[
						'title' => 'Book',
						'url' => route('templates.show', 'book'),
					],
					[
						'title' => 'Contact',
						'url' => route('templates.show', 'contact'),
					],
				],
			],
		];
	}
}
