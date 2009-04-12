<?php
include "8440head.php";
?>



<center>
<h1>
<font color="#931515" size="+3">COMP8440: Lab Setup (2009)</font>
</h1>
</center>

<h2>Background</h2>

<p>The course will utilise the new (in 2009) N115/N116 combined 40 place lab in the CSIT building. This lab has 40 machines each with 3.0GHz Pentium D CPUs, 2GB RAM, a 160GB hard disk and a 17" LCD monitor. The machines are networked onto a single VLAN with 100MBps ethernet.</p>

<p>The machines in the lab are normally used by CS courses with a software image based on Ubuntu Hardy (8.04) Linux (from April, 2008). The machines are set to "network boot" and obtain their software image from a lab server. This image is not suitable for use by this course as it does not allow students to add their own packages, nor to gain superuser access in normal use.</p>

<p>The challenge has been to provide a lab environment where students can "own" the software installation on "their" machine in the lab, to be able to save that image to the course server and to be able to quickly restore it to another machine in the event of a hardware failure. We also need to be able to get the machines running with their normal image in a timely fashion as other classes will need to use the machines after the intensive part of our course is complete.</p>

<p>To solve this requirement, we have set up an additional disk partition on each of the lab machines and set up additional network boot options to allow an encrypted filesystem on this partition to be the main (root) filesystem whilst the machines are being used by this course. The encrypted filesystem should prevent other lab users from accidentally or deliberately interfering with each FOSSD students setup.</p>

<p>To speed up the installation for the first lab, we have pre-installed Ubuntu Intrepid, released in October, 2008, hence with release number 8.10. It is anticipated that Ubuntu will release their next stable release sometime during the week of the intensive part of the course. This release will be Jaunty with release number 9.04 (for April, 2009).</p>

<h2>Initial Setup</h2>

<p>Each machine in the N115/N116 lab has already had its disk repartitioned to include the new 85GB partition as /dev/sda8 and an initial copy of the "master" image for FOSSD 2009, based on the Ubuntu Intrepid (8.10) Linux distribution.</p>

<p>For the first (initial) setup, you will need to log into the machine whilst it is booted in the normal lab environment.</p>

<p>On your desktop you should see a icon "Setup FOSSD". Click that.</p>

<p>A new terminal window should appear and you will be prompted for your login password (to allow you "superuser" access).</p>

<p>Then you will be prompted for a password for the encrypted filesystem, twice. You can press the "Enter" key each time to use the default FOSSD password for the encrypted filesystem (written up on the whiteboard in the lab), or you can make up a new password - but don't forget it!</p>

<p>Then you may be prompted for your login password one last time before the system initialises the partition with the Ubuntu Intrepid image we have prepared. As a part of this initialisation, an account will be created for you in this image.</p>

<p>When that is complete, you can reboot your machine and then select "fossd" from the network boot prompt which will boot into the encrypted filesystem. You will be prompted for the password you have chosen for the encrypted filesystem.</p>

<?php
include "8440tail.php";
?>



