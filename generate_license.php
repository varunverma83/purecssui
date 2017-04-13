<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Generate License</title>
  <?php include_once "header.php"; ?>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      assignDates();
    });
    var assignDates = function(){
      $( "#expiration_date" ).datepicker({
        changeMonth: true,
        changeYear: true
      });
    };
  </script>

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
        <div class="page-header">Generate License</div>
        <div class="pure-control-group">
            <label for="api_url">API Server URL</label>
            <input id="api_url" type="text" placeholder="API Server URL" pattern="[a-zA-Z0-9\-\.]+" size="50" required>
            <span class="pure-form-message-inline">/api/GenerateLicense</span>
        </div>

        <div class="pure-control-group">
            <label for="requestor_id">RequestorID</label>
            <input id="requestor_id" type="text" placeholder="RequestorID" required>
            <span class="pure-form-message-inline">*</span>
        </div>

        <div class="pure-control-group">
            <label for="password">Access Token</label>
            <input id="password" type="password" placeholder="Access Token" required>
            <span class="pure-form-message-inline">*</span>
        </div>

        <div class="pure-control-group">
            <label for="company_name">Company Name</label>
            <input id="company_name" type="text" placeholder="Company Name" required>
            <span class="pure-form-message-inline">*</span>
        </div>

        <div class="pure-control-group">
            <label for="user_name">User Name</label>
            <input id="user_name" type="text" placeholder="User Name" required>
            <span class="pure-form-message-inline">*</span>
        </div>

        <div class="pure-control-group">
            <label for="email">Email</label>
            <input id="email" type="email" placeholder="Email" required>
            <span class="pure-form-message-inline">*</span>
        </div>

        <div class="pure-control-group">
            <label for="hostname">Hostname</label>
            <input id="hostname" type="text" placeholder="Hostname" required>
            <span class="pure-form-message-inline">*</span>
        </div>

        <div class="pure-control-group">
            <label for="users">Users</label>
            <input id="users" type="number" placeholder="Users" min="1" required>
            <span class="pure-form-message-inline">*</span>
        </div>

        <div class="pure-control-group">
            <label for="servers">Servers</label>
            <input id="servers" type="number" placeholder="Servers" value="3" readonly required>
            <span class="pure-form-message-inline">*</span>
        </div>

        <div class="pure-control-group">
            <label for="storage_limit">Storage Limit (GB)</label>
            <input id="storage_limit" type="number" placeholder="Storage Limit (GB)" min="1" required>
            <span class="pure-form-message-inline">*</span>
        </div>

        <div class="pure-control-group">
            <label for="bandwidth_limit">Bandwidth Limit (GB)</label>
            <input id="bandwidth_limit" type="number" placeholder="Bandwidth Limit (GB)" min="1" required>
            <span class="pure-form-message-inline">*</span>
        </div>

        <div class="pure-control-group">
            <label for="expiration_date">Expiration Date</label>
            <input id="expiration_date" type="date" placeholder="Expiration Date" required>
            <span class="pure-form-message-inline">*</span>
        </div>

        <div class="pure-controls">
            <style scoped>
              .button-xlarge {
                      font-size: 125%;
              }
            </style>
            <label for="dlp" class="pure-checkbox">
                <input id="dlp" type="checkbox"> Enable DLP
            </label>

            <button type="submit" class="button-xlarge pure-button">Submit</button>
        </div>
    </fieldset>
</form>

</body>
</html>