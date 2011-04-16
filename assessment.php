<?php
include "8440head.php";
?>



<center>
<h1>
<font color="#931515" size="+3">COMP8440: Assessment</font>
</h1>
</center>


Course assessment will be divided into 3 parts

<ul>
<li>Short presentation - 15%</li>
<li>Project work - 45%</li>
<li>Project study - 40%</li>
</ul>

<p>Students will have an opportunity to discuss the assessment options
during the information evening.


<h1>Short presentation</h1>

On Saturday the 23rd of April each student will make a short
presentation on their chosen FOSS project. That presentation should
provide basic information on the project and its structure, and
present the work that you have done during the lab times over the
previous week. 

<p>While this presentation is part of your assessment, it is also a
chance for you to get feedback that you can use to help produce good
reports for the remaining two main parts of the assessment.

<p>To assist with your presentation you may choose either to have a
set of LibreOffice slides, or a set of web pages.

<h1>Project work</h1>

<p><b>Due Monday the 23rd of May</b></p>

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


<h1>Project Study</h1>

<p><b>Due Monday the 23rd of May</b></p>

The project study is a moderately detailed study of your chosen FOSS
project. The study should cover all of the aspects of FOSS development
covered in the course that are relevant to the project of your
choice. In the study you should seek to demonstrate your understanding
of the COMP8440 lecture material.<p>

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

<h1>Submission</h1>

Please submit your assignments by the due date
to <a href="mailto:comp8440@cs.anu.edu.au">comp8440@cs.anu.edu.au</a><p>

Please send your assignments either as a PDF or as LibreOffice
documents.

<h1>Plagiarism</h1>

Plagiarism is taken very seriously in this course, and in the FOSS
community in general. If you use someone elses work in making your
assignment, then you must cite that work, giving credit where credit
is due. If you don't then you may receive zero for the whole
assignment. Please cite carefully! If in doubt, ask Bob or Andrew for
assistance.

<h1>Assessment FAQ</h1>

A number of students have asked me some questions later about the assessment.
In case anyone else has similar questions, here are the answers in FAQ format.

<p>Q: Are two separate reports required for the assessment?

<p>A: Yes, one report is the project study, and the other report is on your
project work


<p>Q: What is the difference between the two reports?

<p>A: The 'project study' report is a study of a particular FOSS project
from the point of view of the material we covered during the lectures.
This study is not about what you have contributed to the project, it
is about the project itself, and should cover things like the history
of the project, the culture of the project, how the project interacts
with other projects, the legal and licensing framework for the project,
how the project is funded, how decisions are made, how the project is
governed, what motivates the developers working on the project etc. You
should try to use the report to demonstrate your understanding of the
lecture material.

<p>The other report, called the "project work" report, is about what you
yourself have contributed to the project. It should document all of
your interactions with your chosen project, and should aim to demonstrate
that you understand how to effectively communicate and contribute to a
FOSS project.


<p>Q: Can the two reports be on different FOSS projects?

<p>A: Yes, that is entirely up to you


<p>Q: Can the 'project study' report be on something other than a specific
project, but instead be on a topic that is important for the FOSS
world?

<p>A: Yes, but please contact Bob or myself for approval of a project study
that is not on a specific FOSS project.

<p>Q: I submitted a bug report for my project, and now the bug has
been fixed.  Should I include that in my project work report?

<p>A: yes! The process demonstrates that you are working well with the
development community for your project. You should include your patch
submission, any discussion of the patch and the result of the
submission in your report.

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



