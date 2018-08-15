<?php
/**
 * Created by PhpStorm.
 * User: BSemrau
 * Date: 8/15/2018
 * Time: 9:45 AM
 */

if ( isset($_POST['first_name']) ) {
    //Get your API key from Syncro
    $API_key = '';
    /*
        Enter your full Syncro/RepairShopr URL (no https or slashes - for instance:
        example.syncromsp.com or example.repairshopr.com
    */
    $URL = '';

    //Redirect to page on successful submission (defaults to frontend.html):
    $redirect = 'frontend.html?success=true';

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $subject = 'AM Renewal - ' . $first_name . ' ' . $last_name;

    $software = $_POST['software'];
    $endpoints = $_POST['endpoints'];
    $servers = $_POST['servers'];
    $years = $_POST['years'];

    $quote_amount = $_POST['quote_amount'];

    $notes = $_POST['notes'];

    $description = "$first_name $last_name would like to renew $software.\r\n";
    $description .= "Renewal details:\r\n";
    $description .= "AntiMalware software: $software \r\n";
    $description .= "# of endpoints: $endpoints \r\n";
    $description .= "# of servers: $servers \r\n";
    $description .= "# of years: $years \r\n";
    $description .= "They were quoted $quote_amount \r\n";
    $description .= "Notes:\r\n";
    $description .= $notes;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"https://$URL/api/v1/leads?api_key=$API_key");
    curl_setopt($ch, CURLOPT_POST, 1);
    // example splitting a name field into first and last name bits
    curl_setopt($ch, CURLOPT_POSTFIELDS,
        http_build_query(array('first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
            'phone' => $phone,
            'ticket_description' => $description,
            'ticket_subject' => $subject,
        )));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec ($ch);
    curl_close ($ch);
    //redirect to thanks page
    header("Location: $redirect");
    exit();
}




?>
<h1>If you are seeing this long enough to read this, then something is majorly wrong... please contact <a href="mailto:support@example.com">support@example.com</a></h1>
