<?
$subject_val = "Re: [hwloc-devel] hwloc and c89/c99";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  6 07:24:58 2013" -->
<!-- isoreceived="20130506112458" -->
<!-- sent="Mon, 06 May 2013 06:24:53 -0500" -->
<!-- isosent="20130506112453" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc and c89/c99" -->
<!-- id="51879305.7050502_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51874CEF.4080502_at_inria.fr" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [hwloc-devel] hwloc and c89/c99<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-06 07:24:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3700.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>Previous message:</strong> <a href="3698.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<li><strong>In reply to:</strong> <a href="3694.php">Brice Goglin: "Re: [hwloc-devel] hwloc and c89/c99"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3701.php">Brice Goglin: "Re: [hwloc-devel] hwloc and c89/c99"</a>
<li><strong>Reply:</strong> <a href="3701.php">Brice Goglin: "Re: [hwloc-devel] hwloc and c89/c99"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/06/2013 01:25 AM US Central Time, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; I think we removed C99 use (and configure check) from the code in 1.2
</span><br>
<span class="quotelev1">&gt; because some compilers didn't properly support it.
</span><br>
<p>I looked at the code once more.  It seems to assume fixed width integers
<br>
all over the place.  These are all stdint.h types which is c99.  It
<br>
looks like c89 support is not consistent in the code.
<br>
<p>Can you check inside HWLOC_SETUP_CORE whether you have the necessary
<br>
level of c99 support and fail if you don't?
<br>
<p>&nbsp;-- Pavan
<br>
<p><pre>
-- 
Pavan Balaji
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3700.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>Previous message:</strong> <a href="3698.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patch suggestions"</a>
<li><strong>In reply to:</strong> <a href="3694.php">Brice Goglin: "Re: [hwloc-devel] hwloc and c89/c99"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3701.php">Brice Goglin: "Re: [hwloc-devel] hwloc and c89/c99"</a>
<li><strong>Reply:</strong> <a href="3701.php">Brice Goglin: "Re: [hwloc-devel] hwloc and c89/c99"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
