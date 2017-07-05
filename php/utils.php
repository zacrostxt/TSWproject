<?php
function dateExtract($date) {
    $result = "";

    $convert_date = strtotime($date);
    $month = date('F', $convert_date);
    $year = date('Y', $convert_date);
    $day = date('j', $convert_date);

    $result = "<span class='date-day'>" . $day . "</span><br><span class='date-month'>"
            . $month. "</span><br><span class='date-year'>". $year . "</span>";

    return $result;
}
