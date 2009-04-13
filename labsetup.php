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

<p>Then you will be prompted for a passphrase for the encrypted filesystem, twice. You can press the "Enter" key each time to use the default FOSSD passphrase for the encrypted filesystem (written up on the whiteboard in the lab), or you can make up a new passphrase - but don't forget it!</p>

<p>Then you may be prompted for your login password one last time before the system initialises the partition with the Ubuntu Intrepid image we have prepared. As a part of this initialisation, an account will be created for you in this image.</p>

<p>When that is complete, you can reboot your machine and then select "fossd" from the network boot prompt which will boot into the encrypted filesystem. You will be prompted for the passphrase you have chosen for the encrypted filesystem. It is <b>very</b> important that you do not forget this passphrase!</p>

<h2>FOSSD Lab Environment</h2>
<p>The "standard environment" that we have prepared for each FOSSD lab machine includes the standard Ubuntu Intrepid "Gnome" desktop environment with a couple of customisations:</p>
<ul>
<li>There is a "Terminal" icon in the task bar so that you can quickly get a shell (commandline) prompt</li>
<li>We have installed a number of packages including most of the common version control systems</li>
<li>There is a "Backup System" icon (see below)</li>
<li>There is a "Pidgin" Internet Relay Chat/Messenger icon to start "pidgin"</li>
<li>Firefox has some useful plugins added: Add Block Plus (ABP); Zotero and Scrapbook</li>
<li>Firefox hompage is set to our COMP8440 course page</li>
<li>under "Places" there is a link to your files on the "dubhe" FOSSD course server<li>
</ul>

<h2>FOSSD Lab Server</h2>
<p>A dedicated file server has been set up for the FOSSD course for 2009. This server has the DNS name "dubhe.anu.edu.au" and is accessible from most anywhere on the Internet. You can log into this server from anywhere using Secure SHell (ssh), your standard ANU UniID and associated password. Please do not run large (CPU-intensive) jobs on this machine as it will be used heavily during the course for backups etc.</p>

<p>Also, although this server has more or less unrestricted access to the Internet, please do not use this to run peer-to-peer applications (unless that is a part of your chosen Open Source project) or in any other way abuse access to this machine and it's Internet connection.</p>

<h2>Backing up your work</h2>
<p>As a part of the Ubuntu Intrepid software image we have prepared for you, there is an icon on the desktop "Backup System". Double clicking on that icon will backup your entire system image (including any new packages you have installed and your home directory). You may be prompted for your password on the FOSSD lab server.</p>

<h2>Restoring your environment</h2>
<p>You can restore your system environment even when you are booted into the FOSSD system by running the following command in a terminal:</p>
<pre>
sudo /comp8440/bin/restore_fossd_system
</pre>
<p>Make sure you have saved any work you are currently editing etc. and have "Backup System" your system!. After running the restore command, you should use the "&lt;ctrl&gt;&lt;alt&gt;&lt;Backspace&gt; triple key-press to kill the running X-windows server and then you can re-login.</p>

<p>You can also restore your environment onto another system (even one that someone else may have been using - so please be considerate and be careful!). Boot your lab machine using the "net" image and then follow the instructions as for an Initial Setup (above). If you change your encrypted filesystem passphrase, you will get a fresh install, which will take longer and will destroy any work already on the machine (including someone elses).</p>

<h2>Final Note</h2>
<p>You MUST backup your work regularly (using the "Backup System" icon on your desktop) as there is a possibility of hardware failure, software failure, accidental deletion and someone overwriting your encypted filesystem. You have been warned (again!).</p>

<?php
include "8440tail.php";
?>



