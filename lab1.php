<?php
include "8440head.php";
?>



<center>
<h1>
<font color="#931515" size="+3">COMP8440: Lab1 - building a2ps</font>
</h1>
</center>

<h2>Lab Setup</h2>

As this is the first lab, you should read the <a
href="labsetup.php">Lab Setup</a> page and follow the instructions on
that page to get the FOSSD environment installed and running.

<p>Next, you should join the <a
href="http://dubhe.anu.edu.au/cgi-bin/mailman/listinfo">comp8440
mailing list</a> using your ANU student email account. Note that you
will need to be able to receive email to that account while in the
lab. You will find that the email icon in the main menu bar of your
lab system should be already setup for accessing your ANU mail account<p>

<h2>Investigating a2ps</h2>

The aim of this lab is to build and install the 'anything to
postscript' a2ps project. The a2ps project has been chosen as it
provides an illustration of the many of the types of problems you are
likely to run into with your own project.<p>

During this lab we will be spending quite a lot of time running
through the various steps below on the projector, while you follow
along on your own system. If you run into trouble on your own system,
then we will be able to display your screen on the projector, so we
can work through the solution for the benefit of all the students.<p>

The lab has a number of parts:

<ul>
<li>Investigate the project
  <ul>
  <li>Who wrote it?
  <li>Who supports it?
  <li>Where would you submit a bug report?
  <li>Where would you get help?
  <li>How do you get the source code?
  <li>How active is development?
  </ul>
<li>Download the source code
<li>Build and install it
</ul>

<h2>Downloading the code</h2>

The source code for a2ps can be downloaded in several different ways,
each of which leads to a different level of difficulty in building the
project.<p>

If you have time in this lab, try to download and build via all 3 of
the following mechanisms:

<ul>
<li>Using the apt package manager
<li>Using a release tarball
<li>using a source code management system
</ul>

You should read the <a href="building.php">build tips</a> page for
information on each of these approaches.<p>

What are the advantages and disadvantages of each approach?

<h2>SCM Tips</h2>

You may find some of the tips on the <a href="scm-tips.php">SCM
Tips</a> page useful for this lab.

<p><div align="center">
  <?php
    print " Last modified: ";
    $last_modified = getlastmod();
    print(date("j/m/Y, H:i", $last_modified));
  ?>
</div><p>

<?php
include "8440tail.php";
?>



