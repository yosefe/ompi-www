<?
$subject_val = "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 17 21:20:25 2014" -->
<!-- isoreceived="20140718012025" -->
<!-- sent="Thu, 17 Jul 2014 18:20:23 -0700" -->
<!-- isosent="20140718012023" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal" -->
<!-- id="CAAvDA15Dd=0mo87awBcqy2DORuPYchhvESy9XLkzqwNn59zpFA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAMJJpkUy=HyocEyuUh6+N9a3TSiYtrpGJP6zsBLYB78NAmY9Yg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-17 21:20:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15193.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15191.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>In reply to:</strong> <a href="15191.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15169.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jul 17, 2014 at 5:55 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Are these also called for shared libraries?
</span><br>
<span class="quotelev1">&gt;
</span><br>
&nbsp;&nbsp;George.
<br>
<span class="quotelev1">&gt;
</span><br>
<p>If you are asking specifically about Solaris w/ the vendor compilers, then
<br>
apparently Yes:
<br>
<p>-bash-3.00$ cat test.c
<br>
#include &lt;stdio.h&gt;
<br>
int X = 0;
<br>
__attribute__((__constructor__)) void hello(void) { X = 42; }
<br>
__attribute__((__destructor__)) void goodbye(void) { printf(&quot;X = %d\n&quot;, X);
<br>
}
<br>
-bash-3.00$ cc -fPIC -c test.c
<br>
-bash-3.00$ cc -shared -o libtest.so test.o
<br>
<p>-bash-3.00$ cat main.c
<br>
int main(void) { return 0; }
<br>
-bash-3.00$ cc main.c -L. -ltest
<br>
-bash-3.00$ ./a.out
<br>
X = 42
<br>
<p>That is the ancient toolchain in /usr/bin:
<br>
<p>-bash-3.00$ cc -V
<br>
cc: Sun C 5.9 SunOS_sparc 2007/05/03
<br>
usage: cc [ options] files.  Use 'cc -flags' for details
<br>
-bash-3.00$ ld -V
<br>
ld: Software Generation Utilities - Solaris Link Editors: 5.10-1.489
<br>
<p><p>Same result with Solaris Studio 12.3 compilers:
<br>
<p>-bash-3.00$ cc -V
<br>
cc: Sun C 5.12 SunOS_sparc 2011/11/16
<br>
-bash-3.00$ cc -fPIC -c test.c
<br>
-bash-3.00$ cc -shared -o libtest.so test.o
<br>
-bash-3.00$ cc main.c -L. -ltest
<br>
-bash-3.00$ ./a.out
<br>
X = 42
<br>
<p><p>-Paul
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 16, 2014 at 3:36 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jul 16, 2014 at 7:36 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Correction. xlc does support the destructor function attribute. The odd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one out is PGI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are the Solaris Studio compilers still of interest to the Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; community?
</span><br>
<span class="quotelev2">&gt;&gt; If so, I've confirmed support using the following 5-line test on a
</span><br>
<span class="quotelev2">&gt;&gt; Solaris-10/SPARC platform.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int X = 0;
</span><br>
<span class="quotelev2">&gt;&gt; __attribute__((__constructor__)) void hello(void) { X = 42; }
</span><br>
<span class="quotelev2">&gt;&gt; __attribute__((__destructor__)) void goodbye(void) { printf(&quot;X = %d\n&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; X); }
</span><br>
<span class="quotelev2">&gt;&gt; int main(void) { return 0; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15183.php">http://www.open-mpi.org/community/lists/devel/2014/07/15183.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15191.php">http://www.open-mpi.org/community/lists/devel/2014/07/15191.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15192/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15193.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15191.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>In reply to:</strong> <a href="15191.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15169.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
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
