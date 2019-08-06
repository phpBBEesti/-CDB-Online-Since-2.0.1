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
	'ACP_OS_TITLE'					=> 'Foorum loodud',
	'ACP_OS'						=> 'Seaded',

	// Controller
	'ACP_OS_CHANGE_SAVED'			=> '<strong>Online Since</strong> BSD manually changed and saved.',

	'ACP_OS_SETNOW_CONFIRM'			=> 'Kas olete kindel, et soovite praegu foorumi alguskuupäeva määrata?',
	'ACP_OS_SETNOW'					=> 'The Board’s Start Date has been sat at the present time.',

	'ACP_OS_RESTORE_CONFIRM'		=> 'Kas olete kindel, et soovite taastada foorumi loomise algkuupäeva?',
	'ACP_OS_RESTORED'				=> 'Foorumi algne alguskuupäev on taastatud.',

	// Template
	'ACP_OS_START_DATE_INFO'		=> 'Kehtiv vahemik: <strong>-9999999999</strong> kuni <strong>9999999999</strong> - Originaal foorumi alguskuupäeva ei muudeta andmebaasis kunagi.',

	'ACP_OS_START_DATE'				=> 'Muuda',
	'ACP_OS_CHANGE_BSD'				=> 'Muuda foorumi alustamise kuupäeva',
	'ACP_OS_CHANGE_BSD_EXPLAIN'		=> '<em>Sisestage kehtiv unixi (epohhi) ajatempel.</em>',
	'ACP_OS_CONVERTER'				=> '<em>Epohhi konverter</em>',

	'ACP_OS_RESTORE_DATE'			=> 'Taasta',
	'ACP_OS_ORIG_BSD'				=> 'Taasta foorumi algne alustamise kuupäev',
	'ACP_OS_ORIG_BSD_EXPLAIN'		=> '<em>Kas soovite algse kuupäeva juurde naasta?</em>',

	'ACP_OS_NOW_DATE'				=> 'Lähtesta',
	'ACP_OS_NOW_RESET'				=> 'Lähtesta foorumi alguskuupäev koheselt',
	'ACP_OS_NOW_RESET_EXPLAIN'		=> '<em>Teie foorumi uus algus</em>',

	// Logs
	'LOG_ACP_OS_BSD_CHANGED'		=> '<strong>Online Since</strong> BSD manually changed.',
	'LOG_ACP_OS_BSD_SETNOW'			=> '<strong>Online Since</strong> BSD updated to time().',
	'LOG_ACP_OS_BSD_RESTORED'		=> '<strong>Online Since</strong> original BSD restored.',

	// Errors
	'ACP_OS_UNIX_INVALID'			=> 'Palun täitke korrektselt Unixi (epohhi) ajatempli väli.',
]);
