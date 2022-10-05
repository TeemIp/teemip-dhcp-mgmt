<?php
/*
 * @copyright   Copyright (C) 2021 TeemIp
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

//
// Class: DHCPOption
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:DHCPOption' => 'DHCP Option',
	'Class:DHCPOption+' => '',
	'Class:DHCPOption/Attribute:name' => 'Name',
	'Class:DHCPOption/Attribute:name+' => '',
	'Class:DHCPOption/Attribute:isc_name' => 'ISC Name',
	'Class:DHCPOption/Attribute:isc_name+' => '',
	'Class:DHCPOption/Attribute:code' => 'Code',
	'Class:DHCPOption/Attribute:code+' => '',
	'Class:DHCPOption/Attribute:dhcpv4' => 'DHCPv4',
	'Class:DHCPOption/Attribute:dhcpv4+' => '',
	'Class:DHCPOption/Attribute:dhcpv4/Value:yes' => 'Ja',
	'Class:DHCPOption/Attribute:dhcpv4/Value:no' => 'Nein',
	'Class:DHCPOption/Attribute:type' => 'Typ',
	'Class:DHCPOption/Attribute:type+' => '',
	'Class:DHCPOption/Attribute:description' => 'Beschreibung',
	'Class:DHCPOption/Attribute:description+' => '',
	'Class:DHCPOption/Attribute:value' => 'Wert',
	'Class:DHCPOption/Attribute:value+' => '',
	'Class:DHCPOption/Attribute:org_id' => 'Organisation',
	'Class:DHCPOption/Attribute:org_id+' => '',
	'Class:DHCPOption/Attribute:org_name' => 'Organisationsname',
	'Class:DHCPOption/Attribute:org_name+' => '',
));

//
// Class: DHCPOptionGlobal
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:DHCPOptionGlobal/Name' => '%1$s',
	'Class:DHCPOptionGlobal' => 'Globale DHCP Option',
	'Class:DHCPOptionGlobal+' => 'DHCP Option für den globalen Bereich',
	'DHCPOptionGlobal:General' => 'DHCP Eigenschaften',
	'DHCPOptionGlobal:Scope' => 'Bereich',
));

//
// Class: DHCPOptionSharedNetwork
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:DHCPOptionSharedNetwork/Name' => '%1$s',
	'Class:DHCPOptionSharedNetwork' => 'shared-network DHCP Option',
	'Class:DHCPOptionSharedNetwork+' => 'DHCP Option für den shared-network Bereich',
	'Class:DHCPOptionSharedNetwork/Attribute:vlan_id' => 'VLAN',
	'Class:DHCPOptionSharedNetwork/Attribute:vlan_id+' => '',
	'Class:DHCPOptionSharedNetwork/Attribute:vlan_tag' => 'VLAN Tag',
	'Class:DHCPOptionSharedNetwork/Attribute:vlan_tag+' => '',
	'DHCPOptionSharedNetwork:General' => 'DHCP Eigenschaften',
	'DHCPOptionSharedNetwork:Scope' => 'Bereich',
));

//
// Class: DHCPOptionSubnet
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:DHCPOptionSubnet/Name' => '%1$s',
	'Class:DHCPOptionSubnet' => 'Subnetz DHCP Option',
	'Class:DHCPOptionSubnet+' => 'DHCP Option für den Subnetzbereich',
	'Class:DHCPOptionSubnet/Attribute:ipsubnet_id_finalclass_recall' => 'Subnetz Typ',
	'Class:DHCPOptionSubnet/Attribute:ipsubnet_id_finalclass_recall+' => '',
	'Class:DHCPOptionSubnet/Attribute:ipsubnet_id' => 'Subnetz',
	'Class:DHCPOptionSubnet/Attribute:ipsubnet_id+' => '',
	'Class:DHCPOptionSubnet/Attribute:ipsubnet_name' => 'Subnetzname',
	'Class:DHCPOptionSubnet/Attribute:ipsubnet_name+' => '',
	'DHCPOptionSubnet:General' => 'DHCP Eigenschaften',
	'DHCPOptionSubnet:Scope' => 'Bereich',
));

//
// Class: DHCPOptionPool
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:DHCPOptionPool/Name' => '%1$s',
	'Class:DHCPOptionPool' => 'Pool DHCP Option',
	'Class:DHCPOptionPool+' => 'DHCP Option für den pool Bereich',
	'Class:DHCPOptionPool/Attribute:iprange_id_finalclass_recall' => 'IP-Bereich Typ',
	'Class:DHCPOptionPool/Attribute:iprange_id_finalclass_recall+' => '',
	'Class:DHCPOptionPool/Attribute:iprange_id' => 'IP-Bereich',
	'Class:DHCPOptionPool/Attribute:iprange_id+' => '',
	'Class:DHCPOptionPool/Attribute:iprange_name' => 'IP-Bereich Name',
	'Class:DHCPOptionPool/Attribute:iprange_name+' => '',
	'DHCPOptionPool:General' => 'DHCP Eigenschaften',
	'DHCPOptionPool:Scope' => 'Bereich',
));

//
// Class: DHCPOptionClass
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:DHCPOptionClass/Name' => '%1$s',
	'Class:DHCPOptionClass' => 'Class DHCP Option',
	'Class:DHCPOptionClass+' => 'DHCP Option für den class Bereich',
	'Class:DHCPOptionClass/Attribute:dhcpclass_id' => 'Class',
	'Class:DHCPOptionClass/Attribute:dhcpclass_id+' => '',
	'Class:DHCPOptionClass/Attribute:dhcpclass_name' => 'DHCP Class Name',
	'Class:DHCPOptionClass/Attribute:dhcpclass_name+' => '',
	'DHCPOptionClass:General' => 'DHCP Eigenschaften',
	'DHCPOptionClass:Scope' => 'Bereich',
));

//
// Class: DHCPOptionSubClass
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:DHCPOptionSubClass/Name' => '%1$s',
	'Class:DHCPOptionSubClass' => 'Sub-Class DHCP Option',
	'Class:DHCPOptionSubClass+' => 'DHCP option für den sub-class Bereich',
	'Class:DHCPOptionSubClass/Attribute:dhcpclass_id' => 'Class',
	'Class:DHCPOptionSubClass/Attribute:dhcpclass_id+' => '',
	'Class:DHCPOptionSubClass/Attribute:dhcpclass_name' => 'DHCP Class Name',
	'Class:DHCPOptionSubClass/Attribute:dhcpclass_name+' => '',
	'Class:DHCPOptionSubClass/Attribute:dhcpsubclass_id' => 'SubClass',
	'Class:DHCPOptionSubClass/Attribute:dhcpsubclass_id+' => '',
	'Class:DHCPOptionSubClass/Attribute:dhcpsubclass_name' => 'DHCP SubClass Name',
	'Class:DHCPOptionSubClass/Attribute:dhcpsubclass_name+' => '',
	'DHCPOptionSubClass:General' => 'DHCP Eigenschaften',
	'DHCPOptionSubClass:Scope' => 'Bereich',
));

//
// Class: DHCPOptionHost
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:DHCPOptionHost/Name' => '%1$s',
	'Class:DHCPOptionHost' => 'Host DHCP Option',
	'Class:DHCPOptionHost+' => 'DHCP Option für den host Bereich',
	'Class:DHCPOptionHost/Attribute:physicaldevice_id' => 'Host',
	'Class:DHCPOptionHost/Attribute:physicaldevice_id+' => '',
	'Class:DHCPOptionHost/Attribute:physicaldevice_name' => 'Hostname',
	'Class:DHCPOptionHost/Attribute:physicaldevice_name+' => '',
	'DHCPOptionHost:General' => 'DHCP Eigenschaften',
	'DHCPOptionHost:Scope' => 'Bereich',
));

//
// Class: DHCPClass
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:DHCPClass/Name' => '%1$s',
	'Class:DHCPClass' => 'DHCP Class',
	'Class:DHCPClass+' => '',
));

//
// Class: DHCPSubClass
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:DHCPSubClass/Name' => '%1$s',
	'Class:DHCPSubClass' => 'DHCP SubClass',
	'Class:DHCPSubClass+' => '',
	'Class:DHCPSubClass/Attribute:dhcpclass_id' => 'DHCP Class',
	'Class:DHCPSubClass/Attribute:dhcpclass_id+' => '',
	'Class:DHCPSubClass/Attribute:dhcpclass_name' => 'DHCP Classname',
	'Class:DHCPSubClass/Attribute:dhcpclass_name+' => '',
));

//
// Class: VLAN
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:VLAN/Tab:dhcpoptionsharednetworks_list' => 'DHCP Optionen',
	'Class:VLAN/Tab:dhcpoptionsharednetworks_list+' => 'Liste aller, mit dem VLAN, verknüpften DHCP Optionen',
));

//
// Class: IPSubnet
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:IPSubnet/Tab:dhcpoptionsubnets_list' => 'DHCP Optionen',
	'Class:IPSubnet/Tab:dhcpoptionsubnets_list+' => 'Liste aller, mit dem Subnetz, verknüpften DHCP Optionen',
));

//
// Class: IPRange
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:IPRange/Tab:dhcpoptionpools_list' => 'DHCP Optionen',
	'Class:IPRange/Tab:dhcpoptionpools_list+' => 'Liste aller, mit dem IP-Bereich, verknüpften DHCP Optionen',
));

//
// Class: PhysicalDevice
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:PhysicalDevice/Tab:dhcpoptionhosts_list' => 'DHCP Optionen',
	'Class:PhysicalDevice/Tab:dhcpoptionhosts_list+' => 'Liste aller, mit dem physischen Gerät, verknüpften DHCP Optionen',
));

//
// Management of options
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Menu:DHCPManagement' => 'DHCP Verwaltung',
	'Menu:DHCPSpace' => 'DHCP Bereich',
	'Menu:DHCPSpace:Infrastructure' => 'Infrastruktur',
	'Title:DHCPServers' => 'DHCP Servers',
	'Title:DHCPRanges' => 'DHCP Bereiche',
	'Menu:DHCPSpace:Options' => 'Optionen',
	'Menu:DHCPServers' => 'Server',
	'Menu:DHCPServers+' => 'List von funktionalen CIs welche einen IP-Bereich als DHCP Server zugewiesen sind',
	'Menu:DHCPRanges' => 'Bereiche',
	'Menu:DHCPRanges+' => 'Liste von IP-Bereichen welche als DHCP pools gesetzt sind',
	'Menu:DHCPOptions' => 'DHCP Optionen',
	'Menu:NewDHCPOption' => 'Neue Option',
	'Menu:NewDHCPOption+' => 'Neue DHCP Option',
	'Menu:SearchDHCPOption' => 'Suche nach Optionen',
	'Menu:SearchDHCPOption+' => 'Suche nach DHCP Optionen',
	'Menu:DHCPGlobalOption' => 'Global',
	'Menu:DHCPGlobalOption+' => 'Globale DHCP Optionen',
	'Menu:DHCPSharedNetworkOption' => 'Shared Networks',
	'Menu:DHCPSharedNetworkOption+' => 'DHCP shared-network Optionen',
	'Menu:DHCPSubnetOption' => 'Subnetze',
	'Menu:DHCPSubnetOption+' => 'DHCP Subnetz Optionen',
	'Menu:DHCPPoolOption' => 'Pools',
	'Menu:DHCPPoolOption+' => 'DHCP Pool Optionen',
	'Menu:DHCPClassOption' => 'Classes',
	'Menu:DHCPClassOption+' => 'DHCP Class Optionen',
	'Menu:DHCPSubClassOption' => 'Sub Classes',
	'Menu:DHCPSubClassOption+' => 'DHCP Sub Class Optionen',
	'Menu:DHCPHostOption' => 'Hosts',
	'Menu:DHCPHostOption+' => 'DHCP Host Optionen',
));
