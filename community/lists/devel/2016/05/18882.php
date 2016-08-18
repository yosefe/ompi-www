<?
$subject_val = "[OMPI devel] [2.0.0rc2] Linux/MIPS64 failures";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 18:36:51 2016" -->
<!-- isoreceived="20160502223651" -->
<!-- sent="Mon, 2 May 2016 15:36:35 -0700" -->
<!-- isosent="20160502223635" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [2.0.0rc2] Linux/MIPS64 failures" -->
<!-- id="CAAvDA15x+=uLrD-GotzBm0NxpnTeQW17wxF4E7mMXkpcAZdNsw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] [2.0.0rc2] Linux/MIPS64 failures<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-02 18:36:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18883.php">Nathan Hjelm: "Re: [OMPI devel] [2.0.0rc2] Linux/MIPS64 failures"</a>
<li><strong>Previous message:</strong> <a href="18881.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18883.php">Nathan Hjelm: "Re: [OMPI devel] [2.0.0rc2] Linux/MIPS64 failures"</a>
<li><strong>Reply:</strong> <a href="18883.php">Nathan Hjelm: "Re: [OMPI devel] [2.0.0rc2] Linux/MIPS64 failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
New since the last time I did testing, I now have access to Linux MIPS64
<br>
(Cavium Octeon II) systems.
<br>
They are infinitely better than the QEMU-emulated MIPS I have used for
<br>
previous testing.
<br>
I have access to both big-endian and little-endian, and am setup to test
<br>
the three main ABIs (32, n32 and 64).
<br>
<p>For the little-endian system all three ABIs pass build, pass &quot;make check&quot;
<br>
and run a sampling of the examples.
<br>
However, for the big-endian system only the &quot;-mabi=64&quot; case passes.
<br>
<p>With big-endian and &quot;-mabi=32&quot; I passed &quot;make check&quot; but saw a SEGV from
<br>
ring_c:
<br>
<p>$ mpirun -mca btl sm,self -np 2 examples/ring_c'
<br>
[erpro8-fsf1:05119] *** Process received signal ***
<br>
[erpro8-fsf1:05119] Signal: Segmentation fault (11)
<br>
[erpro8-fsf1:05119] Signal code: Address not mapped (1)
<br>
[erpro8-fsf1:05119] Failing at address: 0x401c7c0
<br>
[erpro8-fsf1:05119] *** End of error message ***
<br>
Segmentation fault (core dumped)
<br>
<p><p>With big-endian and &quot;-mabi=n32&quot; I fail the dl_open test (the first
<br>
non-trivial test) in &quot;make check&quot;:
<br>
<p>make[4]: Entering directory
<br>
`/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-mips64-n32/BLD/ompi/debuggers'
<br>
PASS: predefined_gap_test
<br>
PASS: predefined_pad_test
<br>
/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-mips64-n32/openmpi-2.0.0rc2/config/test-driver:
<br>
line 107: 14795 Segmentation fault      &quot;$@&quot; &gt; $log_file 2&gt;&amp;1
<br>
FAIL: dlopen_test
<br>
============================================================================
<br>
Testsuite summary for Open MPI 2.0.0rc2
<br>
============================================================================
<br>
# TOTAL: 3
<br>
# PASS:  2
<br>
# SKIP:  0
<br>
# XFAIL: 0
<br>
# FAIL:  1
<br>
# XPASS: 0
<br>
# ERROR: 0
<br>
============================================================================
<br>
See ompi/debuggers/test-suite.log
<br>
Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
============================================================================
<br>
make[4]: *** [test-suite.log] Error 1
<br>
<p>Or, when run manually:
<br>
<p>$ ./ompi/debuggers/dlopen_test
<br>
[erpro8-fsf1:05134] *** Process received signal ***
<br>
[erpro8-fsf1:05134] Signal: Segmentation fault (11)
<br>
[erpro8-fsf1:05134] Signal code: Address not mapped (1)
<br>
[erpro8-fsf1:05134] Failing at address: 0x1100154c
<br>
[erpro8-fsf1:05134] *** End of error message ***
<br>
Segmentation fault (core dumped)
<br>
<p><p>Unfortunately, gdb is not working properly on the core files generated by
<br>
either failure.
<br>
<p>In addition to the endian differences between the two MIPS64 systems, the
<br>
little-endian one is running a newer distro (Debian jessie vs wheezy).
<br>
So, I cannot conclusively state that the endianness is the root cause.
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18882/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18883.php">Nathan Hjelm: "Re: [OMPI devel] [2.0.0rc2] Linux/MIPS64 failures"</a>
<li><strong>Previous message:</strong> <a href="18881.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18883.php">Nathan Hjelm: "Re: [OMPI devel] [2.0.0rc2] Linux/MIPS64 failures"</a>
<li><strong>Reply:</strong> <a href="18883.php">Nathan Hjelm: "Re: [OMPI devel] [2.0.0rc2] Linux/MIPS64 failures"</a>
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