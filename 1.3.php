<?php

/**
 * Remove extra brackets
 * @param string $str
 * @return string
 */
function removeExtraBrackets(string $str): string
{
    return preg_replace('~(\){2,})~', ')', $str);
}