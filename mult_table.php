<?php
echo '<table style="width:100%">';


for ($x = 0; $x <= 100; $x++)
{
  echo '<tr>';
  if ($x == 0)
  {
    echo "<td></td>";
    for ($y = 1; $y <= 100; $y++)
    {
      echo "<td>$y</td>";
    }
  }
  else
  {
    for ($y = 0; $y <= 100; $y++)
    {
      if ($y == 0)
      {
        echo "<td>$x</td>";
      }
      else
      {
        $a = $x*$y;
        echo "<td>$a</td>";
      }
    }
  }
  echo '</tr>';
}
echo '</table>';
?>
