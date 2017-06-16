<?php
function process_field($field)
{
    $field = trim($field);
    $field = strip_tags($field);
    $field = htmlentities($field);

    return $field;
}

function echo_if_exists($var)
{
    if($var)
    {
        echo $var;
    }
}
?>