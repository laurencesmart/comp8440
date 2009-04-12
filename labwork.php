<?php
include "8440head.php";
?>



<center>
<h1>
<font color="#931515" size="+3">COMP8440: Lab Work</font>
</h1>
</center>

A major part of COMP8440 is the practical work. During the five day
intensive part of the course over half the time will be spent in the
lab, and the majority of the <a href="assessment.php">course
assessment</a> is based on the lab work.<p>

The lab work will be run on the Ubuntu Linux systems in the DCS
labs. During the intensive part of the course each student will use
the same lab machine each day, allowing the machine to be customised
to suit the project being worked on (for example, by installing extra
libraries or other package dependencies).<p>

<h1>Introductory labs</h1>

The two labs on the Tuesday and meant to get you started with the idea
of working with FOSS projects. 

<ul>
<li><a href="lab1.php">Lab1: Building a2ps</a></li>
<li><a href="lab2.php">Lab2: Choice of 5</a></li>
<li><a href="lab3-8.php">Lab3-8: project work</a></li>
</ul>

<h1>Selecting a project</h1>

The FOSS project you choose for your lab work will make a big
difference to both your enjoyment of the course, and your ability to
demonstrate your knowledge of the course material in your submitted <a
href="assessment.php">reports</a>.<p>

As a start, we suggest the following criterion for any project you
choose:

<ul>
<li>The project is moderately active. A reasonable rule of thumb is
that the project has had at least several commits per month over the
last few months.
<li>The project must use a FOSS license.
<li>We suggest choosing a project that is at least 3 years old. This
is not a strict rule, but we certainly do not suggest choosing a
project which has only just started.
<li>The project should have produced a usable release. 
<li>The project should be welcoming to new contributors. You may be
able to judge this by looking at the projects mailing list archives.
<li>The project should have several active contributors
<li>The project should be usable on the Ubuntu systems in the DCS lab
</ul>

Of course, the project should also be something that you find
interesting!<p>

<h1>Finding projects</h1>

There are a huge number of FOSS projects to choose from (certainly
hundreds of thousands). If you don't know where to start looking to
find one that suits you, then you may wish to browse through the
project lists on one of these sites:

<ul>
<li><a href="http://freshmeat.net/">http://freshmeat.net/</a></li>
<li><a href="http://gna.org/">http://gna.org/</a></li>
<li><a href="http://sourceforge.net/">http://sourceforge.net/</a></li>
<li><a href="http://savannah.gnu.org/">http://savannah.gnu.org/</a></li>
<li><a href="https://launchpad.net/">https://launchpad.net/</a></li>
<li><a href="http://directory.fsf.org/GNU/">http://directory.fsf.org/GNU/</a></li>
<li><a href="http://packages.debian.org/">http://packages.debian.org/</a></li>
</ul>

You should also look at the language specific development sites for
any programming languages you know. For example, if you know some
perl, you may wish to look at the projects at <a
href="http://cpan.org">http://cpan.org</a>.

<h1>Multiple projects</h1>

In the introductory labs you will be introduced to two FOSS projects,
and after that you need to choose a project for yourself to work on
for your Saturday presentation. After that is complete you can choose
to either stick to that project for your submitted project work
report, or you can choose a different project. If you do decide to
change projects then you should discuss your choice with Andrew or
Bob, to make sure you get some feedback before you start on the major
assessment work.<p>

<h1>Building a FOSS project</h1>

Learning to build a FOSS project from source can be tricky
sometimes. To get you started, you may find the <a
href="building.php">build tips</a> page useful.

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



