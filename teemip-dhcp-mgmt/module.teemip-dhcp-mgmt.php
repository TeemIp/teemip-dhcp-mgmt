<?php
/*
 * @copyright   Copyright (C) 2021 TeemIp
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'teemip-dhcp-mgmt/3.1.1',
	array(
		// Identification
		//
		'label' => 'DHCP Management',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(
			'teemip-framework/3.1.0',
			'teemip-ip-mgmt/3.1.0',
			'teemip-ipv6-mgmt/3.1.0',
		),
		'mandatory' => false,
		'visible' => true,
		
		// Components
		//
		'datamodel' => array(
			'model.teemip-dhcp-mgmt.php',
		),
		'data.struct' => array(
			//'data.struct.IPAudit.xml',
		),
		'data.sample' => array(
		),
		
		// Documentation
		//
		'doc.manual_setup' => '',
		'doc.more_information' => '',
		// Default settings
		//
		'settings' => array(
		),
	)
);

