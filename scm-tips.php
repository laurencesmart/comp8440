<?php
include "8440head.php";
?>

<center>
<h1>
<font color="#931515" size="+3">COMP8440: SCM Tips</font>
</h1>
</center>

<h1>SCM Tips</h1>

As part of your lab work, you will be using a number of source code
management systems. For detailed information on how to use them you
should read the documentation of each system, but in case you need to
get up to speed quickly, here are some basic pointers.

<h2>svn (subversion)</h2>

<ul>
<li>Typical Initial checkout
<pre><b>svn co svn://svn.gnome.org/svn/gedit</b></pre>
<li>Updating your tree with the latest changes
<pre><b>svn update</b></pre>  
<li>Reverting your tree, discarding any local changes
<pre><b>svn revert .</b></pre>  
<li>Listing the changed files in your tree
<pre><b>svn status</b></pre>  
<li>Produce a patch showing your local changes
<pre><b>svn diff</b></pre>  
<li>Show recent commits
<pre><b>svn log</b></pre>  
</ul>

<h2>git</h2>

<ul>
<li>Typical Initial checkout
<pre><b>git clone git://git.samba.org/tridge/ctdb.git ctdb</b></pre>
<li>Updating your tree with the latest changes
<pre><b>git pull</b></pre>  
<li>Reverting your tree, discarding any local changes
<pre><b>git reset --hard; git clean -f</b></pre>  
<li>Listing the changed files in your tree
<pre><b>git status</b></pre>  
<li>Produce a patch showing your local changes
<pre><b>git diff</b></pre>  
<li>Committing all your changes
<pre><b>git commit -a</b></pre>  
<li>Show recent commits
<pre><b>git log</b></pre>  
<li>Show recent commits, with patches
<pre><b>git log -p</b></pre>  
</ul>

<h2>cvs</h2>

<ul>
<li>Typical Initial checkout
<pre><b>cvs -d :pserver:cvs@pserver.samba.org:/cvsroot co ccache</b></pre>
<li>Updating your tree with the latest changes
<pre><b>cvs update</b></pre>  
<li>Reverting your tree, discarding any local changes
<pre><b>rm CHANGEDFILES; cvs update</b></pre>  
<li>Listing the changed files in your tree
<pre><b>cvs status</b></pre>  
<li>Produce a patch showing your local changes
<pre><b>cvs diff -up</b></pre>  
<li>Show all commits
<pre><b>cvs log</b></pre>  
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



