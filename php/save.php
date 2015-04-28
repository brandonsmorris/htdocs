<?php
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'switch':
            insert();
            break;
        case 'switch':
            select();
            break;
    }
}

function select() {
    $sql = "UPDATE shelters SET `state` = NOT state";;
	mysql_query($sql);
    exit;
}

function insert() {
    $sql = "UPDATE shelters SET `state` = NOT state";;
	mysql_query($sql);
}
?>