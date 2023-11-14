<?php
/*
 * @copyright   Copyright (C) 2022 TeemIp
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

//
// Class: DHCPOption
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:DHCPOption' => 'DHCP选项',
	'Class:DHCPOption+' => '',
	'Class:DHCPOption/Attribute:name' => '名称',
	'Class:DHCPOption/Attribute:name+' => '',
	'Class:DHCPOption/Attribute:isc_name' => 'ISC名称',
	'Class:DHCPOption/Attribute:isc_name+' => '',
	'Class:DHCPOption/Attribute:code' => '代码',
	'Class:DHCPOption/Attribute:code+' => '',
	'Class:DHCPOption/Attribute:dhcpv4' => 'DHCPv4',
	'Class:DHCPOption/Attribute:dhcpv4+' => '',
	'Class:DHCPOption/Attribute:dhcpv4/Value:yes' => '是',
	'Class:DHCPOption/Attribute:dhcpv4/Value:no' => '否',
	'Class:DHCPOption/Attribute:type' => '类型',
	'Class:DHCPOption/Attribute:type+' => '',
	'Class:DHCPOption/Attribute:description' => '描述',
	'Class:DHCPOption/Attribute:description+' => '',
	'Class:DHCPOption/Attribute:value' => '值',
	'Class:DHCPOption/Attribute:value+' => '',
	'Class:DHCPOption/Attribute:org_id' => '组织',
	'Class:DHCPOption/Attribute:org_id+' => '',
	'Class:DHCPOption/Attribute:org_name' => '组织名称',
	'Class:DHCPOption/Attribute:org_name+' => '',
));

//
// Class: DHCPOptionGlobal
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:DHCPOptionGlobal/Name' => '%1$s',
	'Class:DHCPOptionGlobal' => '全局DHCP选项',
	'Class:DHCPOptionGlobal+' => '全局范围的DHCP选项',
	'DHCPOptionGlobal:General' => 'DHCP属性',
	'DHCPOptionGlobal:Scope' => '范围',
));

//
// Class: DHCPOptionSharedNetwork
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:DHCPOptionSharedNetwork/Name' => '%1$s',
	'Class:DHCPOptionSharedNetwork' => '共享网络DHCP选项',
	'Class:DHCPOptionSharedNetwork+' => '共享网络范围的DHCP选项',
	'Class:DHCPOptionSharedNetwork/Attribute:vlan_id' => 'VLAN',
	'Class:DHCPOptionSharedNetwork/Attribute:vlan_id+' => '',
	'Class:DHCPOptionSharedNetwork/Attribute:vlan_tag' => 'VLAN标签',
	'Class:DHCPOptionSharedNetwork/Attribute:vlan_tag+' => '',
	'DHCPOptionSharedNetwork:General' => 'DHCP属性',
	'DHCPOptionSharedNetwork:Scope' => '范围',
));

//
// Class: DHCPOptionSubnet
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:DHCPOptionSubnet/Name' => '%1$s',
	'Class:DHCPOptionSubnet' => '子网DHCP选项',
	'Class:DHCPOptionSubnet+' => '子网范围的DHCP选项',
	'Class:DHCPOptionSubnet/Attribute:ipsubnet_id_finalclass_recall' => 'IP子网类型',
	'Class:DHCPOptionSubnet/Attribute:ipsubnet_id_finalclass_recall+' => '',
	'Class:DHCPOptionSubnet/Attribute:ipsubnet_id' => '子网',
	'Class:DHCPOptionSubnet/Attribute:ipsubnet_id+' => '',
	'Class:DHCPOptionSubnet/Attribute:ipsubnet_name' => '子网名称',
	'Class:DHCPOptionSubnet/Attribute:ipsubnet_name+' => '',
	'DHCPOptionSubnet:General' => 'DHCP属性',
	'DHCPOptionSubnet:Scope' => '范围',
));

//
// Class: DHCPOptionPool
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:DHCPOptionPool/Name' => '%1$s',
	'Class:DHCPOptionPool' => '池DHCP选项',
	'Class:DHCPOptionPool+' => '池范围的DHCP选项',
	'Class:DHCPOptionPool/Attribute:iprange_id_finalclass_recall' => 'IP范围类型',
	'Class:DHCPOptionPool/Attribute:iprange_id_finalclass_recall+' => '',
	'Class:DHCPOptionPool/Attribute:iprange_id' => 'IP范围',
	'Class:DHCPOptionPool/Attribute:iprange_id+' => '',
	'Class:DHCPOptionPool/Attribute:iprange_name' => 'IP范围名称',
	'Class:DHCPOptionPool/Attribute:iprange_name+' => '',
	'DHCPOptionPool:General' => 'DHCP属性',
	'DHCPOptionPool:Scope' => '范围',
));

//
// Class: DHCPOptionClass
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:DHCPOptionClass/Name' => '%1$s',
	'Class:DHCPOptionClass' => '类别DHCP选项',
	'Class:DHCPOptionClass+' => '类别范围的DHCP选项',
	'Class:DHCPOptionClass/Attribute:dhcpclass_id' => '类别',
	'Class:DHCPOptionClass/Attribute:dhcpclass_id+' => '',
	'Class:DHCPOptionClass/Attribute:dhcpclass_name' => 'DHCP类别名称',
	'Class:DHCPOptionClass/Attribute:dhcpclass_name+' => '',
	'DHCPOptionClass:General' => 'DHCP属性',
	'DHCPOptionClass:Scope' => '范围',
));

//
// Class: DHCPOptionSubClass
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:DHCPOptionSubClass/Name' => '%1$s',
	'Class:DHCPOptionSubClass' => '子类别DHCP选项',
	'Class:DHCPOptionSubClass+' => '子类别范围的DHCP选项',
	'Class:DHCPOptionSubClass/Attribute:dhcpclass_id' => '类别',
	'Class:DHCPOptionSubClass/Attribute:dhcpclass_id+' => '',
	'Class:DHCPOptionSubClass/Attribute:dhcpclass_name' => 'DHCP类别名称',
	'Class:DHCPOptionSubClass/Attribute:dhcpclass_name+' => '',
	'Class:DHCPOptionSubClass/Attribute:dhcpsubclass_id' => '子类别',
	'Class:DHCPOptionSubClass/Attribute:dhcpsubclass_id+' => '',
	'Class:DHCPOptionSubClass/Attribute:dhcpsubclass_name' => 'DHCP子类别名称',
	'Class:DHCPOptionSubClass/Attribute:dhcpsubclass_name+' => '',
	'DHCPOptionSubClass:General' => 'DHCP属性',
	'DHCPOptionSubClass:Scope' => '范围',
));

//
// Class: DHCPOptionHost
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:DHCPOptionHost/Name' => '%1$s',
	'Class:DHCPOptionHost' => '主机DHCP选项',
	'Class:DHCPOptionHost+' => '主机范围的DHCP选项',
	'Class:DHCPOptionHost/Attribute:physicaldevice_id' => '主机',
	'Class:DHCPOptionHost/Attribute:physicaldevice_id+' => '',
	'Class:DHCPOptionHost/Attribute:physicaldevice_name' => '主机名称',
	'Class:DHCPOptionHost/Attribute:physicaldevice_name+' => '',
	'DHCPOptionHost:General' => 'DHCP属性',
	'DHCPOptionHost:Scope' => '范围',
));

//
// Class: DHCPClass
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:DHCPClass/Name' => '%1$s',
	'Class:DHCPClass' => 'DHCP类别',
	'Class:DHCPClass+' => '',
));

//
// Class: DHCPSubClass
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:DHCPSubClass/Name' => '%1$s',
	'Class:DHCPSubClass' => 'DHCP子类别',
	'Class:DHCPSubClass+' => '',
	'Class:DHCPSubClass/Attribute:dhcpclass_id' => 'DHCP类别',
	'Class:DHCPSubClass/Attribute:dhcpclass_id+' => '',
	'Class:DHCPSubClass/Attribute:dhcpclass_name' => 'DHCP类别名称',
	'Class:DHCPSubClass/Attribute:dhcpclass_name+' => '',
));

//
// Class: VLAN
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:VLAN/Tab:dhcpoptionsharednetworks_list' => 'DHCP选项',
	'Class:VLAN/Tab:dhcpoptionsharednetworks_list+' => '附加到VLAN的所有DHCP选项的列表',
));

//
// Class: IPSubnet
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:IPSubnet/Tab:dhcpoptionsubnets_list' => 'DHCP选项',
	'Class:IPSubnet/Tab:dhcpoptionsubnets_list+' => '附加到子网的所有DHCP选项的列表',
));

//
// Class: IPRange
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:IPRange/Tab:dhcpoptionpools_list' => 'DHCP选项',
	'Class:IPRange/Tab:dhcpoptionpools_list+' => '附加到IP范围的所有DHCP选项的列表',
));

//
// Class: PhysicalDevice
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:PhysicalDevice/Tab:dhcpoptionhosts_list' => 'DHCP选项',
	'Class:PhysicalDevice/Tab:dhcpoptionhosts_list+' => '附加到物理设备的所有DHCP选项的列表',
));

//
// Management of options
//
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Menu:DHCPManagement' => 'DHCP管理',
	'Menu:DHCPSpace' => 'DHCP空间',
	'Menu:DHCPSpace:Infrastructure' => '基础设施',
	'Title:DHCPServers' => 'DHCP服务器',
	'Title:DHCPRanges' => 'DHCP范围',
	'Menu:DHCPSpace:Options' => '选项',
	'Menu:DHCPServers' => '服务器',
	'Menu:DHCPServers+' => '附加到IP范围的作为DHCP服务器的所有功能配置项的列表',
	'Menu:DHCPRanges' => '范围',
	'Menu:DHCPRanges+' => '设置为DHCP池的所有IP范围的列表',
	'Menu:DHCPOptions' => 'DHCP选项',
	'Menu:NewDHCPOption' => '新建选项',
	'Menu:NewDHCPOption+' => '新建DHCP选项',
	'Menu:SearchDHCPOption' => '搜索选项',
	'Menu:SearchDHCPOption+' => '搜索DHCP选项',
	'Menu:DHCPGlobalOption' => '全局',
	'Menu:DHCPGlobalOption+' => 'DHCP全局选项',
	'Menu:DHCPSharedNetworkOption' => '共享网络',
	'Menu:DHCPSharedNetworkOption+' => 'DHCP共享网络选项',
	'Menu:DHCPSubnetOption' => '子网',
	'Menu:DHCPSubnetOption+' => 'DHCP子网选项',
	'Menu:DHCPPoolOption' => '池',
	'Menu:DHCPPoolOption+' => 'DHCP池选项',
	'Menu:DHCPClassOption' => '类别',
	'Menu:DHCPClassOption+' => 'DHCP类别选项',
	'Menu:DHCPSubClassOption' => '子类别',
	'Menu:DHCPSubClassOption+' => 'DHCP子类别选项',
	'Menu:DHCPHostOption' => '主机',
	'Menu:DHCPHostOption+' => 'DHCP主机选项',
));

