<?php
$value1 = $_REQUEST['firstvalue'];
$value2 = $_REQUEST['secondvalue'];
$operator = $_REQUEST['operator'];

if ($operator == "+") {
  $resultat = intval($value1) + intval($value2);
} else if ($operator == "-") {
  $resultat = intval($value1) - intval($value2);
} else if ($operator == "*") {
  $resultat = intval($value1) * intval($value2);
} else {
  $resultat = intval($value1) / intval($value2);
};
