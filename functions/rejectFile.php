<?php
require_once('config/connect.php');
require_once('functions/functions.php');

// print_r(json_encode($_POST));
// print_r(json_encode($_GET));
if (isset($_GET['upload_id'])) {
    if (rejectFile($_GET['upload_id'])) {
        print json_encode([['success' => 'Filing Successfully Rejected!']]);
    } else {
        print json_encode([['error' => 'DB Error Occured']]);
    }
}
