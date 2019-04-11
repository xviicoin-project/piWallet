\<?php
 
$server_url = "68.183.115.178/";  // ENTER WEBSITE URL ALONG WITH A TRAILING SLASH
			
$db_host = "localhost";
$db_user = "root";
$db_pass = "pass";
$db_name = "wallet";

$rpc_host = "127.0.0.1";
$rpc_port = "9432";
$rpc_user = "xviiwalletrpc";
$rpc_pass = "pass";

$fullname = "XVII (17) Coin"; //Website Title (Do Not include 'wallet')
$short = "XVII"; //Coin Short (BTC)
$blockchain_tx_url = "http://explorer.xviicoin.info/tx/"; //Blockchain Url
$support = "support@xviicoin.info"; //Your support eMail
$hide_ids = array(1); //Hide account from admin dashboard
$donation_address = "JKBBMbBW1TdgmdCXmejvLxaJSceMi9tVQS"; //Donation Address

$reserve = "0"; //This fee acts as a reserve. The users balance will display as the balance in the daemon minus the reserve. We don't reccomend setting this more than the Fee the daemon charges.

?>
