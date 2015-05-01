<?php

/*
  Remove non-numeric characters from a string.
*/
function stripNonNumeric($str='') {
    return preg_replace('(\D+)', '', $str);
}