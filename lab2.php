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

<p>In this lab you will also need to create a patch against your
chosen project, and submit that patch to the <a
href="mailto:comp8440@fossd.anu.edu.au">comp8440@fossd.anu.edu.au</a>
mailing list. Then you should look for another students patch
submission for the same project apply their patch, and send back a
reply to them commenting on their patch.

<p>The 5 projects are:

<ul>
<li>FreeCIV
<li>gedit
<li>Battle for Wesnoth
<li>gimp
<li>LibreOffice
</ul>

The level of difficulty in building these projects varies quite a
lot. As a rough guide, the above list is approximately in order of
difficulty, with FreeCIV being the easiest and LibreOffice the
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

Note: Please read the <a href="building.php">build tips</a> page
carefully before you start!

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
/comp8440/sources. See the <a href="building.php">build tips</a> page
for more information.

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

<h3>Patch submission</h3>

Once you have successfully built the project, you should generate a
patch against it, and submit that patch to the comp8440 mailing list.

<p>To generate a patch, first make a code change of some sort. It is
not necessary for this to be a serious or substantial code change -
any small change will do for the purposes of this lab.

<p>Once you have made the change, you will need to generate the
patch. You can either use the 'diff' tool, or you can use the builtin
patch generation in a source code management tool if you used one to
download the package. 

<p>Your patch submission should meet the following criterion:

<ul>
<li>You must have tested that your change works
<li>It should be in diff -up format
<li>The patch should be inline in the email, not sent as an attachment
<li>It should contain the diffstat output at the front
<li>It should contain an explanation of your changes
<li>It should have a clear subject, prefixed with "[PATCH]"
<li>It should say "Signed-off-by: YOUR EMAIL"
</ul>

If you want to see some examples of patches, you might like to look at
the <a href="http://marc.info/?l=linux-kernel">Linux kernel mailing
list</a>, for messages starting with "[PATCH]"

<h3>Patch acceptance</h3>

After submitting a patch, wait for someone else in the lab to submit a
different patch for the same project. You should then examine their
patch, and try to apply it to your copy of the project. You will need
to use the 'patch' tool to do that. 

<p>A typical patch command would be:
<pre><b>
  patch -p1 < somepatch.patch 
</b></pre>

<p>After examining and testing their patch, you should either accept
it or reject it by sending a reply to the person submitting the
patch. You should make sure your reply is CCd to the mailing list. In
your reply you should explain your acceptance or rejection of the
patch. If you reject their patch, then you should watch for a further
email from them fixing whatever problems you identified in their
patch. If the patch is now acceptable, you can reply saying that you
accept their patch.

<h3>Lab continuation</h3>

Don't worry if you don't complete the work for this lab in the time
alotted. You can continue with this lab during the next lab session if
need be.

<h3>SCM Tips</h3>

You may find some of the tips on the <a href="scm-tips.php">SCM
Tips</a> page useful for this lab.

<h1>MAKE SURE YOU BACKUP</h1>

Make sure you do a backup at the end of the lab, or you may lose all
your work.

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



