<?php

function str_startswith ( $candidate, $search_str )
{
    return mb_substr( $candidate, 0, mb_strlen( $search_str) ) == $search_str;
}

?>
