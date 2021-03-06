<?
$subject_val = "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 18:49:09 2014" -->
<!-- isoreceived="20140507224909" -->
<!-- sent="Thu, 8 May 2014 05:49:08 +0700" -->
<!-- isosent="20140507224908" -->
<!-- name="Artem Polyakov" -->
<!-- email="artpol84_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested" -->
<!-- id="CAJ2Qj5p6shCoeJ0HM3j93OjE-4TNBNY-wmjpvr3gW2NEa6yskw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAJ2Qj5ow2wTc02X8J=A5D82Md4Rori9p=9wFVKb1-HhUVEE2aA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested<br>
<strong>From:</strong> Artem Polyakov (<em>artpol84_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-07 18:49:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14726.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Previous message:</strong> <a href="14724.php">Hjelm, Nathan T: "Re: [OMPI devel] scif btl side effects"</a>
<li><strong>In reply to:</strong> <a href="14719.php">Artem Polyakov: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14726.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Reply:</strong> <a href="14726.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We discussed with Ralph Joshuas concerns and decided to try automatic PMI2
<br>
correctness first as it was initially intended. Here is my idea. The
<br>
universal way to decide if PMI2 is correct is to compare PMI_Init(..,
<br>
&amp;rank, &amp;size, ...) and PMI2_Init(.., &amp;rank, &amp;size, ...). Size and rank
<br>
should be equal. In this case we proceed with PMI2 finalizing PMI1.
<br>
Otherwise we finalize PMI2 and proceed with PMI1.
<br>
I need to clarify with SLURM guys if parallel initialization of both PMIs
<br>
are legal. If not - we'll do that sequentially.
<br>
In other places we'll just use the flag saying what PMI version to use.
<br>
Does that sounds reasonable?
<br>
<p>2014-05-07 23:10 GMT+07:00 Artem Polyakov &lt;artpol84_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; That's a good point. There is actually a bunch of modules in ompi, opal
</span><br>
<span class="quotelev1">&gt; and orte that has to be duplicated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#209;&#129;&#209;&#128;&#208;&#181;&#208;&#180;&#208;&#176;, 7 &#208;&#188;&#208;&#176;&#209;&#143; 2014 &#208;&#179;. &#208;&#191;&#208;&#190;&#208;&#187;&#209;&#140;&#208;&#183;&#208;&#190;&#208;&#178;&#208;&#176;&#209;&#130;&#208;&#181;&#208;&#187;&#209;&#140; Joshua Ladd &#208;&#189;&#208;&#176;&#208;&#191;&#208;&#184;&#209;&#129;&#208;&#176;&#208;&#187;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  +1 Sounds like a good idea - but decoupling the two and adding all the
</span><br>
<span class="quotelev2">&gt;&gt; right selection mojo might be a bit of a pain. There are several places in
</span><br>
<span class="quotelev2">&gt;&gt; OMPI where the distinction between PMI1and PMI2 is made, not only in
</span><br>
<span class="quotelev2">&gt;&gt; grpcomm. DB and ESS frameworks off the top of my head.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, May 7, 2014 at 11:48 AM, Artem Polyakov &lt;artpol84_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Good idea :)!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#209;&#129;&#209;&#128;&#208;&#181;&#208;&#180;&#208;&#176;, 7 &#208;&#188;&#208;&#176;&#209;&#143; 2014 &#208;&#179;. &#208;&#191;&#208;&#190;&#208;&#187;&#209;&#140;&#208;&#183;&#208;&#190;&#208;&#178;&#208;&#176;&#209;&#130;&#208;&#181;&#208;&#187;&#209;&#140; Ralph Castain &#208;&#189;&#208;&#176;&#208;&#191;&#208;&#184;&#209;&#129;&#208;&#176;&#208;&#187;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff actually had a useful suggestion (gasp!).He proposed that we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; separate the PMI-1 and PMI-2 codes into separate components so you could
</span><br>
<span class="quotelev3">&gt;&gt;&gt; select them at runtime. Thus, we would build both (assuming both PMI-1 and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 libs are found), default to PMI-1, but users could select to try PMI-2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If the PMI-2 component failed, we would emit a show_help indicating that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; they probably have a broken PMI-2 version and should try PMI-1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Make sense?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 7, 2014, at 8:00 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 7, 2014, at 7:56 AM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ah, I see. Sorry for the reactionary comment - but this feature falls
</span><br>
<span class="quotelev3">&gt;&gt;&gt; squarely within my &quot;jurisdiction&quot;, and we've invested a lot in improving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI jobstart under srun.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That being said (now that I've taken some deep breaths and carefully
</span><br>
<span class="quotelev3">&gt;&gt;&gt; read your original email :)), what you're proposing isn't a bad idea. I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; think it would be good to maybe add a &quot;--with-pmi2&quot; flag to configure since
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;--with-pmi&quot; automagically uses PMI2 if it finds the header and lib. This
</span><br>
<span class="quotelev3">&gt;&gt;&gt; way, we could experiment with PMI1/PMI2 without having to rebuild SLURM or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hack the installation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That would be a much simpler solution than what Artem proposed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (off-list) where we would try PMI2 and then if it didn't work try to figure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; out how to fall back to PMI1. I'll add this for now, and if Artem wants to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; try his more automagic solution and can make it work, then we can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reconsider that option.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, May 7, 2014 at 10:45 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Okay, then we'll just have to develop a workaround for all those Slurm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; releases where PMI-2 is borked :-(
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FWIW: I think people misunderstood my statement. I specifically did
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *not* propose to *lose* PMI-2 support. I suggested that we change it to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;on-by-request&quot; instead of the current &quot;on-by-default&quot; so we wouldn't keep
</span><br>
<span class="quotelev3">&gt;&gt;&gt; getting asked about PMI-2 bugs in Slurm. Once the Slurm implementation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stabilized, then we could reverse that policy.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, given that both you and Chris appear to prefer to keep it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;on-by-default&quot;, we'll see if we can find a way to detect that PMI-2 is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; broken and then fall back to PMI-1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 7, 2014, at 7:39 AM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just saw this thread, and I second Chris' observations: at scale we are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seeing huge gains in jobstart performance with PMI2 over PMI1. We
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *CANNOT* loose this functionality. For competitive reasons, I cannot
</span><br>
<span class="quotelev3">&gt;&gt;&gt; provide exact numbers, but let's say the difference is in the ballpark of a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; full order-of-magnitude on 20K ranks versus PMI1. PMI1 is completely
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unacceptable/unusable at scale. Certainly PMI2 still has scaling issues,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but there is no contest between PMI1 and PMI2.  We (MLNX) are actively
</span><br>
<span class="quotelev3">&gt;&gt;&gt; working to resolve some of the scalability issues in PMI2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Joshua S. Ladd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Staff Engineer, HPC Software
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mellanox Technologies
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Email: joshual_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, May 7, 2014 at 4:00 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Interesting - how many nodes were involved? As I said, the bad scaling
</span><br>
<span class="quotelev3">&gt;&gt;&gt; becomes more evident at a fairly high node count.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 7, 2014, at 12:07 AM, Christopher Samuel &lt;samuel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hash: SHA1
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hiya Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; On 07/05/14 14:49, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; I should have looked closer to see the numbers you posted, Chris -
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; those include time for MPI wireup. So what you are seeing is that
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; mpirun is much more efficient at exchanging the MPI endpoint info
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; than PMI. I suspect that PMI2 is not much better as the primary
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; reason for the difference is that mpriun sends blobs, while PMI
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; requires that everything b
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14716.php">http://www.open-mpi.org/community/lists/devel/2014/05/14716.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p><p><pre>
-- 
&#208;&#161; &#208;&#163;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;, &#208;&#159;&#208;&#190;&#208;&#187;&#209;&#143;&#208;&#186;&#208;&#190;&#208;&#178; &#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188; &#208;&#174;&#209;&#128;&#209;&#140;&#208;&#181;&#208;&#178;&#208;&#184;&#209;&#135;
Best regards, Artem Y. Polyakov
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14725/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14726.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Previous message:</strong> <a href="14724.php">Hjelm, Nathan T: "Re: [OMPI devel] scif btl side effects"</a>
<li><strong>In reply to:</strong> <a href="14719.php">Artem Polyakov: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14726.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Reply:</strong> <a href="14726.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
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
