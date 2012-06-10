<?php

/**
 * CsvSafe Helper - Clean string for csv
 *
 * This program is free software. It comes without any warranty, to
 * the extent permitted by applicable law. You can redistribute it
 * and/or modify it under the terms of the Do What The Fuck You Want
 * To Public License, Version 2, as published by Sam Hocevar. See
 * http://sam.zoy.org/wtfpl/COPYING for more details.
 *
 * @package    symfony
 * @subpackage plugin
 * @author     Ilan Cohen <ilanco@gmail.com>
 * @homepage   https://github.com/ilanco/icCsvSafePlugin
 */

define('ESC_CSVSAFE', 'esc_csvsafe');
define('ESC_CSVSAFE_NOQUOTE', 'esc_csvsafe_noquote');

/**
 * The function escapes content for a csv column.
 *
 * @param   string  $dirty_string the value to clean
 * @return  string  the escaped value
 */
function esc_csvsafe($dirty_string)
{
    $clean_string = '"' . esc_csvsafe_noquote($dirty_string) . '"';

	return $clean_string;
}

function esc_csvsafe_noquote($dirty_string)
{
    if (false === $dirty_string || null === $dirty_string || 0 === $dirty_string) {
        return '';
    }

    $clean_string = str_replace(",", "", $dirty_string);
    $clean_string = str_replace("\"", "", $clean_string);
    $clean_string = str_replace("\n", "", $clean_string);

    return $clean_string;
}

