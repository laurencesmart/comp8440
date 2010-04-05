<?php
include "8440head.php";
?>



<center>
<h1>
<font color="#931515" size="+3">COMP8440: Build Tips</font>
</h1>
</center>

<h1>What is a package?</h1>

<p>A 'package' contains a set of binaries for a particular program. On
the Ubuntu systems used in the COMP8440 lab, these packages normally
have a filename ending in '.deb'.</p>

<p>Normal users of Ubuntu systems would usually install packages using
  the 'package manager' of the system. That can either be done on the
  command line using the 'apt-get install' command, or via the
  graphical package manager under the System->Administration menu on
  your desktop.</p>

<p>In this course you are learning how to participate in FOSS
  development, so you will be learning how to build your own packages
  from the source code.</p>


<h1>Building a package</h1>

Building a FOSS project can be tricky. You need to work out where
to get the source from, you need to install all the package
dependencies, and you need to sort through the idiosyncrasies of the
packages build system.

<h2>Downloading the source</h2>

There are a number of common ways to get the source code for a FOSS
package. The main ones are:

<ul>
<li>Using the package manager for your distribution</li>
<li>Downloading a release tarball</li>
<li>Downloading via the projects source code management system</li>
</ul>

<h3>Using the package manager</h3>

Nearly all FOSS operating system distributions include a 'package
manager' which allows you to manage what software packages are
installed on your system. On the COMP8440 Ubuntu lab systems the
package manager is called 'apt'.<p>

Most package managers have the ability to ask for the source code
for a particular package to be downloaded. With apt on Ubuntu the
command is:

<pre><b>
  apt-get source PACKAGE
</b></pre>

This will typically download 4 things in to the current directory:

<ul>
<li>The original tarball of the upstream package
<li>A .dsc description of the package
<li>A set of compressed patches to the upstream package 
<li>An unpacked, patched, version of the package that is ready to
build
</ul>

The original tarball is useful if you want to see what the upstream
maintainer provided (this is usually a copy of the official release
from the package author).<p>

The .dsc file is useful because it contains a text description of the
package, and in particular it contains a list of all of the packages
build dependencies.<p>

The patches show you what changes the distribution made to the package
when including it into the distribution. These changes may be just
cosmetic, or may fix bugs that are not yet fixed in the official
release<p>

The unpacked source is what you will need to actually build the
package yourself. On Debian/Ubuntu systems this contains rules which
tell the system how to build the package. To build the package, run
the following command from within the source directory of the package:

<pre><b>
  dpkg-buildpackage
</b></pre>

That will build one or more '.deb' files in the directory above the
source directory. You can install that deb file like this:

<pre><b>
  sudo dpkg -i FILENAME.deb
</b></pre>

After that you can use the commands in the package.

When you no longer want the package, you should remove it using:

<pre><b>
  sudo apt-get remove PACKAGE
</b></pre>


<h3>Using a release tarball</h3>

Once you find the home page for the package you are interested in, you
can usually find a 'release tarball'. This contains the source code
for an official release of the package.<p>

Once you've unpacked that tarball using something like this:

<pre><b>
  tar xvzf package-x.y-z.tar.gz
</b></pre>

You can start looking at the source code. Usually there is a text file
in the top level directory which explains how to build the package, or
there may be build instructions on the packages web site. There are
many variants on how to build FOSS packages, but some common ones are:

<ul>
<li>A configure script, followed by make
<li>A bootstrap.sh script
<li>A autogen.sh script, followed by make
<li>A build.sh script
</ul>

In each case, you will need to install any package dependencies. See
the build dependencies section of this guide.</p>

A typical set of commands to build a package would be:

<pre></b>
   ./autogen.sh
   ./configure --prefix=$HOME/prefix
   make
   make install
</b></pre>

That would put the build commands in $HOME/prefix/bin. The above
recipe doesn't work for all packages (for example, many don't have an
autogen.sh script), but it will work for a large number of them. Read
the package documentation for the details of building the package you
are working on.

<h3>Using the source code management system</h3>

Most FOSS projects use a source code management system. When you are
thinking about contributing to a project, this is usually the
preferred way to access the source code, as you will have access to
the latest developments made by other contributors.<p>

There are a wide range of SCMs used by FOSS projects. Some of the more
popular ones are:

<ul>
<li>cvs
<li>git
<li>svn (subversion>
<li>bzr (bazaar)
<li>hg (mercurial)
</ul>

The web site for the project usually gives instructions for how to
download the source code using whichever tool is appropriate.<p>

Some of the projects you will be working on for COMP8440 have very
large source trees, and downloading using a SCM may take a very long
time. To save time, we have put copies of a checked out copy of some
of the larger projects in /comp8440/sources. To grab one of those use
a command like this:

<pre><b>
  rsync -av /comp8440/sources/wesnoth .
</b></pre>

Then cd to the directory and use the appropriate SCM to get any
updates. For example, if the project uses svn, then use the command:

<pre><b>
  svn update
</b></pre>


<h2>Build Dependencies</h2>

One of the trickier aspects of building a FOSS project can be
installing all of the necessary build dependencies. A build dependency
is another package that must be installed in order to build the
package you want to build.<p>

There are several ways to find and install the build dependencies:

<ul>
<li>Using your package manager
<li>Look at the package documentation
<li>Looking in the dsc file
<li>Trial and error
</ul>

<h3>Using your package manager</h3>

Some package managers have a feature that allows you to automatically
install all the build dependencies for an already packaged project. For
example, on Ubuntu/Debian systems, you can run this:

<pre><b>
  sudo apt-get build-dep PACKAGE
</b></pre>

<p>That is a very easy way to get the build dependencies installed. Be
aware though that if you are trying to install a different version
that what the distribution currently has packaged, you may find you
need some additional packages.</p>

<p>Sometimes you may find you need newer packages than what is
  currently in Ubuntu Karmic. We have setup the lab machines to allow
  you to easily pull packages from the next Ubuntu system, Ubuntu
  Lucid, when you need them. To pull in the build dependencies for
  package PACKAGE from Lucid use:</p>

<pre><b>
  sudo apt-get -t lucid build-dep PACKAGE
</b></pre>


<h3>Looking at the package documentation</h3>

Many FOSS projects have developer information on their web sites which
describes what packages you need to install in order to build the
project. It can sometimes be tricky to match the names in the
documentation to the names of the packages in your distribution. Try
using the synaptic package manager, or doing a google search for what
you are trying to match.

<h3>Looking in the dsc file</h3>

If you downloaded the package source using 'apt-get source' then the
.dsc file should contain a Build-Depends line which lists the packages
that this package depends on. That can be a very good starting point
for what you need to install. 

<h3>Trial and error</h3>

This approach is just what it sounds like, and it is often needed in
addition to one of the methods above. You try and build the package,
and you see what errors it gives. You examine the errors and from
there try to work out what dependent packages need to be
installed. Remember that you often want the 'development' version of
the package - so if you have a choice, look for one ending in '-dev'.<p>

The search feature in synaptic, or the command 'apt-cache search' is
very useful in trying to find the right package.

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



