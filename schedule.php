<?php
include "8440head.php";
?>



<center>
<h1>
<font color="#931515" size=+3>COMP8440: Schedule</font>
</h1>



<table border="0">
<tbody><tr>

<td rowspan="3" valign="top" width="80%">

<p>
<h2>Course Schedule</h2>

</td>
</tr>

</tbody></table>

<p><div align="center">
  <?php
    print " Last modified: ";
    $last_modified = getlastmod();
    print(date("j/m/Y, H:i", $last_modified));
  ?>
<div><p>

<?php
include "8440tail.php";
?>

