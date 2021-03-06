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
<!-- Generated by Doxygen 1.7.3 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li class="current"><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
</div>
<div class="header">
  <div class="headertitle">
<h1>Frequently Asked Questions </h1>  </div>
</div>
<div class="contents">
<div class="textblock"><h2><a class="anchor" id="faq_xml"></a>
I do not want hwloc to rediscover my enormous machine topology every time I rerun a process</h2>
<p>Although the topology discovery is not expensive on common machines, its overhead may become significant when multiple processes repeat the discovery on large machines (for instance when starting one process per core in a parallel application). The machine topology usually does not vary much, except if some cores are stopped/restarted or if the administrator restrictions are modified. Thus rediscovering the whole topology again and again may look useless.</p>
<p>For this purpose, hwloc offers XML import/export features. It lets you save the discovered topology to a file (for instance with the lstopo program) and reload it later by setting the HWLOC_XMLFILE environment variable. Loading a XML topology is usually much faster than querying multiple files or calling multiple functions of the operating system. It is also possible to manipulate such XML files with the C programming interface, and the import/export may also be directed to memory buffer (that may for instance be transmitted between applications through a socket).</p>
<h2><a class="anchor" id="faq_upgrade"></a>
How do I handle API upgrades?</h2>
<p>The hwloc interface is extended with every new major release. Any application using the hwloc API should be prepared to check at compile-time whether some features are available in the currently installed hwloc distribution.</p>
<p>To check whether hwloc is at least 1.1, you should use: </p>
<div class="fragment"><pre class="fragment">
#include &lt;hwloc.h&gt;
#if HWLOC_API_VERSION &gt;= 0x00010100
...
#endif
</pre></div><p>One of the major changes in hwloc 1.1 is the addition of the bitmap API. It supersedes the now deprecated cpuset API which will be removed in a future hwloc release. It is strongly recommended to switch existing codes to the bitmap API. Keeping support for older hwloc versions is easy. For instance, if your code uses <code>hwloc_cpuset_alloc</code>, you should use <code>hwloc_bitmap_alloc</code> instead and add the following code to one of your common headers: </p>
<div class="fragment"><pre class="fragment">
#include &lt;hwloc.h&gt;
#if HWLOC_API_VERSION &lt; 0x00010100
#define hwloc_bitmap_alloc hwloc_cpuset_alloc
#endif
</pre></div><p>Similarly, the hwloc 1.0 interface may be detected by comparing <code>HWLOC_API_VERSION</code> with <code>0x00010000</code>.</p>
<p>hwloc 0.9 did not define any <code>HWLOC_API_VERSION</code> but this very old release probably does not deserve support from your application anymore. </p>
</div></div>
<?php
include_once("$topdir/includes/footer.inc");
