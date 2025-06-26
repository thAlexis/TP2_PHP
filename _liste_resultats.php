<?php
$verbe = $_REQUEST['verbe'];
$temps = $_REQUEST['temps'];
$terminaison = [];
$infinitif_verbe = "";

for ($i = 0; $i < strlen($verbe) - 2; $i++) {
  $infinitif_verbe .= $verbe[$i];
};

if ($temps == "present") {
  $terminaison = ["e", "es", "e", "ons", "ez", "ent"];
} else if ($temps == "futur") {
  $terminaison = ["erai", "eras", "era", "erons", "erez", "eront"];
} else {
  $terminaison = ["ais", "ais", "ait", "ions", "iez", "aient"];
};
?>

<div class="flex li-box">
  <li>
    <ul>
      <p>
        <?php
        echo "Je " . $infinitif_verbe . $terminaison[0]
        ?>
      </p>
    </ul>
    <ul>
      <p>
        <?php
        echo "Tu " . $infinitif_verbe . $terminaison[1]
        ?>
      </p>
    </ul>
    <ul>
      <p>
        <?php
        echo "Il " . $infinitif_verbe . $terminaison[2]
        ?>
      </p>
    </ul>
    <ul>
      <p>
        <?php
        echo "Nous " . $infinitif_verbe . $terminaison[3]
        ?>
      </p>
    </ul>
    <ul>
      <p>
        <?php
        echo "Vous " . $infinitif_verbe . $terminaison[4]
        ?>
      </p>
    </ul>
    <ul>
      <p>
        <?php
        echo "Ils " . $infinitif_verbe . $terminaison[5]
        ?>
      </p>
    </ul>
  </li>
</div>