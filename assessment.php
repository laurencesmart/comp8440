<?php
include "8440head.php";
?>



<center>
<h1>
<font color="#931515" size=+3>COMP8440: Assessment</font>
</h1>
</center>


Course assessment will be divided into 3 parts

<ul>
<li>Short presentation - 15%</li>
<li>Project work - 45%</li>
<li>Project study - 40%</li>
</ul>

<h1>Short presentation</h1>

On Saturday the 18th of April each student will make a short
presentation on their chosen FOSS project. That presentation should
provide basic information on the project and its structure, and
present the work that you have done during the lab times over the
previous week. 

<p>While this presentation is part of your assessment, it is also a
chance for you to get feedback that you can use to help produce good
reports for the remaining two main parts of the assessment.

<p>To assist with your presentation you may choose either to have a
set of OpenOffice.org slides, or a set of web pages.

<h1>Project work</h1>

The project work part of your assessment comes from you working on a
FOSS project of your choice. There are no strict rules on what form
that work should take, but you should try to choose something that
demonstrates your ability to work with the project, and demonstrates
your understanding of the principles of FOSS collaboration.<p>

Assessment for this portion of the course will be based on a report
that you write that describes your involvement with the project. The
report should describe all of your interactions with the project. To
assist you in writing that report, make sure that you keep copies of
all email exchanges with the project, plus logs of any IRC
interactions and copies of relevant web pages (for example bug
submissions). <p>

The FOSS project you choose for this part of your assessment does not
have to be the same project that you chose during the intensive part
of the course (the one you used for your Saturday short
presentation). It is suggested, however, that if you decide to use a
different project that you discuss your choice with one of the course
coordinators (Andrew or Bob).<p>

It is important that the work you do for this part of your assessment
is not done in isolation from the other contributors to your chosen
FOSS project. You should not work alone on a patch or other
contribution and then submit it to the project at the last
minute. Instead, you should discuss your contribution as soon as
possible, and actively participate in a cycle of review and
improvement, with the aim of producing a useful contribution to the
project.<p>

It is also not a requirement that the project accept your contribution
to get a good mark for this part of your assessment. With the short
time available for this course, it is expected that many students will
be not have an accepted submission by the time the project work report
is due. What you should aim to demonstrate in your report is that you
are following the established practices for your chosen project, and
that you have been working towards a useful contribution.<p>

You also do not need to restrict yourself to a single contribution to
the project. For example, you may wish to make contributions to
several different areas of the project. Contributions to the
documentation, web pages, test suites and bug handling can be just as
important as contributions to the projects source code.<p>

<h2>Capturing interactions with your project</h2>

In order to be able to write a good report, it is important that you
keep good logs on your interactions with your chosen project.<p>

For logging of interactions with the project that happen via web
pages, the 'scrapbook' extension to Firefox is strongly
recommended. You should get in the habit of using 'Capture Page' in
scrapbook to capture key web pages as you come across them.<p>

If your chosen project uses an instant messaging system for
communication (for example, an IRC channel), then make sure you enable
logging in the IM tool you use. For example, if you use the 'pidgin'
tool, then make sure that 'Enable Logging' is set in the Options menu,
and make sure you find out where the tool is storing logs of your
conversations.<p>

For command line interactions (for example building a project), you
should get used to using the 'script' command to capture terminal
output. See the script(1) manual page for details.

<h1>Project Study</h1>

The project study is a moderately detailed study of your chosen FOSS
project. The study should cover all of the aspects of FOSS development
covered in the course that are relevant to the project of your
choice. In the study you should seek to demonstrate your understanding
of the COMP8440 course material.<p>

The subject of your project study does not need to be the same FOSS
project as the one you used for the project work portion of your
assessment. For example, if you think that the project you have been
working with will not easily allow you to demonstrate your knowledge
of the course material, then you may wish to choose a different
project. You may also include information about more than one project
if that helps, perhaps by comparing and contrasting aspects of two
projects.<p>

As a rough guide, the report is expected to be about 10 to 15 pages
long.<p>

The study should cover at least:<p>
<ul>
<li>The history of the project</li>
<li>The project governance structure</li>
<li>The projects source code management practices</li>
<li>Statistics on project contributors</li>
<li>Information on who uses the project</li>
<li>Information on any interactions or relationships with other projects</li>
<li>Legal and licensing information</li>
<li>The motivations behind the project</li>
<li>How releases are managed</li>
<li>How bug tracking is handled</li>
</ul>

If possible you should try to document the discussions and background
that led to the choices the project made. <p>

You should try where possible to research the answers through publicly
available materials. If you can't find the answers that way, then you
can contact project members, but you should make it clear that you are
working on a university project. Including a link to the <a
href="http://cs.anu.edu.au/students/comp8440/">COMP8440 web site</a>
in your first contact with a project member is a good way to do this.


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



