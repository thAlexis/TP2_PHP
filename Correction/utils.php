<?php

function traiter($infinitif, $temps)
{
  $terminaisons_futur = ['erai', 'eras', 'era', 'erons', 'erez', 'eront'];
  $terminaisons_present = ['e', 'es', 'e', 'ons', 'ez', 'ent'];
  $terminaisons_imparfait = ['ais', 'ais', 'ait', 'ions', 'iez', 'aient'];
  $resultat = "";
  // récupérer le radical
  $radical = substr($infinitif, 0, strlen($infinitif) - 2);
  if ($temps == "present") {
    $resultat = conjuguer($radical, $terminaisons_present);
  } elseif ($temps == "futur") {
    $resultat = conjuguer($radical, $terminaisons_futur);
  } else {
    $resultat = conjuguer($radical, $terminaisons_imparfait);
  }
  return $resultat;
}

function conjuguer($radical, $terminaisons)
{

  $pronoms = ['Je ', 'Tu ', 'IL/Elle ', 'Nous ', 'Vous ', 'Ils '];

  $resultat = "<ul class=resultat>";
  foreach ($pronoms as $key => $pronom) {
    $resultat .= "<li>$pronom $radical" . $terminaisons[$key] . "</li>";
  }
  $resultat .= "</ul>";
  return $resultat;
}

function calculer($v1, $v2, $op)
{
  try {
    $r =  match ($op) {
      '+'  =>  $v1 + $v2,
      '-'  =>  $v1 - $v2,
      '*'  =>  $v1 * $v2,
      '/'  =>  $v1 / $v2,
    };
  } catch (DivisionByZeroError $ex) {
    $r = "Problème de division par zéro";
  }

  return $r;
}
