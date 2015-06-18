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
<!-- Generated by Doxygen 1.8.9.1 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
    </ul>
  </div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">Interoperability with OpenFabrics</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:ga3ea0d838c1e7f1671b35687aae2da6ae"><td class="memItemLeft" align="right" valign="top">static int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00115.php#ga3ea0d838c1e7f1671b35687aae2da6ae">hwloc_ibv_get_device_cpuset</a> (<a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, struct ibv_device *ibdev, <a class="el" href="a00075.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> set)</td></tr>
<tr class="separator:ga3ea0d838c1e7f1671b35687aae2da6ae"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga31d794567f4420bbdc8baa7bf8bf6138"><td class="memItemLeft" align="right" valign="top">static <a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00115.php#ga31d794567f4420bbdc8baa7bf8bf6138">hwloc_ibv_get_device_osdev_by_name</a> (<a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, const char *ibname)</td></tr>
<tr class="separator:ga31d794567f4420bbdc8baa7bf8bf6138"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga7324cdfd5db6ed2669c051ef7e1b64e1"><td class="memItemLeft" align="right" valign="top">static <a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00115.php#ga7324cdfd5db6ed2669c051ef7e1b64e1">hwloc_ibv_get_device_osdev</a> (<a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, struct ibv_device *ibdev)</td></tr>
<tr class="separator:ga7324cdfd5db6ed2669c051ef7e1b64e1"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<p>This interface offers ways to retrieve topology information about OpenFabrics devices. </p>
<h2 class="groupheader">Function Documentation</h2>
<a class="anchor" id="ga3ea0d838c1e7f1671b35687aae2da6ae"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static int hwloc_ibv_get_device_cpuset </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">struct ibv_device *&#160;</td>
          <td class="paramname"><em>ibdev</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00075.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>set</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the CPU set of logical processors that are physically close to device <code>ibdev</code>. </p>
<p>Return the CPU set describing the locality of the OpenFabrics device <code>ibdev</code>.</p>
<p>Topology <code>topology</code> and device <code>ibdev</code> must match the local machine. I/O devices detection is not needed in the topology.</p>
<p>The function only returns the locality of the device. If more information about the device is needed, OS objects should be used instead, see <a class="el" href="a00115.php#ga7324cdfd5db6ed2669c051ef7e1b64e1" title="Get the hwloc OS device object corresponding to the OpenFabrics device ibdev. ">hwloc_ibv_get_device_osdev()</a> and <a class="el" href="a00115.php#ga31d794567f4420bbdc8baa7bf8bf6138" title="Get the hwloc OS device object corresponding to the OpenFabrics device named ibname. ">hwloc_ibv_get_device_osdev_by_name()</a>.</p>
<p>This function is currently only implemented in a meaningful way for Linux; other systems will simply get a full cpuset. </p>

</div>
</div>
<a class="anchor" id="ga7324cdfd5db6ed2669c051ef7e1b64e1"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static <a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_ibv_get_device_osdev </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">struct ibv_device *&#160;</td>
          <td class="paramname"><em>ibdev</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the hwloc OS device object corresponding to the OpenFabrics device <code>ibdev</code>. </p>
<p>Return the OS device object describing the OpenFabrics device <code>ibdev</code>. Returns NULL if there is none.</p>
<p>Topology <code>topology</code> and device <code>ibdev</code> must match the local machine. I/O devices detection must be enabled in the topology. If not, the locality of the object may still be found using <a class="el" href="a00115.php#ga3ea0d838c1e7f1671b35687aae2da6ae" title="Get the CPU set of logical processors that are physically close to device ibdev. ">hwloc_ibv_get_device_cpuset()</a>.</p>
<dl class="section note"><dt>Note</dt><dd>The corresponding PCI device object can be obtained by looking at the OS device parent object. </dd></dl>

</div>
</div>
<a class="anchor" id="ga31d794567f4420bbdc8baa7bf8bf6138"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static <a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_ibv_get_device_osdev_by_name </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const char *&#160;</td>
          <td class="paramname"><em>ibname</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the hwloc OS device object corresponding to the OpenFabrics device named <code>ibname</code>. </p>
<p>Return the OS device object describing the OpenFabrics device whose name is <code>ibname</code>. Returns NULL if there is none. The name <code>ibname</code> is usually obtained from ibv_get_device_name().</p>
<p>The topology <code>topology</code> does not necessarily have to match the current machine. For instance the topology may be an XML import of a remote host. I/O devices detection must be enabled in the topology.</p>
<dl class="section note"><dt>Note</dt><dd>The corresponding PCI device object can be obtained by looking at the OS device parent object. </dd></dl>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");