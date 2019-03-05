<?php
/**
 * eiKoLo - Ihre Anwendung für Kontaktbetreuung und Sozialmarketing
 *
 * eiKoLo ist ein Angebot von:
 * Hoffmeyer Fundraising, Inhaber Karsten Hoffmeyer
 * mailto:kontakt@eikolo.net
 * https://www.eikolo.net/
 *
 * Copyright (C) 2010 - 2019
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. (C)
 */

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'EiKoLo' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['EiKoLo'] = __DIR__ . '/i18n';
	wfWarn(
		'Deprecated PHP entry point used for EiKoLo extension. Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return true;
} else {
	die( 'This version of the EiKoLo extension requires MediaWiki 1.25+' );
}
