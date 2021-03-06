<?
$subject_val = "Re: [OMPI users] MPI_Comm_accept randomly gives errors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 15 23:26:51 2012" -->
<!-- isoreceived="20121016032651" -->
<!-- sent="Tue, 16 Oct 2012 12:26:39 +0900" -->
<!-- isosent="20121016032639" -->
<!-- name="Valentin Clement" -->
<!-- email="valentin.clement_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_accept randomly gives errors" -->
<!-- id="E9704E5A-5B5F-43D5-813D-DB184CA2B096_at_riken.jp" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="18697_1350308615_507C1306_18697_10133_1_F5E891FB-4340-42D7-84FD-A1DF7B847B88_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_accept randomly gives errors<br>
<strong>From:</strong> Valentin Clement (<em>valentin.clement_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-15 23:26:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20493.php">Anup Rao: "[OMPI users] Building openmpi 1.6.2 using yocto based toolchain for ARMv5"</a>
<li><strong>Previous message:</strong> <a href="20491.php">Shans Rajesh: "[OMPI users] MPI tests"</a>
<li><strong>Maybe in reply to:</strong> <a href="20407.php">Valentin Clement: "[OMPI users] MPI_Comm_accept randomly gives errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the information. As there is also a problem with intercommunicator after spawn in 1.6.x I'll turn to another solution. 
<br>
<p>Valentin Cl&#233;ment 
<br>
<p><p>On Oct 15, 2012, at 10:41 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yeah, we don't support multi-threaded operations very well at this time. I think you'd have better success with the 1.7 series as it is released, but very much doubt the 1.6 series could do this as you describe.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One way to solve the immediate problem would be to funnel all MPI operations into a single thread - you can have that thread subsequently parcel out any messages for handling. You'd have better success with it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 3, 2012, at 10:36 PM, Valentin Clement &lt;valentin.clement_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi everyone, 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm currently implementing communication based on MPI in our parallel language middle-ware POP-C++. It was using TCP/IP socket before but due to a project to port the language on a supercomputer, I have to use OpenMPI for the communication. I successfully change the old communication by MPI communication. Anyway I having the following error sometimes during the execution of my program. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI-COMBOX(client): Want to get a connection to 3461939200.0;tcp://172.19.76.219:52876;tcp://172.19.7.128:52876;tcp://172.16.162.1:52876;tcp://192.168.59.1:52876+3461939202.0;tcp://172.19.76.219:52879;tcp://172.19.7.128:52879;tcp://172.16.162.1:52879;tcp://192.168.59.1:52879:300
</span><br>
<span class="quotelev2">&gt;&gt; [clementon:58465] [[52825,3],0] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file dpm_orte.c at line 315
</span><br>
<span class="quotelev2">&gt;&gt; [clementon:58465] *** An error occurred in MPI_Comm_accept
</span><br>
<span class="quotelev2">&gt;&gt; [clementon:58465] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [clementon:58465] *** MPI_ERR_UNKNOWN: unknown error
</span><br>
<span class="quotelev2">&gt;&gt; [clementon:58465] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sometimes I have to MPI_Comm_connect that failed :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI-COMBOX(client): Want to get a connection to 1318912000.0;tcp://192.168.59.176:33956+1318912002.0;tcp://192.168.59.176:54394:300
</span><br>
<span class="quotelev2">&gt;&gt; [ubuntu:19666] [[20125,3],0] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file dpm_orte.c at line 315
</span><br>
<span class="quotelev2">&gt;&gt; [ubuntu:19666] *** An error occurred in MPI_Comm_accept
</span><br>
<span class="quotelev2">&gt;&gt; [ubuntu:19666] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [ubuntu:19666] *** MPI_ERR_UNKNOWN: unknown error
</span><br>
<span class="quotelev2">&gt;&gt; [ubuntu:19666] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So basically, I have a process waiting for connection with MPI_Comm_accept (Comm.Accept as I used C++). And another process want to connect to it with the MPI_Comm_connect (MPI::COMM_WORLD.Connect(port_name) ... ). It works fine most of the time. I'm suspecting a problem with multiple threads. The process who receives connection as a second thread to serve request. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * The process 1 connects to the process 2 
</span><br>
<span class="quotelev2">&gt;&gt; * process 2 thread 1 register the request
</span><br>
<span class="quotelev2">&gt;&gt; * process 2 thread 1 will wait for a new connection
</span><br>
<span class="quotelev2">&gt;&gt; * process 2 thread 2 will server the pending request and might send data
</span><br>
<span class="quotelev2">&gt;&gt; * A another process might start again a connection to the process 2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm running this code on an Ubuntu 12.04 with OpenMPI 1.6.2 configured with --enable-mpi-thread-multiple. I joined ompi_info -all output. 
</span><br>
<span class="quotelev2">&gt;&gt; I'm running also the same code on a Mac OS X 10.8.2 with OpenMPI 1.6.2 also configured with --enable-mpi-thread-multiple. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't run on multiple node for the moment. Just one node and already experiencing this. As I said I'm suspecting a problem with multiple thread but my configuration should allow multiple thread to use MPI calls. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any help much appreciated 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Valentin Clement
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Valentin Clement
</span><br>
<span class="quotelev2">&gt;&gt; Student trainee
</span><br>
<span class="quotelev2">&gt;&gt; Advanced Institute for Computational Science
</span><br>
<span class="quotelev2">&gt;&gt; Programming environnement research team 
</span><br>
<span class="quotelev2">&gt;&gt; RIKEN Institute
</span><br>
<span class="quotelev2">&gt;&gt; Kobe, Japan
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi-output.tar.bz2&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  
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
<p>-----------------------------------------------------------------------------------------
<br>
Valentin Clement - Student trainee at AICS - RIKEN
<br>
valentin.clement_at_[hidden]
<br>
valentin.clement_at_[hidden]
<br>
Master thesis project
<br>
POP-C++ on the K Computer 
<br>
Project homepage: <a href="https://forge.tic.eia-fr.ch/projects/poponk">https://forge.tic.eia-fr.ch/projects/poponk</a>
<br>
Project board: <a href="https://forge.tic.eia-fr.ch/projects/poponk/wiki/Wiki">https://forge.tic.eia-fr.ch/projects/poponk/wiki/Wiki</a>
<br>
-----------------------------------------------------------------------------------------
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20492/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20493.php">Anup Rao: "[OMPI users] Building openmpi 1.6.2 using yocto based toolchain for ARMv5"</a>
<li><strong>Previous message:</strong> <a href="20491.php">Shans Rajesh: "[OMPI users] MPI tests"</a>
<li><strong>Maybe in reply to:</strong> <a href="20407.php">Valentin Clement: "[OMPI users] MPI_Comm_accept randomly gives errors"</a>
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
