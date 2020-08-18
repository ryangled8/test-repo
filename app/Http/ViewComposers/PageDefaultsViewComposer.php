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
						'title' => 'Reservations',
						'url' => route('templates.show', 'food'),
					],
					[
						'title' => '0113 123 123',
						'url' => route('templates.show', 'drink'),
					],
				],
				'secondary-nav' => [
					[
						'title' => 'Our menus',
						'url' => route('templates.show', 'food'),
					],
					[
						'title' => 'Events',
						'url' => route('templates.show', 'drink'),
					],
					[
						'title' => 'Reservations',
						'url' => route('templates.show', 'food'),
					],
					[
						'title' => 'Contact',
						'url' => route('templates.show', 'drink'),
					],
				],
				'nav-address' => [
					[
						'title' => 'Company name',
					],
					[
						'title' => 'Room 101, Floor 2',
					],
					[
						'title' => 'Leeds',
					],
					[
						'title' => 'LS6 123',
					],
					[
						'title' => '0113 123 123',
					],
				],
			],
			'site_footer' => [
				'nav' => [
					[
						'title' => 'Shop',
						'url' => route('templates.show', 'food'),
					],
					[
						'title' => 'News',
						'url' => route('templates.show', 'drink'),
					],
					[
						'title' => 'About',
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
