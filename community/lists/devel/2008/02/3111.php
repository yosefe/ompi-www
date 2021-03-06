<?
$subject_val = "Re: [OMPI devel] vt compiler warnings and errors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  1 08:11:14 2008" -->
<!-- isoreceived="20080201131114" -->
<!-- sent="Fri, 1 Feb 2008 08:10:15 -0500" -->
<!-- isosent="20080201131015" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] vt compiler warnings and errors" -->
<!-- id="297D3F07-C93D-45BE-87DD-82FB77D23601_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080201103526.GA8847_at_ins.uni-bonn.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] vt compiler warnings and errors<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-01 08:10:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3112.php">Jeff Squyres: "[OMPI devel] 32 bit openib btl warnings"</a>
<li><strong>Previous message:</strong> <a href="3110.php">Josh Hursey: "Re: [OMPI devel] VT in trunk + how to disable"</a>
<li><strong>In reply to:</strong> <a href="3109.php">Ralf Wildenhues: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3125.php">Jeff Squyres: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Reply:</strong> <a href="3125.php">Jeff Squyres: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Reply:</strong> <a href="3127.php">Andreas Kn�pfer: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 1, 2008, at 5:35 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; These files do not belong in SVN, they are generated by aclocal:
</span><br>
<span class="quotelev1">&gt;  ompi/contrib/vt/vt/extlib/otf/aclocal.m4
</span><br>
<span class="quotelev1">&gt;  ompi/contrib/vt/vt/aclocal.m4
</span><br>
<p><p>I think both of these have their own configure scripts, meaning that  
<br>
they were autoconfed/automaked/whatever before they were put into OMPI.
<br>
<p>And in hindsight, this fits in with exactly what our original goal  
<br>
was: take a VT tarball and dump it into OMPI's SVN.  Doh!
<br>
<p>So I think the question still remains: can we hook VT's autoconf (et  
<br>
al.) requirements into the top-level autogen.sh so that the trunk copy  
<br>
of vt doesn't have configure/aclocal.m4/etc. and OMPI's top-level  
<br>
autogen.sh will create them?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3112.php">Jeff Squyres: "[OMPI devel] 32 bit openib btl warnings"</a>
<li><strong>Previous message:</strong> <a href="3110.php">Josh Hursey: "Re: [OMPI devel] VT in trunk + how to disable"</a>
<li><strong>In reply to:</strong> <a href="3109.php">Ralf Wildenhues: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3125.php">Jeff Squyres: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Reply:</strong> <a href="3125.php">Jeff Squyres: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Reply:</strong> <a href="3127.php">Andreas Kn�pfer: "Re: [OMPI devel] vt compiler warnings and errors"</a>
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
