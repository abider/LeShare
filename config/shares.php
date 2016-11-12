<?php

return [

    /*
    |--------------------------------------------------------------------------
    | posts 页面相关格式参数设置
    |--------------------------------------------------------------------------
    */

	'topics' => [
		'list' => [
			'prePage' => 10,
			'fields'  => [
				'id',
				'title',
				'updated_at as time'
			],
		],
		'show' => [
			'fields'  => [
				'id',
				'title',
				'updated_at as time',
				'body as content'
			],
		],
	],
	'users' => [
		'me' => [
			'fields' => [
				'name as username',
				'mobile as tel',
				'verified as is_login'
			],
		],
	],
];