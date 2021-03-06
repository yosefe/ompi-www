<?
$subject_val = "Re: [OMPI users] Building MPI on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 13 16:56:21 2012" -->
<!-- isoreceived="20120613205621" -->
<!-- sent="Wed, 13 Jun 2012 16:56:15 -0400" -->
<!-- isosent="20120613205615" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building MPI on Windows" -->
<!-- id="FBC1F8D3-05B8-4737-9591-777811C1379F_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="033801cd49a4$c4010dc0$4c032940$_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Building MPI on Windows<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-13 16:56:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19552.php">Damien: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Previous message:</strong> <a href="19550.php">Trent Creekmore: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>In reply to:</strong> <a href="19550.php">Trent Creekmore: "Re: [OMPI users] Building MPI on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19552.php">Damien: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Reply:</strong> <a href="19552.php">Damien: "Re: [OMPI users] Building MPI on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I guess it is fair to say that Windows is definitely a secondary platform for Open MPI.  :-(
<br>
<p>What would be great is if some people could write up a set of cohesive docs for the Windows stuff.  Someone mentioned some prereq's earlier in this thread that are probably not well documented because all of us POSIX-ish people just assume them (e.g., having ssh installed).
<br>
<p>And then provide some guidance on how to compile and link with the OMPI binaries in Visual Studio (or whatever the normal thing is on the Windows platform).  And if you want to build OMPI from source, guidance on how to do so (it sounded like someone cited something long out of date earlier in this thread -- are those out-of-date docs still hanging around somewhere?  If so, we should eliminate/update them!).
<br>
<p>I'm not a Windows-based developer myself, so I really have little to offer here.  
<br>
<p>But if some of you Windows people can get together and write up a good README and/or set of FAQ questions, I'll be happy to put them together and put the README in SVN and/or the FAQ questions on the web site.
<br>
<p><p><p>On Jun 13, 2012, at 4:40 PM, Trent Creekmore wrote:
<br>
<p><span class="quotelev1">&gt; Well, you can now see why I gave up on trying to get to it function with Windows.
</span><br>
<span class="quotelev1">&gt; I would say work with Linux and using the guide I did, to at least get you started on doing some work instead of wasting a lot of time working on that.
</span><br>
<span class="quotelev1">&gt; If you want it to function with Windows that badly just keep working on it in spare time. Meanwhile get to coding now using the method I told you.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of VimalMathew_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 13, 2012 3:23 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Yes, did that too.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Vimal
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Trent Creekmore
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 13, 2012 4:21 PM
</span><br>
<span class="quotelev1">&gt; To: 'Open MPI Users'
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I meant the actual files, not including folders.
</span><br>
<span class="quotelev1">&gt; But you won&#146;t need to Bin files,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of VimalMathew_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 13, 2012 3:13 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I put all the folders (bin, include, etc, lib and share) in the root folder of the project. No success.
</span><br>
<span class="quotelev1">&gt; Tried adding all the .h files in include in the Header files folder under the Project in VS. Still no go.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --Vimal
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Trent Creekmore
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 13, 2012 3:52 PM
</span><br>
<span class="quotelev1">&gt; To: 'Open MPI Users'
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I find the easiest way to know if LIB and DLL function correctly, and avoiding  confusion on correct setup is it just drop them all in the root directory of your project. VS should see them upon load of that project.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of VimalMathew_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 13, 2012 2:47 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Yes, and then I added the libraries folder in Visual Studio under Project Properties&gt;Linker&gt;General&gt;Additional Library Directories.
</span><br>
<span class="quotelev1">&gt; I tried compiling simple &#145;Hello World&#146;&#146; code and I get an error message saying &#145;Cannot open &lt;mpi.h&gt;: No such file or directory.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; What step am I missing?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Vimal
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Damien
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 13, 2012 3:43 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Once you've run the installer, you'll have a set of OpenMPI debug and release dlls, libraries to link to and the necessary include files.  If you're installing the 64-bit version, it will end up here by default:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; C:\Program Files (x86)\OpenMPI_v1.6-x64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Damien 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 13/06/2012 1:35 PM, VimalMathew_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; What do I do after I run it?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Vimal
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 13, 2012 3:32 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I'm not a Windozer, so I can't speak to the port for that platform. However, the conversation here seems strange to me. Have you actually read the instructions on the open-mpi.org web site?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Looks pretty simple to me. You download the .exe installer for either 32 or 64 bits, and run it. You don't build OMPI from source - the distro contains everything you need to just run.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; See:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; for the software and some Windows notes.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Jun 13, 2012, at 1:20 PM, Trent Creekmore wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just gave up and stuck with Unix/Linux.  Eclipse IDE offers a very nice plugin for developing and debugging MPI code named Parallel Tools Platform. Something not available in Visual Studio, except for similar one made by Intel, but I believe you have to use their compiler.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; You could always run Eclipse remotely from any Windows OS using a Secure Shell client and Xming (A Windows based X Server). That is what I do, and no more wasting time trying to get OMPI trying to run on Windows.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of VimalMathew_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 13, 2012 2:09 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I've tried the Cygwin way.
</span><br>
<span class="quotelev1">&gt; Been hitting roadblocks for a week now. I've just uninstalled everything and started from scratch again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Vimal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] on behalf of Trent Creekmore
</span><br>
<span class="quotelev1">&gt; Sent: Wed 6/13/2012 2:47 PM
</span><br>
<span class="quotelev1">&gt; To: 'Open MPI Users'
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may, or may not be helpful, but I have tried the Windows offerings. I have never gotten anything to function was expected. Compiling, or the available binaries. I think they just don't work at all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My suggestion which I feel would be easier, and less headache way would be to install something like CygWin, which would give you a Unix/Linux like environment running under Windows.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You would only need to compile it in CygWin just like the Linux/Unix docs say to do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know if anyone else has done it this way or not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of VimalMathew_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 13, 2012 1:32 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to follow the ReadMe file to build OpenMPI on Windows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Step 1: Untar the contrib/platform/win32/ompi-static.tgz tarball in the root directory of the Open MPI distribution.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do not have ompi-static.tgz in the mentioned path.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Step 2: Go in the ompi/datatype subdirectory in the Open MPI distribution and copy the following:  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; datatype_pack.c   to datatype_pack_checksum.c        
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; datatype_unpack.c to datatype_unpack_checksum.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do not see these files in the mentioned path.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Step 4: Open the Open MPI project (.sln file) from the root directory of the distribution.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't have a .sln file anywhere
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Help anyone? Shiqing?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Vimal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of VimalMathew_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 13, 2012 11:21 AM
</span><br>
<span class="quotelev1">&gt; To: fan_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cc: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I did make uninstall. I also deleted the folders of the other implementation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I ran ./configure and make all install.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At the end of the make I saw a bunch of errors for the makefiles. I've attached the .log and .out files.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please tell me if I'm on the right track.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Vimal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Shiqing Fan [mailto:fan_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 13, 2012 9:37 AM
</span><br>
<span class="quotelev1">&gt; To: Mathew, Vimal
</span><br>
<span class="quotelev1">&gt; Cc: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Vimal,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure how you can uninstall  the other one, may be 'make uninstall' from the source? Or you may also ask in their mailing list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another solution might use the full path for the executables, like &quot;c:\Program Files\OpenMPI_v1.6-win32\bin\mpicc hello.c&quot; or under Cygwin: &quot;/cygdrive/c/Program\ Files/OpenMPI_v1.6-win32/bin/mpicc.exe hello.c&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Of course, I suggest to get rid of the other MPI implementation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2012-06-13 3:17 PM, VimalMathew_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Shiqing,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I installed the LAN/MPI implementation first then the Open MPI implementation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could this be the problem? If yes, how do I get rid of the LAN/MPI implementation?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Vimal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Shiqing Fan [mailto:fan_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 13, 2012 4:49 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Cc: Mathew, Vimal
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Vimal,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The output looks strange. If you use the installer under Cygwin, mpicc shouldn't try to link with liblammpio.* or any library in /usr/local/lib. So I guess the mpicc is messed up with some previously installed MPI implementations. Could you please verify that 'which mpicc' is the one you installed?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, here I sent some screen shots that how it should look like under Cygwin.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1 - run command 'mpicc chello.c'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2 - run command 'mpicc chello.c -o chello'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On 2012-06-12 8:44 PM, VimalMathew_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I ran OpenMPI_v1.6-1_win64.exe.
</span><br>
<span class="quotelev1">&gt;  Now I get this message:
</span><br>
<span class="quotelev1">&gt;         C9995799_at_SOUMIWHP5003567 ~/openmpi-1.6
</span><br>
<span class="quotelev1">&gt;         $ mpicc hello.c -o hello
</span><br>
<span class="quotelev1">&gt;         WARNING: mpicc expected to find liblammpio.* in /usr/local/lib
</span><br>
<span class="quotelev1">&gt;         WARNING: MPI-2 IO support will be disabled
</span><br>
<span class="quotelev1">&gt;         gcc: hello.c: No such file or directory
</span><br>
<span class="quotelev1">&gt;         mpicc: No such file or directory
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Vimal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, June 12, 2012 2:30 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Probably easier to just run the Open MPI binary installer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 12, 2012, at 2:24 PM, &lt;VimalMathew_at_[hidden]&gt; &lt;mailto:VimalMathew_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         So I simply download and run OpenMPI_v1.6-1_win64.exe?
</span><br>
<span class="quotelev1">&gt;         Or is there a way to fix the Fortran compiler?
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         --
</span><br>
<span class="quotelev1">&gt;         Vimal
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         -----Original Message-----
</span><br>
<span class="quotelev1">&gt;         From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;         On Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt;         Sent: Tuesday, June 12, 2012 2:20 PM
</span><br>
<span class="quotelev1">&gt;         To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;         Subject: Re: [OMPI users] Help with buidling MPI(Error: mpi.h not
</span><br>
<span class="quotelev1">&gt;         found)
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         It does not look like you successfully built Open MPI -- it looks like
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Open MPI's configure script aborted because your Fortran compiler
</span><br>
<span class="quotelev1">&gt;         wasn't
</span><br>
<span class="quotelev1">&gt;         behaving:
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         -----
</span><br>
<span class="quotelev1">&gt;         checking if Fortran 77 compiler supports COMPLEX*16... yes checking
</span><br>
<span class="quotelev1">&gt;         size of Fortran 77 COMPLEX*16... 16 checking alignment of Fortran
</span><br>
<span class="quotelev1">&gt;         COMPLEX*16... 8 checking if Fortran 77 compiler supports COMPLEX*32...
</span><br>
<span class="quotelev1">&gt;         no checking for max Fortran MPI handle index... ( 0x7fffffff &lt;
</span><br>
<span class="quotelev1">&gt;         2147483647 ? 0x7fffffff : 2147483647 ) checking Fortran value for
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; .TRUE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         logical type... configure: error: Could not determine value of Fortran
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         .TRUE..  Aborting.
</span><br>
<span class="quotelev1">&gt;         -----
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         Anything that happened after that is somewhat irrelevant because Open
</span><br>
<span class="quotelev1">&gt;         MPI didn't configure properly.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         Looking in config.log, I see why:
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         -----
</span><br>
<span class="quotelev1">&gt;         configure:44290: checking Fortran value for .TRUE. logical type
</span><br>
<span class="quotelev1">&gt;         configure:44386: gcc -DNDEBUG -g -O2 -finline-functions
</span><br>
<span class="quotelev1">&gt;         -fno-strict-aliasing -I. -c conftest.c
</span><br>
<span class="quotelev1">&gt;         configure:44393: $? = 0
</span><br>
<span class="quotelev1">&gt;         configure:44403: gfortran  -o conftest conftest.o conftestf.f
</span><br>
<span class="quotelev1">&gt;         /usr/lib/gcc/i686-pc-cygwin/4.5.3/../../../../i686-pc-cygwin/bin/ld:
</span><br>
<span class="quotelev1">&gt;         reopening conftest.exe: Device or resource busy
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         /usr/lib/gcc/i686-pc-cygwin/4.5.3/../../../../i686-pc-cygwin/bin/ld:
</span><br>
<span class="quotelev1">&gt;         final link failed: Device or resource busy
</span><br>
<span class="quotelev1">&gt;         collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt;         configure:44410: $? = 1
</span><br>
<span class="quotelev1">&gt;         configure:44427: error: Could not determine value of Fortran .TRUE..
</span><br>
<span class="quotelev1">&gt;         Aborting.
</span><br>
<span class="quotelev1">&gt;         -----
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         All this may be irrelevant, though, because it looks like you're
</span><br>
<span class="quotelev1">&gt;         building on Windows.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         In that case, you might well want to just download the OMPI Windows
</span><br>
<span class="quotelev1">&gt;         binaries.  I don't know offhand if we support building on Windows with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         the normal configure / make methodology; we normally use cmake to
</span><br>
<span class="quotelev1">&gt;         build from source on Windows.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         On Jun 12, 2012, at 1:25 PM, &lt;VimalMathew_at_[hidden]&gt; &lt;mailto:VimalMathew_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 Hi,
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 I was directed to the OpenMPI website from the Boost Libraries page
</span><br>
<span class="quotelev1">&gt;                 to
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         install an MPI Installation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 I've followed all the steps in the installation guide to configure
</span><br>
<span class="quotelev1">&gt;                 and
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         build MPI. When I try to compile the hello.c program which contains
</span><br>
<span class="quotelev1">&gt;         &lt;mpi.h&gt;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 I get an error message saying mpi.h does not exist I've attached the
</span><br>
<span class="quotelev1">&gt;                 config.log, config.out, make.out , ompi_info all and make-install.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         files.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 Any help will be greatly appreciated!
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 Thanks,
</span><br>
<span class="quotelev1">&gt;                 Vimal Mathew
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 &lt;openmpi-1.6.7z&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;                 users mailing list
</span><br>
<span class="quotelev1">&gt;                 users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                 <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         --
</span><br>
<span class="quotelev1">&gt;         Jeff Squyres
</span><br>
<span class="quotelev1">&gt;         jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Shiqing Fan
</span><br>
<span class="quotelev1">&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev1">&gt; Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev1">&gt; Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev1">&gt; email: fan_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Shiqing Fan
</span><br>
<span class="quotelev1">&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev1">&gt; Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev1">&gt; Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev1">&gt; email: fan_at_[hidden]
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19552.php">Damien: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Previous message:</strong> <a href="19550.php">Trent Creekmore: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>In reply to:</strong> <a href="19550.php">Trent Creekmore: "Re: [OMPI users] Building MPI on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19552.php">Damien: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Reply:</strong> <a href="19552.php">Damien: "Re: [OMPI users] Building MPI on Windows"</a>
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
