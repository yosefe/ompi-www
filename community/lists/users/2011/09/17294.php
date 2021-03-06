<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the	processes	created by mpirun?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 14 15:56:36 2011" -->
<!-- isoreceived="20110914195636" -->
<!-- sent="Wed, 14 Sep 2011 21:56:28 +0200" -->
<!-- isosent="20110914195628" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the	processes	created by mpirun?" -->
<!-- id="76365959-65C7-4354-8403-AFCCAFDCE4CF_at_staff.uni-marburg.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="E9F276A0010AF44ABD2C03ED2EDAE7DB275E484142_at_HDXMSPB.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the	processes	created by mpirun?<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-14 15:56:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17295.php">Randall Svancara: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?"</a>
<li><strong>Previous message:</strong> <a href="17293.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of	the	processes	created by mpirun?"</a>
<li><strong>In reply to:</strong> <a href="17290.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the	processes	created by mpirun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17295.php">Randall Svancara: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?"</a>
<li><strong>Reply:</strong> <a href="17295.php">Randall Svancara: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 14.09.2011 um 19:02 schrieb Blosch, Edwin L:
<br>
<p><span class="quotelev1">&gt; Thanks for trying. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you feel that this is an impossible request without the assistance of some process running as root, for example, as Reuti mentioned, the daemons of a job scheduler?  Or are you saying it will just not be as straightforward as calling setgid as you had hoped?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, do you think there is a way I could make use of the sg command below?  Perhaps there is a way to have the rsh/ssh launcher start the application processes with a command like 'sg &lt;group&gt; &lt;executable name&gt;'?
</span><br>
<p>What about a half-tight integration (or call it: classic tight integration), i.e. no recompilation necessary?
<br>
<p>- setup your mpiexec call in the jobscript to use a plain rsh for the remote startup (no path given): &#150;mca plm_rsh_agent rsh
<br>
<p>- the PE of SGE needs the argument -catch_rsh in start_proc_args and the supplied script in $SGE_ROOT/mpi/startmpi.sh
<br>
<p>&nbsp;(SGE will create a symbolic link in $TMPDIR therein [which will be called first this way] to the rsh-wrapper in $SGE_ROOT/mpi [pitfall: some applications need a -V to be added in the lines woth &quot;qrsh&quot;, i.e. &quot;qrsh -inherit -V ...&quot; to send all environment variables to the slaves])
<br>
<p>- what is your setting of qrsh_daemon/qrsh_command in `qconf -sconf`? This will then be used finally to reach the node and should be builtin or point to the SGE supplied rsh/rshd (no rshd necessary to install, no rshd is running all the time, no rshd will be started by xinet.d or alike)
<br>
<p>- like you do already: switch off the built-in SGE starter in your mpiexec call: -mca plm_rsh_disable_qrsh 1
<br>
<p>-- Reuti
<br>
<p>PS: To avoid misunderstandings: you could also set &quot;&#150;mca plm_rsh_agent foobar&quot; and in $SGE_ROOT/mpi/startmpi.sh you change it to create a symbolic link called &quot;foobar &quot; in $TMPDIR. It's just a name at this stage of startup.
<br>
<p><p><span class="quotelev1">&gt; Ed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NAME
</span><br>
<span class="quotelev1">&gt;      sg - execute command as different group ID
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SYNOPSIS
</span><br>
<span class="quotelev1">&gt;      sg [-] [group [-c ] command]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; DESCRIPTION
</span><br>
<span class="quotelev1">&gt;      The sg command works similar to newgrp but accepts a command. The
</span><br>
<span class="quotelev1">&gt;      command will be executed with the /bin/sh shell. With most shells you
</span><br>
<span class="quotelev1">&gt;      may run sg from, you need to enclose multi-word commands in quotes.
</span><br>
<span class="quotelev1">&gt;      Another difference between newgrp and sg is that some shells treat
</span><br>
<span class="quotelev1">&gt;      newgrp specially, replacing themselves with a new instance of a shell
</span><br>
<span class="quotelev1">&gt;      that newgrp creates. This doesn't happen with sg, so upon exit from a
</span><br>
<span class="quotelev1">&gt;      sg command you are returned to your previous group ID.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, September 14, 2011 11:33 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 14, 2011, at 9:39 AM, Blosch, Edwin L wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks, Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I get the failure messages, unfortunately:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; setgid FAILED
</span><br>
<span class="quotelev2">&gt;&gt; setgid FAILED
</span><br>
<span class="quotelev2">&gt;&gt; setgid FAILED
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I actually had attempted to call setgid from within the application previously, which looks similar to what you've done, but it failed. That was when I initiated the post to the mailing list. My conclusion, a guess really, was that Linux would not let me setgid from within my program because I was not root.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was afraid of that - the documentation seemed to indicate that would be the case, but I figured it was worth a quick try. Sorry I can't be of help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, September 14, 2011 8:15 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The attached should set the gid of the remote daemons (and their children) to the gid of mpirun. No cmd line option or anything is required - it will just always do it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Would you mind giving it a try?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please let me know if/how it works.
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
<li><strong>Next message:</strong> <a href="17295.php">Randall Svancara: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?"</a>
<li><strong>Previous message:</strong> <a href="17293.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of	the	processes	created by mpirun?"</a>
<li><strong>In reply to:</strong> <a href="17290.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the	processes	created by mpirun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17295.php">Randall Svancara: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?"</a>
<li><strong>Reply:</strong> <a href="17295.php">Randall Svancara: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?"</a>
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
