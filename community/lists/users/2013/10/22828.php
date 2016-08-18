<?
$subject_val = "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 23 14:11:18 2013" -->
<!-- isoreceived="20131023181118" -->
<!-- sent="Wed, 23 Oct 2013 20:11:16 +0200" -->
<!-- isosent="20131023181116" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple" -->
<!-- id="52681144.3040406_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="71C20EC4-1DE9-48A9-B6D0-D07592BA40C3_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-23 14:11:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22829.php">Tim Prince: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<li><strong>Previous message:</strong> <a href="22827.php">Jai Dayal: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/08/22526.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22832.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<li><strong>Reply:</strong> <a href="22832.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just kindly reminder: this bug seem still to exist in 1.7.3 :-/
<br>
<p><p>On 08/20/13 22:15, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; On Aug 20, 2013, at 12:40 PM, RoboBeans &lt;robobeans_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:robobeans_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can confirm that mpi program still hangs if one uses these options while
</span><br>
<span class="quotelev2">&gt;&gt; configuring openmpi-1.7.2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --enable-event-thread-support --enable-opal-multi-threads
</span><br>
<span class="quotelev2">&gt;&gt; --enable-orte-progress-threads --enable-mpi-thread-multiple
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *cd /opt**
</span><br>
<span class="quotelev2">&gt;&gt; **gunzip -c openmpi-1.7.2.tar.gz | tar xf -**
</span><br>
<span class="quotelev2">&gt;&gt; **cd openmpi-1.7.2**
</span><br>
<span class="quotelev2">&gt;&gt; **./configure --with-openib=/usr --with-psm=/usr --prefix=/opt/openmpi-1.7.2
</span><br>
<span class="quotelev2">&gt;&gt; --enable-event-thread-support --enable-opal-multi-threads
</span><br>
<span class="quotelev2">&gt;&gt; --enable-orte-progress-threads --enable-mpi-thread-multiple**
</span><br>
<span class="quotelev2">&gt;&gt; **make all install**
</span><br>
<span class="quotelev2">&gt;&gt; **cd ..**
</span><br>
<span class="quotelev2">&gt;&gt; **chmod -R 775 openmpi-1.7.2**
</span><br>
<span class="quotelev2">&gt;&gt; **ldconfig*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yep, sure will
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there any plan to support multiple threads any time soon?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not in the immediate future, but hopefully not too far into infinity - however,
</span><br>
<span class="quotelev1">&gt; we should fix the hang in the near future, at least
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *$ uname -r*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2.6.32-358.14.1.el6.x86_64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 6/19/13 12:51 PM, Hans Ekkehard Plesser wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can confirm that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-event-thread-support --enable-opal-multi-threads --enable-orte-progress-threads --enable-mpi-thread-multiple
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; worked for me as well under OSX 10.8.4 with clang. The orte-progress flag is needed, without it the parallel process hangs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I will report this to the MacPorts people so they can fix it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hans
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 19. juni 2013, at 15.08, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; While I'm glad it worked, having it depend on orte progress thread wasn't done by intent, hence the comment in the configure help output. I'm not seeing any problems with using that option, but please let us know if you run into something. It hasn't been as fully tested as we'd like.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jun 19, 2013, at 12:10 AM, Elias Rudberg&lt;elias.rudberg_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This has now been solved.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The solution (as suggested by Ralph) is to use the following four configure options together:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ./configure --enable_event_thread_support --enable_opal_multi_threads --enable_orte_progress_threads --enable_mpi_thread_multiple
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So, apparently the --enable_mpi_thread_multiple option cannot be used by itself, it must be combined with the other three options, otherwise MPI_Init_thread will hang.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; / Elias
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Quoting Elias Rudberg&lt;elias.rudberg_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I now tried using --enable-opal-multi-threads (I added an &quot;s&quot; in the end, since &quot;--enable-opal-multi-thread&quot; was not recognized by the configure script).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; However, my test code still hangs in the same way as before.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; To be clear, I now configure like this:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ./configure --enable-mpi-thread-multiple --enable-opal-multi-threads
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; but the problem remains: MPI_Init_thread still hangs when trying to run the test case with -np 2.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Any other ideas?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Are there other configure options that must be used together with --enable-mpi-thread-multiple to make it work?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Elias
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Quoting Ralph Castain&lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hmmm...well, your code runs fine for me:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralphs-iMac:mpi rhc$ mpirun -n 2 ./thread_init
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Calling MPI_Init_thread...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Calling MPI_Init_thread...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Init_thread returned, provided = 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Init_thread returned, provided = 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralphs-iMac:mpi rhc$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I think the key, however, is that you also have to configure with --enable-opal-multi-thread.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jun 16, 2013, at 8:54 AM, Elias Rudberg&lt;elias.rudberg_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I would like to report what seems to be a bug in MPI_Init_thread in OpenMPI 1.7.1.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The bug can be reproduced with the following test program (test_mpi_thread_support.c):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ===========================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; int main(int argc, const char* argv[]) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; int provided = -1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; printf(&quot;Calling MPI_Init_thread...\n&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Init_thread(NULL, NULL, MPI_THREAD_MULTIPLE, &amp;provided);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; printf(&quot;MPI_Init_thread returned, provided = %d\n&quot;, provided);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Finalize();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; return 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ===========================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; When trying to run this when OpenMPI was configured with --enable-mpi-thread-multiple, the program hangs when trying to run using anything more than one process.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Steps I use to reproduce this in Ubuntu:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (1) Download openmpi-1.7.1.tar.gz
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (2) Configure like this:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ./configure --enable-mpi-thread-multiple
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (3) make
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (4) Compile test program like this:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpicc test_mpi_thread_support.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (5) Run like this:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun -np 2 ./a.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Then you see the following two lines of output:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Calling MPI_Init_thread...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Calling MPI_Init_thread...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; And then it hangs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Init_thread did not hang in earlier OpenMPI versions (for example it worked in 1.5.* and 1.6.*), so it seems like a bug introduced in 1.7.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The description above shows how I reproduce this in Ubuntu on my local desktop computer, but the same problem exists for the OpenMPI 1.7.1 installation at the UPPMAX computer center where I wan to run my code in the end. I don't know all details about how they installed it there, but I know they set --enable-mpi-thread-multiple. So maybe it hangs in 1.7.1 on any computer as long as you use MPI_THREAD_MULTIPLE. At least I have not seen it work anywhere.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Do you agree that this is a bug, or am I doing something wrong?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Elias
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dr. Hans Ekkehard Plesser, Associate Professor
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Head, Basic Science Section
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dept. of Mathematical Sciences and Technology
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Norwegian University of Life Sciences
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PO Box 5003, 1432 Aas, Norway
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Phone +47 6496 5467
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fax   +47 6496 5401
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Emailhans.ekkehard.plesser_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Home<a href="http://arken.umb.no/~plesser">http://arken.umb.no/~plesser</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22828/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22829.php">Tim Prince: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<li><strong>Previous message:</strong> <a href="22827.php">Jai Dayal: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/08/22526.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22832.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<li><strong>Reply:</strong> <a href="22832.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
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