<?php
$topdir = "../../../..";
# Note that we must use the PHP "$$" indirection to assign to the
# "title" variable, because if we list "$ title" (without the space)
# in this file, Doxygen will replace it with a string title.
$ver = basename(getcwd());
$thwarting_doxygen_preprocessor = "title";
$$thwarting_doxygen_preprocessor = "Portable Hardware Locality (hwloc) Documentation: $ver";
$header_include_file = "$topdir/projects/hwloc/doc/$ver/www.open-mpi.org-css.inc";

include_once("$topdir/projects/hwloc/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/code.inc");
?>
<!-- Generated by Doxygen 1.6.1 -->
<div class="navigation" id="top">
  <div class="tabs">
    <ul>
      <li><a href="index.php"><span>Main&nbsp;Page</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&nbsp;Structures</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div class="tabs">
    <ul>
      <li><a href="files.php"><span>File&nbsp;List</span></a></li>
      <li><a href="globals.php"><span>Globals</span></a></li>
    </ul>
  </div>
</div>
<div class="contents">
<h1>linux.h File Reference</h1>
<p>Macros to help interaction between hwloc and Linux.  
<a href="#_details">More...</a></p>
<code>#include &lt;<a class="el" href="hwloc_8h_source.php">hwloc.h</a>&gt;</code><br/>
<code>#include &lt;stdio.h&gt;</code><br/>

<p><a href="linux_8h_source.php">Go to the source code of this file.</a></p>
<table border="0" cellpadding="0" cellspacing="0">
<tr><td colspan="2"><h2>Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a>&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__linux__cpumap.php#gaaa0078dd3d869600622243b4e52936b2">hwloc_linux_parse_cpumap_file</a> (FILE *file)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Convert a linux kernel cpumap file <code>file</code> into hwloc CPU set.  <a href="group__hwlocality__linux__cpumap.php#gaaa0078dd3d869600622243b4e52936b2"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<p>Macros to help interaction between hwloc and Linux. </p>
<p>Applications that use hwloc on Linux may want to include this file if using some low-level Linux features. </p>
</div>
<?php
include_once("$topdir/includes/footer.inc");
