<?php
function filterEmail($field) {
    //sanitize email address
    $field = filter_var(trim($field),FILTER_SANITIZE_EMAIL);
    //validate email address
    if(filter_var($field,FILTER_VALIDATE_EMAIL)) {
        return $field;
    } else {
        return FALSE;
    }
}
