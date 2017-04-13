<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Create Tenant</title>
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
        <div class="page-header">Create Tenant</div>
        <div class="pure-control-group">
            <label for="msp_host_url">MSP Host URL</label>
            <input id="msp_host_url" type="text" placeholder="MSP Host URL" pattern="[a-zA-Z0-9\-\.]+" size="50" required>
            <span class="pure-form-message-inline">*</span>
        </div>

        <div class="pure-control-group">
            <label for="hostname">Tenant URL</label>
            <input id="hostname" type="text" placeholder="Tenant URL" size="50" required>
            <span class="pure-form-message-inline">*</span>
        </div>

        <div class="pure-control-group">
            <label for="company_name">Company Name</label>
            <input id="company_name" type="text" placeholder="Company Name" required>
            <span class="pure-form-message-inline">*</span>
        </div>

        <div class="pure-control-group">
            <label for="email">Admin Email</label>
            <input id="email" type="email" placeholder="Admin Email" required>
            <span class="pure-form-message-inline">*</span>
        </div>

        <div class="pure-control-group">
            <label for="password">Default Password</label>
            <input id="password" type="text" placeholder="Default Password" required>
            <span class="pure-form-message-inline">*</span>
        </div>

        <div class="pure-control-group">
            <label for="license">License</label>
            <input id="license" type="text" placeholder="License">
            <span class="pure-form-message-inline"></span>
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