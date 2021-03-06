<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-78-g6372ac9";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 13 05:40:12 2014" -->
<!-- isoreceived="20141013094012" -->
<!-- sent="Mon, 13 Oct 2014 09:40:10 +0000" -->
<!-- isosent="20141013094010" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-78-g6372ac9" -->
<!-- id="04E9D769-7DBD-474C-98C4-3FFA31D0EB83_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20141013083500.B025C266806_at_lion.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-78-g6372ac9<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-13 05:40:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16042.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-78-g6372ac9"</a>
<li><strong>Previous message:</strong> <a href="16040.php">Ralph Castain: "Re: [OMPI devel] Pull requests to release branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16042.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-78-g6372ac9"</a>
<li><strong>Reply:</strong> <a href="16042.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-78-g6372ac9"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good catch. Can you file a pr for the v1.8 branch?  You can say I reviewed. 
<br>
<p>Sent from my phone. No type good. 
<br>
<p><span class="quotelev1">&gt; On Oct 13, 2014, at 4:35 AM, &quot;gitdub_at_[hidden]&quot; &lt;gitdub_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is an automated email from the git hooks/post-receive script. It was
</span><br>
<span class="quotelev1">&gt; generated because a ref change was pushed to the repository containing
</span><br>
<span class="quotelev1">&gt; the project &quot;open-mpi/ompi&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The branch, master has been updated
</span><br>
<span class="quotelev1">&gt;       via  6372ac926c6a6622222915ac4f9301021f731c35 (commit)
</span><br>
<span class="quotelev1">&gt;      from  a215a4831dfae9dd0a3fee7b31ee784d4e5394a4 (commit)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev1">&gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev1">&gt; revisions in full, below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/6372ac926c6a6622222915ac4f9301021f731c35">https://github.com/open-mpi/ompi/commit/6372ac926c6a6622222915ac4f9301021f731c35</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; commit 6372ac926c6a6622222915ac4f9301021f731c35
</span><br>
<span class="quotelev1">&gt; Author: Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Mon Oct 13 11:33:26 2014 +0300
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    tools: fix cli args parsing
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    No need to &quot;shift&quot; if argument does not expect parameter on the command line.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/contrib/dist/make_dist_tarball b/contrib/dist/make_dist_tarball
</span><br>
<span class="quotelev1">&gt; index de09d26..783709d 100755
</span><br>
<span class="quotelev1">&gt; --- a/contrib/dist/make_dist_tarball
</span><br>
<span class="quotelev1">&gt; +++ b/contrib/dist/make_dist_tarball
</span><br>
<span class="quotelev1">&gt; @@ -72,7 +72,7 @@ while test &quot;$1&quot; != &quot;&quot;; do
</span><br>
<span class="quotelev1">&gt;         --no-ompi) want_ompi=0 ;;
</span><br>
<span class="quotelev1">&gt;         --autogen-args) autogen_args=$2; shift ;;
</span><br>
<span class="quotelev1">&gt;         --distdir) distdir=$2; shift ;;
</span><br>
<span class="quotelev1">&gt; -        --dirtyok) dirty_ok=1; shift ;;
</span><br>
<span class="quotelev1">&gt; +        --dirtyok) dirty_ok=1 ;;
</span><br>
<span class="quotelev1">&gt;         --verok) gnu_version_ignore=1;;
</span><br>
<span class="quotelev1">&gt;         --no-git-update) git_update=0;;
</span><br>
<span class="quotelev1">&gt;         *)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Summary of changes:
</span><br>
<span class="quotelev1">&gt; contrib/dist/make_dist_tarball | 2 +-
</span><br>
<span class="quotelev1">&gt; 1 file changed, 1 insertion(+), 1 deletion(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hooks/post-receive
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; open-mpi/ompi
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; ompi-commits mailing list
</span><br>
<span class="quotelev1">&gt; ompi-commits_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16042.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-78-g6372ac9"</a>
<li><strong>Previous message:</strong> <a href="16040.php">Ralph Castain: "Re: [OMPI devel] Pull requests to release branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16042.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-78-g6372ac9"</a>
<li><strong>Reply:</strong> <a href="16042.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-78-g6372ac9"</a>
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
