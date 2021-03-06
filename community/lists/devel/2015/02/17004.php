<?
$subject_val = "Re: [OMPI devel] devel Digest, Vol 2917, Issue 1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 18:41:34 2015" -->
<!-- isoreceived="20150219234134" -->
<!-- sent="Thu, 19 Feb 2015 17:41:33 -0600" -->
<!-- isosent="20150219234133" -->
<!-- name="Dave Turner" -->
<!-- email="drdaveturner_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] devel Digest, Vol 2917, Issue 1" -->
<!-- id="CAFGXdkyOM1tDpbjqfC25xU9KrOqPm2YOr-pCE+ZypCJ-yKB2Uw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="mailman.1.1423674001.25580.devel_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] devel Digest, Vol 2917, Issue 1<br>
<strong>From:</strong> Dave Turner (<em>drdaveturner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-19 18:41:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17005.php">Gilles Gouaillardet: "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Previous message:</strong> <a href="17003.php">Nathan Hjelm: "[OMPI devel] RFC: merge opal_free_list_t and ompi_free_list_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17017.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>Reply:</strong> <a href="17017.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>Reply:</strong> <a href="17018.php">George Bosilca: "Re: [OMPI devel] devel Digest, Vol 2917, Issue 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I've downloaded the OpenMPI master as suggested and rerun all my
<br>
aggregate tests
<br>
across my system with QDR IB and 10 Gbps RoCE.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The attached unidirectional.pdf graph is the ping-pong performance for
<br>
1 core
<br>
on 1 machine to 1 core on the 2nd.  The red curve for OpenMPI 1.8.3 shows
<br>
lower
<br>
performance for small and also medium message sizes for the base test
<br>
without
<br>
using any tuning parameters.  The green line from the OpenMPI master shows
<br>
lower
<br>
performance only for small messages, but great for medium size.  Turning
<br>
off the
<br>
10 Gbps card entirely produces great performance for all message sizes.  So
<br>
the
<br>
fixes in the master at least help, but it still seems to be choosing to use
<br>
RoCE for
<br>
small messages rather than QDR IB.  They both use the openib btl so I
<br>
assume it
<br>
just chooses one at random so this is probably not that surprising.  Since
<br>
there are
<br>
no tunable parameters for multiple openib btl's, this cannot be manually
<br>
tuned.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The bi-directional ping-pong tests show basically the same thing with
<br>
lower
<br>
performance for small message sizes for 1.8.3 and the master.  However, I'm
<br>
also seeing the max bandwidth being limited to 44 Gbps instead of 60 Gbps
<br>
for the master for some reason.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The aggregate tests in the 3rd graph are for 20 cores on one machine
<br>
yelling at 20 cores on the 2nd machine (bi-directional too).  They likewise
<br>
show
<br>
the lower 10 Gbps RoCE performance for small messages, and also show
<br>
the max bandwidth being limited to 45 Gbps for the master.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our solution for now is to simply exclude mlx4_1 which is the 10 Gbps
<br>
card
<br>
which will give us QDR performance but not allow us to use the extra 10 Gbps
<br>
to channel bond for large messages.  It is more worrisome that max bandwidth
<br>
on the bi-directional and aggregate tests using the master are slower than
<br>
they
<br>
should be.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dave
<br>
<p>On Wed, Feb 11, 2015 at 11:00 AM, &lt;devel-request_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Send devel mailing list submissions to
</span><br>
<span class="quotelev1">&gt;         devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt;         devel-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt;         devel-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev1">&gt; than &quot;Re: Contents of devel digest...&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    1. Re: OMPI devel] RoCE plus QDR IB tunable parameters
</span><br>
<span class="quotelev1">&gt;       (George Bosilca)
</span><br>
<span class="quotelev1">&gt;    2. Re: OMPI devel] RoCE plus QDR IB tunable parameters
</span><br>
<span class="quotelev1">&gt;       (Howard Pritchard)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Tue, 10 Feb 2015 20:41:30 -0500
</span><br>
<span class="quotelev1">&gt; From: George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: DrDaveTurner_at_[hidden], Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable
</span><br>
<span class="quotelev1">&gt;         parameters
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;         &lt;
</span><br>
<span class="quotelev1">&gt; CAMJJpkXC6e_y34fU5VeJ0uHrrJ2z4CA89mN7WfWa5dSfx52s7A_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Somehow one of the most basic information about the capabilities of the
</span><br>
<span class="quotelev1">&gt; BTLs (bandwidth) disappeared from the MCA parameters and the one left
</span><br>
<span class="quotelev1">&gt; (latency) was mislabeled. This mishap not only prevented the communication
</span><br>
<span class="quotelev1">&gt; engine from correctly ordering the BTL for small messages (the latency
</span><br>
<span class="quotelev1">&gt; bound part), but also introduced undesirable bias on the load-balance
</span><br>
<span class="quotelev1">&gt; between multiple devices logic (the bandwidth part).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just pushed a fix  in master
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/e173f9b0c0c63c3ea24b8d8bc0ebafe1f1736acb">https://github.com/open-mpi/ompi/commit/e173f9b0c0c63c3ea24b8d8bc0ebafe1f1736acb</a>
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; Once validated this should be moved over the 1.8 branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dave do you think it is possible to renew your experiment with the current
</span><br>
<span class="quotelev1">&gt; master ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Feb 9, 2015 at 2:57 PM, Dave Turner &lt;drdaveturner_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gilles,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      I tried running with btl_openib_cpc_include rdmacm and saw no
</span><br>
<span class="quotelev1">&gt; change.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       Let's simplify the problem by forgetting about the channel bonding.
</span><br>
<span class="quotelev2">&gt; &gt; If I just do an aggregate test of 16 cores on one machine talking to 16
</span><br>
<span class="quotelev1">&gt; on
</span><br>
<span class="quotelev2">&gt; &gt; a second machine without any settings changed from the default install
</span><br>
<span class="quotelev2">&gt; &gt; of OpenMPI, I see that RoCE over the 10 Gbps link is used for small
</span><br>
<span class="quotelev2">&gt; &gt; messages
</span><br>
<span class="quotelev2">&gt; &gt; then it switches over to QDR IB for large messages.  I don't see channel
</span><br>
<span class="quotelev2">&gt; &gt; bonding
</span><br>
<span class="quotelev2">&gt; &gt; for large messages, but can turn this on with the btl_tcp_exclusivity
</span><br>
<span class="quotelev2">&gt; &gt; parameter.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      I think there are 2 problems here, both related to the fact that QDR
</span><br>
<span class="quotelev2">&gt; &gt; IB link and RoCE
</span><br>
<span class="quotelev2">&gt; &gt; both use the same openib btl.  The first problem is that the slower RoCE
</span><br>
<span class="quotelev2">&gt; &gt; link is being chosen
</span><br>
<span class="quotelev2">&gt; &gt; for small messages, which does lower performance significantly.  The
</span><br>
<span class="quotelev2">&gt; &gt; second problem
</span><br>
<span class="quotelev2">&gt; &gt; is that I don't think there are parameters to allow for tuning of
</span><br>
<span class="quotelev1">&gt; multiple
</span><br>
<span class="quotelev2">&gt; &gt; openib btl's
</span><br>
<span class="quotelev2">&gt; &gt; to manually select one over the other.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                        Dave
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Feb 6, 2015 at 8:24 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt; &gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Dave,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; These settings tell ompi to use native infiniband on the ib qdr port and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tcpo/ip on the other port.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From the faq, roce is implemented in the openib btl
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ompi-over-roce">http://www.open-mpi.org/faq/?category=openfabrics#ompi-over-roce</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Did you use
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --mca btl_openib_cpc_include rdmacm
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in your first tests ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I had some second thougths about the bandwidth values, and imho they
</span><br>
<span class="quotelev3">&gt; &gt;&gt; should be 327680 and 81920 because of the 8/10 encoding
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (And that being said, that should not change the measured performance)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Also, could you try again by forcing the same btl_tcp_latency and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; btl_openib_latency ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Dave Turner &lt;drdaveturner_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; George,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      I can check with my guys on Monday but I think the bandwidth
</span><br>
<span class="quotelev3">&gt; &gt;&gt; parameters
</span><br>
<span class="quotelev3">&gt; &gt;&gt; are the defaults.  I did alter these to 40960 and 10240 as someone else
</span><br>
<span class="quotelev3">&gt; &gt;&gt; suggested to me.  The attached graph shows the base red line, along with
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the manual balanced blue line and auto balanced green line (0's for
</span><br>
<span class="quotelev1">&gt; both).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This shift lower suggests to me that the higher TCP latency is being
</span><br>
<span class="quotelev3">&gt; &gt;&gt; pulled in.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm not sure why the curves are shifted right.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                         Dave
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Fri, Feb 6, 2015 at 5:32 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Dave,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Based on your ompi_info.all the following bandwidth are reported on
</span><br>
<span class="quotelev1">&gt; your
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; system:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                 MCA btl: parameter &quot;btl_openib_bandwidth&quot; (current
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; value: &quot;4&quot;, data source: default, level: 5 tuner/detail, type:
</span><br>
<span class="quotelev1">&gt; unsigned)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                           Approximate maximum bandwidth of interconnect
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (0 = auto-detect value at run-time [not supported in all BTL modules],
</span><br>
<span class="quotelev2">&gt; &gt;= 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; = bandwidth in Mbps)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_bandwidth&quot; (current value:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &quot;100&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                           Approximate maximum bandwidth of interconnect
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (0 = auto-detect value at run-time [not supported in all BTL modules],
</span><br>
<span class="quotelev2">&gt; &gt;= 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; = bandwidth in Mbps)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; This basically states that on your system the default values for these
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; parameters are wrong, your TCP network being much faster than the IB.
</span><br>
<span class="quotelev1">&gt; This
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; explains the somewhat unexpected decision of OMPI.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; As a possible solution I suggest you set these bandwidth values to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; something more meaningful (directly in your configuration file). As an
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; example,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; btl_openib_bandwidth = 40000
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; btl_tcp_bandwidth = 10000
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; make more sense based on your HPC system description.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   George.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Fri, Feb 6, 2015 at 5:37 PM, Dave Turner &lt;drdaveturner_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;      We have nodes in our HPC system that have 2 NIC's,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; one being QDR IB and the second being a slower 10 Gbps card
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; configured for both RoCE and TCP.  Aggregate bandwidth
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; tests with 20 cores on one node yelling at 20 cores on a second
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; node (attached roce.ib.aggregate.pdf) show that without tuning
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; the slower RoCE interface is being used for small messages
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; then QDR IB is used for larger messages (red line).  Tuning
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; the tcp_exclusivity to 1024 to match the openib_exclusivity
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; adds another 20 Gbps of bidirectional bandwidth to the high end (green
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; line),
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; and I'm guessing this is TCP traffic and not RoCE.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;      So by default the slower interface is being chosen on the low
</span><br>
<span class="quotelev1">&gt; end,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I don't think there are tunable parameters to allow me to choose the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; QDR interface as the default.  Going forward we'll probably just
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; disable
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; RoCE on these nodes and go with QDR IB plus 10 Gbps TCP for large
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; messages.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;       However, I do think these issues will come up more in the
</span><br>
<span class="quotelev1">&gt; future.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; With the low latency of RoCE matching IB, there are more opportunities
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; to do channel bonding or allowing multiple interfaces for aggregate
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; traffic
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; for even smaller message sizes.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;                 Dave Turner
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Work:     DaveTurner_at_[hidden]     (785) 532-7791
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;              118 Nichols Hall, Manhattan KS  66502
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Home:    DrDaveTurner_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;               cell: (785) 770-5929
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16951.php">http://www.open-mpi.org/community/lists/devel/2015/02/16951.php</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Work:     DaveTurner_at_[hidden]     (785) 532-7791
</span><br>
<span class="quotelev3">&gt; &gt;&gt;              118 Nichols Hall, Manhattan KS  66502
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Home:    DrDaveTurner_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;               cell: (785) 770-5929
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Work:     DaveTurner_at_[hidden]     (785) 532-7791
</span><br>
<span class="quotelev2">&gt; &gt;              118 Nichols Hall, Manhattan KS  66502
</span><br>
<span class="quotelev2">&gt; &gt; Home:    DrDaveTurner_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;               cell: (785) 770-5929
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16963.php">http://www.open-mpi.org/community/lists/devel/2015/02/16963.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Tue, 10 Feb 2015 20:34:59 -0700
</span><br>
<span class="quotelev1">&gt; From: Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable
</span><br>
<span class="quotelev1">&gt;         parameters
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;         &lt;CAF1Cqj5=GPfi=t8Jw6SSUBKjqut0ChgntTyXfU0diM=
</span><br>
<span class="quotelev1">&gt; MXs+9Yw_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HI George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd say commit cf377db82 explains the vanishing of the bandwidth metric as
</span><br>
<span class="quotelev1">&gt; well as the mis-labeling of the latency metric.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2015-02-10 18:41 GMT-07:00 George Bosilca &lt;bosilca_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Somehow one of the most basic information about the capabilities of the
</span><br>
<span class="quotelev2">&gt; &gt; BTLs (bandwidth) disappeared from the MCA parameters and the one left
</span><br>
<span class="quotelev2">&gt; &gt; (latency) was mislabeled. This mishap not only prevented the
</span><br>
<span class="quotelev1">&gt; communication
</span><br>
<span class="quotelev2">&gt; &gt; engine from correctly ordering the BTL for small messages (the latency
</span><br>
<span class="quotelev2">&gt; &gt; bound part), but also introduced undesirable bias on the load-balance
</span><br>
<span class="quotelev2">&gt; &gt; between multiple devices logic (the bandwidth part).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I just pushed a fix  in master
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/e173f9b0c0c63c3ea24b8d8bc0ebafe1f1736acb">https://github.com/open-mpi/ompi/commit/e173f9b0c0c63c3ea24b8d8bc0ebafe1f1736acb</a>
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev2">&gt; &gt; Once validated this should be moved over the 1.8 branch.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dave do you think it is possible to renew your experiment with the
</span><br>
<span class="quotelev1">&gt; current
</span><br>
<span class="quotelev2">&gt; &gt; master ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;     George.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Feb 9, 2015 at 2:57 PM, Dave Turner &lt;drdaveturner_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Gilles,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      I tried running with btl_openib_cpc_include rdmacm and saw no
</span><br>
<span class="quotelev3">&gt; &gt;&gt; change.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       Let's simplify the problem by forgetting about the channel
</span><br>
<span class="quotelev1">&gt; bonding.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If I just do an aggregate test of 16 cores on one machine talking to 16
</span><br>
<span class="quotelev1">&gt; on
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a second machine without any settings changed from the default install
</span><br>
<span class="quotelev3">&gt; &gt;&gt; of OpenMPI, I see that RoCE over the 10 Gbps link is used for small
</span><br>
<span class="quotelev3">&gt; &gt;&gt; messages
</span><br>
<span class="quotelev3">&gt; &gt;&gt; then it switches over to QDR IB for large messages.  I don't see channel
</span><br>
<span class="quotelev3">&gt; &gt;&gt; bonding
</span><br>
<span class="quotelev3">&gt; &gt;&gt; for large messages, but can turn this on with the btl_tcp_exclusivity
</span><br>
<span class="quotelev3">&gt; &gt;&gt; parameter.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      I think there are 2 problems here, both related to the fact that
</span><br>
<span class="quotelev1">&gt; QDR
</span><br>
<span class="quotelev3">&gt; &gt;&gt; IB link and RoCE
</span><br>
<span class="quotelev3">&gt; &gt;&gt; both use the same openib btl.  The first problem is that the slower RoCE
</span><br>
<span class="quotelev3">&gt; &gt;&gt; link is being chosen
</span><br>
<span class="quotelev3">&gt; &gt;&gt; for small messages, which does lower performance significantly.  The
</span><br>
<span class="quotelev3">&gt; &gt;&gt; second problem
</span><br>
<span class="quotelev3">&gt; &gt;&gt; is that I don't think there are parameters to allow for tuning of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; multiple openib btl's
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to manually select one over the other.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                        Dave
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Fri, Feb 6, 2015 at 8:24 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Dave,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; These settings tell ompi to use native infiniband on the ib qdr port
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; tcpo/ip on the other port.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; From the faq, roce is implemented in the openib btl
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ompi-over-roce">http://www.open-mpi.org/faq/?category=openfabrics#ompi-over-roce</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Did you use
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --mca btl_openib_cpc_include rdmacm
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; in your first tests ?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I had some second thougths about the bandwidth values, and imho they
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; should be 327680 and 81920 because of the 8/10 encoding
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (And that being said, that should not change the measured performance)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Also, could you try again by forcing the same btl_tcp_latency and
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; btl_openib_latency ?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Dave Turner &lt;drdaveturner_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; George,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;      I can check with my guys on Monday but I think the bandwidth
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; parameters
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; are the defaults.  I did alter these to 40960 and 10240 as someone else
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; suggested to me.  The attached graph shows the base red line, along
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the manual balanced blue line and auto balanced green line (0's for
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; both).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; This shift lower suggests to me that the higher TCP latency is being
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; pulled in.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I'm not sure why the curves are shifted right.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                         Dave
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Fri, Feb 6, 2015 at 5:32 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Dave,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Based on your ompi_info.all the following bandwidth are reported on
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; your system:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;                 MCA btl: parameter &quot;btl_openib_bandwidth&quot; (current
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; value: &quot;4&quot;, data source: default, level: 5 tuner/detail, type:
</span><br>
<span class="quotelev1">&gt; unsigned)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;                           Approximate maximum bandwidth of
</span><br>
<span class="quotelev1">&gt; interconnect
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (0 = auto-detect value at run-time [not supported in all BTL
</span><br>
<span class="quotelev1">&gt; modules], &gt;= 1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; = bandwidth in Mbps)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_bandwidth&quot; (current
</span><br>
<span class="quotelev1">&gt; value:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; &quot;100&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;                           Approximate maximum bandwidth of
</span><br>
<span class="quotelev1">&gt; interconnect
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (0 = auto-detect value at run-time [not supported in all BTL
</span><br>
<span class="quotelev1">&gt; modules], &gt;= 1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; = bandwidth in Mbps)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; This basically states that on your system the default values for these
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; parameters are wrong, your TCP network being much faster than the IB.
</span><br>
<span class="quotelev1">&gt; This
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; explains the somewhat unexpected decision of OMPI.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; As a possible solution I suggest you set these bandwidth values to
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; something more meaningful (directly in your configuration file). As an
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; example,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; btl_openib_bandwidth = 40000
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; btl_tcp_bandwidth = 10000
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; make more sense based on your HPC system description.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   George.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Fri, Feb 6, 2015 at 5:37 PM, Dave Turner &lt;drdaveturner_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;      We have nodes in our HPC system that have 2 NIC's,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; one being QDR IB and the second being a slower 10 Gbps card
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; configured for both RoCE and TCP.  Aggregate bandwidth
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; tests with 20 cores on one node yelling at 20 cores on a second
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; node (attached roce.ib.aggregate.pdf) show that without tuning
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; the slower RoCE interface is being used for small messages
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; then QDR IB is used for larger messages (red line).  Tuning
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; the tcp_exclusivity to 1024 to match the openib_exclusivity
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; adds another 20 Gbps of bidirectional bandwidth to the high end
</span><br>
<span class="quotelev1">&gt; (green
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; line),
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; and I'm guessing this is TCP traffic and not RoCE.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;      So by default the slower interface is being chosen on the low
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; end, and
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I don't think there are tunable parameters to allow me to choose the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; QDR interface as the default.  Going forward we'll probably just
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; disable
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; RoCE on these nodes and go with QDR IB plus 10 Gbps TCP for large
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; messages.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;       However, I do think these issues will come up more in the
</span><br>
<span class="quotelev1">&gt; future.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; With the low latency of RoCE matching IB, there are more
</span><br>
<span class="quotelev1">&gt; opportunities
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; to do channel bonding or allowing multiple interfaces for aggregate
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; traffic
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; for even smaller message sizes.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;                 Dave Turner
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Work:     DaveTurner_at_[hidden]     (785) 532-7791
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;              118 Nichols Hall, Manhattan KS  66502
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Home:    DrDaveTurner_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;               cell: (785) 770-5929
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16951.php">http://www.open-mpi.org/community/lists/devel/2015/02/16951.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Work:     DaveTurner_at_[hidden]     (785) 532-7791
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;              118 Nichols Hall, Manhattan KS  66502
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Home:    DrDaveTurner_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;               cell: (785) 770-5929
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Work:     DaveTurner_at_[hidden]     (785) 532-7791
</span><br>
<span class="quotelev3">&gt; &gt;&gt;              118 Nichols Hall, Manhattan KS  66502
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Home:    DrDaveTurner_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;               cell: (785) 770-5929
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16963.php">http://www.open-mpi.org/community/lists/devel/2015/02/16963.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16965.php">http://www.open-mpi.org/community/lists/devel/2015/02/16965.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Digest Footer
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
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; End of devel Digest, Vol 2917, Issue 1
</span><br>
<span class="quotelev1">&gt; **************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Work:     DaveTurner_at_[hidden]     (785) 532-7791
             118 Nichols Hall, Manhattan KS  66502
Home:    DrDaveTurner_at_[hidden]
              cell: (785) 770-5929



</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17004/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17004/unidirectional.pdf">unidirectional.pdf</a>
</ul>
<!-- attachment="unidirectional.pdf" -->
<hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17004/bidirectional.pdf">bidirectional.pdf</a>
</ul>
<!-- attachment="bidirectional.pdf" -->
<hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17004/aggregate.pdf">aggregate.pdf</a>
</ul>
<!-- attachment="aggregate.pdf" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17005.php">Gilles Gouaillardet: "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Previous message:</strong> <a href="17003.php">Nathan Hjelm: "[OMPI devel] RFC: merge opal_free_list_t and ompi_free_list_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17017.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>Reply:</strong> <a href="17017.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>Reply:</strong> <a href="17018.php">George Bosilca: "Re: [OMPI devel] devel Digest, Vol 2917, Issue 1"</a>
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
