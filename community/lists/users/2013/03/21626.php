<?
$subject_val = "Re: [OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 29 09:33:10 2013" -->
<!-- isoreceived="20130329133310" -->
<!-- sent="Fri, 29 Mar 2013 06:33:02 -0700" -->
<!-- isosent="20130329133302" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4" -->
<!-- id="896A55B0-4A67-4464-A91A-3FE09E08B534_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="514B7711.3040801_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-29 09:33:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21627.php">Gus Correa: "Re: [OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4"</a>
<li><strong>Previous message:</strong> <a href="21625.php">Javier Garcia Blas: "[OMPI users] Call For Papers: EuroMPI 2013. Submission deadline extended to	April 12th, 2013"</a>
<li><strong>In reply to:</strong> <a href="21588.php">Gus Correa: "Re: [OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21627.php">Gus Correa: "Re: [OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4"</a>
<li><strong>Reply:</strong> <a href="21627.php">Gus Correa: "Re: [OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just an update: I have this fixed in the OMPI trunk. It didn't make 1.7.0, but will be in 1.7.1 and beyond.
<br>
<p><p>On Mar 21, 2013, at 2:09 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thank you, Ralph.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will try to use a rankfile.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In any case, the --cpus-per-proc option is a very useful feature:
</span><br>
<span class="quotelev1">&gt; for hybrid MPI+OpenMP programs, for these processors with one FPU
</span><br>
<span class="quotelev1">&gt; shared by two cores, etc.
</span><br>
<span class="quotelev1">&gt; If it gets fixed in a later release of OMPI that would be great.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 03/21/2013 04:03 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I've heard this from a couple of other sources -
</span><br>
<span class="quotelev1">&gt; it looks like there is a problem on the daemons when
</span><br>
<span class="quotelev1">&gt; they compute the location for -cpus-per-proc.
</span><br>
<span class="quotelev1">&gt; I'm not entirely sure why that would be as the code
</span><br>
<span class="quotelev1">&gt; is supposed to be common with mpirun, but there are
</span><br>
<span class="quotelev1">&gt; a few differences.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I will take a look at it - I don't know of any workaround,
</span><br>
<span class="quotelev1">&gt; I'm afraid.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 21, 2013, at 12:01 PM, Gus Correa&lt;gus_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear Open MPI Pros
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am having trouble using mpiexec with --cpus-per-proc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on multiple nodes in OMPI 1.6.4.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I know there is an ongoing thread on similar runtime issues
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of OMPI 1.7.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; By no means I am trying to hijack T. Mishima's questions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My question is genuine, though, and perhaps related to his.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am testing a new cluster remotely, with monster
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dual socket 16-core AMD Bulldozer processors (32 cores per node).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using OMPI 1.6.4 built with Torque 4.2.1 support.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I read that on these processors each pair of cores share an FPU.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hence, I am trying to run *one MPI process* on each
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *pair of successive cores*.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This trick seems to yield better performance
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (at least for HPL/Linpack) than using all cores.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I.e., the goal is to use &quot;each other core&quot;, or perhaps
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to allow each process to wobble across two successive cores only,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hence granting exclusive use of one FPU per process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [BTW, this is *not* an attempt to do hybrid MPI+OpenMP.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The code is HPL with MPI+BLAS/Lapack and NO OpenMP.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To achieve this, I am using the mpiexec --cpus-per-proc option.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It works on one node, which is great.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, unless I made a silly syntax or arithmetic mistake,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it doesn't seem to work on more than one node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For instance, this works:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #PBS -l nodes=1:ppn=32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec -np 16 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --cpus-per-proc 2 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --bind-to-core \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --report-bindings \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --tag-output \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get a pretty nice process-to-cores distribution, with 16 processes, and each process bound to a couple of successive cores,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as expected:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1,7]&lt;stderr&gt;:[node33:04744] MCW rank 7 bound to socket 0[core 14-15]: [. . . . . . . . . . . . . . B B][. . . . . . . . . . . . . . . .]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1,8]&lt;stderr&gt;:[node33:04744] MCW rank 8 bound to socket 1[core 0-1]: [. . . . . . . . . . . . . . . .][B B . . . . . . . . . . . . . .]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1,9]&lt;stderr&gt;:[node33:04744] MCW rank 9 bound to socket 1[core 2-3]: [. . . . . . . . . . . . . . . .][. . B B . . . . . . . . . . . .]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1,10]&lt;stderr&gt;:[node33:04744] MCW rank 10 bound to socket 1[core 4-5]: [. . . . . . . . . . . . . . . .][. . . . B B . . . . . . . . . .]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1,11]&lt;stderr&gt;:[node33:04744] MCW rank 11 bound to socket 1[core 6-7]: [. . . . . . . . . . . . . . . .][. . . . . . B B . . . . . . . .]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1,12]&lt;stderr&gt;:[node33:04744] MCW rank 12 bound to socket 1[core 8-9]: [. . . . . . . . . . . . . . . .][. . . . . . . . B B . . . . . .]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1,13]&lt;stderr&gt;:[node33:04744] MCW rank 13 bound to socket 1[core 10-11]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . B B . . . .]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1,14]&lt;stderr&gt;:[node33:04744] MCW rank 14 bound to socket 1[core 12-13]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . B B . .]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1,15]&lt;stderr&gt;:[node33:04744] MCW rank 15 bound to socket 1[core 14-15]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . B B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1,0]&lt;stderr&gt;:[node33:04744] MCW rank 0 bound to socket 0[core 0-1]: [B B . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1,1]&lt;stderr&gt;:[node33:04744] MCW rank 1 bound to socket 0[core 2-3]: [. . B B . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1,2]&lt;stderr&gt;:[node33:04744] MCW rank 2 bound to socket 0[core 4-5]: [. . . . B B . . . . . . . . . .][. . . . . . . . . . . . . . . .]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1,3]&lt;stderr&gt;:[node33:04744] MCW rank 3 bound to socket 0[core 6-7]: [. . . . . . B B . . . . . . . .][. . . . . . . . . . . . . . . .]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1,4]&lt;stderr&gt;:[node33:04744] MCW rank 4 bound to socket 0[core 8-9]: [. . . . . . . . B B . . . . . .][. . . . . . . . . . . . . . . .]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1,5]&lt;stderr&gt;:[node33:04744] MCW rank 5 bound to socket 0[core 10-11]: [. . . . . . . . . . B B . . . .][. . . . . . . . . . . . . . . .]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1,6]&lt;stderr&gt;:[node33:04744] MCW rank 6 bound to socket 0[core 12-13]: [. . . . . . . . . . . . B B . .][. . . . . . . . . . . . . . . .]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ***************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, when I try to use eight nodes,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the job fails and I get the error message  below (repeatedly from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; several nodes):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #PBS -l nodes=8:ppn=32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec -np 128 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --cpus-per-proc 2 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --bind-to-core \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --report-bindings \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --tag-output \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Error message:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; An invalid physical processor ID was returned when attempting to bind
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an MPI process to a unique processor on node:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Node: node18
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This usually means that you requested binding to more processors than
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exist (e.g., trying to bind N MPI processes to M processors, where N&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; M), or that the node has an unexpectedly different topology.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Double check that you have enough unique processors for all the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI processes that you are launching on this host, and that all nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have identical topologies.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You job will now abort.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oddly enough, the binding map *is* shown on STDERR,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and it sounds *correct*, pretty much the same binding map above
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that I get for a single node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *****************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Finally, replacing  &quot;--cpus-per-core 2&quot; by &quot;--npernode 16&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; works to some extent, but doesn't reach my goal.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I.e., the job doesn't fail, and each node gets 16 MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes indeed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, it doesn't bind the processes the way I want.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regardless of whether I continue to use &quot;--bind-to-core&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or replace it by &quot;--bind-to-socket&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all 16 processes on each node always bind to socket 0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and nothing goes to socket 1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there any simple workaround to this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (other than using a --rankfile),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to make --cpus-per-proc work with multiple nodes,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using &quot;each other core&quot;?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Only if it is simple workaround.  I must finish this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; remote test soon.  Otherwise I can revisit this issue later.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21627.php">Gus Correa: "Re: [OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4"</a>
<li><strong>Previous message:</strong> <a href="21625.php">Javier Garcia Blas: "[OMPI users] Call For Papers: EuroMPI 2013. Submission deadline extended to	April 12th, 2013"</a>
<li><strong>In reply to:</strong> <a href="21588.php">Gus Correa: "Re: [OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21627.php">Gus Correa: "Re: [OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4"</a>
<li><strong>Reply:</strong> <a href="21627.php">Gus Correa: "Re: [OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4"</a>
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
