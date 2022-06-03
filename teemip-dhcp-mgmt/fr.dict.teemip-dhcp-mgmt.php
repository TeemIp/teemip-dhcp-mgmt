<?php
/*
 * @copyright   Copyright (C) 2022 TeemIp
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

//
// Class: DHCPOption
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:DHCPOption' => 'Option DHCP',
	'Class:DHCPOption+' => '',
	'Class:DHCPOption/Attribute:name' => 'Nom',
	'Class:DHCPOption/Attribute:name+' => '',
	'Class:DHCPOption/Attribute:isc_name' => 'Nom ISC',
	'Class:DHCPOption/Attribute:isc_name+' => '',
	'Class:DHCPOption/Attribute:code' => 'Code',
	'Class:DHCPOption/Attribute:code+' => '',
	'Class:DHCPOption/Attribute:dhcpv4' => 'DHCPv4',
	'Class:DHCPOption/Attribute:dhcpv4+' => '',
	'Class:DHCPOption/Attribute:dhcpv4/Value:yes' => 'Oui',
	'Class:DHCPOption/Attribute:dhcpv4/Value:no' => 'Non',
	'Class:DHCPOption/Attribute:type' => 'Type',
	'Class:DHCPOption/Attribute:type+' => '',
	'Class:DHCPOption/Attribute:description' => 'Description',
	'Class:DHCPOption/Attribute:description+' => '',
	'Class:DHCPOption/Attribute:value' => 'Valeur',
	'Class:DHCPOption/Attribute:value+' => '',
	'Class:DHCPOption/Attribute:org_id' => 'Organisation',
	'Class:DHCPOption/Attribute:org_id+' => '',
	'Class:DHCPOption/Attribute:org_name' => 'Nom organisation',
	'Class:DHCPOption/Attribute:org_name+' => '',
));

//
// Class: DHCPOptionGlobal
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:DHCPOptionGlobal/Name' => '%1$s',
	'Class:DHCPOptionGlobal' => 'Option DHCP Globale',
	'Class:DHCPOptionGlobal+' => 'Option DHCP pour un scope global',
	'DHCPOptionGlobal:General' => 'Attributs DHCP',
	'DHCPOptionGlobal:Scope' => 'Scope',
));

//
// Class: DHCPOptionSharedNetwork
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:DHCPOptionSharedNetwork/Name' => '%1$s',
	'Class:DHCPOptionSharedNetwork' => 'Option DHCP Shared Network',
	'Class:DHCPOptionSharedNetwork+' => 'Option DHCP pour un scope shared network',
	'Class:DHCPOptionSharedNetwork/Attribute:vlan_id' => 'VLAN',
	'Class:DHCPOptionSharedNetwork/Attribute:vlan_id+' => '',
	'Class:DHCPOptionSharedNetwork/Attribute:vlan_tag' => 'VLAN Tag',
	'Class:DHCPOptionSharedNetwork/Attribute:vlan_tag+' => '',
	'DHCPOptionSharedNetwork:General' => 'Attributs DHCP',
	'DHCPOptionSharedNetwork:Scope' => 'Scope',
));

//
// Class: DHCPOptionSubnet
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:DHCPOptionSubnet/Name' => '%1$s',
	'Class:DHCPOptionSubnet' => 'Option DHCP Subnet',
	'Class:DHCPOptionSubnet+' => 'Option DHCP pour un scope subnet',
	'Class:DHCPOptionSubnet/Attribute:ipsubnet_id_finalclass_recall' => 'Type de sous-réseau',
	'Class:DHCPOptionSubnet/Attribute:ipsubnet_id_finalclass_recall+' => '',
	'Class:DHCPOptionSubnet/Attribute:ipsubnet_id' => 'Sous-réseau',
	'Class:DHCPOptionSubnet/Attribute:ipsubnet_id+' => '',
	'Class:DHCPOptionSubnet/Attribute:ipsubnet_name' => 'Nom du sous-réseau',
	'Class:DHCPOptionSubnet/Attribute:ipsubnet_name+' => '',
	'DHCPOptionSubnet:General' => 'Attributs DHCP',
	'DHCPOptionSubnet:Scope' => 'Scope',
));

//
// Class: DHCPOptionPool
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:DHCPOptionPool/Name' => '%1$s',
	'Class:DHCPOptionPool' => 'Option DHCP Pool',
	'Class:DHCPOptionPool+' => 'Option DHCP pour un scope pool',
	'Class:DHCPOptionPool/Attribute:iprange_id_finalclass_recall' => 'Type de plage d\'IPs',
	'Class:DHCPOptionPool/Attribute:iprange_id_finalclass_recall+' => '',
	'Class:DHCPOptionPool/Attribute:iprange_id' => 'Plage d\'adresses',
	'Class:DHCPOptionPool/Attribute:iprange_id+' => '',
	'Class:DHCPOptionPool/Attribute:iprange_name' => 'Nom de la plage d\'adresses',
	'Class:DHCPOptionPool/Attribute:iprange_name+' => '',
	'DHCPOptionPool:General' => 'Attributs DHCP',
	'DHCPOptionPool:Scope' => 'Scope',
));

//
// Class: DHCPOptionClass
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:DHCPOptionClass/Name' => '%1$s',
	'Class:DHCPOptionClass' => 'Option DHCP Class',
	'Class:DHCPOptionClass+' => 'Option DHCP pour un scope class',
	'Class:DHCPOptionClass/Attribute:dhcpclass_id' => 'Classe',
	'Class:DHCPOptionClass/Attribute:dhcpclass_id+' => '',
	'Class:DHCPOptionClass/Attribute:dhcpclass_name' => 'Nom de la classe DHCP',
	'Class:DHCPOptionClass/Attribute:dhcpclass_name+' => '',
	'DHCPOptionClass:General' => 'Attributs DHCP',
	'DHCPOptionClass:Scope' => 'Scope',
));

//
// Class: DHCPOptionSubClass
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:DHCPOptionSubClass/Name' => '%1$s',
	'Class:DHCPOptionSubClass' => 'Option DHCP SubClass',
	'Class:DHCPOptionSubClass+' => 'Option DHCP pour un scope sub-class',
	'Class:DHCPOptionSubClass/Attribute:dhcpclass_id' => 'Classe',
	'Class:DHCPOptionSubClass/Attribute:dhcpclass_id+' => '',
	'Class:DHCPOptionSubClass/Attribute:dhcpclass_name' => 'Nom de la classe DHCP',
	'Class:DHCPOptionSubClass/Attribute:dhcpclass_name+' => '',
	'Class:DHCPOptionSubClass/Attribute:dhcpsubclass_id' => 'Sous-Classe',
	'Class:DHCPOptionSubClass/Attribute:dhcpsubclass_id+' => '',
	'Class:DHCPOptionSubClass/Attribute:dhcpsubclass_name' => 'Nom de la sous-classe DHCP',
	'Class:DHCPOptionSubClass/Attribute:dhcpsubclass_name+' => '',
	'DHCPOptionSubClass:General' => 'Attributs DHCP',
	'DHCPOptionSubClass:Scope' => 'Scope',
));

//
// Class: DHCPOptionHost
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:DHCPOptionHost/Name' => '%1$s',
	'Class:DHCPOptionHost' => 'Option DHCP Host',
	'Class:DHCPOptionHost+' => 'Option DHCP pour un scope host',
	'Class:DHCPOptionHost/Attribute:physicaldevice_id' => 'Host',
	'Class:DHCPOptionHost/Attribute:physicaldevice_id+' => '',
	'Class:DHCPOptionHost/Attribute:physicaldevice_name' => 'Nom du Host',
	'Class:DHCPOptionHost/Attribute:physicaldevice_name+' => '',
	'DHCPOptionHost:General' => 'Attributs DHCP',
	'DHCPOptionHost:Scope' => 'Scope',
));

//
// Class: DHCPClass
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:DHCPClass/Name' => '%1$s',
	'Class:DHCPClass' => 'DHCP Class',
	'Class:DHCPClass+' => 'Scope DHCP de type Class',
));

//
// Class: DHCPSubClass
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:DHCPSubClass/Name' => '%1$s',
	'Class:DHCPSubClass' => 'DHCP SubClass',
	'Class:DHCPSubClass+' => 'Scope DHCP de type SubClass',
	'Class:DHCPSubClass/Attribute:dhcpclass_id' => 'Class',
	'Class:DHCPSubClass/Attribute:dhcpclass_id+' => '',
	'Class:DHCPSubClass/Attribute:dhcpclass_name' => 'Nom du scope Class',
	'Class:DHCPSubClass/Attribute:dhcpclass_name+' => '',
));

//
// Class: VLAN
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:VLAN/Tab:dhcpoptionsharednetworks_list' => 'Options DHCP',
	'Class:VLAN/Tab:dhcpoptionsharednetworks_list+' => 'Liste de toutes les options DHCP de scope Shared Network liées au VLAN',
));

//
// Class: IPSubnet
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:IPSubnet/Tab:dhcpoptionsubnets_list' => 'Options DHCP',
	'Class:IPSubnet/Tab:dhcpoptionsubnets_list+' => 'Liste de toutes les options DHCP de scope Subnet liées au sous-réseau',
));

//
// Class: IPRange
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:IPRange/Tab:dhcpoptionpools_list' => 'Options DHCP ',
	'Class:IPRange/Tab:dhcpoptionpools_list+' => 'Liste de toutes les options DHCP de scope Pool liées à la plage d\'IPs',
));

//
// Class: PhysicalDevice
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:PhysicalDevice/Tab:dhcpoptionhosts_list' => 'Options DHCP',
	'Class:PhysicalDevice/Tab:dhcpoptionhosts_list+' => 'Liste de toutes les options DHCP de scope Host liées à l\'équipement',
));

//
// Management of options
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Menu:DHCPManagement' => 'Gestion du DHCP',
	'Menu:DHCPSpace' => 'Espace DHCP',
	'Menu:DHCPSpace:Infrastructure' => 'Infrastructure',
	'Title:DHCPServers' => 'Servers DHCP',
	'Title:DHCPRanges' => 'Pools DHCP',
	'Menu:DHCPSpace:Options' => 'Options',
	'Menu:DHCPServers' => 'Serveurs',
	'Menu:DHCPServers+' => 'Liste des CIs functionnels actant comme DHCP server pour une plage d\'adresses IP',
	'Menu:DHCPRanges' => 'Plages d\'adresses',
	'Menu:DHCPRanges+' => 'Liste des plages d\'adresses IP configurée comme plage DHCP',
	'Menu:DHCPOptions' => 'Options DHCP',
	'Menu:NewDHCPOption' => 'Nouvelle option',
	'Menu:NewDHCPOption+' => 'Nouvelle option DHCP',
	'Menu:SearchDHCPOption' => 'Recherche d\'options',
	'Menu:SearchDHCPOption+' => 'Recherche d\'options DHCP',
	'Menu:DHCPGlobalOption' => 'Globales',
	'Menu:DHCPGlobalOption+' => 'Options DHCP Globales',
	'Menu:DHCPSharedNetworkOption' => 'Shared Network',
	'Menu:DHCPSharedNetworkOption+' => 'Options DHCP Shared Network',
	'Menu:DHCPSubnetOption' => 'Sous-réseau',
	'Menu:DHCPSubnetOption+' => 'Options DHCP Sous-réseau',
	'Menu:DHCPPoolOption' => 'Pool',
	'Menu:DHCPPoolOption+' => 'Options DHCP Pool',
	'Menu:DHCPClassOption' => 'Class',
	'Menu:DHCPClassOption+' => 'Options DHCP Class',
	'Menu:DHCPSubClassOption' => 'SubClass',
	'Menu:DHCPSubClassOption+' => 'Options DHCP SubClass',
	'Menu:DHCPHostOption' => 'Host',
	'Menu:DHCPHostOption+' => 'Options DHCP Host',
));
