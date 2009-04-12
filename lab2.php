<?php
include "8440head.php";
?>



<center>
<h1>
<font color="#931515" size="+3">COMP8440: Lab2 - choice of 5</font>
</h1>
</center>

The aim of this lab is similar to the previous 'a2ps' lab, but you
will have a choice of 5 projects to investigate. The idea is to expose
you to a wider range of common FOSS project ideas.

The 5 projects are:

<ul>
<li>FreeCIV
<li>gedit
<li>Battle for Wesnoth
<li>Stellarium
<li>OpenOffice.org
</ul>

The level of difficulty in building these projects varies quite a
lot. As a rough guide, the above list is approximately in order of
difficulty, with FreeCIV being the easiest and OpenOffice.org the
hardest. In order to maximize exposure of each students to as many
projects as possible, when a student runs into difficulties we will
often display their screen on the projector so we can discuss the
problem as a class, and try to come to a solution together.<p>

The level of difficulty is also heavily dependent on what method you
use to fetch the source code. If you are very inexperienced with
building FOSS packages, then the easiest approach will be to use the
package manager to download the sources. If you are more experienced,
then you should try to build the project using the latest development
version (downloaded using a source code management system).<p>

<h3>Helping other students</h3>

Cooperation between developers is one of the cornerstones of FOSS
development. So please help out your fellow students if they are stuck
and you know what the problem is. If you think the problem is of wider
interest, then ask Bob or Andrew to display the students screen on the
projector.

<h3>Faster download</h3>

Some of the above project are very large, and downloading the source
code using a SCMS may take too long for this lab. For that reason we
have put a snapshot of some of the project trees in
/comp8440/sources. See the build tips page for more information.

<h3>Things to think about</h3>

Here are some things to work out about the project you are building

<ul>
<li>How active is development? How many people have contributed
changes in the last year?
<li>What method does the project use to customise itself to your
system?
<li>How is the documentation for the project written?
<li>How does the project handle releases? Does it use branches?
<li>How does the project fit in with other projects? What does it
depend on?
<li>How do the developers for the project communicate?
<li>How do you submit changes to the project?
</ul>

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



