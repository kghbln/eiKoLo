<?php
/**
 * eiKoLo - Ihre Anwendung für Kontaktbetreuung und Sozialmarketing
 *
 * eiKoLo ist ein Angebot von:
 * Hoffmeyer Fundraising, Inhaber Karsten Hoffmeyer
 * mailto:kontakt@eikolo.net
 * https://www.eikolo.net/
 *
 * Copyright (C) 2010 - 2016
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. (GPL-2.0)
 */

// Display extension properties on MediaWiki.
$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'Zusammenstellung „eiKoLo“',
	'author' => array(
		'Karsten Hoffmeyer'
		),
	'url' => 'https://www.eikolo.net/',
	'descriptionmsg' => 'eikolo-desc',
	'version' => '5.1.2',
	'license-name' => 'C'
);

// Register extension messages and other localisation.
$wgMessagesDirs['EiKoLo'] = __DIR__ . '/i18n';
