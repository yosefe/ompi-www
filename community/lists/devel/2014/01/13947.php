<?
$subject_val = "Re: [OMPI devel] SNAPC: dynamic send buffers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 29 15:30:32 2014" -->
<!-- isoreceived="20140129203032" -->
<!-- sent="Wed, 29 Jan 2014 14:30:31 -0600" -->
<!-- isosent="20140129203031" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SNAPC: dynamic send buffers" -->
<!-- id="CAANzjEmzo400OL+6ddAW7v4rNQ7gRXvshEZj7Gx+iO=OJ0e-=A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AE22520C-29D7-4186-8348-671074951E3E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SNAPC: dynamic send buffers<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-29 15:30:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13948.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<li><strong>Previous message:</strong> <a href="13946.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<li><strong>In reply to:</strong> <a href="13945.php">Ralph Castain: "Re: [OMPI devel] SNAPC: dynamic send buffers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks good to me too.
<br>
<p><p>On Wed, Jan 29, 2014 at 11:00 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Looks good to me!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 29, 2014, at 8:52 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for pointing out orte_rml_recv_callback(). It does just what I
</span><br>
<span class="quotelev2">&gt; &gt; need. I removed my own callback and I am now using
</span><br>
<span class="quotelev1">&gt; orte_rml_recv_callback()
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have extended the patches to fix the usage of static buffers
</span><br>
<span class="quotelev2">&gt; &gt; in SNAPC and SSTORE as well as removing all remaining occurrences
</span><br>
<span class="quotelev2">&gt; &gt; of TODOs in my 'getting-it-compiled-again' patches. The following
</span><br>
<span class="quotelev2">&gt; &gt; patches are ready to be committed:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2c69cdb SNAPC/CRCP/SSTORE: remove compiler warnings
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=2c69cdbf3ab9ebcb8c05540ed8807faa3db25203">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=2c69cdbf3ab9ebcb8c05540ed8807faa3db25203</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; e60592b SNAPC: use ORTE_WAIT_FOR_COMPLETION with non-blocking receives
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=e60592b629a8328538a2d752e0ec4b639a125465">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=e60592b629a8328538a2d752e0ec4b639a125465</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 17147ae SSTORE/CRCP: use ORTE_WAIT_FOR_COMPLETION with non-blocking
</span><br>
<span class="quotelev1">&gt; receives
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=17147aeb4b9b9d20133be1807ee3369c788fe923">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=17147aeb4b9b9d20133be1807ee3369c788fe923</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ea3891e SSTORE: use dynamic buffers for rml.send and rml.recv
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=ea3891ef9d095cfa40ade03fd676a1d61c932e5f">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=ea3891ef9d095cfa40ade03fd676a1d61c932e5f</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 02c05d2 SNAPC: use dynamic buffers for rml.send and rml.recv
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=02c05d2685dc111919c63936acdaf4a594da0fa0">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=02c05d2685dc111919c63936acdaf4a594da0fa0</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Jan 28, 2014 at 08:01:53AM -0800, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This looks okay to me. Couple of comments:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1. if you don't want to create your own callback function, you can use
</span><br>
<span class="quotelev1">&gt; the standard one. It does more than you need, but won't hurt anything:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ORTE_DECLSPEC void orte_rml_recv_callback(int status,
</span><br>
<span class="quotelev1">&gt; orte_process_name_t* sender,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                                          opal_buffer_t *buffer,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                                          orte_rml_tag_t tag, void
</span><br>
<span class="quotelev1">&gt; *cbdata);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The code is in orte/mca/rml/base/rml_base_frame.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2. be aware that ORTE_WAIT_FOR_COMPLETION will block if you are in an
</span><br>
<span class="quotelev1">&gt; RML callback. I don't think that's an issue here, but just wanted to point
</span><br>
<span class="quotelev1">&gt; it out.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jan 27, 2014, at 8:12 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I have the following patches which I would like to commit. All changes
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; are in the SNAPC component. The first patch replaces all statically
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; allocated buffers with dynamically allocate buffers. The second patch
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; removes compiler warnings and the last patch tries to re-introduce
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; functionality which I removed with my 'getting-it-compiled-again'
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; patches. Instead of blocking recv() calls it now uses
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ORTE_WAIT_FOR_COMPLETION(). I included gitweb links to the patches.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Please have a look at the patches.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;             Adrian
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; commit 6f10b44499b59c84d9032378c7f8c6b3526a029b
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Author: Adrian Reber &lt;adrian.reber_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Date:   Sun Jan 26 12:10:41 2014 +0100
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   SNAPC: use dynamic buffers for rml.send and rml.recv
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   The snapc component was still using static buffers
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   for send_buffer_nb(). This patch changes opal_buffer_t buffer;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   to opal_buffer_t *buffer;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; orte/mca/snapc/full/snapc_full_app.c    | 119
</span><br>
<span class="quotelev1">&gt; +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-----------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; orte/mca/snapc/full/snapc_full_global.c |  73
</span><br>
<span class="quotelev1">&gt; ++++++++++++++++++++++++++++++++++++------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; orte/mca/snapc/full/snapc_full_local.c  |  33
</span><br>
<span class="quotelev1">&gt; +++++++++++++++++++--------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 3 files changed, 114 insertions(+), 111 deletions(-)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=6f10b44499b59c84d9032378c7f8c6b3526a029b">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=6f10b44499b59c84d9032378c7f8c6b3526a029b</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; commit 218d04ad663ad76ad23cd99b62e83c435ccfe418
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Author: Adrian Reber &lt;adrian.reber_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Date:   Mon Jan 27 12:49:30 2014 +0100
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   SNAPC: remove compiler warnings
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; orte/mca/snapc/full/snapc_full_global.c | 19 +++++--------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; orte/mca/snapc/full/snapc_full_local.c  | 29
</span><br>
<span class="quotelev1">&gt; ++++++-----------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 2 files changed, 11 insertions(+), 37 deletions(-)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=218d04ad663ad76ad23cd99b62e83c435ccfe418">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=218d04ad663ad76ad23cd99b62e83c435ccfe418</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; commit 67d435cbe5df5c59519d605ce25443880244d2d5
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Author: Adrian Reber &lt;adrian.reber_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Date:   Mon Jan 27 14:31:36 2014 +0100
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   use ORTE_WAIT_FOR_COMPLETION with non-blocking receives
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   During the commits to make the C/R code compile again the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   blocking receive calls in snapc_full_app.c were
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   replaced by non-blocking receive calls with a dummy callback
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   function. This commit adds ORTE_WAIT_FOR_COMPLETION()
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   after each non-blocking receive to wait for the data.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; orte/mca/snapc/full/snapc_full_app.c | 56
</span><br>
<span class="quotelev1">&gt; +++++++++++++++++---------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1 file changed, 17 insertions(+), 39 deletions(-)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=67d435cbe5df5c59519d605ce25443880244d2d5">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=67d435cbe5df5c59519d605ce25443880244d2d5</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Assistant Professor of Computer Science
University of Wisconsin-La Crosse
<a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13947/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13948.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<li><strong>Previous message:</strong> <a href="13946.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<li><strong>In reply to:</strong> <a href="13945.php">Ralph Castain: "Re: [OMPI devel] SNAPC: dynamic send buffers"</a>
<!-- nextthread="start" -->
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
