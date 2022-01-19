<?php

session_start();
$class = $_GET["i"];
$str = "<option selected disabled>Select</option>";
$days = array("monday", "tuesday", "wednesday", "thursday", "friday", "saturday");
$day = $days[($class - 8) / 8];
$periods = array("period1", "period2", "period3", "period4", "period5", "period6");
$period = $periods[($class - 1) % 8];
$q = mysqli_query(mysqli_connect("localhost", "root", "", "dbtest"), "SELECT * FROM staff ");
while ($row = mysqli_fetch_assoc($q)) {
    $query = mysqli_query(mysqli_connect("localhost", "root", "", "dbtest"), "SELECT * FROM " . $row['s_id'] . " WHERE day = '$day'");
    $r = mysqli_fetch_assoc($query);
    if ($r[$period] == "-<br>-" || $r[$period] == "-<br>" || $r[$period] == "-") {
        $str .= " \"<option value=\"{$row['s_id']}\">{$row['s_name']}</option>\"";
    }
}
echo $str;
?>