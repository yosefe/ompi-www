<?
$subject_val = "Re: [OMPI users] intermittent segfaults with openib on ring_c.c";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  4 10:17:45 2014" -->
<!-- isoreceived="20140604141745" -->
<!-- sent="Wed, 4 Jun 2014 10:17:28 -0400" -->
<!-- isosent="20140604141728" -->
<!-- name="Fischer, Greg A." -->
<!-- email="fischega_at_[hidden]" -->
<!-- subject="Re: [OMPI users] intermittent segfaults with openib on ring_c.c" -->
<!-- id="C86C7F6037A63C44BCCD0D77E9D59BFE159ED30EBD_at_SWEC9985.w-intra.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9F46BDAD-559A-4826-A326-EF460C57E071_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] intermittent segfaults with openib on ring_c.c<br>
<strong>From:</strong> Fischer, Greg A. (<em>fischega_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-04 10:17:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24531.php">Fischer, Greg A.: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<li><strong>Previous message:</strong> <a href="24529.php">Ralph Castain: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<li><strong>In reply to:</strong> <a href="24529.php">Ralph Castain: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24531.php">Fischer, Greg A.: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I recompiled with &quot;-enable-debug&quot; but it doesn't seem to be providing any more information or a core dump. I'm compiling ring.c with:
<br>
<p>mpicc ring_c.c -g -traceback -o ring_c
<br>
<p>and running with:
<br>
<p>mpirun -np 4 --mca btl openib,self ring_c
<br>
<p>and I'm getting:
<br>
<p>[binf112:05845] *** Process received signal ***
<br>
[binf112:05845] Signal: Segmentation fault (11)
<br>
[binf112:05845] Signal code: Address not mapped (1)
<br>
[binf112:05845] Failing at address: 0x10
<br>
[binf112:05845] [ 0] /lib64/libpthread.so.0(+0xf7c0)[0x2b2fa44d57c0]
<br>
[binf112:05845] [ 1] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.8.1/lib/libopen-pal.so.6(opal_memory_ptmalloc2_int_malloc+0x4b3)[0x2b2fa4ff2b03]
<br>
[binf112:05845] [ 2] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.8.1/lib/libopen-pal.so.6(opal_memory_ptmalloc2_malloc+0x58)[0x2b2fa4ff5288]
<br>
[binf112:05845] [ 3] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.8.1/lib/libopen-pal.so.6(+0xd1f86)[0x2b2fa4ff4f86]
<br>
[binf112:05845] [ 4] /lib64/libc.so.6(vasprintf+0x3e)[0x2b2fa4957a7e]
<br>
[binf112:05845] [ 5] /lib64/libc.so.6(asprintf+0x88)[0x2b2fa4937148]
<br>
[binf112:05845] [ 6] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.8.1/lib/libopen-rte.so.7(orte_util_convert_process_name_to_string+0xe2)[0x2b2fa4c873e2]
<br>
[binf112:05845] [ 7] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.8.1/lib/libopen-rte.so.7(orte_oob_base_get_addr+0x25)[0x2b2fa4cbdb15]
<br>
[binf112:05845] [ 8] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.8.1/lib/openmpi/mca_rml_oob.so(orte_rml_oob_get_uri+0xa)[0x2b2fa79c5d2a]
<br>
[binf112:05845] [ 9] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.8.1/lib/libopen-rte.so.7(orte_routed_base_register_sync+0x1fd)[0x2b2fa4cdae7d]
<br>
[binf112:05845] [10] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.8.1/lib/openmpi/mca_routed_binomial.so(+0x3c7b)[0x2b2fa719bc7b]
<br>
[binf112:05845] [11] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.8.1/lib/libopen-rte.so.7(orte_ess_base_app_setup+0x3ad)[0x2b2fa4ca7c8d]
<br>
[binf112:05845] [12] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.8.1/lib/openmpi/mca_ess_env.so(+0x169f)[0x2b2fa6b8f69f]
<br>
[binf112:05845] [13] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.8.1/lib/libopen-rte.so.7(orte_init+0x17b)[0x2b2fa4c764bb]
<br>
[binf112:05845] [14] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.8.1/lib/libmpi.so.1(ompi_mpi_init+0x438)[0x2b2fa3d1e198]
<br>
[binf112:05845] [15] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.8.1/lib/libmpi.so.1(MPI_Init+0xf7)[0x2b2fa3d44947]
<br>
[binf112:05845] [16] ring_c[0x4024ef]
<br>
[binf112:05845] [17] /lib64/libc.so.6(__libc_start_main+0xe6)[0x2b2fa4906c36]
<br>
[binf112:05845] [18] ring_c[0x4023f9]
<br>
[binf112:05845] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 3 with PID 5845 on node xxxx112 exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p>Does any of that help?
<br>
<p>Greg
<br>
<p>From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Tuesday, June 03, 2014 11:54 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] intermittent segfaults with openib on ring_c.c
<br>
<p>Sounds odd - can you configure OMPI --enable-debug and run it again? If it fails and you can get a core dump, could you tell us the line number where it is failing?
<br>
<p><p>On Jun 3, 2014, at 9:58 AM, Fischer, Greg A. &lt;fischega_at_[hidden]&lt;mailto:fischega_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>Apologies - I forgot to add some of the information requested by the FAQ:
<br>
<p>1.       OpenFabrics is provided by the Linux distribution:
<br>
<p>[binf102:fischega] $ rpm -qa | grep ofed
<br>
ofed-kmp-default-1.5.4.1_3.0.76_0.11-0.11.5
<br>
ofed-1.5.4.1-0.11.5
<br>
ofed-doc-1.5.4.1-0.11.5
<br>
<p><p>2.       Linux Distro / Kernel:
<br>
<p>[binf102:fischega] $ cat /etc/SuSE-release
<br>
SUSE Linux Enterprise Server 11 (x86_64)
<br>
VERSION = 11
<br>
PATCHLEVEL = 3
<br>
<p>[binf102:fischega] $ uname -a
<br>
Linux xxxx102 3.0.76-0.11-default #1 SMP Fri Jun 14 08:21:43 UTC 2013 (ccab990) x86_64 x86_64 x86_64 GNU/Linux
<br>
<p><p>3.       Not sure which subnet manger is being used - I think OpenSM, but I'll need to check with my administrators.
<br>
<p><p>4.       Output of ibv_devinfo is attached.
<br>
<p><p>5.       Ifconfig output is attached.
<br>
<p><p>6.       Ulimit -l output:
<br>
<p>[binf102:fischega] $ ulimit -l
<br>
unlimited
<br>
<p>Greg
<br>
<p><p>From: Fischer, Greg A.
<br>
Sent: Tuesday, June 03, 2014 12:38 PM
<br>
To: Open MPI Users
<br>
Cc: Fischer, Greg A.
<br>
Subject: intermittent segfaults with openib on ring_c.c
<br>
<p>Hello openmpi-users,
<br>
<p>I'm running into a perplexing problem on a new system, whereby I'm experiencing intermittent segmentation faults when I run the ring_c.c example and use the openib BTL. See an example below. Approximately 50% of the time it provides the expected output, but the other 50% of the time, it segfaults. LD_LIBRARY_PATH is set correctly, and the version of &quot;mpirun&quot; being invoked is correct. The output of ompi_info -all is attached.
<br>
<p>One potential problem may be that the system that OpenMPI was compiled on is mostly the same as the system where it is being executed, but there are some differences in the installed packages. I've checked the critical ones (libibverbs, librdmacm, libmlx4-rdmav2, etc.), and they appear to be the same.
<br>
<p>Can anyone suggest how I might start tracking this problem down?
<br>
<p>Thanks,
<br>
Greg
<br>
<p>[binf102:fischega] $ mpirun -np 2 --mca btl openib,self ring_c
<br>
[binf102:31268] *** Process received signal ***
<br>
[binf102:31268] Signal: Segmentation fault (11)
<br>
[binf102:31268] Signal code: Address not mapped (1)
<br>
[binf102:31268] Failing at address: 0x10
<br>
[binf102:31268] [ 0] /lib64/libpthread.so.0(+0xf7c0) [0x2b42213f57c0]
<br>
[binf102:31268] [ 1] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.6.5/lib/libmpi.so.1(opal_memory_ptmalloc2_int_malloc+0x4b3) [0x2b42203fd7e3]
<br>
[binf102:31268] [ 2] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.6.5/lib/libmpi.so.1(opal_memory_ptmalloc2_int_memalign+0x8b) [0x2b4220400d3b]
<br>
[binf102:31268] [ 3] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.6.5/lib/libmpi.so.1(opal_memory_ptmalloc2_memalign+0x6f) [0x2b42204008ef]
<br>
[binf102:31268] [ 4] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.6.5/lib/libmpi.so.1(+0x117876) [0x2b4220400876]
<br>
[binf102:31268] [ 5] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.6.5/lib/openmpi/mca_btl_openib.so(+0xc34c) [0x2b422572334c]
<br>
[binf102:31268] [ 6] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.6.5/lib/libmpi.so.1(opal_class_initialize+0xaa) [0x2b422041d64a]
<br>
[binf102:31268] [ 7] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.6.5/lib/openmpi/mca_btl_openib.so(+0x1f12f) [0x2b422573612f]
<br>
[binf102:31268] [ 8] /lib64/libpthread.so.0(+0x77b6) [0x2b42213ed7b6]
<br>
[binf102:31268] [ 9] /lib64/libc.so.6(clone+0x6d) [0x2b42216dcd6d]
<br>
[binf102:31268] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 31268 on node xxxx102 exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
&lt;ibv_devinfo.txt&gt;&lt;ifconfig.txt&gt;_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24530/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24531.php">Fischer, Greg A.: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<li><strong>Previous message:</strong> <a href="24529.php">Ralph Castain: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<li><strong>In reply to:</strong> <a href="24529.php">Ralph Castain: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24531.php">Fischer, Greg A.: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
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
