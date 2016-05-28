<?php

# ============================================================================
# Script : ss_Alcatel_Sap_Index.php
# License: GNU General Public License (see LICENSE)
# Authors:
#  
# Script Version:
#  $version = 'Beta 1.0';
# ============================================================================

/* display No errors */
error_reporting(0);






function ss_Alcatel_Sap_Index_display_help() {
	print "Invalid use of script query, required parameters:\n\n";
	print "     $0 <host_name> <cacti_host_id> <snmp_auth> <cmd> <arg_1> <arg_2>\n";
	print "     $0 Options:\n";
	print "     $0 <host_name> <cacti_host_id> <snmp_auth> <cmd> index\n";
	print "     $0 <host_name> <cacti_host_id> <snmp_auth> <cmd> num_indexes\n";
	print " OR  $0 <host_name> <cacti_host_id> <snmp_auth> <cmd> query <arg_2>\n";
	print " OR  $0 <host_name> <cacti_host_id> <snmp_auth> <cmd> get <arg_2>\n\n";
	print "Arguments:\n";
	print "     <arg_1> Parameter Name, Example: index, svcId, sapType, etc\n";
	print "     <arg_2> options: Index SAP Value, Example: 1009259195.306872320.9 = svcId.sapPortId.sapEncapValue\n\n"; 
	print "     <snmp_auth> SNMP Authentications options:\n";
	print "                 SNMP V2: |host_snmp_version|:|host_snmp_port|:|host_snmp_timeout|:|host_ping_retries|:|host_max_oids|:|host_snmp_community|\n";
	print "                 SNMP V3: |host_snmp_version|:|host_snmp_port|:|host_snmp_timeout|:|host_ping_retries|:|host_max_oids|:|host_snmp_community|:|host_snmp_username|:|host_snmp_password|:|host_snmp_auth_protocol|:|host_snmp_priv_passphrase|:|host_snmp_priv_protocol|:|host_snmp_context|\n";
}

?>

