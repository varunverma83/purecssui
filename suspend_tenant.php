<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Suspend Tenant</title>
  <?php include_once "header.php"; ?>

<?php

$requestor_id = "";
$access_token = "";
$account_id = "";
$user_id = "";
$user_name = "";
$company_name = "";
$email_address = "";
$storage_limit = 0;
$bandwidth_limit = 0;
$expiration_date = "";
$msp_host_server = "";
$sku = "Enterprise Connect";
$license_type = "Multi Tenant Hosted";
$total_users = 0;
$total_servers = 0;
$fips = false;
$custom_branding = true;

?>
</head>
<body>
<form class="pure-form pure-form-aligned">
    <fieldset>
        <div class="page-header">Suspend Tenant</div>
        <div class="pure-control-group">
            <label for="msp_host_url">MSP Host URL</label>
            <input id="msp_host_url" type="text" placeholder="MSP Host URL" pattern="[a-zA-Z0-9\-\.]+" size="50" required>
            <span class="pure-form-message-inline">*</span>
        </div>

        <div class="pure-control-group">
            <label for="appid_array">AppID</label>
            <input id="appid_array" type="number" placeholder="AppID" min="1" required>
            <span class="pure-form-message-inline">*</span>
        </div>

        <div class="pure-control-group">
            <label for="deployment_key">Deployment Key</label>
            <input id="deployment_key" type="text" placeholder="Deployment Key" size="50" required>
            <span class="pure-form-message-inline">*</span>
        </div>

        <div class="pure-controls">
            <button type="submit" class="button-xlarge pure-button">Submit</button>
        </div>
    </fieldset>
</form>

</body>
</html>