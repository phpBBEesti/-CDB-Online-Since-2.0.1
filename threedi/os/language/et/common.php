<?php
/**
 *
 * Online Since. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2005 - 2019, 3Di, https://www.phpbbstudio.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Estonian translation by phpBBestonia.eu <https://www.phpbbestonia.eu> [Exabot @ 2019]
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// Some characters you may want to copy&paste:
// ’ » “ ” …

$lang = array_merge($lang, [
	'ACL_CAT_3DI'	=> '3Di',

	'OS_START'		=> 'Foorumi alustamise kuupäev',
	'OS_ELAPSED'	=> 'Kulunud aeg',
	'OS_TITLE'		=> 'Aktiivne alates',
	'OS_AT'			=> 'kell',

	'OS_YEAR'	=> [
		1	=> '<strong>%d</strong> aasta',
		2	=> '<strong>%d</strong> aastat',
	],
	'OS_MONTH'	=> [
		1	=> '<strong>%d</strong> kuu',
		2	=> '<strong>%d</strong> kuud',
	],
	'OS_DAY'	=> [
		1	=> '<strong>%d</strong> päev',
		2	=> '<strong>%d</strong> päeva',
	]
]);
