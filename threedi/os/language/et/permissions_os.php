<?php
/**
 *
 * Online Since. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2005 - 2019, 3Di, https://www.phpbbstudio.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Estonian translation by phpBBestonia.eu <https://www.phpbbestonia.eu>
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
	'ACL_A_NEW_THREEDI_OS'	=> '<strong>Loodud alates</strong> - Saab hallata',
	'ACL_U_NEW_THREEDI_OS'	=> '<strong>Loodud alates</strong> - Saab näha',
]);
