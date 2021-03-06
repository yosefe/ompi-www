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
<!-- Generated by Doxygen 1.7.1 -->
<div class="navigation" id="top">
  <div class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&nbsp;Page</span></a></li>
      <li class="current"><a href="pages.php"><span>Related&nbsp;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&nbsp;Structures</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
</div>
<div class="header">
  <div class="headertitle">
<h1>Related Pages</h1>  </div>
</div>
<div class="contents">
Here is a list of all related documentation pages:<ul>
<li><a class="el" href="termsanddefs.php">Terms and Definitions</a>
</li>
<li><a class="el" href="tools.php">Command-line tools</a>
</li>
<li><a class="el" href="envvar.php">Environment variables</a>
</li>
<li><a class="el" href="interoperability.php">Interoperability with other software</a>
</li>
<li><a class="el" href="threadsafety.php">Thread safety</a>
</li>
<li><a class="el" href="embed.php">Embedding hwloc in other software</a>
</li>
<li><a class="el" href="switchfromplpa.php">Switching from PLPA to hwloc</a>
</li>
</ul>
</div>
<?php
include_once("$topdir/includes/footer.inc");
