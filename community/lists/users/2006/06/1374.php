<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  2 19:08:35 2006" -->
<!-- isoreceived="20060602230835" -->
<!-- sent="Sat, 03 Jun 2006 01:06:47 +0200" -->
<!-- isosent="20060602230647" -->
<!-- name="Frank" -->
<!-- email="openmpi-user_at_[hidden]" -->
<!-- subject="[OMPI users] Mac OS X: sess_dir_finalize leave" -->
<!-- id="4480C487.7050305_at_fraka-mp.de" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Frank (<em>openmpi-user_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-02 19:06:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1375.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<li><strong>Previous message:</strong> <a href="1373.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun -d -np 1 vhone
<br>
<p>yields the following output:
<br>
<p>[powerbook.2-net:06956] procdir: (null)
<br>
[powerbook.2-net:06956] jobdir: (null)
<br>
[powerbook.2-net:06956] unidir: 
<br>
/tmp/openmpi-sessions-admin_at_powerbook.2-net_0/default-universe
<br>
[powerbook.2-net:06956] top: openmpi-sessions-admin_at_powerbook.2-net_0
<br>
[powerbook.2-net:06956] tmp: /tmp
<br>
[powerbook.2-net:06956] connect_uni: contact info read
<br>
[powerbook.2-net:06956] connect_uni: connection not allowed
<br>
[powerbook.2-net:06956] [0,0,0] setting up session dir with
<br>
[powerbook.2-net:06956]         tmpdir /tmp
<br>
[powerbook.2-net:06956]         universe default-universe-6956
<br>
[powerbook.2-net:06956]         user admin
<br>
[powerbook.2-net:06956]         host powerbook.2-net
<br>
[powerbook.2-net:06956]         jobid 0
<br>
[powerbook.2-net:06956]         procid 0
<br>
[powerbook.2-net:06956] procdir: 
<br>
/tmp/openmpi-sessions-admin_at_powerbook.2-net_0/default-universe-6956/0/0
<br>
[powerbook.2-net:06956] jobdir: 
<br>
/tmp/openmpi-sessions-admin_at_powerbook.2-net_0/default-universe-6956/0
<br>
[powerbook.2-net:06956] unidir: 
<br>
/tmp/openmpi-sessions-admin_at_powerbook.2-net_0/default-universe-6956
<br>
[powerbook.2-net:06956] top: openmpi-sessions-admin_at_powerbook.2-net_0
<br>
[powerbook.2-net:06956] tmp: /tmp
<br>
[powerbook.2-net:06956] [0,0,0] contact_file 
<br>
/tmp/openmpi-sessions-admin_at_powerbook.2-net_0/default-universe-6956/universe-setup.txt
<br>
[powerbook.2-net:06956] [0,0,0] wrote setup file
<br>
[powerbook.2-net:06956] spawn: in job_state_callback(jobid = 1, state = 0x1)
<br>
[powerbook.2-net:06962] [0,1,0] setting up session dir with
<br>
[powerbook.2-net:06962]         universe default-universe
<br>
[powerbook.2-net:06962]         user nobody
<br>
[powerbook.2-net:06962]         host xgrid-node-0
<br>
[powerbook.2-net:06962]         jobid 1
<br>
[powerbook.2-net:06962]         procid 0
<br>
[powerbook.2-net:06962] procdir: 
<br>
/tmp/openmpi-sessions-nobody_at_xgrid-node-0_0/default-universe/1/0
<br>
[powerbook.2-net:06962] jobdir: 
<br>
/tmp/openmpi-sessions-nobody_at_xgrid-node-0_0/default-universe/1
<br>
[powerbook.2-net:06962] unidir: 
<br>
/tmp/openmpi-sessions-nobody_at_xgrid-node-0_0/default-universe
<br>
[powerbook.2-net:06962] top: openmpi-sessions-nobody_at_xgrid-node-0_0
<br>
[powerbook.2-net:06962] tmp: /tmp
<br>
[powerbook.2-net:06956] spawn: in job_state_callback(jobid = 1, state = 0x3)
<br>
[powerbook.2-net:06956] Info: Setting up debugger process table for 
<br>
applications
<br>
&nbsp;&nbsp;MPIR_being_debugged = 0
<br>
&nbsp;&nbsp;MPIR_debug_gate = 0
<br>
&nbsp;&nbsp;MPIR_debug_state = 1
<br>
&nbsp;&nbsp;MPIR_acquired_pre_main = 0
<br>
&nbsp;&nbsp;MPIR_i_am_starter = 0
<br>
&nbsp;&nbsp;MPIR_proctable_size = 1
<br>
&nbsp;&nbsp;MPIR_proctable:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, xgrid-node-0, vhone, 6962)
<br>
[powerbook.2-net:06956] spawn: in job_state_callback(jobid = 1, state = 0x4)
<br>
[powerbook.2-net:06962] [0,1,0] ompi_mpi_init completed
<br>
[powerbook.2-net:06956] spawn: in job_state_callback(jobid = 1, state = 0x7)
<br>
[powerbook.2-net:06956] spawn: in job_state_callback(jobid = 1, state = 0x8)
<br>
[powerbook.2-net:06962] sess_dir_finalize: found proc session dir empty 
<br>
- deleting
<br>
[powerbook.2-net:06962] sess_dir_finalize: found job session dir empty - 
<br>
deleting
<br>
[powerbook.2-net:06962] sess_dir_finalize: univ session dir not empty - 
<br>
leaving
<br>
[powerbook:~/.local/MVH-1.0] admin%
<br>
<p>Have you got any idea what's wrong? Same leave happens when the job 
<br>
isn't supplied via XGrid.
<br>
<p>Enclosed you will find the ompi_info output and the config.log.
<br>
<p><p>Yours,
<br>
Frank
<br>
<p>
<br><p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.0.2
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r9571
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.0.2
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r9571
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.0.2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r9571
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /usr/local/openmpi/stable
<br>
&nbsp;Configured architecture: powerpc-apple-darwin8.6.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Thu Jun  1 17:50:10 CEST 2006
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: powerbook.2-net
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Thu Jun  1 20:20:52 CEST 2006
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: powerbook.2-net
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: yes (single underscore)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/bin/gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: g++
<br>
&nbsp;&nbsp;&nbsp;C++ compiler absolute: /usr/bin/g++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: gfortran
<br>
&nbsp;&nbsp;Fortran77 compiler abs: /usr/local/bin/gfortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: gfortran
<br>
&nbsp;&nbsp;Fortran90 compiler abs: /usr/local/bin/gfortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ exceptions: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (mpi: no, progress: no)
<br>
&nbsp;&nbsp;Internal debug support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI parameter check: runtime
<br>
Memory profiling support: no
<br>
Memory debugging support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA memory: darwin (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA timer: darwin (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: basic (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: self (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: sm (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA io: romio (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: sm (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: teg (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA bml: r2 (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA bml: r2 (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ptl: self (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ptl: sm (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ptl: tcp (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: self (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: sm (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA topo: unity (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: null (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: replica (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: proxy (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: svc (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ns: proxy (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ns: replica (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: dash_host (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: hostfile (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: localhost (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: slurm (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: xgrid (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: hostfile (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: resfile (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: round_robin (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rml: oob (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: daemon (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: fork (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: proxy (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: rsh (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: slurm (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: xgrid (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: env (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: pipe (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: seed (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: singleton (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: slurm (MCA v1.0, API v1.0, Component v1.0.2)
<br>
<p>
<p>
This file contains any messages produced by compilers while
<br>
running configure, to aid debugging if configure makes a mistake.
<br>
<p>It was created by Open MPI configure 1.0.2, which was
<br>
generated by GNU Autoconf 2.59.  Invocation command line was
<br>
<p>&nbsp;&nbsp;$ ./configure --prefix=/usr/local/openmpi/stable
<br>
<p>## --------- ##
<br>
## Platform. ##
<br>
## --------- ##
<br>
<p>hostname = powerbook.2-net
<br>
uname -m = Power Macintosh
<br>
uname -r = 8.6.0
<br>
uname -s = Darwin
<br>
uname -v = Darwin Kernel Version 8.6.0: Tue Mar  7 16:58:48 PST 2006; root:xnu-792.6.70.obj~1/RELEASE_PPC
<br>
<p>/usr/bin/uname -p = powerpc
<br>
/bin/uname -X     = unknown
<br>
<p>/bin/arch              = unknown
<br>
/usr/bin/arch -k       = unknown
<br>
/usr/convex/getsysinfo = unknown
<br>
hostinfo               = Mach kernel version:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Darwin Kernel Version 8.6.0: Tue Mar  7 16:58:48 PST 2006; root:xnu-792.6.70.obj~1/RELEASE_PPC
<br>
Kernel configured for a single processor only.
<br>
1 processor is physically available.
<br>
Processor type: ppc7450 (PowerPC 7450)
<br>
Processor active: 0
<br>
Primary memory available: 1.50 gigabytes
<br>
Default processor set: 81 tasks, 249 threads, 1 processors
<br>
Load average: 1.92, Mach factor: 0.44
<br>
/bin/machine           = unknown
<br>
/usr/bin/oslevel       = unknown
<br>
/bin/universe          = unknown
<br>
<p>PATH: /usr/local/gts/bin
<br>
PATH: /usr/local/openmpi/stable/bin
<br>
PATH: /usr/local/bin
<br>
PATH: /sw/share/Geomview/bin
<br>
PATH: /sw/bin
<br>
PATH: /sw/sbin
<br>
PATH: /usr/bin
<br>
PATH: /bin
<br>
PATH: /usr/sbin
<br>
PATH: /sbin
<br>
PATH: /Users/admin
<br>
PATH: /usr/X11R6/bin
<br>
PATH: /Users/admin/geant4.8/bin/Darwin-g++
<br>
<p><p>## ----------- ##
<br>
## Core tests. ##
<br>
## ----------- ##
<br>
<p>configure:1826: checking for a BSD-compatible install
<br>
configure:1881: result: /usr/bin/install -c
<br>
configure:1892: checking whether build environment is sane
<br>
configure:1935: result: yes
<br>
configure:2000: checking for gawk
<br>
configure:2016: found /sw/bin/gawk
<br>
configure:2026: result: gawk
<br>
configure:2036: checking whether make sets $(MAKE)
<br>
configure:2056: result: yes
<br>
configure:2470: checking Open MPI version
<br>
configure:2472: result: 1.0.2
<br>
configure:2474: checking Open MPI Subversion repository version
<br>
configure:2476: result: r9571
<br>
configure:2479: checking Open Run-Time Environment (ORTE) version
<br>
configure:2481: result: 1.0.2
<br>
configure:2483: checking ORTE Subversion repository version
<br>
configure:2485: result: r9571
<br>
configure:2488: checking Open Portable Access Layer (OPAL) version
<br>
configure:2490: result: 1.0.2
<br>
configure:2492: checking OPAL Subversion repository version
<br>
configure:2494: result: r9571
<br>
configure:2517: builddir: /usr/local/openmpi/openmpi-1.0.2
<br>
configure:2519: srcdir: /usr/local/openmpi/openmpi-1.0.2
<br>
configure:2541: checking build system type
<br>
configure:2559: result: powerpc-apple-darwin8.6.0
<br>
configure:2587: checking host system type
<br>
configure:2601: result: powerpc-apple-darwin8.6.0
<br>
configure:2752: checking Whether to run code coverage
<br>
configure:2779: result: no
<br>
configure:2789: checking whether to debug memory usage
<br>
configure:2801: result: no
<br>
configure:2821: checking whether to profile memory usage
<br>
configure:2833: result: no
<br>
configure:2853: checking if want developer-level compiler pickyness
<br>
configure:2865: result: no
<br>
configure:2880: checking if want developer-level debugging code
<br>
configure:2892: result: no
<br>
configure:2917: checking if want Fortran 77 bindings
<br>
configure:2925: result: yes
<br>
configure:2939: checking if want Fortran 90 bindings
<br>
configure:2947: result: yes
<br>
configure:2967: checking whether to enable PMPI
<br>
configure:2975: result: yes
<br>
configure:2992: checking if want C++ bindings
<br>
configure:3000: result: yes
<br>
configure:3014: checking if want to enable weak symbol support
<br>
configure:3022: result: yes
<br>
configure:3035: checking if want run-time MPI parameter checking
<br>
configure:3056: result: runtime
<br>
configure:3079: checking if want to install OMPI header files
<br>
configure:3092: result: no
<br>
configure:3110: checking if want pretty-print stacktrace
<br>
configure:3122: result: yes
<br>
configure:3135: checking if want deprecated executable names
<br>
configure:3147: result: no
<br>
configure:3169: checking if want MPI-2 one-sided empty shell functions
<br>
configure:3207: result: no
<br>
configure:3239: checking max supported array dimension in F90 MPI bindings
<br>
configure:3254: result: 4
<br>
configure:3259: checking if pty support should be enabled
<br>
configure:3271: result: yes
<br>
configure:3284: checking if user wants dlopen support
<br>
configure:3299: result: yes
<br>
configure:3307: checking if heterogeneous support should be enabled
<br>
configure:3319: result: yes
<br>
configure:3333: checking if want trace file debugging
<br>
configure:3345: result: no
<br>
configure:3550: checking for style of include used by make
<br>
configure:3578: result: GNU
<br>
configure:3654: checking for gcc
<br>
configure:3670: found /usr/bin/gcc
<br>
configure:3680: result: gcc
<br>
configure:3924: checking for C compiler version
<br>
configure:3927: gcc --version &lt;/dev/null &gt;&amp;5
<br>
powerpc-apple-darwin8-gcc-4.0.1 (GCC) 4.0.1 (Apple Computer, Inc. build 5341)
<br>
Copyright (C) 2005 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.  There is NO
<br>
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
<br>
<p>configure:3930: $? = 0
<br>
configure:3932: gcc -v &lt;/dev/null &gt;&amp;5
<br>
Using built-in specs.
<br>
Target: powerpc-apple-darwin8
<br>
Configured with: /private/var/tmp/gcc/gcc-5341.obj~1/src/configure --disable-checking -enable-werror --prefix=/usr --mandir=/share/man --enable-languages=c,objc,c++,obj-c++ --program-transform-name=/^[cg][^.-]*$/s/$/-4.0/ --with-gxx-include-dir=/include/c++/4.0.0 --with-slibdir=/usr/lib --build=powerpc-apple-darwin8 --host=powerpc-apple-darwin8 --target=powerpc-apple-darwin8
<br>
Thread model: posix
<br>
gcc version 4.0.1 (Apple Computer, Inc. build 5341)
<br>
configure:3935: $? = 0
<br>
configure:3937: gcc -V &lt;/dev/null &gt;&amp;5
<br>
gcc: argument to `-V' is missing
<br>
configure:3940: $? = 1
<br>
configure:3963: checking for C compiler default output file name
<br>
configure:3966: gcc -DNDEBUG    conftest.c  &gt;&amp;5
<br>
configure:3969: $? = 0
<br>
configure:4015: result: a.out
<br>
configure:4020: checking whether the C compiler works
<br>
configure:4026: ./a.out
<br>
configure:4029: $? = 0
<br>
configure:4046: result: yes
<br>
configure:4053: checking whether we are cross compiling
<br>
configure:4055: result: no
<br>
configure:4058: checking for suffix of executables
<br>
configure:4060: gcc -o conftest -DNDEBUG    conftest.c  &gt;&amp;5
<br>
configure:4063: $? = 0
<br>
configure:4088: result: 
<br>
configure:4094: checking for suffix of object files
<br>
configure:4115: gcc -c -DNDEBUG   conftest.c &gt;&amp;5
<br>
configure:4118: $? = 0
<br>
configure:4140: result: o
<br>
configure:4144: checking whether we are using the GNU C compiler
<br>
configure:4168: gcc -c -DNDEBUG   conftest.c &gt;&amp;5
<br>
configure:4174: $? = 0
<br>
configure:4178: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:4181: $? = 0
<br>
configure:4184: test -s conftest.o
<br>
configure:4187: $? = 0
<br>
configure:4200: result: yes
<br>
configure:4206: checking whether gcc accepts -g
<br>
configure:4227: gcc -c -g  conftest.c &gt;&amp;5
<br>
configure:4233: $? = 0
<br>
configure:4237: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:4240: $? = 0
<br>
configure:4243: test -s conftest.o
<br>
configure:4246: $? = 0
<br>
configure:4257: result: yes
<br>
configure:4274: checking for gcc option to accept ANSI C
<br>
configure:4344: gcc  -c -DNDEBUG   conftest.c &gt;&amp;5
<br>
configure:4350: $? = 0
<br>
configure:4354: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:4357: $? = 0
<br>
configure:4360: test -s conftest.o
<br>
configure:4363: $? = 0
<br>
configure:4381: result: none needed
<br>
configure:4399: gcc -c -DNDEBUG   conftest.c &gt;&amp;5
<br>
conftest.c:2: error: parse error before 'me'
<br>
configure:4405: $? = 1
<br>
configure: failed program was:
<br>
| #ifndef __cplusplus
<br>
|   choke me
<br>
| #endif
<br>
configure:4540: checking dependency style of gcc
<br>
configure:4630: result: gcc3
<br>
configure:4658: checking whether gcc and cc understand -c and -o together
<br>
configure:4688: gcc -c conftest.c -o conftest.o &gt;&amp;5
<br>
configure:4691: $? = 0
<br>
configure:4693: gcc -c conftest.c -o conftest.o &gt;&amp;5
<br>
configure:4696: $? = 0
<br>
configure:4703: cc -c conftest.c &gt;&amp;5
<br>
configure:4706: $? = 0
<br>
configure:4709: cc -c conftest.c -o conftest.o &gt;&amp;5
<br>
configure:4712: $? = 0
<br>
configure:4714: cc -c conftest.c -o conftest.o &gt;&amp;5
<br>
configure:4717: $? = 0
<br>
configure:4735: result: yes
<br>
configure:4763: checking if compiler impersonates gcc
<br>
configure:4791: gcc -c -DNDEBUG   conftest.c &gt;&amp;5
<br>
configure:4797: $? = 0
<br>
configure:4801: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:4804: $? = 0
<br>
configure:4807: test -s conftest.o
<br>
configure:4810: $? = 0
<br>
configure:4822: result: no
<br>
configure:5091: checking if gcc supports -finline-functions
<br>
configure:5112: gcc -c -DNDEBUG  -finline-functions  conftest.c &gt;&amp;5
<br>
configure:5118: $? = 0
<br>
configure:5122: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:5125: $? = 0
<br>
configure:5128: test -s conftest.o
<br>
configure:5131: $? = 0
<br>
configure:5142: result: yes
<br>
configure:5151: checking if gcc supports -fno-strict-aliasing
<br>
configure:5172: gcc -c -DNDEBUG  -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:5178: $? = 0
<br>
configure:5182: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:5185: $? = 0
<br>
configure:5188: test -s conftest.o
<br>
configure:5191: $? = 0
<br>
configure:5202: result: yes
<br>
configure:5278: WARNING:  -fno-strict-aliasing has been added to CFLAGS
<br>
configure:5517: checking for C optimization flags
<br>
configure:5578: result: -O3 -DNDEBUG -fno-strict-aliasing
<br>
configure:5591: checking how to run the C preprocessor
<br>
configure:5626: gcc -E  conftest.c
<br>
configure:5632: $? = 0
<br>
configure:5664: gcc -E  conftest.c
<br>
conftest.c:36:28: error: ac_nonexistent.h: No such file or directory
<br>
configure:5670: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;ac_nonexistent.h&gt;
<br>
configure:5709: result: gcc -E
<br>
configure:5733: gcc -E  conftest.c
<br>
configure:5739: $? = 0
<br>
configure:5771: gcc -E  conftest.c
<br>
conftest.c:36:28: error: ac_nonexistent.h: No such file or directory
<br>
configure:5777: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;ac_nonexistent.h&gt;
<br>
configure:5821: checking for egrep
<br>
configure:5831: result: grep -E
<br>
configure:5836: checking for ANSI C header files
<br>
configure:5861: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:5867: $? = 0
<br>
configure:5871: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:5874: $? = 0
<br>
configure:5877: test -s conftest.o
<br>
configure:5880: $? = 0
<br>
configure:5966: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
conftest.c: In function 'main':
<br>
conftest.c:53: warning: incompatible implicit declaration of built-in function 'exit'
<br>
configure:5969: $? = 0
<br>
configure:5971: ./conftest
<br>
configure:5974: $? = 0
<br>
configure:5989: result: yes
<br>
configure:6013: checking for sys/types.h
<br>
configure:6029: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:6035: $? = 0
<br>
configure:6039: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:6042: $? = 0
<br>
configure:6045: test -s conftest.o
<br>
configure:6048: $? = 0
<br>
configure:6059: result: yes
<br>
configure:6013: checking for sys/stat.h
<br>
configure:6029: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:6035: $? = 0
<br>
configure:6039: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:6042: $? = 0
<br>
configure:6045: test -s conftest.o
<br>
configure:6048: $? = 0
<br>
configure:6059: result: yes
<br>
configure:6013: checking for stdlib.h
<br>
configure:6029: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:6035: $? = 0
<br>
configure:6039: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:6042: $? = 0
<br>
configure:6045: test -s conftest.o
<br>
configure:6048: $? = 0
<br>
configure:6059: result: yes
<br>
configure:6013: checking for string.h
<br>
configure:6029: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:6035: $? = 0
<br>
configure:6039: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:6042: $? = 0
<br>
configure:6045: test -s conftest.o
<br>
configure:6048: $? = 0
<br>
configure:6059: result: yes
<br>
configure:6013: checking for memory.h
<br>
configure:6029: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:6035: $? = 0
<br>
configure:6039: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:6042: $? = 0
<br>
configure:6045: test -s conftest.o
<br>
configure:6048: $? = 0
<br>
configure:6059: result: yes
<br>
configure:6013: checking for strings.h
<br>
configure:6029: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:6035: $? = 0
<br>
configure:6039: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:6042: $? = 0
<br>
configure:6045: test -s conftest.o
<br>
configure:6048: $? = 0
<br>
configure:6059: result: yes
<br>
configure:6013: checking for inttypes.h
<br>
configure:6029: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:6035: $? = 0
<br>
configure:6039: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:6042: $? = 0
<br>
configure:6045: test -s conftest.o
<br>
configure:6048: $? = 0
<br>
configure:6059: result: yes
<br>
configure:6013: checking for stdint.h
<br>
configure:6029: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:6035: $? = 0
<br>
configure:6039: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:6042: $? = 0
<br>
configure:6045: test -s conftest.o
<br>
configure:6048: $? = 0
<br>
configure:6059: result: yes
<br>
configure:6013: checking for unistd.h
<br>
configure:6029: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:6035: $? = 0
<br>
configure:6039: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:6042: $? = 0
<br>
configure:6045: test -s conftest.o
<br>
configure:6048: $? = 0
<br>
configure:6059: result: yes
<br>
configure:6071: checking for long long
<br>
configure:6095: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:6101: $? = 0
<br>
configure:6105: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:6108: $? = 0
<br>
configure:6111: test -s conftest.o
<br>
configure:6114: $? = 0
<br>
configure:6125: result: yes
<br>
configure:6136: checking for long double
<br>
configure:6160: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:6166: $? = 0
<br>
configure:6170: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:6173: $? = 0
<br>
configure:6176: test -s conftest.o
<br>
configure:6179: $? = 0
<br>
configure:6190: result: yes
<br>
configure:6201: checking for int8_t
<br>
configure:6225: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:6231: $? = 0
<br>
configure:6235: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:6238: $? = 0
<br>
configure:6241: test -s conftest.o
<br>
configure:6244: $? = 0
<br>
configure:6255: result: yes
<br>
configure:6266: checking for uint8_t
<br>
configure:6290: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:6296: $? = 0
<br>
configure:6300: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:6303: $? = 0
<br>
configure:6306: test -s conftest.o
<br>
configure:6309: $? = 0
<br>
configure:6320: result: yes
<br>
configure:6331: checking for int16_t
<br>
configure:6355: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:6361: $? = 0
<br>
configure:6365: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:6368: $? = 0
<br>
configure:6371: test -s conftest.o
<br>
configure:6374: $? = 0
<br>
configure:6385: result: yes
<br>
configure:6396: checking for uint16_t
<br>
configure:6420: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:6426: $? = 0
<br>
configure:6430: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:6433: $? = 0
<br>
configure:6436: test -s conftest.o
<br>
configure:6439: $? = 0
<br>
configure:6450: result: yes
<br>
configure:6461: checking for int32_t
<br>
configure:6485: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:6491: $? = 0
<br>
configure:6495: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:6498: $? = 0
<br>
configure:6501: test -s conftest.o
<br>
configure:6504: $? = 0
<br>
configure:6515: result: yes
<br>
configure:6526: checking for uint32_t
<br>
configure:6550: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:6556: $? = 0
<br>
configure:6560: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:6563: $? = 0
<br>
configure:6566: test -s conftest.o
<br>
configure:6569: $? = 0
<br>
configure:6580: result: yes
<br>
configure:6591: checking for int64_t
<br>
configure:6615: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:6621: $? = 0
<br>
configure:6625: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:6628: $? = 0
<br>
configure:6631: test -s conftest.o
<br>
configure:6634: $? = 0
<br>
configure:6645: result: yes
<br>
configure:6656: checking for uint64_t
<br>
configure:6680: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:6686: $? = 0
<br>
configure:6690: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:6693: $? = 0
<br>
configure:6696: test -s conftest.o
<br>
configure:6699: $? = 0
<br>
configure:6710: result: yes
<br>
configure:6721: checking for intptr_t
<br>
configure:6745: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:6751: $? = 0
<br>
configure:6755: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:6758: $? = 0
<br>
configure:6761: test -s conftest.o
<br>
configure:6764: $? = 0
<br>
configure:6775: result: yes
<br>
configure:6786: checking for uintptr_t
<br>
configure:6810: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:6816: $? = 0
<br>
configure:6820: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:6823: $? = 0
<br>
configure:6826: test -s conftest.o
<br>
configure:6829: $? = 0
<br>
configure:6840: result: yes
<br>
configure:6851: checking for mode_t
<br>
configure:6875: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:6881: $? = 0
<br>
configure:6885: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:6888: $? = 0
<br>
configure:6891: test -s conftest.o
<br>
configure:6894: $? = 0
<br>
configure:6905: result: yes
<br>
configure:6922: checking for char
<br>
configure:6946: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:6952: $? = 0
<br>
configure:6956: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:6959: $? = 0
<br>
configure:6962: test -s conftest.o
<br>
configure:6965: $? = 0
<br>
configure:6976: result: yes
<br>
configure:6979: checking size of char
<br>
configure:7298: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:7301: $? = 0
<br>
configure:7303: ./conftest
<br>
configure:7306: $? = 0
<br>
configure:7329: result: 1
<br>
configure:7336: checking for short
<br>
configure:7360: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:7366: $? = 0
<br>
configure:7370: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:7373: $? = 0
<br>
configure:7376: test -s conftest.o
<br>
configure:7379: $? = 0
<br>
configure:7390: result: yes
<br>
configure:7393: checking size of short
<br>
configure:7712: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:7715: $? = 0
<br>
configure:7717: ./conftest
<br>
configure:7720: $? = 0
<br>
configure:7743: result: 2
<br>
configure:7750: checking for int
<br>
configure:7774: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:7780: $? = 0
<br>
configure:7784: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:7787: $? = 0
<br>
configure:7790: test -s conftest.o
<br>
configure:7793: $? = 0
<br>
configure:7804: result: yes
<br>
configure:7807: checking size of int
<br>
configure:8126: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:8129: $? = 0
<br>
configure:8131: ./conftest
<br>
configure:8134: $? = 0
<br>
configure:8157: result: 4
<br>
configure:8164: checking for long
<br>
configure:8188: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:8194: $? = 0
<br>
configure:8198: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:8201: $? = 0
<br>
configure:8204: test -s conftest.o
<br>
configure:8207: $? = 0
<br>
configure:8218: result: yes
<br>
configure:8221: checking size of long
<br>
configure:8540: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:8543: $? = 0
<br>
configure:8545: ./conftest
<br>
configure:8548: $? = 0
<br>
configure:8571: result: 4
<br>
configure:8579: checking for long long
<br>
configure:8633: result: yes
<br>
configure:8636: checking size of long long
<br>
configure:8955: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:8958: $? = 0
<br>
configure:8960: ./conftest
<br>
configure:8963: $? = 0
<br>
configure:8986: result: 8
<br>
configure:8995: checking for long double
<br>
configure:9049: result: yes
<br>
configure:9052: checking size of long double
<br>
configure:9371: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:9374: $? = 0
<br>
configure:9376: ./conftest
<br>
configure:9379: $? = 0
<br>
configure:9402: result: 16
<br>
configure:9410: checking for float
<br>
configure:9434: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:9440: $? = 0
<br>
configure:9444: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:9447: $? = 0
<br>
configure:9450: test -s conftest.o
<br>
configure:9453: $? = 0
<br>
configure:9464: result: yes
<br>
configure:9467: checking size of float
<br>
configure:9786: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:9789: $? = 0
<br>
configure:9791: ./conftest
<br>
configure:9794: $? = 0
<br>
configure:9817: result: 4
<br>
configure:9824: checking for double
<br>
configure:9848: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:9854: $? = 0
<br>
configure:9858: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:9861: $? = 0
<br>
configure:9864: test -s conftest.o
<br>
configure:9867: $? = 0
<br>
configure:9878: result: yes
<br>
configure:9881: checking size of double
<br>
configure:10200: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:10203: $? = 0
<br>
configure:10205: ./conftest
<br>
configure:10208: $? = 0
<br>
configure:10231: result: 8
<br>
configure:10238: checking for void *
<br>
configure:10262: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:10268: $? = 0
<br>
configure:10272: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:10275: $? = 0
<br>
configure:10278: test -s conftest.o
<br>
configure:10281: $? = 0
<br>
configure:10292: result: yes
<br>
configure:10295: checking size of void *
<br>
configure:10614: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:10617: $? = 0
<br>
configure:10619: ./conftest
<br>
configure:10622: $? = 0
<br>
configure:10645: result: 4
<br>
configure:10652: checking for size_t
<br>
configure:10676: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:10682: $? = 0
<br>
configure:10686: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:10689: $? = 0
<br>
configure:10692: test -s conftest.o
<br>
configure:10695: $? = 0
<br>
configure:10706: result: yes
<br>
configure:10709: checking size of size_t
<br>
configure:11028: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:11031: $? = 0
<br>
configure:11033: ./conftest
<br>
configure:11036: $? = 0
<br>
configure:11059: result: 4
<br>
configure:11072: checking alignment of char
<br>
configure:11469: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:11472: $? = 0
<br>
configure:11474: ./conftest
<br>
configure:11477: $? = 0
<br>
configure:11497: result: 1
<br>
configure:11509: checking alignment of short
<br>
configure:11906: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:11909: $? = 0
<br>
configure:11911: ./conftest
<br>
configure:11914: $? = 0
<br>
configure:11934: result: 2
<br>
configure:11946: checking alignment of wchar_t
<br>
configure:12343: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:12346: $? = 0
<br>
configure:12348: ./conftest
<br>
configure:12351: $? = 0
<br>
configure:12371: result: 4
<br>
configure:12383: checking alignment of int
<br>
configure:12780: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:12783: $? = 0
<br>
configure:12785: ./conftest
<br>
configure:12788: $? = 0
<br>
configure:12808: result: 4
<br>
configure:12820: checking alignment of long
<br>
configure:13217: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:13220: $? = 0
<br>
configure:13222: ./conftest
<br>
configure:13225: $? = 0
<br>
configure:13245: result: 4
<br>
configure:13258: checking alignment of long long
<br>
configure:13655: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:13658: $? = 0
<br>
configure:13660: ./conftest
<br>
configure:13663: $? = 0
<br>
configure:13683: result: 4
<br>
configure:13696: checking alignment of float
<br>
configure:14093: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:14096: $? = 0
<br>
configure:14098: ./conftest
<br>
configure:14101: $? = 0
<br>
configure:14121: result: 4
<br>
configure:14133: checking alignment of double
<br>
configure:14530: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:14533: $? = 0
<br>
configure:14535: ./conftest
<br>
configure:14538: $? = 0
<br>
configure:14558: result: 4
<br>
configure:14571: checking alignment of long double
<br>
configure:14968: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:14971: $? = 0
<br>
configure:14973: ./conftest
<br>
configure:14976: $? = 0
<br>
configure:14996: result: 16
<br>
configure:15009: checking alignment of void *
<br>
configure:15406: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:15409: $? = 0
<br>
configure:15411: ./conftest
<br>
configure:15414: $? = 0
<br>
configure:15434: result: 4
<br>
configure:15451: checking for C bool type
<br>
configure:15470: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
conftest.c: In function 'main':
<br>
conftest.c:117: error: 'bool' undeclared (first use in this function)
<br>
conftest.c:117: error: (Each undeclared identifier is reported only once
<br>
conftest.c:117: error: for each function it appears in.)
<br>
conftest.c:117: error: parse error before 'bar'
<br>
conftest.c:117: error: 'bar' undeclared (first use in this function)
<br>
conftest.c:117: error: 'foo' undeclared (first use in this function)
<br>
configure:15476: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| /* end confdefs.h.  */
<br>
| 
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| int
<br>
| main ()
<br>
| {
<br>
| bool bar, foo = true; bar = foo;
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:15504: result: no
<br>
configure:15532: checking for inline
<br>
configure:15553: gcc -c -O3 -DNDEBUG  -Werror -ansi  conftest.c &gt;&amp;5
<br>
conftest.c:82: error: syntax error before 'foo_t'
<br>
conftest.c:83: error: syntax error before 'foo_t'
<br>
configure:15559: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| /* end confdefs.h.  */
<br>
| #ifndef __cplusplus
<br>
| typedef int foo_t;
<br>
| static inline foo_t static_foo () {return 0; }
<br>
| inline foo_t foo () {return 0; }
<br>
| #endif
<br>
| 
<br>
configure:15553: gcc -c -O3 -DNDEBUG  -Werror -ansi  conftest.c &gt;&amp;5
<br>
configure:15559: $? = 0
<br>
configure:15563: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:15566: $? = 0
<br>
configure:15569: test -s conftest.o
<br>
configure:15572: $? = 0
<br>
configure:15584: result: __inline__
<br>
configure:15603: checking for C/C++ restrict keyword
<br>
configure:15621: gcc -c -O3 -DNDEBUG  -Werror -ansi  conftest.c &gt;&amp;5
<br>
conftest.c:83: error: parse error before 'x'
<br>
cc1: warnings being treated as errors
<br>
conftest.c:83: warning: data definition has no type or storage class
<br>
configure:15627: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| /* end confdefs.h.  */
<br>
| float * restrict x;
<br>
configure:15621: gcc -c -O3 -DNDEBUG  -Werror -ansi  conftest.c &gt;&amp;5
<br>
configure:15627: $? = 0
<br>
configure:15631: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:15634: $? = 0
<br>
configure:15637: test -s conftest.o
<br>
configure:15640: $? = 0
<br>
configure:15652: result: __restrict
<br>
configure:15668: checking for weak symbol support
<br>
configure:15698: gcc -O3 -DNDEBUG  -Werror -ansi  -c conftest_weak.c
<br>
cc1: warnings being treated as errors
<br>
conftest_weak.c:4: warning: alias definitions not supported in Mach-O; ignored
<br>
configure:15705: $? = 1
<br>
configure:15746: result: no
<br>
configure:15978: checking for g++
<br>
configure:15994: found /usr/bin/g++
<br>
configure:16004: result: g++
<br>
configure:16020: checking for C++ compiler version
<br>
configure:16023: g++ --version &lt;/dev/null &gt;&amp;5
<br>
powerpc-apple-darwin8-g++-4.0.1 (GCC) 4.0.1 (Apple Computer, Inc. build 5341)
<br>
Copyright (C) 2005 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.  There is NO
<br>
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
<br>
<p>configure:16026: $? = 0
<br>
configure:16028: g++ -v &lt;/dev/null &gt;&amp;5
<br>
Using built-in specs.
<br>
Target: powerpc-apple-darwin8
<br>
Configured with: /private/var/tmp/gcc/gcc-5341.obj~1/src/configure --disable-checking -enable-werror --prefix=/usr --mandir=/share/man --enable-languages=c,objc,c++,obj-c++ --program-transform-name=/^[cg][^.-]*$/s/$/-4.0/ --with-gxx-include-dir=/include/c++/4.0.0 --with-slibdir=/usr/lib --build=powerpc-apple-darwin8 --host=powerpc-apple-darwin8 --target=powerpc-apple-darwin8
<br>
Thread model: posix
<br>
gcc version 4.0.1 (Apple Computer, Inc. build 5341)
<br>
configure:16031: $? = 0
<br>
configure:16033: g++ -V &lt;/dev/null &gt;&amp;5
<br>
g++: argument to `-V' is missing
<br>
configure:16036: $? = 1
<br>
configure:16039: checking whether we are using the GNU C++ compiler
<br>
configure:16063: g++ -c -DNDEBUG   conftest.cc &gt;&amp;5
<br>
configure:16069: $? = 0
<br>
configure:16073: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:16076: $? = 0
<br>
configure:16079: test -s conftest.o
<br>
configure:16082: $? = 0
<br>
configure:16095: result: yes
<br>
configure:16101: checking whether g++ accepts -g
<br>
configure:16122: g++ -c -g  conftest.cc &gt;&amp;5
<br>
configure:16128: $? = 0
<br>
configure:16132: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:16135: $? = 0
<br>
configure:16138: test -s conftest.o
<br>
configure:16141: $? = 0
<br>
configure:16152: result: yes
<br>
configure:16194: g++ -c -DNDEBUG   conftest.cc &gt;&amp;5
<br>
configure:16200: $? = 0
<br>
configure:16204: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:16207: $? = 0
<br>
configure:16210: test -s conftest.o
<br>
configure:16213: $? = 0
<br>
configure:16239: g++ -c -DNDEBUG   conftest.cc &gt;&amp;5
<br>
conftest.cc: In function 'int main()':
<br>
conftest.cc:90: error: 'exit' was not declared in this scope
<br>
configure:16245: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| /* end confdefs.h.  */
<br>
| 
<br>
| int
<br>
| main ()
<br>
| {
<br>
| exit (42);
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:16194: g++ -c -DNDEBUG   conftest.cc &gt;&amp;5
<br>
/usr/include/stdlib.h:158: error: declaration of 'void std::exit(int)' throws different exceptions
<br>
conftest.cc:86: error: than previous declaration 'void std::exit(int) throw ()'
<br>
configure:16200: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| /* end confdefs.h.  */
<br>
| extern &quot;C&quot; void std::exit (int) throw (); using std::exit;
<br>
| #include &lt;stdlib.h&gt;
<br>
| int
<br>
| main ()
<br>
| {
<br>
| exit (42);
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:16194: g++ -c -DNDEBUG   conftest.cc &gt;&amp;5
<br>
configure:16200: $? = 0
<br>
configure:16204: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:16207: $? = 0
<br>
configure:16210: test -s conftest.o
<br>
configure:16213: $? = 0
<br>
configure:16239: g++ -c -DNDEBUG   conftest.cc &gt;&amp;5
<br>
configure:16245: $? = 0
<br>
configure:16249: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:16252: $? = 0
<br>
configure:16255: test -s conftest.o
<br>
configure:16258: $? = 0
<br>
configure:16283: checking dependency style of g++
<br>
configure:16373: result: gcc3
<br>
configure:16395: checking how to run the C++ preprocessor
<br>
configure:16426: g++ -E  conftest.cc
<br>
configure:16432: $? = 0
<br>
configure:16464: g++ -E  conftest.cc
<br>
conftest.cc:89:28: error: ac_nonexistent.h: No such file or directory
<br>
configure:16470: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;ac_nonexistent.h&gt;
<br>
configure:16509: result: g++ -E
<br>
configure:16533: g++ -E  conftest.cc
<br>
configure:16539: $? = 0
<br>
configure:16571: g++ -E  conftest.cc
<br>
conftest.cc:89:28: error: ac_nonexistent.h: No such file or directory
<br>
configure:16577: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;ac_nonexistent.h&gt;
<br>
configure:16631: checking if compiler impersonates g++
<br>
configure:16660: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:16666: $? = 0
<br>
configure:16670: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:16673: $? = 0
<br>
configure:16676: test -s conftest.o
<br>
configure:16679: $? = 0
<br>
configure:16691: result: no
<br>
configure:16958: checking if g++ supports -finline-functions
<br>
configure:16979: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:16985: $? = 0
<br>
configure:16989: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:16992: $? = 0
<br>
configure:16995: test -s conftest.o
<br>
configure:16998: $? = 0
<br>
configure:17009: result: yes
<br>
configure:17085: WARNING:  -finline-functions has been added to CXXFLAGS
<br>
configure:17101: checking if want C++ exception handling
<br>
configure:17103: result: no
<br>
configure:17399: checking for C++ template_repository_directory
<br>
configure:17466: g++ -DNDEBUG -finline-functions -c conftest1.C
<br>
configure:17476: g++ -DNDEBUG -finline-functions -c conftest2.C
<br>
configure:17528: result: not used
<br>
configure:17550: checking for C++ compiler template parameters
<br>
configure:17558: result: none needed
<br>
configure:17653: checking for C++ optimization flags
<br>
configure:17655: result: -O3 -DNDEBUG -finline-functions
<br>
configure:17670: checking for bool
<br>
configure:17694: g++ -c -O3 -DNDEBUG -finline-functions  conftest.cc &gt;&amp;5
<br>
configure:17700: $? = 0
<br>
configure:17704: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:17707: $? = 0
<br>
configure:17710: test -s conftest.o
<br>
configure:17713: $? = 0
<br>
configure:17724: result: yes
<br>
configure:17727: checking size of bool
<br>
configure:18046: g++ -o conftest -O3 -DNDEBUG -finline-functions   conftest.cc  &gt;&amp;5
<br>
configure:18049: $? = 0
<br>
configure:18051: ./conftest
<br>
configure:18054: $? = 0
<br>
configure:18077: result: 4
<br>
configure:18088: checking alignment of bool
<br>
configure:18485: g++ -o conftest -O3 -DNDEBUG -finline-functions   conftest.cc  &gt;&amp;5
<br>
configure:18488: $? = 0
<br>
configure:18490: ./conftest
<br>
configure:18493: $? = 0
<br>
configure:18513: result: 4
<br>
configure:18564: checking directive for setting text section
<br>
configure:18575: result: .text
<br>
configure:18586: checking directive for exporting symbols
<br>
configure:18594: result: .globl
<br>
configure:18605: checking suffix for labels
<br>
configure:18613: result: :
<br>
configure:18624: checking prefix for global symbol labels
<br>
configure: trying _
<br>
configure:18665: gcc -O3 -DNDEBUG -fno-strict-aliasing -c conftest.s &gt;conftest.out 2&gt;&amp;1
<br>
configure:18668: $? = 0
<br>
configure:18673: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. conftest_c.c -c &gt; conftest.cmpl 2&gt;&amp;1
<br>
configure:18676: $? = 0
<br>
configure:18681: gcc -O3 -DNDEBUG -fno-strict-aliasing conftest_c.o conftest.o -o conftest &gt; conftest.link 2&gt;&amp;1
<br>
configure:18684: $? = 0
<br>
configure:18722: result: _
<br>
configure:18740: checking for BSD-compatible nm
<br>
configure:18789: result: /usr/bin/nm -p
<br>
configure:18797: checking prefix for lsym labels
<br>
configure: trying L
<br>
configure:18817: gcc -O3 -DNDEBUG -fno-strict-aliasing -c conftest.s &gt;conftest.out 2&gt;&amp;1
<br>
configure:18820: $? = 0
<br>
configure:18862: result: L
<br>
configure:18873: checking prefix for function in .type
<br>
configure: trying @
<br>
configure:18901: gcc -O3 -DNDEBUG -fno-strict-aliasing -c conftest.s &gt;conftest.out 2&gt;&amp;1
<br>
configure:18904: $? = 1
<br>
conftest.s:1:Unknown pseudo-op: .type
<br>
conftest.s:1:Rest of line ignored. 1st junk character valued 109 (m).
<br>
conftest.s:1:Invalid mnemonic 'function'
<br>
configure: failed program was:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.type mysym, @function
<br>
mysym:
<br>
configure: trying #
<br>
configure:18901: gcc -O3 -DNDEBUG -fno-strict-aliasing -c conftest.s &gt;conftest.out 2&gt;&amp;1
<br>
configure:18904: $? = 1
<br>
conftest.s:1:Unknown pseudo-op: .type
<br>
conftest.s:1:Rest of line ignored. 1st junk character valued 109 (m).
<br>
configure: failed program was:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.type mysym, #function
<br>
mysym:
<br>
configure: trying %
<br>
configure:18901: gcc -O3 -DNDEBUG -fno-strict-aliasing -c conftest.s &gt;conftest.out 2&gt;&amp;1
<br>
configure:18904: $? = 1
<br>
conftest.s:1:Unknown pseudo-op: .type
<br>
conftest.s:1:Rest of line ignored. 1st junk character valued 109 (m).
<br>
configure: failed program was:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.type mysym, %function
<br>
mysym:
<br>
configure:18931: result: 
<br>
configure:18943: checking if .size is needed
<br>
configure:18957: gcc -O3 -DNDEBUG -fno-strict-aliasing -c conftest.s &gt;conftest.out 2&gt;&amp;1
<br>
configure:18960: $? = 1
<br>
conftest.s:1:Unknown pseudo-op: .size
<br>
conftest.s:1:Rest of line ignored. 1st junk character valued 109 (m).
<br>
configure: failed program was:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.size mysym, 1
<br>
configure:18977: result: no
<br>
configure:19001: checking if .align directive takes logarithmic value
<br>
configure:19020: gcc -O3 -DNDEBUG -fno-strict-aliasing -c conftest.s &gt;conftest.out 2&gt;&amp;1
<br>
configure:19023: $? = 0
<br>
configure: .align test address offset is 10
<br>
configure:19046: result: yes
<br>
configure:19066: checking for objdump
<br>
configure:19095: result: no
<br>
configure:19099: checking if .note.GNU-stack is needed
<br>
configure:19153: result: no
<br>
configure:19161: checking for fgrep
<br>
configure:19171: result: grep -F
<br>
configure:19190: checking whether to enable smp locks
<br>
configure:19198: result: yes
<br>
configure:19255: checking if PowerPC registers have r prefix
<br>
configure:19266: gcc -O3 -DNDEBUG -fno-strict-aliasing -c conftest.s &gt;conftest.out 2&gt;&amp;1
<br>
configure:19269: $? = 1
<br>
conftest.s:2:Parameter syntax error (parameter 1)
<br>
configure: failed program was:
<br>
.text
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;addi 1,1,0
<br>
configure:19288: gcc -O3 -DNDEBUG -fno-strict-aliasing -c conftest.s &gt;conftest.out 2&gt;&amp;1
<br>
configure:19291: $? = 0
<br>
configure:19313: result: yes
<br>
configure:19340: checking for 64-bit PowerPC assembly support
<br>
configure:19359: gcc -O3 -DNDEBUG -fno-strict-aliasing -c conftest.s &gt;conftest.out 2&gt;&amp;1
<br>
configure:19362: $? = 1
<br>
conftest.s:2:ldarx instruction is only for 64-bit implementations (not allowed without -force_cpusubtype_ALL option)
<br>
configure: failed program was:
<br>
.text
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ldarx r1,r1,r1
<br>
configure:19388: result: no
<br>
configure:19521: checking if gcc supports GCC inline assembly
<br>
configure:19531: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
conftest.c:2:2: error: #error &quot;symbol __PGI not defined&quot;
<br>
conftest.c:3: error: parse error before 'me'
<br>
configure:19537: $? = 1
<br>
configure: failed program was:
<br>
| #ifndef __PGI
<br>
| #error &quot;symbol __PGI not defined&quot;
<br>
| choke me
<br>
| #endif
<br>
configure:19589: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:19592: $? = 0
<br>
configure:19594: ./conftest
<br>
configure:19597: $? = 0
<br>
configure:19671: result: yes
<br>
configure:19690: checking if gcc supports DEC inline assembly
<br>
configure:19712: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
conftest.c:141:19: error: c_asm.h: No such file or directory
<br>
configure:19718: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| /* end confdefs.h.  */
<br>
| 
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;c_asm.h&gt;
<br>
| int
<br>
| main ()
<br>
| {
<br>
| asm(&quot;&quot;);
<br>
| return 0;
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:19743: result: no
<br>
configure:19762: checking if gcc supports XLC inline assembly
<br>
configure:19772: result: no
<br>
configure:19792: checking if g++ supports GCC inline assembly
<br>
configure:19825: g++ -o conftest -O3 -DNDEBUG -finline-functions   conftest.cc  &gt;&amp;5
<br>
configure:19828: $? = 0
<br>
configure:19830: ./conftest
<br>
configure:19833: $? = 0
<br>
configure:19904: result: yes
<br>
configure:19935: checking if g++ supports DEC inline assembly
<br>
configure:19957: g++ -o conftest -O3 -DNDEBUG -finline-functions   conftest.cc  &gt;&amp;5
<br>
conftest.cc:144:19: error: c_asm.h: No such file or directory
<br>
configure:19963: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| /* end confdefs.h.  */
<br>
| 
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;c_asm.h&gt;
<br>
| int
<br>
| main ()
<br>
| {
<br>
| asm(&quot;&quot;);
<br>
| return 0;
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:19988: result: no
<br>
configure:20013: checking if g++ supports XLC inline assembly
<br>
configure:20023: result: no
<br>
configure:20051: checking for assembly format
<br>
configure:20053: result: default-.text-.globl-:-_-L--0-1-1-0-0
<br>
configure:20064: checking for asssembly architecture
<br>
configure:20066: result: POWERPC32
<br>
configure:20079: checking for perl
<br>
configure:20095: found /usr/bin/perl
<br>
configure:20105: result: perl
<br>
configure:20114: checking for pre-built assembly file
<br>
configure:20122: result: yes (atomic-powerpc32-osx.s)
<br>
configure:20175: checking for atomic assembly filename
<br>
configure:20182: result: atomic-powerpc32-osx.s
<br>
configure:20285: checking for gfortran
<br>
configure:20301: found /usr/local/bin/gfortran
<br>
configure:20311: result: gfortran
<br>
configure:20329: checking for Fortran 77 compiler version
<br>
configure:20329: gfortran --version &lt;/dev/null &gt;&amp;5
<br>
GNU Fortran 95 (GCC) 4.2.0 20060218 (experimental)
<br>
Copyright (C) 2006 Free Software Foundation, Inc.
<br>
<p>GNU Fortran comes with NO WARRANTY, to the extent permitted by law.
<br>
You may redistribute copies of GNU Fortran
<br>
under the terms of the GNU General Public License.
<br>
For more information about these matters, see the file named COPYING
<br>
<p>configure:20332: $? = 0
<br>
configure:20334: gfortran -v &lt;/dev/null &gt;&amp;5
<br>
Using built-in specs.
<br>
Target: powerpc-apple-darwin8.5.0
<br>
Configured with: ../gcc-4.2-20060218/configure --enable-languages=fortran
<br>
Thread model: posix
<br>
gcc version 4.2.0 20060218 (experimental)
<br>
configure:20337: $? = 0
<br>
configure:20339: gfortran -V &lt;/dev/null &gt;&amp;5
<br>
gfortran: '-V' option must have argument
<br>
configure:20342: $? = 1
<br>
configure:20350: checking whether we are using the GNU Fortran 77 compiler
<br>
configure:20364: gfortran -c  conftest.F &gt;&amp;5
<br>
configure:20370: $? = 0
<br>
configure:20374: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:20377: $? = 0
<br>
configure:20380: test -s conftest.o
<br>
configure:20383: $? = 0
<br>
configure:20396: result: yes
<br>
configure:20402: checking whether gfortran accepts -g
<br>
configure:20414: gfortran -c -g conftest.f &gt;&amp;5
<br>
configure:20420: $? = 0
<br>
configure:20424: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:20427: $? = 0
<br>
configure:20430: test -s conftest.o
<br>
configure:20433: $? = 0
<br>
configure:20445: result: yes
<br>
configure:20515: checking gfortran external symbol convention
<br>
configure:20552: result: single underscore
<br>
configure:20672: checking if FORTRAN compiler supports LOGICAL
<br>
configure:20687: gfortran -c  conftest.f &gt;&amp;5
<br>
configure:20693: $? = 0
<br>
configure:20697: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:20700: $? = 0
<br>
configure:20703: test -s conftest.o
<br>
configure:20706: $? = 0
<br>
configure:20709: result: yes
<br>
configure:20756: checking size of FORTRAN LOGICAL
<br>
configure:20835: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:20842: $? = 0
<br>
configure:20852: gfortran  conftestf.f conftest.o -o conftest  
<br>
configure:20859: $? = 0
<br>
configure:20869: ./conftest
<br>
configure:20876: $? = 0
<br>
configure:20896: result: 4
<br>
configure:20985: checking for C type corresponding to Fortran LOGICAL
<br>
configure:21021: result: int
<br>
configure:21043: checking alignment of FORTRAN LOGICAL
<br>
configure:21128: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:21135: $? = 0
<br>
configure:21145: gfortran  conftestf.f conftest.o -o conftest  
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 3 bytes required before 'x' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 3 bytes required before 'z' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: COMMON 'foo' at (1) requires 3 bytes of padding at start
<br>
configure:21152: $? = 0
<br>
configure:21162: ./conftest
<br>
configure:21169: $? = 0
<br>
configure:21188: result: 4
<br>
configure:21335: checking if FORTRAN compiler supports INTEGER
<br>
configure:21350: gfortran -c  conftest.f &gt;&amp;5
<br>
configure:21356: $? = 0
<br>
configure:21360: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:21363: $? = 0
<br>
configure:21366: test -s conftest.o
<br>
configure:21369: $? = 0
<br>
configure:21372: result: yes
<br>
configure:21419: checking size of FORTRAN INTEGER
<br>
configure:21498: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:21505: $? = 0
<br>
configure:21515: gfortran  conftestf.f conftest.o -o conftest  
<br>
configure:21522: $? = 0
<br>
configure:21532: ./conftest
<br>
configure:21539: $? = 0
<br>
configure:21559: result: 4
<br>
configure:21648: checking for C type corresponding to Fortran INTEGER
<br>
configure:21684: result: int
<br>
configure:21706: checking alignment of FORTRAN INTEGER
<br>
configure:21791: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:21798: $? = 0
<br>
configure:21808: gfortran  conftestf.f conftest.o -o conftest  
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 3 bytes required before 'x' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 3 bytes required before 'z' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: COMMON 'foo' at (1) requires 3 bytes of padding at start
<br>
configure:21815: $? = 0
<br>
configure:21825: ./conftest
<br>
configure:21832: $? = 0
<br>
configure:21851: result: 4
<br>
configure:21997: checking if FORTRAN compiler supports INTEGER*1
<br>
configure:22012: gfortran -c  conftest.f &gt;&amp;5
<br>
configure:22018: $? = 0
<br>
configure:22022: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:22025: $? = 0
<br>
configure:22028: test -s conftest.o
<br>
configure:22031: $? = 0
<br>
configure:22034: result: yes
<br>
configure:22081: checking size of FORTRAN INTEGER*1
<br>
configure:22160: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:22167: $? = 0
<br>
configure:22177: gfortran  conftestf.f conftest.o -o conftest  
<br>
configure:22184: $? = 0
<br>
configure:22194: ./conftest
<br>
configure:22201: $? = 0
<br>
configure:22221: result: 1
<br>
configure:22310: checking for C type corresponding to Fortran INTEGER*1
<br>
configure:22346: result: char
<br>
configure:22368: checking alignment of FORTRAN INTEGER*1
<br>
configure:22453: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:22460: $? = 0
<br>
configure:22470: gfortran  conftestf.f conftest.o -o conftest  
<br>
configure:22477: $? = 0
<br>
configure:22487: ./conftest
<br>
configure:22494: $? = 0
<br>
configure:22513: result: 1
<br>
configure:22659: checking if FORTRAN compiler supports INTEGER*2
<br>
configure:22674: gfortran -c  conftest.f &gt;&amp;5
<br>
configure:22680: $? = 0
<br>
configure:22684: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:22687: $? = 0
<br>
configure:22690: test -s conftest.o
<br>
configure:22693: $? = 0
<br>
configure:22696: result: yes
<br>
configure:22743: checking size of FORTRAN INTEGER*2
<br>
configure:22822: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:22829: $? = 0
<br>
configure:22839: gfortran  conftestf.f conftest.o -o conftest  
<br>
configure:22846: $? = 0
<br>
configure:22856: ./conftest
<br>
configure:22863: $? = 0
<br>
configure:22883: result: 2
<br>
configure:22972: checking for C type corresponding to Fortran INTEGER*2
<br>
configure:23008: result: short
<br>
configure:23030: checking alignment of FORTRAN INTEGER*2
<br>
configure:23115: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:23122: $? = 0
<br>
configure:23132: gfortran  conftestf.f conftest.o -o conftest  
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 1 bytes required before 'x' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 1 bytes required before 'z' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: COMMON 'foo' at (1) requires 1 bytes of padding at start
<br>
configure:23139: $? = 0
<br>
configure:23149: ./conftest
<br>
configure:23156: $? = 0
<br>
configure:23175: result: 2
<br>
configure:23321: checking if FORTRAN compiler supports INTEGER*4
<br>
configure:23336: gfortran -c  conftest.f &gt;&amp;5
<br>
configure:23342: $? = 0
<br>
configure:23346: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:23349: $? = 0
<br>
configure:23352: test -s conftest.o
<br>
configure:23355: $? = 0
<br>
configure:23358: result: yes
<br>
configure:23405: checking size of FORTRAN INTEGER*4
<br>
configure:23484: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:23491: $? = 0
<br>
configure:23501: gfortran  conftestf.f conftest.o -o conftest  
<br>
configure:23508: $? = 0
<br>
configure:23518: ./conftest
<br>
configure:23525: $? = 0
<br>
configure:23545: result: 4
<br>
configure:23634: checking for C type corresponding to Fortran INTEGER*4
<br>
configure:23670: result: int
<br>
configure:23692: checking alignment of FORTRAN INTEGER*4
<br>
configure:23777: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:23784: $? = 0
<br>
configure:23794: gfortran  conftestf.f conftest.o -o conftest  
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 3 bytes required before 'x' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 3 bytes required before 'z' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: COMMON 'foo' at (1) requires 3 bytes of padding at start
<br>
configure:23801: $? = 0
<br>
configure:23811: ./conftest
<br>
configure:23818: $? = 0
<br>
configure:23837: result: 4
<br>
configure:23983: checking if FORTRAN compiler supports INTEGER*8
<br>
configure:23998: gfortran -c  conftest.f &gt;&amp;5
<br>
configure:24004: $? = 0
<br>
configure:24008: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:24011: $? = 0
<br>
configure:24014: test -s conftest.o
<br>
configure:24017: $? = 0
<br>
configure:24020: result: yes
<br>
configure:24067: checking size of FORTRAN INTEGER*8
<br>
configure:24146: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:24153: $? = 0
<br>
configure:24163: gfortran  conftestf.f conftest.o -o conftest  
<br>
configure:24170: $? = 0
<br>
configure:24180: ./conftest
<br>
configure:24187: $? = 0
<br>
configure:24207: result: 8
<br>
configure:24296: checking for C type corresponding to Fortran INTEGER*8
<br>
configure:24332: result: long long
<br>
configure:24354: checking alignment of FORTRAN INTEGER*8
<br>
configure:24439: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:24446: $? = 0
<br>
configure:24456: gfortran  conftestf.f conftest.o -o conftest  
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 7 bytes required before 'x' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 7 bytes required before 'z' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: COMMON 'foo' at (1) requires 7 bytes of padding at start
<br>
configure:24463: $? = 0
<br>
configure:24473: ./conftest
<br>
configure:24480: $? = 0
<br>
configure:24499: result: 8
<br>
configure:24645: checking if FORTRAN compiler supports INTEGER*16
<br>
configure:24660: gfortran -c  conftest.f &gt;&amp;5
<br>
&nbsp;In file conftest.f:3
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INTEGER*16 bogus_variable                                       
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Old-style type declaration INTEGER*16 not supported at (1)
<br>
configure:24666: $? = 1
<br>
configure: failed program was:
<br>
| C
<br>
|         program main
<br>
|         INTEGER*16 bogus_variable
<br>
|         end
<br>
configure:24689: result: no
<br>
configure:25308: checking if FORTRAN compiler supports REAL
<br>
configure:25323: gfortran -c  conftest.f &gt;&amp;5
<br>
configure:25329: $? = 0
<br>
configure:25333: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:25336: $? = 0
<br>
configure:25339: test -s conftest.o
<br>
configure:25342: $? = 0
<br>
configure:25345: result: yes
<br>
configure:25392: checking size of FORTRAN REAL
<br>
configure:25471: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:25478: $? = 0
<br>
configure:25488: gfortran  conftestf.f conftest.o -o conftest  
<br>
configure:25495: $? = 0
<br>
configure:25505: ./conftest
<br>
configure:25512: $? = 0
<br>
configure:25532: result: 4
<br>
configure:25621: checking for C type corresponding to Fortran REAL
<br>
configure:25657: result: float
<br>
configure:25679: checking alignment of FORTRAN REAL
<br>
configure:25764: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:25771: $? = 0
<br>
configure:25781: gfortran  conftestf.f conftest.o -o conftest  
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 3 bytes required before 'x' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 3 bytes required before 'z' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: COMMON 'foo' at (1) requires 3 bytes of padding at start
<br>
configure:25788: $? = 0
<br>
configure:25798: ./conftest
<br>
configure:25805: $? = 0
<br>
configure:25824: result: 4
<br>
configure:25970: checking if FORTRAN compiler supports REAL*4
<br>
configure:25985: gfortran -c  conftest.f &gt;&amp;5
<br>
configure:25991: $? = 0
<br>
configure:25995: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:25998: $? = 0
<br>
configure:26001: test -s conftest.o
<br>
configure:26004: $? = 0
<br>
configure:26007: result: yes
<br>
configure:26054: checking size of FORTRAN REAL*4
<br>
configure:26133: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:26140: $? = 0
<br>
configure:26150: gfortran  conftestf.f conftest.o -o conftest  
<br>
configure:26157: $? = 0
<br>
configure:26167: ./conftest
<br>
configure:26174: $? = 0
<br>
configure:26194: result: 4
<br>
configure:26283: checking for C type corresponding to Fortran REAL*4
<br>
configure:26319: result: float
<br>
configure:26341: checking alignment of FORTRAN REAL*4
<br>
configure:26426: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:26433: $? = 0
<br>
configure:26443: gfortran  conftestf.f conftest.o -o conftest  
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 3 bytes required before 'x' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 3 bytes required before 'z' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: COMMON 'foo' at (1) requires 3 bytes of padding at start
<br>
configure:26450: $? = 0
<br>
configure:26460: ./conftest
<br>
configure:26467: $? = 0
<br>
configure:26486: result: 4
<br>
configure:26632: checking if FORTRAN compiler supports REAL*8
<br>
configure:26647: gfortran -c  conftest.f &gt;&amp;5
<br>
configure:26653: $? = 0
<br>
configure:26657: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:26660: $? = 0
<br>
configure:26663: test -s conftest.o
<br>
configure:26666: $? = 0
<br>
configure:26669: result: yes
<br>
configure:26716: checking size of FORTRAN REAL*8
<br>
configure:26795: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:26802: $? = 0
<br>
configure:26812: gfortran  conftestf.f conftest.o -o conftest  
<br>
configure:26819: $? = 0
<br>
configure:26829: ./conftest
<br>
configure:26836: $? = 0
<br>
configure:26856: result: 8
<br>
configure:26945: checking for C type corresponding to Fortran REAL*8
<br>
configure:26981: result: double
<br>
configure:27003: checking alignment of FORTRAN REAL*8
<br>
configure:27088: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:27095: $? = 0
<br>
configure:27105: gfortran  conftestf.f conftest.o -o conftest  
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 7 bytes required before 'x' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 7 bytes required before 'z' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: COMMON 'foo' at (1) requires 7 bytes of padding at start
<br>
configure:27112: $? = 0
<br>
configure:27122: ./conftest
<br>
configure:27129: $? = 0
<br>
configure:27148: result: 8
<br>
configure:27294: checking if FORTRAN compiler supports REAL*16
<br>
configure:27309: gfortran -c  conftest.f &gt;&amp;5
<br>
configure:27315: $? = 0
<br>
configure:27319: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:27322: $? = 0
<br>
configure:27325: test -s conftest.o
<br>
configure:27328: $? = 0
<br>
configure:27331: result: yes
<br>
configure:27378: checking size of FORTRAN REAL*16
<br>
configure:27457: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:27464: $? = 0
<br>
configure:27474: gfortran  conftestf.f conftest.o -o conftest  
<br>
configure:27481: $? = 0
<br>
configure:27491: ./conftest
<br>
configure:27498: $? = 0
<br>
configure:27518: result: 16
<br>
configure:27607: checking for C type corresponding to Fortran REAL*16
<br>
configure:27643: result: long double
<br>
configure:27665: checking alignment of FORTRAN REAL*16
<br>
configure:27750: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:27757: $? = 0
<br>
configure:27767: gfortran  conftestf.f conftest.o -o conftest  
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 15 bytes required before 'x' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 15 bytes required before 'z' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: COMMON 'foo' at (1) requires 15 bytes of padding at start
<br>
configure:27774: $? = 0
<br>
configure:27784: ./conftest
<br>
configure:27791: $? = 0
<br>
configure:27810: result: 16
<br>
configure:27957: checking if FORTRAN compiler supports DOUBLE PRECISION
<br>
configure:27972: gfortran -c  conftest.f &gt;&amp;5
<br>
configure:27978: $? = 0
<br>
configure:27982: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:27985: $? = 0
<br>
configure:27988: test -s conftest.o
<br>
configure:27991: $? = 0
<br>
configure:27994: result: yes
<br>
configure:28041: checking size of FORTRAN DOUBLE PRECISION
<br>
configure:28120: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:28127: $? = 0
<br>
configure:28137: gfortran  conftestf.f conftest.o -o conftest  
<br>
configure:28144: $? = 0
<br>
configure:28154: ./conftest
<br>
configure:28161: $? = 0
<br>
configure:28181: result: 8
<br>
configure:28270: checking for C type corresponding to Fortran DOUBLE PRECISION
<br>
configure:28306: result: double
<br>
configure:28328: checking alignment of FORTRAN DOUBLE PRECISION
<br>
configure:28413: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:28420: $? = 0
<br>
configure:28430: gfortran  conftestf.f conftest.o -o conftest  
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 7 bytes required before 'x' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 7 bytes required before 'z' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: COMMON 'foo' at (1) requires 7 bytes of padding at start
<br>
configure:28437: $? = 0
<br>
configure:28447: ./conftest
<br>
configure:28454: $? = 0
<br>
configure:28473: result: 8
<br>
configure:28620: checking if FORTRAN compiler supports COMPLEX
<br>
configure:28635: gfortran -c  conftest.f &gt;&amp;5
<br>
configure:28641: $? = 0
<br>
configure:28645: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:28648: $? = 0
<br>
configure:28651: test -s conftest.o
<br>
configure:28654: $? = 0
<br>
configure:28657: result: yes
<br>
configure:28704: checking size of FORTRAN COMPLEX
<br>
configure:28783: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:28790: $? = 0
<br>
configure:28800: gfortran  conftestf.f conftest.o -o conftest  
<br>
configure:28807: $? = 0
<br>
configure:28817: ./conftest
<br>
configure:28824: $? = 0
<br>
configure:28844: result: 8
<br>
configure:28991: checking alignment of FORTRAN COMPLEX
<br>
configure:29076: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:29083: $? = 0
<br>
configure:29093: gfortran  conftestf.f conftest.o -o conftest  
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 3 bytes required before 'x' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 3 bytes required before 'z' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: COMMON 'foo' at (1) requires 3 bytes of padding at start
<br>
configure:29100: $? = 0
<br>
configure:29110: ./conftest
<br>
configure:29117: $? = 0
<br>
configure:29136: result: 4
<br>
configure:29294: checking if FORTRAN compiler supports COMPLEX*8
<br>
configure:29309: gfortran -c  conftest.f &gt;&amp;5
<br>
configure:29315: $? = 0
<br>
configure:29319: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:29322: $? = 0
<br>
configure:29325: test -s conftest.o
<br>
configure:29328: $? = 0
<br>
configure:29331: result: yes
<br>
configure:29378: checking size of FORTRAN COMPLEX*8
<br>
configure:29457: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:29464: $? = 0
<br>
configure:29474: gfortran  conftestf.f conftest.o -o conftest  
<br>
configure:29481: $? = 0
<br>
configure:29491: ./conftest
<br>
configure:29498: $? = 0
<br>
configure:29518: result: 8
<br>
configure:29665: checking alignment of FORTRAN COMPLEX*8
<br>
configure:29750: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:29757: $? = 0
<br>
configure:29767: gfortran  conftestf.f conftest.o -o conftest  
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 3 bytes required before 'x' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 3 bytes required before 'z' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: COMMON 'foo' at (1) requires 3 bytes of padding at start
<br>
configure:29774: $? = 0
<br>
configure:29784: ./conftest
<br>
configure:29791: $? = 0
<br>
configure:29810: result: 4
<br>
configure:29956: checking if FORTRAN compiler supports COMPLEX*16
<br>
configure:29971: gfortran -c  conftest.f &gt;&amp;5
<br>
configure:29977: $? = 0
<br>
configure:29981: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:29984: $? = 0
<br>
configure:29987: test -s conftest.o
<br>
configure:29990: $? = 0
<br>
configure:29993: result: yes
<br>
configure:30040: checking size of FORTRAN COMPLEX*16
<br>
configure:30119: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:30126: $? = 0
<br>
configure:30136: gfortran  conftestf.f conftest.o -o conftest  
<br>
configure:30143: $? = 0
<br>
configure:30153: ./conftest
<br>
configure:30160: $? = 0
<br>
configure:30180: result: 16
<br>
configure:30327: checking alignment of FORTRAN COMPLEX*16
<br>
configure:30412: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:30419: $? = 0
<br>
configure:30429: gfortran  conftestf.f conftest.o -o conftest  
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 7 bytes required before 'x' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 7 bytes required before 'z' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: COMMON 'foo' at (1) requires 7 bytes of padding at start
<br>
configure:30436: $? = 0
<br>
configure:30446: ./conftest
<br>
configure:30453: $? = 0
<br>
configure:30472: result: 8
<br>
configure:30618: checking if FORTRAN compiler supports COMPLEX*32
<br>
configure:30633: gfortran -c  conftest.f &gt;&amp;5
<br>
configure:30639: $? = 0
<br>
configure:30643: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:30646: $? = 0
<br>
configure:30649: test -s conftest.o
<br>
configure:30652: $? = 0
<br>
configure:30655: result: yes
<br>
configure:30702: checking size of FORTRAN COMPLEX*32
<br>
configure:30781: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:30788: $? = 0
<br>
configure:30798: gfortran  conftestf.f conftest.o -o conftest  
<br>
configure:30805: $? = 0
<br>
configure:30815: ./conftest
<br>
configure:30822: $? = 0
<br>
configure:30842: result: 32
<br>
configure:30989: checking alignment of FORTRAN COMPLEX*32
<br>
configure:31074: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:31081: $? = 0
<br>
configure:31091: gfortran  conftestf.f conftest.o -o conftest  
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 15 bytes required before 'x' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: Padding of 15 bytes required before 'z' in COMMON 'foo' at (1)
<br>
&nbsp;In file conftestf.f:5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /foo/a,w,b,x,y,c,z                                         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Warning: COMMON 'foo' at (1) requires 15 bytes of padding at start
<br>
configure:31098: $? = 0
<br>
configure:31108: ./conftest
<br>
configure:31115: $? = 0
<br>
configure:31134: result: 16
<br>
configure:31249: checking for max fortran MPI handle index
<br>
configure:31302: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:31305: $? = 0
<br>
configure:31307: ./conftest
<br>
configure:31310: $? = 0
<br>
configure:31345: result: ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
configure:31356: checking FORTRAN value for .TRUE. logical type
<br>
configure:31450: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:31457: $? = 0
<br>
configure:31467: gfortran  -o conftest conftest.o conftestf.f  
<br>
configure:31474: $? = 0
<br>
configure:31484: ./conftest
<br>
configure:31491: $? = 0
<br>
configure:31513: result: 1
<br>
configure:31565: checking for correct handling of FORTRAN logical arrays
<br>
configure:31664: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:31671: $? = 0
<br>
configure:31681: gfortran  conftestf.f conftest.o -o conftest  
<br>
configure:31688: $? = 0
<br>
configure:31698: ./conftest
<br>
configure:31705: $? = 0
<br>
configure:31725: result: yes
<br>
configure:32029: checking for gfortran
<br>
configure:32045: found /usr/local/bin/gfortran
<br>
configure:32055: result: gfortran
<br>
configure:32073: checking for Fortran compiler version
<br>
configure:32073: gfortran --version &lt;/dev/null &gt;&amp;5
<br>
GNU Fortran 95 (GCC) 4.2.0 20060218 (experimental)
<br>
Copyright (C) 2006 Free Software Foundation, Inc.
<br>
<p>GNU Fortran comes with NO WARRANTY, to the extent permitted by law.
<br>
You may redistribute copies of GNU Fortran
<br>
under the terms of the GNU General Public License.
<br>
For more information about these matters, see the file named COPYING
<br>
<p>configure:32076: $? = 0
<br>
configure:32078: gfortran -v &lt;/dev/null &gt;&amp;5
<br>
Using built-in specs.
<br>
Target: powerpc-apple-darwin8.5.0
<br>
Configured with: ../gcc-4.2-20060218/configure --enable-languages=fortran
<br>
Thread model: posix
<br>
gcc version 4.2.0 20060218 (experimental)
<br>
configure:32081: $? = 0
<br>
configure:32083: gfortran -V &lt;/dev/null &gt;&amp;5
<br>
gfortran: '-V' option must have argument
<br>
configure:32086: $? = 1
<br>
configure:32094: checking whether we are using the GNU Fortran compiler
<br>
configure:32108: gfortran -c   conftest.F &gt;&amp;5
<br>
configure:32114: $? = 0
<br>
configure:32118: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:32121: $? = 0
<br>
configure:32124: test -s conftest.o
<br>
configure:32127: $? = 0
<br>
configure:32140: result: yes
<br>
configure:32146: checking whether gfortran accepts -g
<br>
configure:32158: gfortran -c -g  conftest.f &gt;&amp;5
<br>
configure:32164: $? = 0
<br>
configure:32168: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:32171: $? = 0
<br>
configure:32174: test -s conftest.o
<br>
configure:32177: $? = 0
<br>
configure:32189: result: yes
<br>
configure:32231: checking for Fortran flag to compile .f files
<br>
configure:32248: gfortran -c   conftest.f &gt;&amp;5
<br>
configure:32254: $? = 0
<br>
configure:32258: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:32261: $? = 0
<br>
configure:32264: test -s conftest.o
<br>
configure:32267: $? = 0
<br>
configure:32281: result: none
<br>
configure:32300: checking for Fortran flag to compile .f90 files
<br>
configure:32317: gfortran -c   conftest.f90 &gt;&amp;5
<br>
configure:32323: $? = 0
<br>
configure:32327: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:32330: $? = 0
<br>
configure:32333: test -s conftest.o
<br>
configure:32336: $? = 0
<br>
configure:32350: result: none
<br>
configure:32376: checking whether gfortran and gfortran compilers are compatible
<br>
configure:32404: gfortran   -c conftestf90.f
<br>
configure:32411: $? = 0
<br>
configure:32421: gfortran  -c conftestf77.f
<br>
configure:32428: $? = 0
<br>
configure:32438: gfortran  -o conftest conftestf90.o conftestf77.o 
<br>
configure:32445: $? = 0
<br>
configure:32513: result: yes
<br>
configure:32554: checking for FORTRAN compiler module include flag
<br>
configure:32584: gfortran   -c conftest-module.f90
<br>
configure:32591: $? = 0
<br>
configure:32628: gfortran   conftest.f90 -Isubdir
<br>
configure:32635: $? = 0
<br>
configure:32661: result: -I
<br>
configure:32683: checking if FORTRAN compiler supports integer(selected_int_kind(2))
<br>
configure:32703: gfortran   -o conftest conftestf.f90
<br>
configure:32710: $? = 0
<br>
configure:32714: result: yes
<br>
configure:32731: checking size of FORTRAN integer(selected_int_kind(2))
<br>
configure:32810: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:32817: $? = 0
<br>
configure:32827: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:32834: $? = 0
<br>
configure:32844: ./conftest
<br>
configure:32851: $? = 0
<br>
configure:32871: result: 1
<br>
configure:32947: checking alignment of FORTRAN integer(selected_int_kind(2))
<br>
configure:33027: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:33034: $? = 0
<br>
configure:33044: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:33051: $? = 0
<br>
configure:33061: ./conftest
<br>
configure:33068: $? = 0
<br>
configure:33087: result: 1
<br>
configure:33154: checking size of FORTRAN logical(selected_int_kind(2))
<br>
configure:33233: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:33240: $? = 0
<br>
configure:33250: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:33257: $? = 0
<br>
configure:33267: ./conftest
<br>
configure:33274: $? = 0
<br>
configure:33294: result: 1
<br>
configure:33359: checking alignment of FORTRAN logical(selected_int_kind(2))
<br>
configure:33439: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:33446: $? = 0
<br>
configure:33456: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:33463: $? = 0
<br>
configure:33473: ./conftest
<br>
configure:33480: $? = 0
<br>
configure:33499: result: 1
<br>
configure:33570: checking if FORTRAN compiler supports integer(selected_int_kind(4))
<br>
configure:33590: gfortran   -o conftest conftestf.f90
<br>
configure:33597: $? = 0
<br>
configure:33601: result: yes
<br>
configure:33618: checking size of FORTRAN integer(selected_int_kind(4))
<br>
configure:33697: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:33704: $? = 0
<br>
configure:33714: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:33721: $? = 0
<br>
configure:33731: ./conftest
<br>
configure:33738: $? = 0
<br>
configure:33758: result: 2
<br>
configure:33833: checking alignment of FORTRAN integer(selected_int_kind(4))
<br>
configure:33913: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:33920: $? = 0
<br>
configure:33930: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:33937: $? = 0
<br>
configure:33947: ./conftest
<br>
configure:33954: $? = 0
<br>
configure:33973: result: 2
<br>
configure:34040: checking size of FORTRAN logical(selected_int_kind(4))
<br>
configure:34119: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:34126: $? = 0
<br>
configure:34136: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:34143: $? = 0
<br>
configure:34153: ./conftest
<br>
configure:34160: $? = 0
<br>
configure:34180: result: 2
<br>
configure:34245: checking alignment of FORTRAN logical(selected_int_kind(4))
<br>
configure:34325: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:34332: $? = 0
<br>
configure:34342: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:34349: $? = 0
<br>
configure:34359: ./conftest
<br>
configure:34366: $? = 0
<br>
configure:34385: result: 2
<br>
configure:34456: checking if FORTRAN compiler supports integer(selected_int_kind(9))
<br>
configure:34476: gfortran   -o conftest conftestf.f90
<br>
configure:34483: $? = 0
<br>
configure:34487: result: yes
<br>
configure:34504: checking size of FORTRAN integer(selected_int_kind(9))
<br>
configure:34583: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:34590: $? = 0
<br>
configure:34600: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:34607: $? = 0
<br>
configure:34617: ./conftest
<br>
configure:34624: $? = 0
<br>
configure:34644: result: 4
<br>
configure:34719: checking alignment of FORTRAN integer(selected_int_kind(9))
<br>
configure:34799: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:34806: $? = 0
<br>
configure:34816: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:34823: $? = 0
<br>
configure:34833: ./conftest
<br>
configure:34840: $? = 0
<br>
configure:34859: result: 4
<br>
configure:34926: checking size of FORTRAN logical(selected_int_kind(9))
<br>
configure:35005: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:35012: $? = 0
<br>
configure:35022: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:35029: $? = 0
<br>
configure:35039: ./conftest
<br>
configure:35046: $? = 0
<br>
configure:35066: result: 4
<br>
configure:35131: checking alignment of FORTRAN logical(selected_int_kind(9))
<br>
configure:35211: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:35218: $? = 0
<br>
configure:35228: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:35235: $? = 0
<br>
configure:35245: ./conftest
<br>
configure:35252: $? = 0
<br>
configure:35271: result: 4
<br>
configure:35342: checking if FORTRAN compiler supports integer(selected_int_kind(18))
<br>
configure:35362: gfortran   -o conftest conftestf.f90
<br>
configure:35369: $? = 0
<br>
configure:35373: result: yes
<br>
configure:35390: checking size of FORTRAN integer(selected_int_kind(18))
<br>
configure:35469: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:35476: $? = 0
<br>
configure:35486: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:35493: $? = 0
<br>
configure:35503: ./conftest
<br>
configure:35510: $? = 0
<br>
configure:35530: result: 8
<br>
configure:35605: checking alignment of FORTRAN integer(selected_int_kind(18))
<br>
configure:35685: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:35692: $? = 0
<br>
configure:35702: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:35709: $? = 0
<br>
configure:35719: ./conftest
<br>
configure:35726: $? = 0
<br>
configure:35745: result: 8
<br>
configure:35812: checking size of FORTRAN logical(selected_int_kind(18))
<br>
configure:35891: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:35898: $? = 0
<br>
configure:35908: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:35915: $? = 0
<br>
configure:35925: ./conftest
<br>
configure:35932: $? = 0
<br>
configure:35952: result: 8
<br>
configure:36017: checking alignment of FORTRAN logical(selected_int_kind(18))
<br>
configure:36097: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:36104: $? = 0
<br>
configure:36114: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:36121: $? = 0
<br>
configure:36131: ./conftest
<br>
configure:36138: $? = 0
<br>
configure:36157: result: 8
<br>
configure:36228: checking if FORTRAN compiler supports integer(selected_int_kind(19))
<br>
configure:36248: gfortran   -o conftest conftestf.f90
<br>
&nbsp;In file conftestf.f90:2
<br>
<p>&nbsp;&nbsp;&nbsp;integer(selected_int_kind(19)) :: x
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Kind -1 not supported for type INTEGER at (1)
<br>
configure:36255: $? = 1
<br>
configure:36264: result: no
<br>
configure:37114: checking if FORTRAN compiler supports real(selected_real_kind(6))
<br>
configure:37134: gfortran   -o conftest conftestf.f90
<br>
configure:37141: $? = 0
<br>
configure:37145: result: yes
<br>
configure:37162: checking size of FORTRAN real(selected_real_kind(6))
<br>
configure:37241: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:37248: $? = 0
<br>
configure:37258: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:37265: $? = 0
<br>
configure:37275: ./conftest
<br>
configure:37282: $? = 0
<br>
configure:37302: result: 4
<br>
configure:37378: checking size of FORTRAN complex(selected_real_kind(6))
<br>
configure:37457: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:37464: $? = 0
<br>
configure:37474: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:37481: $? = 0
<br>
configure:37491: ./conftest
<br>
configure:37498: $? = 0
<br>
configure:37518: result: 8
<br>
configure:37583: checking alignment of FORTRAN real(selected_real_kind(6))
<br>
configure:37663: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:37670: $? = 0
<br>
configure:37680: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:37687: $? = 0
<br>
configure:37697: ./conftest
<br>
configure:37704: $? = 0
<br>
configure:37723: result: 4
<br>
configure:37790: checking alignment of FORTRAN complex(selected_real_kind(6))
<br>
configure:37870: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:37877: $? = 0
<br>
configure:37887: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:37894: $? = 0
<br>
configure:37904: ./conftest
<br>
configure:37911: $? = 0
<br>
configure:37930: result: 4
<br>
configure:37998: checking precision of FORTRAN real(selected_real_kind(6))
<br>
configure:38021: gfortran   -o conftest conftestf.f90
<br>
configure:38028: $? = 0
<br>
configure:38038: ./conftest
<br>
configure:38045: $? = 0
<br>
configure:38062: result: 6
<br>
configure:38102: checking precision of FORTRAN complex(selected_real_kind(6))
<br>
configure:38125: gfortran   -o conftest conftestf.f90
<br>
configure:38132: $? = 0
<br>
configure:38142: ./conftest
<br>
configure:38149: $? = 0
<br>
configure:38166: result: 6
<br>
configure:38206: checking range of FORTRAN real(selected_real_kind(6))
<br>
configure:38229: gfortran   -o conftest conftestf.f90
<br>
configure:38236: $? = 0
<br>
configure:38246: ./conftest
<br>
configure:38253: $? = 0
<br>
configure:38270: result: 37
<br>
configure:38310: checking range of FORTRAN complex(selected_real_kind(6))
<br>
configure:38333: gfortran   -o conftest conftestf.f90
<br>
configure:38340: $? = 0
<br>
configure:38350: ./conftest
<br>
configure:38357: $? = 0
<br>
configure:38374: result: 37
<br>
configure:38417: checking if FORTRAN compiler supports real(selected_real_kind(15))
<br>
configure:38437: gfortran   -o conftest conftestf.f90
<br>
configure:38444: $? = 0
<br>
configure:38448: result: yes
<br>
configure:38465: checking size of FORTRAN real(selected_real_kind(15))
<br>
configure:38544: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:38551: $? = 0
<br>
configure:38561: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:38568: $? = 0
<br>
configure:38578: ./conftest
<br>
configure:38585: $? = 0
<br>
configure:38605: result: 8
<br>
configure:38681: checking size of FORTRAN complex(selected_real_kind(15))
<br>
configure:38760: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:38767: $? = 0
<br>
configure:38777: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:38784: $? = 0
<br>
configure:38794: ./conftest
<br>
configure:38801: $? = 0
<br>
configure:38821: result: 16
<br>
configure:38886: checking alignment of FORTRAN real(selected_real_kind(15))
<br>
configure:38966: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:38973: $? = 0
<br>
configure:38983: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:38990: $? = 0
<br>
configure:39000: ./conftest
<br>
configure:39007: $? = 0
<br>
configure:39026: result: 4
<br>
configure:39093: checking alignment of FORTRAN complex(selected_real_kind(15))
<br>
configure:39173: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:39180: $? = 0
<br>
configure:39190: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:39197: $? = 0
<br>
configure:39207: ./conftest
<br>
configure:39214: $? = 0
<br>
configure:39233: result: 8
<br>
configure:39301: checking precision of FORTRAN real(selected_real_kind(15))
<br>
configure:39324: gfortran   -o conftest conftestf.f90
<br>
configure:39331: $? = 0
<br>
configure:39341: ./conftest
<br>
configure:39348: $? = 0
<br>
configure:39365: result: 15
<br>
configure:39405: checking precision of FORTRAN complex(selected_real_kind(15))
<br>
configure:39428: gfortran   -o conftest conftestf.f90
<br>
configure:39435: $? = 0
<br>
configure:39445: ./conftest
<br>
configure:39452: $? = 0
<br>
configure:39469: result: 15
<br>
configure:39509: checking range of FORTRAN real(selected_real_kind(15))
<br>
configure:39532: gfortran   -o conftest conftestf.f90
<br>
configure:39539: $? = 0
<br>
configure:39549: ./conftest
<br>
configure:39556: $? = 0
<br>
configure:39573: result: 307
<br>
configure:39613: checking range of FORTRAN complex(selected_real_kind(15))
<br>
configure:39636: gfortran   -o conftest conftestf.f90
<br>
configure:39643: $? = 0
<br>
configure:39653: ./conftest
<br>
configure:39660: $? = 0
<br>
configure:39677: result: 307
<br>
configure:39720: checking if FORTRAN compiler supports real(selected_real_kind(31))
<br>
configure:39740: gfortran   -o conftest conftestf.f90
<br>
configure:39747: $? = 0
<br>
configure:39751: result: yes
<br>
configure:39768: checking size of FORTRAN real(selected_real_kind(31))
<br>
configure:39847: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:39854: $? = 0
<br>
configure:39864: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:39871: $? = 0
<br>
configure:39881: ./conftest
<br>
configure:39888: $? = 0
<br>
configure:39908: result: 16
<br>
configure:39984: checking size of FORTRAN complex(selected_real_kind(31))
<br>
configure:40063: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:40070: $? = 0
<br>
configure:40080: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:40087: $? = 0
<br>
configure:40097: ./conftest
<br>
configure:40104: $? = 0
<br>
configure:40124: result: 32
<br>
configure:40189: checking alignment of FORTRAN real(selected_real_kind(31))
<br>
configure:40269: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:40276: $? = 0
<br>
configure:40286: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:40293: $? = 0
<br>
configure:40303: ./conftest
<br>
configure:40310: $? = 0
<br>
configure:40329: result: 16
<br>
configure:40396: checking alignment of FORTRAN complex(selected_real_kind(31))
<br>
configure:40476: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:40483: $? = 0
<br>
configure:40493: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:40500: $? = 0
<br>
configure:40510: ./conftest
<br>
configure:40517: $? = 0
<br>
configure:40536: result: 16
<br>
configure:40604: checking precision of FORTRAN real(selected_real_kind(31))
<br>
configure:40627: gfortran   -o conftest conftestf.f90
<br>
configure:40634: $? = 0
<br>
configure:40644: ./conftest
<br>
configure:40651: $? = 0
<br>
configure:40668: result: 31
<br>
configure:40708: checking precision of FORTRAN complex(selected_real_kind(31))
<br>
configure:40731: gfortran   -o conftest conftestf.f90
<br>
configure:40738: $? = 0
<br>
configure:40748: ./conftest
<br>
configure:40755: $? = 0
<br>
configure:40772: result: 31
<br>
configure:40812: checking range of FORTRAN real(selected_real_kind(31))
<br>
configure:40835: gfortran   -o conftest conftestf.f90
<br>
configure:40842: $? = 0
<br>
configure:40852: ./conftest
<br>
configure:40859: $? = 0
<br>
configure:40876: result: 291
<br>
configure:40916: checking range of FORTRAN complex(selected_real_kind(31))
<br>
configure:40939: gfortran   -o conftest conftestf.f90
<br>
configure:40946: $? = 0
<br>
configure:40956: ./conftest
<br>
configure:40963: $? = 0
<br>
configure:40980: result: 291
<br>
configure:41022: checking size of FORTRAN logical
<br>
configure:41101: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:41108: $? = 0
<br>
configure:41118: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:41125: $? = 0
<br>
configure:41135: ./conftest
<br>
configure:41142: $? = 0
<br>
configure:41162: result: 4
<br>
configure:41227: checking alignment of FORTRAN logical
<br>
configure:41307: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:41314: $? = 0
<br>
configure:41324: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:41331: $? = 0
<br>
configure:41341: ./conftest
<br>
configure:41348: $? = 0
<br>
configure:41367: result: 4
<br>
configure:41435: checking size of FORTRAN integer
<br>
configure:41514: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:41521: $? = 0
<br>
configure:41531: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:41538: $? = 0
<br>
configure:41548: ./conftest
<br>
configure:41555: $? = 0
<br>
configure:41575: result: 4
<br>
configure:41640: checking alignment of FORTRAN integer
<br>
configure:41720: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:41727: $? = 0
<br>
configure:41737: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:41744: $? = 0
<br>
configure:41754: ./conftest
<br>
configure:41761: $? = 0
<br>
configure:41780: result: 4
<br>
configure:41848: checking size of FORTRAN real
<br>
configure:41927: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:41934: $? = 0
<br>
configure:41944: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:41951: $? = 0
<br>
configure:41961: ./conftest
<br>
configure:41968: $? = 0
<br>
configure:41988: result: 4
<br>
configure:42053: checking alignment of FORTRAN real
<br>
configure:42133: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:42140: $? = 0
<br>
configure:42150: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:42157: $? = 0
<br>
configure:42167: ./conftest
<br>
configure:42174: $? = 0
<br>
configure:42193: result: 4
<br>
configure:42261: checking size of FORTRAN real(kind(1.D0))
<br>
configure:42340: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:42347: $? = 0
<br>
configure:42357: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:42364: $? = 0
<br>
configure:42374: ./conftest
<br>
configure:42381: $? = 0
<br>
configure:42401: result: 8
<br>
configure:42466: checking alignment of FORTRAN real(kind(1.D0))
<br>
configure:42546: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:42553: $? = 0
<br>
configure:42563: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:42570: $? = 0
<br>
configure:42580: ./conftest
<br>
configure:42587: $? = 0
<br>
configure:42606: result: 4
<br>
configure:42674: checking size of FORTRAN complex
<br>
configure:42753: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:42760: $? = 0
<br>
configure:42770: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:42777: $? = 0
<br>
configure:42787: ./conftest
<br>
configure:42794: $? = 0
<br>
configure:42814: result: 8
<br>
configure:42879: checking alignment of FORTRAN complex
<br>
configure:42959: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:42966: $? = 0
<br>
configure:42976: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:42983: $? = 0
<br>
configure:42993: ./conftest
<br>
configure:43000: $? = 0
<br>
configure:43019: result: 4
<br>
configure:43087: checking size of FORTRAN complex(kind(1.D0))
<br>
configure:43166: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:43173: $? = 0
<br>
configure:43183: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:43190: $? = 0
<br>
configure:43200: ./conftest
<br>
configure:43207: $? = 0
<br>
configure:43227: result: 16
<br>
configure:43292: checking alignment of FORTRAN complex(kind(1.D0))
<br>
configure:43372: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:43379: $? = 0
<br>
configure:43389: gfortran   conftestf.f90 conftest.o -o conftest
<br>
configure:43396: $? = 0
<br>
configure:43406: ./conftest
<br>
configure:43413: $? = 0
<br>
configure:43432: result: 8
<br>
configure:43505: checking kind for FORTRAN selected_int_kind(18)
<br>
configure:43527: gfortran   -o conftest conftestf.f90
<br>
configure:43534: $? = 0
<br>
configure:43544: ./conftest
<br>
configure:43551: $? = 0
<br>
configure:43568: result: 8
<br>
configure:43714: checking kind for FORTRAN selected_int_kind(9)
<br>
configure:43736: gfortran   -o conftest conftestf.f90
<br>
configure:43743: $? = 0
<br>
configure:43753: ./conftest
<br>
configure:43760: $? = 0
<br>
configure:43777: result: 4
<br>
configure:44457: checking alloca.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking alloca.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for alloca.h
<br>
configure:44580: result: yes
<br>
configure:44457: checking aio.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking aio.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for aio.h
<br>
configure:44580: result: yes
<br>
configure:44457: checking arpa/inet.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking arpa/inet.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for arpa/inet.h
<br>
configure:44580: result: yes
<br>
configure:44457: checking dirent.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking dirent.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for dirent.h
<br>
configure:44580: result: yes
<br>
configure:44457: checking dlfcn.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking dlfcn.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for dlfcn.h
<br>
configure:44580: result: yes
<br>
configure:44457: checking execinfo.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
conftest.c:275:22: error: execinfo.h: No such file or directory
<br>
configure:44475: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;execinfo.h&gt;
<br>
configure:44498: result: no
<br>
configure:44502: checking execinfo.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
conftest.c:241:22: error: execinfo.h: No such file or directory
<br>
configure:44518: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;execinfo.h&gt;
<br>
configure:44538: result: no
<br>
configure:44573: checking for execinfo.h
<br>
configure:44580: result: no
<br>
configure:44457: checking err.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking err.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for err.h
<br>
configure:44580: result: yes
<br>
configure:44457: checking fcntl.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking fcntl.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for fcntl.h
<br>
configure:44580: result: yes
<br>
configure:44457: checking grp.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking grp.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for grp.h
<br>
configure:44580: result: yes
<br>
configure:44448: checking for inttypes.h
<br>
configure:44453: result: yes
<br>
configure:44457: checking libgen.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking libgen.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for libgen.h
<br>
configure:44580: result: yes
<br>
configure:44457: checking libutil.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
conftest.c:280:21: error: libutil.h: No such file or directory
<br>
configure:44475: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;libutil.h&gt;
<br>
configure:44498: result: no
<br>
configure:44502: checking libutil.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
conftest.c:246:21: error: libutil.h: No such file or directory
<br>
configure:44518: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;libutil.h&gt;
<br>
configure:44538: result: no
<br>
configure:44573: checking for libutil.h
<br>
configure:44580: result: no
<br>
configure:44457: checking netdb.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking netdb.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for netdb.h
<br>
configure:44580: result: yes
<br>
configure:44457: checking netinet/in.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking netinet/in.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for netinet/in.h
<br>
configure:44580: result: yes
<br>
configure:44457: checking netinet/tcp.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking netinet/tcp.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for netinet/tcp.h
<br>
configure:44580: result: yes
<br>
configure:44457: checking poll.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking poll.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for poll.h
<br>
configure:44580: result: yes
<br>
configure:44457: checking pthread.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking pthread.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for pthread.h
<br>
configure:44580: result: yes
<br>
configure:44457: checking pty.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
conftest.c:285:17: error: pty.h: No such file or directory
<br>
configure:44475: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;pty.h&gt;
<br>
configure:44498: result: no
<br>
configure:44502: checking pty.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
conftest.c:251:17: error: pty.h: No such file or directory
<br>
configure:44518: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;pty.h&gt;
<br>
configure:44538: result: no
<br>
configure:44573: checking for pty.h
<br>
configure:44580: result: no
<br>
configure:44457: checking pwd.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking pwd.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for pwd.h
<br>
configure:44580: result: yes
<br>
configure:44457: checking sched.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking sched.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for sched.h
<br>
configure:44580: result: yes
<br>
configure:44448: checking for stdint.h
<br>
configure:44453: result: yes
<br>
configure:44448: checking for string.h
<br>
configure:44453: result: yes
<br>
configure:44448: checking for strings.h
<br>
configure:44453: result: yes
<br>
configure:44457: checking stropts.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
conftest.c:290:21: error: stropts.h: No such file or directory
<br>
configure:44475: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;stropts.h&gt;
<br>
configure:44498: result: no
<br>
configure:44502: checking stropts.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
conftest.c:256:21: error: stropts.h: No such file or directory
<br>
configure:44518: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stropts.h&gt;
<br>
configure:44538: result: no
<br>
configure:44573: checking for stropts.h
<br>
configure:44580: result: no
<br>
configure:44457: checking sys/fcntl.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking sys/fcntl.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for sys/fcntl.h
<br>
configure:44580: result: yes
<br>
configure:44457: checking sys/ipc.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking sys/ipc.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for sys/ipc.h
<br>
configure:44580: result: yes
<br>
configure:44457: checking sys/ioctl.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking sys/ioctl.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for sys/ioctl.h
<br>
configure:44580: result: yes
<br>
configure:44457: checking sys/mman.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking sys/mman.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for sys/mman.h
<br>
configure:44580: result: yes
<br>
configure:44457: checking sys/param.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking sys/param.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for sys/param.h
<br>
configure:44580: result: yes
<br>
configure:44457: checking sys/queue.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking sys/queue.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for sys/queue.h
<br>
configure:44580: result: yes
<br>
configure:44457: checking sys/resource.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking sys/resource.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for sys/resource.h
<br>
configure:44580: result: yes
<br>
configure:44457: checking sys/select.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking sys/select.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for sys/select.h
<br>
configure:44580: result: yes
<br>
configure:44457: checking sys/socket.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking sys/socket.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for sys/socket.h
<br>
configure:44580: result: yes
<br>
configure:44457: checking sys/sockio.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking sys/sockio.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for sys/sockio.h
<br>
configure:44580: result: yes
<br>
configure:44448: checking for sys/stat.h
<br>
configure:44453: result: yes
<br>
configure:44457: checking sys/statvfs.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking sys/statvfs.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for sys/statvfs.h
<br>
configure:44580: result: yes
<br>
configure:44457: checking sys/time.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking sys/time.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for sys/time.h
<br>
configure:44580: result: yes
<br>
configure:44457: checking sys/tree.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
conftest.c:303:22: error: sys/tree.h: No such file or directory
<br>
configure:44475: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;sys/tree.h&gt;
<br>
configure:44498: result: no
<br>
configure:44502: checking sys/tree.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
conftest.c:269:22: error: sys/tree.h: No such file or directory
<br>
configure:44518: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;sys/tree.h&gt;
<br>
configure:44538: result: no
<br>
configure:44573: checking for sys/tree.h
<br>
configure:44580: result: no
<br>
configure:44448: checking for sys/types.h
<br>
configure:44453: result: yes
<br>
configure:44457: checking sys/uio.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking sys/uio.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for sys/uio.h
<br>
configure:44580: result: yes
<br>
configure:44457: checking sys/utsname.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking sys/utsname.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for sys/utsname.h
<br>
configure:44580: result: yes
<br>
configure:44457: checking sys/wait.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking sys/wait.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for sys/wait.h
<br>
configure:44580: result: yes
<br>
configure:44457: checking syslog.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking syslog.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for syslog.h
<br>
configure:44580: result: yes
<br>
configure:44457: checking time.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking time.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for time.h
<br>
configure:44580: result: yes
<br>
configure:44457: checking termios.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking termios.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for termios.h
<br>
configure:44580: result: yes
<br>
configure:44457: checking ulimit.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking ulimit.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for ulimit.h
<br>
configure:44580: result: yes
<br>
configure:44448: checking for unistd.h
<br>
configure:44453: result: yes
<br>
configure:44457: checking util.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking util.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for util.h
<br>
configure:44580: result: yes
<br>
configure:44457: checking utmp.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44475: $? = 0
<br>
configure:44479: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44482: $? = 0
<br>
configure:44485: test -s conftest.o
<br>
configure:44488: $? = 0
<br>
configure:44498: result: yes
<br>
configure:44502: checking utmp.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
configure:44518: $? = 0
<br>
configure:44538: result: yes
<br>
configure:44573: checking for utmp.h
<br>
configure:44580: result: yes
<br>
configure:44457: checking malloc.h usability
<br>
configure:44469: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
conftest.c:314:20: error: malloc.h: No such file or directory
<br>
configure:44475: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;malloc.h&gt;
<br>
configure:44498: result: no
<br>
configure:44502: checking malloc.h presence
<br>
configure:44512: gcc -E  conftest.c
<br>
conftest.c:280:20: error: malloc.h: No such file or directory
<br>
configure:44518: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;malloc.h&gt;
<br>
configure:44538: result: no
<br>
configure:44573: checking for malloc.h
<br>
configure:44580: result: no
<br>
configure:44600: checking for net/if.h
<br>
configure:44628: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44634: $? = 0
<br>
configure:44638: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44641: $? = 0
<br>
configure:44644: test -s conftest.o
<br>
configure:44647: $? = 0
<br>
configure:44658: result: yes
<br>
configure:44695: checking stdbool.h usability
<br>
configure:44707: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44713: $? = 0
<br>
configure:44717: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44720: $? = 0
<br>
configure:44723: test -s conftest.o
<br>
configure:44726: $? = 0
<br>
configure:44736: result: yes
<br>
configure:44740: checking stdbool.h presence
<br>
configure:44750: gcc -E  conftest.c
<br>
configure:44756: $? = 0
<br>
configure:44776: result: yes
<br>
configure:44811: checking for stdbool.h
<br>
configure:44818: result: yes
<br>
configure:44833: checking if &lt;stdbool.h&gt; works
<br>
configure:44856: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44862: $? = 0
<br>
configure:44866: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44869: $? = 0
<br>
configure:44872: test -s conftest.o
<br>
configure:44875: $? = 0
<br>
configure:44894: result: yes
<br>
configure:44961: checking for pid_t
<br>
configure:44985: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:44991: $? = 0
<br>
configure:44995: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:44998: $? = 0
<br>
configure:45001: test -s conftest.o
<br>
configure:45004: $? = 0
<br>
configure:45015: result: yes
<br>
configure:45018: checking size of pid_t
<br>
configure:45337: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:45340: $? = 0
<br>
configure:45342: ./conftest
<br>
configure:45345: $? = 0
<br>
configure:45368: result: 4
<br>
configure:45376: checking for socklen_t
<br>
configure:45402: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:45408: $? = 0
<br>
configure:45412: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:45415: $? = 0
<br>
configure:45418: test -s conftest.o
<br>
configure:45421: $? = 0
<br>
configure:45432: result: yes
<br>
configure:45448: checking for struct sockaddr_in
<br>
configure:45476: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:45482: $? = 0
<br>
configure:45486: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:45489: $? = 0
<br>
configure:45492: test -s conftest.o
<br>
configure:45495: $? = 0
<br>
configure:45506: result: yes
<br>
configure:45519: checking if SA_RESTART defined in signal.h
<br>
configure:45546: result: yes
<br>
configure:45550: checking for sa_len in struct sockaddr
<br>
configure:45569: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:45575: $? = 0
<br>
configure:45579: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:45582: $? = 0
<br>
configure:45585: test -s conftest.o
<br>
configure:45588: $? = 0
<br>
configure:45603: result: yes
<br>
configure:45606: checking for struct dirent.d_type
<br>
configure:45632: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:45638: $? = 0
<br>
configure:45642: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:45645: $? = 0
<br>
configure:45648: test -s conftest.o
<br>
configure:45651: $? = 0
<br>
configure:45711: result: yes
<br>
configure:45723: checking for siginfo_t.si_fd
<br>
configure:45747: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
conftest.c: In function 'main':
<br>
conftest.c:296: error: 'siginfo_t' has no member named 'si_fd'
<br>
configure:45753: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;signal.h&gt;
<br>
| 
<br>
| int
<br>
| main ()
<br>
| {
<br>
| static siginfo_t ac_aggr;
<br>
| if (ac_aggr.si_fd)
<br>
| return 0;
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:45792: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
conftest.c: In function 'main':
<br>
conftest.c:296: error: 'siginfo_t' has no member named 'si_fd'
<br>
configure:45798: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;signal.h&gt;
<br>
| 
<br>
| int
<br>
| main ()
<br>
| {
<br>
| static siginfo_t ac_aggr;
<br>
| if (sizeof ac_aggr.si_fd)
<br>
| return 0;
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:45824: result: no
<br>
configure:45900: checking for openpty in -lutil
<br>
configure:45930: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c -lutil   &gt;&amp;5
<br>
/usr/bin/ld: can't locate file for: -lutil
<br>
collect2: ld returned 1 exit status
<br>
configure:45936: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| /* end confdefs.h.  */
<br>
| 
<br>
| /* Override any gcc2 internal prototype to avoid an error.  */
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot;
<br>
| #endif
<br>
| /* We use char because int might match the return type of a gcc2
<br>
|    builtin and then its argument prototype would still apply.  */
<br>
| char openpty ();
<br>
| int
<br>
| main ()
<br>
| {
<br>
| openpty ();
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:45962: result: no
<br>
configure:45970: checking for gethostbyname in -lnsl
<br>
configure:46000: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c -lnsl   &gt;&amp;5
<br>
/usr/bin/ld: can't locate file for: -lnsl
<br>
collect2: ld returned 1 exit status
<br>
configure:46006: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| /* end confdefs.h.  */
<br>
| 
<br>
| /* Override any gcc2 internal prototype to avoid an error.  */
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot;
<br>
| #endif
<br>
| /* We use char because int might match the return type of a gcc2
<br>
|    builtin and then its argument prototype would still apply.  */
<br>
| char gethostbyname ();
<br>
| int
<br>
| main ()
<br>
| {
<br>
| gethostbyname ();
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:46032: result: no
<br>
configure:46040: checking for socket in -lsocket
<br>
configure:46070: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c -lsocket   &gt;&amp;5
<br>
/usr/bin/ld: can't locate file for: -lsocket
<br>
collect2: ld returned 1 exit status
<br>
configure:46076: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| /* end confdefs.h.  */
<br>
| 
<br>
| /* Override any gcc2 internal prototype to avoid an error.  */
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot;
<br>
| #endif
<br>
| /* We use char because int might match the return type of a gcc2
<br>
|    builtin and then its argument prototype would still apply.  */
<br>
| char socket ();
<br>
| int
<br>
| main ()
<br>
| {
<br>
| socket ();
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:46102: result: no
<br>
configure:46130: checking for asprintf
<br>
configure:46187: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:46193: $? = 0
<br>
configure:46197: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:46200: $? = 0
<br>
configure:46203: test -s conftest
<br>
configure:46206: $? = 0
<br>
configure:46218: result: yes
<br>
configure:46130: checking for snprintf
<br>
configure:46187: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
conftest.c:315: warning: conflicting types for built-in function 'snprintf'
<br>
configure:46193: $? = 0
<br>
configure:46197: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:46200: $? = 0
<br>
configure:46203: test -s conftest
<br>
configure:46206: $? = 0
<br>
configure:46218: result: yes
<br>
configure:46130: checking for vasprintf
<br>
configure:46187: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:46193: $? = 0
<br>
configure:46197: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:46200: $? = 0
<br>
configure:46203: test -s conftest
<br>
configure:46206: $? = 0
<br>
configure:46218: result: yes
<br>
configure:46130: checking for vsnprintf
<br>
configure:46187: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
conftest.c:317: warning: conflicting types for built-in function 'vsnprintf'
<br>
configure:46193: $? = 0
<br>
configure:46197: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:46200: $? = 0
<br>
configure:46203: test -s conftest
<br>
configure:46206: $? = 0
<br>
configure:46218: result: yes
<br>
configure:46130: checking for openpty
<br>
configure:46187: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:46193: $? = 0
<br>
configure:46197: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:46200: $? = 0
<br>
configure:46203: test -s conftest
<br>
configure:46206: $? = 0
<br>
configure:46218: result: yes
<br>
configure:46130: checking for isatty
<br>
configure:46187: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:46193: $? = 0
<br>
configure:46197: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:46200: $? = 0
<br>
configure:46203: test -s conftest
<br>
configure:46206: $? = 0
<br>
configure:46218: result: yes
<br>
configure:46130: checking for htonl
<br>
configure:46187: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:46193: $? = 0
<br>
configure:46197: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:46200: $? = 0
<br>
configure:46203: test -s conftest
<br>
configure:46206: $? = 0
<br>
configure:46218: result: yes
<br>
configure:46130: checking for ntohl
<br>
configure:46187: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:46193: $? = 0
<br>
configure:46197: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:46200: $? = 0
<br>
configure:46203: test -s conftest
<br>
configure:46206: $? = 0
<br>
configure:46218: result: yes
<br>
configure:46130: checking for htons
<br>
configure:46187: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:46193: $? = 0
<br>
configure:46197: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:46200: $? = 0
<br>
configure:46203: test -s conftest
<br>
configure:46206: $? = 0
<br>
configure:46218: result: yes
<br>
configure:46130: checking for ntohs
<br>
configure:46187: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:46193: $? = 0
<br>
configure:46197: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:46200: $? = 0
<br>
configure:46203: test -s conftest
<br>
configure:46206: $? = 0
<br>
configure:46218: result: yes
<br>
configure:46130: checking for getpwuid
<br>
configure:46187: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:46193: $? = 0
<br>
configure:46197: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:46200: $? = 0
<br>
configure:46203: test -s conftest
<br>
configure:46206: $? = 0
<br>
configure:46218: result: yes
<br>
configure:46130: checking for fork
<br>
configure:46187: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
conftest.c:325: warning: conflicting types for built-in function 'fork'
<br>
configure:46193: $? = 0
<br>
configure:46197: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:46200: $? = 0
<br>
configure:46203: test -s conftest
<br>
configure:46206: $? = 0
<br>
configure:46218: result: yes
<br>
configure:46130: checking for waitpid
<br>
configure:46187: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:46193: $? = 0
<br>
configure:46197: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:46200: $? = 0
<br>
configure:46203: test -s conftest
<br>
configure:46206: $? = 0
<br>
configure:46218: result: yes
<br>
configure:46130: checking for execve
<br>
configure:46187: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
conftest.c:327: warning: conflicting types for built-in function 'execve'
<br>
configure:46193: $? = 0
<br>
configure:46197: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:46200: $? = 0
<br>
configure:46203: test -s conftest
<br>
configure:46206: $? = 0
<br>
configure:46218: result: yes
<br>
configure:46130: checking for pipe
<br>
configure:46187: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:46193: $? = 0
<br>
configure:46197: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:46200: $? = 0
<br>
configure:46203: test -s conftest
<br>
configure:46206: $? = 0
<br>
configure:46218: result: yes
<br>
configure:46130: checking for setsid
<br>
configure:46187: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:46193: $? = 0
<br>
configure:46197: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:46200: $? = 0
<br>
configure:46203: test -s conftest
<br>
configure:46206: $? = 0
<br>
configure:46218: result: yes
<br>
configure:46130: checking for mmap
<br>
configure:46187: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:46193: $? = 0
<br>
configure:46197: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:46200: $? = 0
<br>
configure:46203: test -s conftest
<br>
configure:46206: $? = 0
<br>
configure:46218: result: yes
<br>
configure:46231: checking if we need -lexecinfo for backtrace
<br>
configure:46288: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
/usr/bin/ld: Undefined symbols:
<br>
_backtrace
<br>
collect2: ld returned 1 exit status
<br>
configure:46294: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| /* end confdefs.h.  */
<br>
| /* Define backtrace to an innocuous variant, in case &lt;limits.h&gt; declares backtrace.
<br>
|    For example, HP-UX 11i &lt;limits.h&gt; declares gettimeofday.  */
<br>
| #define backtrace innocuous_backtrace
<br>
| 
<br>
| /* System header to define __stub macros and hopefully few prototypes,
<br>
|     which can conflict with char backtrace (); below.
<br>
|     Prefer &lt;limits.h&gt; to &lt;assert.h&gt; if __STDC__ is defined, since
<br>
|     &lt;limits.h&gt; exists even on freestanding compilers.  */
<br>
| 
<br>
| #ifdef __STDC__
<br>
| # include &lt;limits.h&gt;
<br>
| #else
<br>
| # include &lt;assert.h&gt;
<br>
| #endif
<br>
| 
<br>
| #undef backtrace
<br>
| 
<br>
| /* Override any gcc2 internal prototype to avoid an error.  */
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot;
<br>
| {
<br>
| #endif
<br>
| /* We use char because int might match the return type of a gcc2
<br>
|    builtin and then its argument prototype would still apply.  */
<br>
| char backtrace ();
<br>
| /* The GNU C library defines this for functions which it implements
<br>
|     to always fail with ENOSYS.  Some functions are actually named
<br>
|     something starting with __ and the normal name is an alias.  */
<br>
| #if defined (__stub_backtrace) || defined (__stub___backtrace)
<br>
| choke me
<br>
| #else
<br>
| char (*f) () = backtrace;
<br>
| #endif
<br>
| #ifdef __cplusplus
<br>
| }
<br>
| #endif
<br>
| 
<br>
| int
<br>
| main ()
<br>
| {
<br>
| return f != backtrace;
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:46368: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  -lexecinfo &gt;&amp;5
<br>
/usr/bin/ld: can't locate file for: -lexecinfo
<br>
collect2: ld returned 1 exit status
<br>
configure:46374: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| /* end confdefs.h.  */
<br>
| /* Define backtrace to an innocuous variant, in case &lt;limits.h&gt; declares backtrace.
<br>
|    For example, HP-UX 11i &lt;limits.h&gt; declares gettimeofday.  */
<br>
| #define backtrace innocuous_backtrace
<br>
| 
<br>
| /* System header to define __stub macros and hopefully few prototypes,
<br>
|     which can conflict with char backtrace (); below.
<br>
|     Prefer &lt;limits.h&gt; to &lt;assert.h&gt; if __STDC__ is defined, since
<br>
|     &lt;limits.h&gt; exists even on freestanding compilers.  */
<br>
| 
<br>
| #ifdef __STDC__
<br>
| # include &lt;limits.h&gt;
<br>
| #else
<br>
| # include &lt;assert.h&gt;
<br>
| #endif
<br>
| 
<br>
| #undef backtrace
<br>
| 
<br>
| /* Override any gcc2 internal prototype to avoid an error.  */
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot;
<br>
| {
<br>
| #endif
<br>
| /* We use char because int might match the return type of a gcc2
<br>
|    builtin and then its argument prototype would still apply.  */
<br>
| char backtrace ();
<br>
| /* The GNU C library defines this for functions which it implements
<br>
|     to always fail with ENOSYS.  Some functions are actually named
<br>
|     something starting with __ and the normal name is an alias.  */
<br>
| #if defined (__stub_backtrace) || defined (__stub___backtrace)
<br>
| choke me
<br>
| #else
<br>
| char (*f) () = backtrace;
<br>
| #endif
<br>
| #ifdef __cplusplus
<br>
| }
<br>
| #endif
<br>
| 
<br>
| int
<br>
| main ()
<br>
| {
<br>
| return f != backtrace;
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:46403: result: not found
<br>
configure:46417: checking for backtrace
<br>
configure:46474: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
/usr/bin/ld: Undefined symbols:
<br>
_backtrace
<br>
collect2: ld returned 1 exit status
<br>
configure:46480: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| /* end confdefs.h.  */
<br>
| /* Define backtrace to an innocuous variant, in case &lt;limits.h&gt; declares backtrace.
<br>
|    For example, HP-UX 11i &lt;limits.h&gt; declares gettimeofday.  */
<br>
| #define backtrace innocuous_backtrace
<br>
| 
<br>
| /* System header to define __stub macros and hopefully few prototypes,
<br>
|     which can conflict with char backtrace (); below.
<br>
|     Prefer &lt;limits.h&gt; to &lt;assert.h&gt; if __STDC__ is defined, since
<br>
|     &lt;limits.h&gt; exists even on freestanding compilers.  */
<br>
| 
<br>
| #ifdef __STDC__
<br>
| # include &lt;limits.h&gt;
<br>
| #else
<br>
| # include &lt;assert.h&gt;
<br>
| #endif
<br>
| 
<br>
| #undef backtrace
<br>
| 
<br>
| /* Override any gcc2 internal prototype to avoid an error.  */
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot;
<br>
| {
<br>
| #endif
<br>
| /* We use char because int might match the return type of a gcc2
<br>
|    builtin and then its argument prototype would still apply.  */
<br>
| char backtrace ();
<br>
| /* The GNU C library defines this for functions which it implements
<br>
|     to always fail with ENOSYS.  Some functions are actually named
<br>
|     something starting with __ and the normal name is an alias.  */
<br>
| #if defined (__stub_backtrace) || defined (__stub___backtrace)
<br>
| choke me
<br>
| #else
<br>
| char (*f) () = backtrace;
<br>
| #endif
<br>
| #ifdef __cplusplus
<br>
| }
<br>
| #endif
<br>
| 
<br>
| int
<br>
| main ()
<br>
| {
<br>
| return f != backtrace;
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:46505: result: no
<br>
configure:46519: checking if we need -lgen for dirname
<br>
configure:46576: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:46582: $? = 0
<br>
configure:46586: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:46589: $? = 0
<br>
configure:46592: test -s conftest
<br>
configure:46595: $? = 0
<br>
configure:46691: result: no
<br>
configure:46705: checking for dirname
<br>
configure:46762: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:46768: $? = 0
<br>
configure:46772: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:46775: $? = 0
<br>
configure:46778: test -s conftest
<br>
configure:46781: $? = 0
<br>
configure:46793: result: yes
<br>
configure:46807: checking if we need -lm for ceil
<br>
configure:46864: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
conftest.c:332: warning: conflicting types for built-in function 'ceil'
<br>
configure:46870: $? = 0
<br>
configure:46874: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:46877: $? = 0
<br>
configure:46880: test -s conftest
<br>
configure:46883: $? = 0
<br>
configure:46979: result: no
<br>
configure:46993: checking for ceil
<br>
configure:47050: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
conftest.c:332: warning: conflicting types for built-in function 'ceil'
<br>
configure:47056: $? = 0
<br>
configure:47060: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:47063: $? = 0
<br>
configure:47066: test -s conftest
<br>
configure:47069: $? = 0
<br>
configure:47081: result: yes
<br>
configure:47115: checking for asprintf
<br>
configure:47203: result: yes
<br>
configure:47115: checking for snprintf
<br>
configure:47203: result: yes
<br>
configure:47115: checking for vasprintf
<br>
configure:47203: result: yes
<br>
configure:47115: checking for vsnprintf
<br>
configure:47203: result: yes
<br>
configure:47115: checking for openpty
<br>
configure:47203: result: yes
<br>
configure:47115: checking for isatty
<br>
configure:47203: result: yes
<br>
configure:47115: checking for htonl
<br>
configure:47203: result: yes
<br>
configure:47115: checking for ntohl
<br>
configure:47203: result: yes
<br>
configure:47115: checking for htons
<br>
configure:47203: result: yes
<br>
configure:47115: checking for ntohs
<br>
configure:47203: result: yes
<br>
configure:47115: checking for getpwuid
<br>
configure:47203: result: yes
<br>
configure:47115: checking for fork
<br>
configure:47203: result: yes
<br>
configure:47115: checking for waitpid
<br>
configure:47203: result: yes
<br>
configure:47115: checking for execve
<br>
configure:47203: result: yes
<br>
configure:47115: checking for pipe
<br>
configure:47203: result: yes
<br>
configure:47115: checking for ptsname
<br>
configure:47172: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:47178: $? = 0
<br>
configure:47182: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:47185: $? = 0
<br>
configure:47188: test -s conftest
<br>
configure:47191: $? = 0
<br>
configure:47203: result: yes
<br>
configure:47115: checking for setsid
<br>
configure:47203: result: yes
<br>
configure:47115: checking for mmap
<br>
configure:47203: result: yes
<br>
configure:47115: checking for mallopt
<br>
configure:47172: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
/usr/bin/ld: Undefined symbols:
<br>
_mallopt
<br>
collect2: ld returned 1 exit status
<br>
configure:47178: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| /* end confdefs.h.  */
<br>
| /* Define mallopt to an innocuous variant, in case &lt;limits.h&gt; declares mallopt.
<br>
|    For example, HP-UX 11i &lt;limits.h&gt; declares gettimeofday.  */
<br>
| #define mallopt innocuous_mallopt
<br>
| 
<br>
| /* System header to define __stub macros and hopefully few prototypes,
<br>
|     which can conflict with char mallopt (); below.
<br>
|     Prefer &lt;limits.h&gt; to &lt;assert.h&gt; if __STDC__ is defined, since
<br>
|     &lt;limits.h&gt; exists even on freestanding compilers.  */
<br>
| 
<br>
| #ifdef __STDC__
<br>
| # include &lt;limits.h&gt;
<br>
| #else
<br>
| # include &lt;assert.h&gt;
<br>
| #endif
<br>
| 
<br>
| #undef mallopt
<br>
| 
<br>
| /* Override any gcc2 internal prototype to avoid an error.  */
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot;
<br>
| {
<br>
| #endif
<br>
| /* We use char because int might match the return type of a gcc2
<br>
|    builtin and then its argument prototype would still apply.  */
<br>
| char mallopt ();
<br>
| /* The GNU C library defines this for functions which it implements
<br>
|     to always fail with ENOSYS.  Some functions are actually named
<br>
|     something starting with __ and the normal name is an alias.  */
<br>
| #if defined (__stub_mallopt) || defined (__stub___mallopt)
<br>
| choke me
<br>
| #else
<br>
| char (*f) () = mallopt;
<br>
| #endif
<br>
| #ifdef __cplusplus
<br>
| }
<br>
| #endif
<br>
| 
<br>
| int
<br>
| main ()
<br>
| {
<br>
| return f != mallopt;
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:47203: result: no
<br>
configure:47218: checking whether va_copy is declared
<br>
configure:47243: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:47249: $? = 0
<br>
configure:47253: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:47256: $? = 0
<br>
configure:47259: test -s conftest.o
<br>
configure:47262: $? = 0
<br>
configure:47273: result: yes
<br>
configure:47287: checking whether __va_copy is declared
<br>
configure:47312: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:47318: $? = 0
<br>
configure:47322: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:47325: $? = 0
<br>
configure:47328: test -s conftest.o
<br>
configure:47331: $? = 0
<br>
configure:47342: result: yes
<br>
configure:47356: checking whether __func__ is declared
<br>
configure:47380: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:47386: $? = 0
<br>
configure:47390: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:47393: $? = 0
<br>
configure:47396: test -s conftest.o
<br>
configure:47399: $? = 0
<br>
configure:47410: result: yes
<br>
configure:47432: checking if we need -lrt for sched_yield
<br>
configure:47489: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:47495: $? = 0
<br>
configure:47499: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:47502: $? = 0
<br>
configure:47505: test -s conftest
<br>
configure:47508: $? = 0
<br>
configure:47604: result: no
<br>
configure:47618: checking for sched_yield
<br>
configure:47675: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c  &gt;&amp;5
<br>
configure:47681: $? = 0
<br>
configure:47685: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:47688: $? = 0
<br>
configure:47691: test -s conftest
<br>
configure:47694: $? = 0
<br>
configure:47706: result: yes
<br>
configure:47720: checking if we need -lexecinfo for backtrace
<br>
configure:47892: result: not found
<br>
configure:47906: checking for backtrace
<br>
configure:47994: result: no
<br>
configure:48008: checking if we need -lgen for dirname
<br>
configure:48180: result: no
<br>
configure:48194: checking for dirname
<br>
configure:48282: result: yes
<br>
configure:48299: checking for ceil in -lm
<br>
configure:48329: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   conftest.c -lm   &gt;&amp;5
<br>
conftest.c:339: warning: conflicting types for built-in function 'ceil'
<br>
configure:48335: $? = 0
<br>
configure:48339: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:48342: $? = 0
<br>
configure:48345: test -s conftest
<br>
configure:48348: $? = 0
<br>
configure:48361: result: yes
<br>
configure:48443: checking checking for type of MPI_Offset
<br>
configure:48470: result: long long
<br>
configure:48489: checking checking for an MPI datatype for MPI_Offset
<br>
configure:48491: result: MPI_LONG_LONG
<br>
configure:48508: checking whether byte ordering is bigendian
<br>
configure:48535: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:48541: $? = 0
<br>
configure:48545: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:48548: $? = 0
<br>
configure:48551: test -s conftest.o
<br>
configure:48554: $? = 0
<br>
configure:48578: gcc -c -O3 -DNDEBUG -fno-strict-aliasing  conftest.c &gt;&amp;5
<br>
configure:48584: $? = 0
<br>
configure:48588: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:48591: $? = 0
<br>
configure:48594: test -s conftest.o
<br>
configure:48597: $? = 0
<br>
configure:48719: result: yes
<br>
configure:48740: checking for broken qsort
<br>
configure:48756: result: no
<br>
configure:48835: checking if C compiler and POSIX threads work as is
<br>
configure:48898: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing  -D_REENTRANT  conftest.c -lm  &gt;&amp;5
<br>
configure:48904: $? = 0
<br>
configure:48908: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:48911: $? = 0
<br>
configure:48914: test -s conftest
<br>
configure:48917: $? = 0
<br>
configure:48937: result: yes
<br>
configure:48954: checking if C++ compiler and POSIX threads work as is
<br>
configure:49017: g++ -o conftest -O3 -DNDEBUG -finline-functions  -D_REENTRANT  conftest.cc -lm  &gt;&amp;5
<br>
configure:49023: $? = 0
<br>
configure:49027: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:49030: $? = 0
<br>
configure:49033: test -s conftest
<br>
configure:49036: $? = 0
<br>
configure:49056: result: yes
<br>
configure:49073: checking if F77 compiler and POSIX threads work as is
<br>
configure:49166: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:49173: $? = 0
<br>
configure:49183: gfortran  conftestf.f conftest.o -o conftest  -lm 
<br>
configure:49190: $? = 0
<br>
configure:49261: result: yes
<br>
configure:50426: checking for working POSIX threads package
<br>
configure:50429: result: yes
<br>
configure:50468: checking if C compiler and Solaris threads work
<br>
configure:50503: gcc -o conftest  -DNDEBUG  -D_REENTRANT    conftest.c -lthread  &gt;&amp;5
<br>
conftest.c:337:20: error: thread.h: No such file or directory
<br>
conftest.c: In function 'main':
<br>
conftest.c:341: error: 'thread_t' undeclared (first use in this function)
<br>
conftest.c:341: error: (Each undeclared identifier is reported only once
<br>
conftest.c:341: error: for each function it appears in.)
<br>
conftest.c:341: error: parse error before 'th'
<br>
conftest.c:341: error: 'th' undeclared (first use in this function)
<br>
configure:50509: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_LIBM 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;thread.h&gt;
<br>
| int
<br>
| main ()
<br>
| {
<br>
| thread_t th; thr_join(th, 0, 0);
<br>
|                  thr_create(0,0,0,0,0,0);
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:50545: result: no
<br>
configure:50566: checking if C++ compiler and Solaris threads work
<br>
configure:50597: g++ -o conftest  -DNDEBUG  -D_REENTRANT    conftest.cc -lthread  &gt;&amp;5
<br>
conftest.cc:337:20: error: thread.h: No such file or directory
<br>
conftest.cc: In function 'int main()':
<br>
conftest.cc:341: error: 'thread_t' was not declared in this scope
<br>
conftest.cc:341: error: expected `;' before 'th'
<br>
conftest.cc:341: error: 'th' was not declared in this scope
<br>
conftest.cc:341: error: 'thr_join' was not declared in this scope
<br>
conftest.cc:342: error: 'thr_create' was not declared in this scope
<br>
configure:50603: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_LIBM 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;thread.h&gt;
<br>
| int
<br>
| main ()
<br>
| {
<br>
| thread_t th; thr_join(th, 0, 0);
<br>
|                  thr_create(0,0,0,0,0,0);
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:50639: result: no
<br>
configure:50658: checking if F77 compiler and Solaris threads work
<br>
configure:50714: gcc  -DNDEBUG  -I. -c conftest.c
<br>
conftest.c:3:20: error: thread.h: No such file or directory
<br>
conftest.c: In function 'ompi_pthread':
<br>
conftest.c:11: error: 'thread_t' undeclared (first use in this function)
<br>
conftest.c:11: error: (Each undeclared identifier is reported only once
<br>
conftest.c:11: error: for each function it appears in.)
<br>
conftest.c:11: error: parse error before 'th'
<br>
conftest.c:12: error: 'th' undeclared (first use in this function)
<br>
configure:50721: $? = 1
<br>
configure:50761: here is the C program:
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;thread.h&gt;
<br>
<p><p>#ifdef __cplusplus
<br>
extern &quot;C&quot; {
<br>
#endif
<br>
void ompi_pthread()
<br>
{
<br>
&nbsp;&nbsp;thread_t th;
<br>
&nbsp;&nbsp;thr_join(th, 0, 0);
<br>
&nbsp;&nbsp;thr_create(0,0,0,0,0,0);
<br>
}
<br>
#ifdef __cplusplus
<br>
}
<br>
#endif
<br>
configure:50789: here is the fortran program:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program fpthread
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INTEGER i
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i = 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end
<br>
configure:50812: result: no
<br>
configure:50841: checking for working Solaris threads package
<br>
configure:50847: result: no
<br>
configure:50855: checking for type of thread support
<br>
configure:50920: result: posix
<br>
configure:50984: checking if threads have different pids (pthreads on linux)
<br>
configure:51035: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing  -D_REENTRANT   conftest.c -lm   &gt;&amp;5
<br>
configure:51038: $? = 0
<br>
configure:51040: ./conftest
<br>
configure:51043: $? = 0
<br>
configure:51061: result: no
<br>
configure:51141: checking if want MPI thread support
<br>
configure:51171: result: no
<br>
configure:51175: checking if want asynchronous progress thread support
<br>
configure:51206: result: no
<br>
configure:51227: checking whether ln -s works
<br>
configure:51231: result: yes
<br>
configure:51253: checking for flex
<br>
configure:51269: found /usr/bin/flex
<br>
configure:51279: result: flex
<br>
configure:51292: checking for yywrap in -lfl
<br>
configure:51322: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT   conftest.c -lfl  -lm   &gt;&amp;5
<br>
configure:51328: $? = 0
<br>
configure:51332: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:51335: $? = 0
<br>
configure:51338: test -s conftest
<br>
configure:51341: $? = 0
<br>
configure:51354: result: yes
<br>
configure:51432: checking lex output file root
<br>
configure:51443: flex conftest.l
<br>
configure:51446: $? = 0
<br>
configure:51458: result: lex.yy
<br>
configure:51463: checking whether yytext is a pointer
<br>
configure:51479: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT   conftest.c -lm   -lfl &gt;&amp;5
<br>
configure:51485: $? = 0
<br>
configure:51489: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:51492: $? = 0
<br>
configure:51495: test -s conftest
<br>
configure:51498: $? = 0
<br>
configure:51512: result: yes
<br>
configure:51587: checking if build filesystem is case sensitive
<br>
configure:51603: result: no
<br>
configure:51612: checking if configuring for case sensitive filesystem
<br>
configure:51633: result: no
<br>
configure:51737: checking for subdir args
<br>
configure:51791: result:  '--prefix=/usr/local/openmpi/stable'
<br>
configure:51844: checking for gcc
<br>
configure:51860: found /usr/bin/gcc
<br>
configure:51870: result: gcc
<br>
configure:51887: checking dependency style of gcc
<br>
configure:51977: result: gcc3
<br>
configure:52026: checking which components should be disabled
<br>
configure:52057: result: 
<br>
configure:52066: checking which components should be direct-linked into the library
<br>
configure:52111: result: 
<br>
configure:52119: checking which components should be run-time loadable
<br>
configure:52142: result: all
<br>
configure:52152: checking which components should be static
<br>
configure:52172: result: none
<br>
configure:52176: checking for projects containing MCA frameworks
<br>
configure:52178: result: opal, orte, ompi
<br>
configure:52194: checking for frameworks for opal
<br>
configure:52196: result: maffinity, memory, paffinity, timer
<br>
configure:52304: checking for no configure components in framework maffinity
<br>
configure:52306: result: first_use
<br>
configure:52308: checking for m4 configure components in framework maffinity
<br>
configure:52310: result: libnuma
<br>
configure:52424: checking for MCA component maffinity:first_use compile mode
<br>
configure:52430: result: dso
<br>
configure:52461: checking if MCA component maffinity:first_use can compile
<br>
configure:52463: result: yes
<br>
configure:52775: checking for MCA component maffinity:libnuma compile mode
<br>
configure:52781: result: dso
<br>
configure:52998: checking numa.h usability
<br>
configure:53010: gcc -c -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT conftest.c &gt;&amp;5
<br>
conftest.c:377:18: error: numa.h: No such file or directory
<br>
configure:53016: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_LIBM 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;numa.h&gt;
<br>
configure:53039: result: no
<br>
configure:53043: checking numa.h presence
<br>
configure:53053: gcc -E  -D_REENTRANT conftest.c
<br>
conftest.c:343:18: error: numa.h: No such file or directory
<br>
configure:53059: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_LIBM 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;numa.h&gt;
<br>
configure:53079: result: no
<br>
configure:53114: checking for numa.h
<br>
configure:53121: result: no
<br>
configure:53928: checking if MCA component maffinity:libnuma can compile
<br>
configure:53930: result: no
<br>
configure:54597: checking for no configure components in framework memory
<br>
configure:54599: result: 
<br>
configure:54601: checking for m4 configure components in framework memory
<br>
configure:54603: result: darwin, malloc_hooks, ptmalloc2, malloc_interpose
<br>
configure:54692: checking for MCA component memory:darwin compile mode
<br>
configure:54695: result: static
<br>
configure:54736: checking malloc/malloc.h usability
<br>
configure:54748: gcc -c -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT conftest.c &gt;&amp;5
<br>
configure:54754: $? = 0
<br>
configure:54758: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:54761: $? = 0
<br>
configure:54764: test -s conftest.o
<br>
configure:54767: $? = 0
<br>
configure:54777: result: yes
<br>
configure:54781: checking malloc/malloc.h presence
<br>
configure:54791: gcc -E  -D_REENTRANT conftest.c
<br>
configure:54797: $? = 0
<br>
configure:54817: result: yes
<br>
configure:54852: checking for malloc/malloc.h
<br>
configure:54859: result: yes
<br>
configure:54875: checking for malloc_default_zone
<br>
configure:54932: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT   conftest.c -lm   &gt;&amp;5
<br>
configure:54938: $? = 0
<br>
configure:54942: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:54945: $? = 0
<br>
configure:54948: test -s conftest
<br>
configure:54951: $? = 0
<br>
configure:54963: result: yes
<br>
configure:54977: checking for dlsym
<br>
configure:55034: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT   conftest.c -lm   &gt;&amp;5
<br>
configure:55040: $? = 0
<br>
configure:55044: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:55047: $? = 0
<br>
configure:55050: test -s conftest
<br>
configure:55053: $? = 0
<br>
configure:55065: result: yes
<br>
configure:55121: checking if MCA component memory:darwin can compile
<br>
configure:55123: result: yes
<br>
configure:55403: checking for MCA component memory:malloc_hooks compile mode
<br>
configure:55406: result: static
<br>
configure:56045: checking if MCA component memory:malloc_hooks can compile
<br>
configure:56047: result: no
<br>
configure:56173: checking for MCA component memory:ptmalloc2 compile mode
<br>
configure:56176: result: static
<br>
configure:56462: checking if MCA component memory:ptmalloc2 can compile
<br>
configure:56464: result: no
<br>
configure:56590: checking for MCA component memory:malloc_interpose compile mode
<br>
configure:56593: result: static
<br>
configure:57153: checking if MCA component memory:malloc_interpose can compile
<br>
configure:57155: result: no
<br>
configure:57822: checking for no configure components in framework paffinity
<br>
configure:57824: result: 
<br>
configure:57826: checking for m4 configure components in framework paffinity
<br>
configure:57828: result: linux, solaris
<br>
configure:57950: checking for MCA component paffinity:linux compile mode
<br>
configure:57956: result: dso
<br>
configure:57967: checking for sched_setaffinity
<br>
configure:58024: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT   conftest.c -lm   &gt;&amp;5
<br>
/usr/bin/ld: Undefined symbols:
<br>
_sched_setaffinity
<br>
collect2: ld returned 1 exit status
<br>
configure:58030: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_LIBM 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| /* end confdefs.h.  */
<br>
| /* Define sched_setaffinity to an innocuous variant, in case &lt;limits.h&gt; declares sched_setaffinity.
<br>
|    For example, HP-UX 11i &lt;limits.h&gt; declares gettimeofday.  */
<br>
| #define sched_setaffinity innocuous_sched_setaffinity
<br>
| 
<br>
| /* System header to define __stub macros and hopefully few prototypes,
<br>
|     which can conflict with char sched_setaffinity (); below.
<br>
|     Prefer &lt;limits.h&gt; to &lt;assert.h&gt; if __STDC__ is defined, since
<br>
|     &lt;limits.h&gt; exists even on freestanding compilers.  */
<br>
| 
<br>
| #ifdef __STDC__
<br>
| # include &lt;limits.h&gt;
<br>
| #else
<br>
| # include &lt;assert.h&gt;
<br>
| #endif
<br>
| 
<br>
| #undef sched_setaffinity
<br>
| 
<br>
| /* Override any gcc2 internal prototype to avoid an error.  */
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot;
<br>
| {
<br>
| #endif
<br>
| /* We use char because int might match the return type of a gcc2
<br>
|    builtin and then its argument prototype would still apply.  */
<br>
| char sched_setaffinity ();
<br>
| /* The GNU C library defines this for functions which it implements
<br>
|     to always fail with ENOSYS.  Some functions are actually named
<br>
|     something starting with __ and the normal name is an alias.  */
<br>
| #if defined (__stub_sched_setaffinity) || defined (__stub___sched_setaffinity)
<br>
| choke me
<br>
| #else
<br>
| char (*f) () = sched_setaffinity;
<br>
| #endif
<br>
| #ifdef __cplusplus
<br>
| }
<br>
| #endif
<br>
| 
<br>
| int
<br>
| main ()
<br>
| {
<br>
| return f != sched_setaffinity;
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:58055: result: no
<br>
configure:58071: checking for cpu_set_t
<br>
configure:58096: gcc -c -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT conftest.c &gt;&amp;5
<br>
conftest.c: In function 'main':
<br>
conftest.c:348: error: 'cpu_set_t' undeclared (first use in this function)
<br>
conftest.c:348: error: (Each undeclared identifier is reported only once
<br>
conftest.c:348: error: for each function it appears in.)
<br>
conftest.c:348: error: parse error before ')' token
<br>
configure:58102: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_LIBM 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;sched.h&gt;
<br>
| 
<br>
| int
<br>
| main ()
<br>
| {
<br>
| if ((cpu_set_t *) 0)
<br>
|   return 0;
<br>
| if (sizeof (cpu_set_t))
<br>
|   return 0;
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:58126: result: no
<br>
configure:58452: checking if MCA component paffinity:linux can compile
<br>
configure:58454: result: no
<br>
configure:58613: checking for MCA component paffinity:solaris compile mode
<br>
configure:58619: result: dso
<br>
configure:58629: checking for processor_bind
<br>
configure:58686: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT   conftest.c -lm   &gt;&amp;5
<br>
/usr/bin/ld: Undefined symbols:
<br>
_processor_bind
<br>
collect2: ld returned 1 exit status
<br>
configure:58692: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_LIBM 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| /* end confdefs.h.  */
<br>
| /* Define processor_bind to an innocuous variant, in case &lt;limits.h&gt; declares processor_bind.
<br>
|    For example, HP-UX 11i &lt;limits.h&gt; declares gettimeofday.  */
<br>
| #define processor_bind innocuous_processor_bind
<br>
| 
<br>
| /* System header to define __stub macros and hopefully few prototypes,
<br>
|     which can conflict with char processor_bind (); below.
<br>
|     Prefer &lt;limits.h&gt; to &lt;assert.h&gt; if __STDC__ is defined, since
<br>
|     &lt;limits.h&gt; exists even on freestanding compilers.  */
<br>
| 
<br>
| #ifdef __STDC__
<br>
| # include &lt;limits.h&gt;
<br>
| #else
<br>
| # include &lt;assert.h&gt;
<br>
| #endif
<br>
| 
<br>
| #undef processor_bind
<br>
| 
<br>
| /* Override any gcc2 internal prototype to avoid an error.  */
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot;
<br>
| {
<br>
| #endif
<br>
| /* We use char because int might match the return type of a gcc2
<br>
|    builtin and then its argument prototype would still apply.  */
<br>
| char processor_bind ();
<br>
| /* The GNU C library defines this for functions which it implements
<br>
|     to always fail with ENOSYS.  Some functions are actually named
<br>
|     something starting with __ and the normal name is an alias.  */
<br>
| #if defined (__stub_processor_bind) || defined (__stub___processor_bind)
<br>
| choke me
<br>
| #else
<br>
| char (*f) () = processor_bind;
<br>
| #endif
<br>
| #ifdef __cplusplus
<br>
| }
<br>
| #endif
<br>
| 
<br>
| int
<br>
| main ()
<br>
| {
<br>
| return f != processor_bind;
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:58717: result: no
<br>
configure:58909: checking if MCA component paffinity:solaris can compile
<br>
configure:58911: result: no
<br>
configure:59582: checking for no configure components in framework timer
<br>
configure:59584: result: 
<br>
configure:59586: checking for m4 configure components in framework timer
<br>
configure:59588: result: aix, altix, darwin, solaris, linux
<br>
configure:59677: checking for MCA component timer:aix compile mode
<br>
configure:59680: result: static
<br>
configure:59710: checking for time_base_to_time
<br>
configure:59767: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT   conftest.c -lm   &gt;&amp;5
<br>
/usr/bin/ld: Undefined symbols:
<br>
_time_base_to_time
<br>
collect2: ld returned 1 exit status
<br>
configure:59773: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_LIBM 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| /* end confdefs.h.  */
<br>
| /* Define time_base_to_time to an innocuous variant, in case &lt;limits.h&gt; declares time_base_to_time.
<br>
|    For example, HP-UX 11i &lt;limits.h&gt; declares gettimeofday.  */
<br>
| #define time_base_to_time innocuous_time_base_to_time
<br>
| 
<br>
| /* System header to define __stub macros and hopefully few prototypes,
<br>
|     which can conflict with char time_base_to_time (); below.
<br>
|     Prefer &lt;limits.h&gt; to &lt;assert.h&gt; if __STDC__ is defined, since
<br>
|     &lt;limits.h&gt; exists even on freestanding compilers.  */
<br>
| 
<br>
| #ifdef __STDC__
<br>
| # include &lt;limits.h&gt;
<br>
| #else
<br>
| # include &lt;assert.h&gt;
<br>
| #endif
<br>
| 
<br>
| #undef time_base_to_time
<br>
| 
<br>
| /* Override any gcc2 internal prototype to avoid an error.  */
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot;
<br>
| {
<br>
| #endif
<br>
| /* We use char because int might match the return type of a gcc2
<br>
|    builtin and then its argument prototype would still apply.  */
<br>
| char time_base_to_time ();
<br>
| /* The GNU C library defines this for functions which it implements
<br>
|     to always fail with ENOSYS.  Some functions are actually named
<br>
|     something starting with __ and the normal name is an alias.  */
<br>
| #if defined (__stub_time_base_to_time) || defined (__stub___time_base_to_time)
<br>
| choke me
<br>
| #else
<br>
| char (*f) () = time_base_to_time;
<br>
| #endif
<br>
| #ifdef __cplusplus
<br>
| }
<br>
| #endif
<br>
| 
<br>
| int
<br>
| main ()
<br>
| {
<br>
| return f != time_base_to_time;
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:59798: result: no
<br>
configure:60347: checking if MCA component timer:aix can compile
<br>
configure:60349: result: no
<br>
configure:60475: checking for MCA component timer:altix compile mode
<br>
configure:60478: result: static
<br>
configure:60518: checking sn/mmtimer.h usability
<br>
configure:60530: gcc -c -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT conftest.c &gt;&amp;5
<br>
conftest.c:377:24: error: sn/mmtimer.h: No such file or directory
<br>
configure:60536: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_LIBM 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;sn/mmtimer.h&gt;
<br>
configure:60559: result: no
<br>
configure:60563: checking sn/mmtimer.h presence
<br>
configure:60573: gcc -E  -D_REENTRANT conftest.c
<br>
conftest.c:343:24: error: sn/mmtimer.h: No such file or directory
<br>
configure:60579: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_LIBM 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;sn/mmtimer.h&gt;
<br>
configure:60599: result: no
<br>
configure:60634: checking for sn/mmtimer.h
<br>
configure:60641: result: no
<br>
configure:61082: checking if MCA component timer:altix can compile
<br>
configure:61084: result: no
<br>
configure:61210: checking for MCA component timer:darwin compile mode
<br>
configure:61213: result: static
<br>
configure:61257: checking mach/mach_time.h usability
<br>
configure:61269: gcc -c -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT conftest.c &gt;&amp;5
<br>
configure:61275: $? = 0
<br>
configure:61279: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:61282: $? = 0
<br>
configure:61285: test -s conftest.o
<br>
configure:61288: $? = 0
<br>
configure:61298: result: yes
<br>
configure:61302: checking mach/mach_time.h presence
<br>
configure:61312: gcc -E  -D_REENTRANT conftest.c
<br>
configure:61318: $? = 0
<br>
configure:61338: result: yes
<br>
configure:61373: checking for mach/mach_time.h
<br>
configure:61380: result: yes
<br>
configure:61393: checking for mach_absolute_time
<br>
configure:61450: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT   conftest.c -lm   &gt;&amp;5
<br>
configure:61456: $? = 0
<br>
configure:61460: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:61463: $? = 0
<br>
configure:61466: test -s conftest
<br>
configure:61469: $? = 0
<br>
configure:61481: result: yes
<br>
configure:61537: checking if MCA component timer:darwin can compile
<br>
configure:61539: result: yes
<br>
configure:61819: checking for MCA component timer:solaris compile mode
<br>
configure:61822: result: static
<br>
configure:62150: checking if MCA component timer:solaris can compile
<br>
configure:62152: result: no
<br>
configure:62278: checking for MCA component timer:linux compile mode
<br>
configure:62281: result: static
<br>
configure:62519: checking if MCA component timer:linux can compile
<br>
configure:62521: result: no
<br>
configure:63120: checking for frameworks for orte
<br>
configure:63122: result: errmgr, gpr, iof, ns, oob, pls, ras, rds, rmaps, rmgr, rml, schema, sds, soh
<br>
configure:63230: checking for no configure components in framework errmgr
<br>
configure:63232: result: 
<br>
configure:63234: checking for m4 configure components in framework errmgr
<br>
configure:63236: result: 
<br>
configure:63866: checking for no configure components in framework gpr
<br>
configure:63868: result: null, proxy, replica
<br>
configure:63870: checking for m4 configure components in framework gpr
<br>
configure:63872: result: 
<br>
configure:63986: checking for MCA component gpr:null compile mode
<br>
configure:63992: result: dso
<br>
configure:64023: checking if MCA component gpr:null can compile
<br>
configure:64025: result: yes
<br>
configure:64329: checking for MCA component gpr:proxy compile mode
<br>
configure:64335: result: dso
<br>
configure:64366: checking if MCA component gpr:proxy can compile
<br>
configure:64368: result: yes
<br>
configure:64672: checking for MCA component gpr:replica compile mode
<br>
configure:64678: result: dso
<br>
configure:64709: checking if MCA component gpr:replica can compile
<br>
configure:64711: result: yes
<br>
configure:65531: checking for no configure components in framework iof
<br>
configure:65533: result: proxy, svc
<br>
configure:65535: checking for m4 configure components in framework iof
<br>
configure:65537: result: 
<br>
configure:65651: checking for MCA component iof:proxy compile mode
<br>
configure:65657: result: dso
<br>
configure:65688: checking if MCA component iof:proxy can compile
<br>
configure:65690: result: yes
<br>
configure:65994: checking for MCA component iof:svc compile mode
<br>
configure:66000: result: dso
<br>
configure:66031: checking if MCA component iof:svc can compile
<br>
configure:66033: result: yes
<br>
configure:66853: checking for no configure components in framework ns
<br>
configure:66855: result: proxy, replica
<br>
configure:66857: checking for m4 configure components in framework ns
<br>
configure:66859: result: 
<br>
configure:66973: checking for MCA component ns:proxy compile mode
<br>
configure:66979: result: dso
<br>
configure:67010: checking if MCA component ns:proxy can compile
<br>
configure:67012: result: yes
<br>
configure:67316: checking for MCA component ns:replica compile mode
<br>
configure:67322: result: dso
<br>
configure:67353: checking if MCA component ns:replica can compile
<br>
configure:67355: result: yes
<br>
configure:68175: checking for no configure components in framework oob
<br>
configure:68177: result: 
<br>
configure:68179: checking for m4 configure components in framework oob
<br>
configure:68181: result: tcp
<br>
configure:68303: checking for MCA component oob:tcp compile mode
<br>
configure:68309: result: dso
<br>
configure:68319: checking for struct sockaddr_in
<br>
configure:68377: result: yes
<br>
configure:68420: checking if MCA component oob:tcp can compile
<br>
configure:68422: result: yes
<br>
configure:69243: checking for no configure components in framework pls
<br>
configure:69245: result: daemon, proxy
<br>
configure:69247: checking for m4 configure components in framework pls
<br>
configure:69249: result: bproc, bproc_orted, fork, poe, rsh, slurm, tm, xgrid
<br>
configure:69363: checking for MCA component pls:daemon compile mode
<br>
configure:69369: result: dso
<br>
configure:69400: checking if MCA component pls:daemon can compile
<br>
configure:69402: result: yes
<br>
configure:69706: checking for MCA component pls:proxy compile mode
<br>
configure:69712: result: dso
<br>
configure:69743: checking if MCA component pls:proxy can compile
<br>
configure:69745: result: yes
<br>
configure:70057: checking for MCA component pls:bproc compile mode
<br>
configure:70063: result: dso
<br>
configure:70107: checking sys/bproc.h usability
<br>
configure:70119: gcc -c -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT conftest.c &gt;&amp;5
<br>
conftest.c:379:23: error: sys/bproc.h: No such file or directory
<br>
configure:70125: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_LIBM 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;sys/bproc.h&gt;
<br>
configure:70148: result: no
<br>
configure:70152: checking sys/bproc.h presence
<br>
configure:70162: gcc -E  -D_REENTRANT conftest.c
<br>
conftest.c:345:23: error: sys/bproc.h: No such file or directory
<br>
configure:70168: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_LIBM 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;sys/bproc.h&gt;
<br>
configure:70188: result: no
<br>
configure:70223: checking for sys/bproc.h
<br>
configure:70230: result: no
<br>
configure:70625: checking if MCA component pls:bproc can compile
<br>
configure:70627: result: no
<br>
configure:70786: checking for MCA component pls:bproc_orted compile mode
<br>
configure:70792: result: dso
<br>
configure:70827: checking for sys/bproc.h
<br>
configure:70832: result: no
<br>
configure:71346: checking if MCA component pls:bproc_orted can compile
<br>
configure:71348: result: no
<br>
configure:71507: checking for MCA component pls:fork compile mode
<br>
configure:71513: result: dso
<br>
configure:71522: checking for fork
<br>
configure:71610: result: yes
<br>
configure:71648: checking if MCA component pls:fork can compile
<br>
configure:71650: result: yes
<br>
configure:71963: checking for MCA component pls:poe compile mode
<br>
configure:71969: result: dso
<br>
configure:71981: checking if on AIX
<br>
configure:71991: result: no
<br>
configure:72183: checking if MCA component pls:poe can compile
<br>
configure:72185: result: no
<br>
configure:72344: checking for MCA component pls:rsh compile mode
<br>
configure:72350: result: dso
<br>
configure:72359: checking for fork
<br>
configure:72447: result: yes
<br>
configure:72485: checking if MCA component pls:rsh can compile
<br>
configure:72487: result: yes
<br>
configure:72800: checking for MCA component pls:slurm compile mode
<br>
configure:72806: result: dso
<br>
configure:72830: checking for fork
<br>
configure:72918: result: yes
<br>
configure:72930: checking for execve
<br>
configure:73018: result: yes
<br>
configure:73030: checking for setpgid
<br>
configure:73087: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT   conftest.c -lm   &gt;&amp;5
<br>
configure:73093: $? = 0
<br>
configure:73097: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:73100: $? = 0
<br>
configure:73103: test -s conftest
<br>
configure:73106: $? = 0
<br>
configure:73118: result: yes
<br>
configure:73182: checking if MCA component pls:slurm can compile
<br>
configure:73184: result: yes
<br>
configure:73497: checking for MCA component pls:tm compile mode
<br>
configure:73503: result: dso
<br>
configure:73727: checking tm.h usability
<br>
configure:73739: gcc -c -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT conftest.c &gt;&amp;5
<br>
conftest.c:379:16: error: tm.h: No such file or directory
<br>
configure:73745: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_LIBM 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;tm.h&gt;
<br>
configure:73768: result: no
<br>
configure:73772: checking tm.h presence
<br>
configure:73782: gcc -E  -D_REENTRANT conftest.c
<br>
conftest.c:345:16: error: tm.h: No such file or directory
<br>
configure:73788: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_LIBM 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;tm.h&gt;
<br>
configure:73808: result: no
<br>
configure:73843: checking for tm.h
<br>
configure:73850: result: no
<br>
configure:74662: checking if MCA component pls:tm can compile
<br>
configure:74664: result: no
<br>
configure:74823: checking for MCA component pls:xgrid compile mode
<br>
configure:74829: result: dso
<br>
configure:74848: checking for XGridFoundation Framework
<br>
configure:74887: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing  -framework XGridFoundation  -D_REENTRANT   conftest.c -lm   &gt;&amp;5
<br>
configure:74893: $? = 0
<br>
configure:74897: test -z 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| test ! -s conftest.err
<br>
configure:74900: $? = 0
<br>
configure:74903: test -s conftest
<br>
configure:74906: $? = 0
<br>
configure:74932: result: yes
<br>
configure:74997: checking if MCA component pls:xgrid can compile
<br>
configure:74999: result: yes
<br>
configure:75820: checking for no configure components in framework ras
<br>
configure:75822: result: dash_host, hostfile, localhost
<br>
configure:75824: checking for m4 configure components in framework ras
<br>
configure:75826: result: bjs, lsf_bproc, slurm, tm, xgrid
<br>
configure:75940: checking for MCA component ras:dash_host compile mode
<br>
configure:75946: result: dso
<br>
configure:75977: checking if MCA component ras:dash_host can compile
<br>
configure:75979: result: yes
<br>
configure:76283: checking for MCA component ras:hostfile compile mode
<br>
configure:76289: result: dso
<br>
configure:76320: checking if MCA component ras:hostfile can compile
<br>
configure:76322: result: yes
<br>
configure:76626: checking for MCA component ras:localhost compile mode
<br>
configure:76632: result: dso
<br>
configure:76663: checking if MCA component ras:localhost can compile
<br>
configure:76665: result: yes
<br>
configure:76977: checking for MCA component ras:bjs compile mode
<br>
configure:76983: result: dso
<br>
configure:77018: checking for sys/bproc.h
<br>
configure:77023: result: no
<br>
configure:77537: checking if MCA component ras:bjs can compile
<br>
configure:77539: result: no
<br>
configure:77698: checking for MCA component ras:lsf_bproc compile mode
<br>
configure:77704: result: dso
<br>
configure:77739: checking for sys/bproc.h
<br>
configure:77744: result: no
<br>
configure:78258: checking if MCA component ras:lsf_bproc can compile
<br>
configure:78260: result: no
<br>
configure:78419: checking for MCA component ras:slurm compile mode
<br>
configure:78425: result: dso
<br>
configure:78449: checking for fork
<br>
configure:78537: result: yes
<br>
configure:78549: checking for execve
<br>
configure:78637: result: yes
<br>
configure:78649: checking for setpgid
<br>
configure:78737: result: yes
<br>
configure:78801: checking if MCA component ras:slurm can compile
<br>
configure:78803: result: yes
<br>
configure:79116: checking for MCA component ras:tm compile mode
<br>
configure:79122: result: dso
<br>
configure:79346: checking tm.h usability
<br>
configure:79358: gcc -c -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT conftest.c &gt;&amp;5
<br>
conftest.c:379:16: error: tm.h: No such file or directory
<br>
configure:79364: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_LIBM 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;tm.h&gt;
<br>
configure:79387: result: no
<br>
configure:79391: checking tm.h presence
<br>
configure:79401: gcc -E  -D_REENTRANT conftest.c
<br>
conftest.c:345:16: error: tm.h: No such file or directory
<br>
configure:79407: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_LIBM 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;tm.h&gt;
<br>
configure:79427: result: no
<br>
configure:79462: checking for tm.h
<br>
configure:79469: result: no
<br>
configure:80281: checking if MCA component ras:tm can compile
<br>
configure:80283: result: no
<br>
configure:80442: checking for MCA component ras:xgrid compile mode
<br>
configure:80448: result: dso
<br>
configure:80467: checking for XGridFoundation Framework
<br>
configure:80551: result: yes
<br>
configure:80611: checking if MCA component ras:xgrid can compile
<br>
configure:80613: result: yes
<br>
configure:81434: checking for no configure components in framework rds
<br>
configure:81436: result: hostfile, resfile
<br>
configure:81438: checking for m4 configure components in framework rds
<br>
configure:81440: result: 
<br>
configure:81554: checking for MCA component rds:hostfile compile mode
<br>
configure:81560: result: dso
<br>
configure:81591: checking if MCA component rds:hostfile can compile
<br>
configure:81593: result: yes
<br>
configure:81897: checking for MCA component rds:resfile compile mode
<br>
configure:81903: result: dso
<br>
configure:81934: checking if MCA component rds:resfile can compile
<br>
configure:81936: result: yes
<br>
configure:82756: checking for no configure components in framework rmaps
<br>
configure:82758: result: round_robin
<br>
configure:82760: checking for m4 configure components in framework rmaps
<br>
configure:82762: result: 
<br>
configure:82876: checking for MCA component rmaps:round_robin compile mode
<br>
configure:82882: result: dso
<br>
configure:82913: checking if MCA component rmaps:round_robin can compile
<br>
configure:82915: result: yes
<br>
configure:83735: checking for no configure components in framework rmgr
<br>
configure:83737: result: proxy, urm
<br>
configure:83739: checking for m4 configure components in framework rmgr
<br>
configure:83741: result: 
<br>
configure:83855: checking for MCA component rmgr:proxy compile mode
<br>
configure:83861: result: dso
<br>
configure:83892: checking if MCA component rmgr:proxy can compile
<br>
configure:83894: result: yes
<br>
configure:84198: checking for MCA component rmgr:urm compile mode
<br>
configure:84204: result: dso
<br>
configure:84235: checking if MCA component rmgr:urm can compile
<br>
configure:84237: result: yes
<br>
configure:85057: checking for no configure components in framework rml
<br>
configure:85059: result: oob
<br>
configure:85061: checking for m4 configure components in framework rml
<br>
configure:85063: result: cnos
<br>
configure:85177: checking for MCA component rml:oob compile mode
<br>
configure:85183: result: dso
<br>
configure:85214: checking if MCA component rml:oob can compile
<br>
configure:85216: result: yes
<br>
configure:85528: checking for MCA component rml:cnos compile mode
<br>
configure:85534: result: dso
<br>
configure:85550: checking for cnos_barrier
<br>
configure:85607: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT   conftest.c -lm   &gt;&amp;5
<br>
/usr/bin/ld: Undefined symbols:
<br>
_cnos_barrier
<br>
collect2: ld returned 1 exit status
<br>
configure:85613: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_LIBM 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| /* end confdefs.h.  */
<br>
| /* Define cnos_barrier to an innocuous variant, in case &lt;limits.h&gt; declares cnos_barrier.
<br>
|    For example, HP-UX 11i &lt;limits.h&gt; declares gettimeofday.  */
<br>
| #define cnos_barrier innocuous_cnos_barrier
<br>
| 
<br>
| /* System header to define __stub macros and hopefully few prototypes,
<br>
|     which can conflict with char cnos_barrier (); below.
<br>
|     Prefer &lt;limits.h&gt; to &lt;assert.h&gt; if __STDC__ is defined, since
<br>
|     &lt;limits.h&gt; exists even on freestanding compilers.  */
<br>
| 
<br>
| #ifdef __STDC__
<br>
| # include &lt;limits.h&gt;
<br>
| #else
<br>
| # include &lt;assert.h&gt;
<br>
| #endif
<br>
| 
<br>
| #undef cnos_barrier
<br>
| 
<br>
| /* Override any gcc2 internal prototype to avoid an error.  */
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot;
<br>
| {
<br>
| #endif
<br>
| /* We use char because int might match the return type of a gcc2
<br>
|    builtin and then its argument prototype would still apply.  */
<br>
| char cnos_barrier ();
<br>
| /* The GNU C library defines this for functions which it implements
<br>
|     to always fail with ENOSYS.  Some functions are actually named
<br>
|     something starting with __ and the normal name is an alias.  */
<br>
| #if defined (__stub_cnos_barrier) || defined (__stub___cnos_barrier)
<br>
| choke me
<br>
| #else
<br>
| char (*f) () = cnos_barrier;
<br>
| #endif
<br>
| #ifdef __cplusplus
<br>
| }
<br>
| #endif
<br>
| 
<br>
| int
<br>
| main ()
<br>
| {
<br>
| return f != cnos_barrier;
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:85638: result: no
<br>
configure:85845: checking if MCA component rml:cnos can compile
<br>
configure:85847: result: no
<br>
configure:86514: checking for no configure components in framework schema
<br>
configure:86516: result: 
<br>
configure:86518: checking for m4 configure components in framework schema
<br>
configure:86520: result: 
<br>
configure:87150: checking for no configure components in framework sds
<br>
configure:87152: result: env, seed, singleton, slurm
<br>
configure:87154: checking for m4 configure components in framework sds
<br>
configure:87156: result: bproc, cnos, pipe, portals_utcp
<br>
configure:87270: checking for MCA component sds:env compile mode
<br>
configure:87276: result: dso
<br>
configure:87307: checking if MCA component sds:env can compile
<br>
configure:87309: result: yes
<br>
configure:87613: checking for MCA component sds:seed compile mode
<br>
configure:87619: result: dso
<br>
configure:87650: checking if MCA component sds:seed can compile
<br>
configure:87652: result: yes
<br>
configure:87956: checking for MCA component sds:singleton compile mode
<br>
configure:87962: result: dso
<br>
configure:87993: checking if MCA component sds:singleton can compile
<br>
configure:87995: result: yes
<br>
configure:88299: checking for MCA component sds:slurm compile mode
<br>
configure:88305: result: dso
<br>
configure:88336: checking if MCA component sds:slurm can compile
<br>
configure:88338: result: yes
<br>
configure:88650: checking for MCA component sds:bproc compile mode
<br>
configure:88656: result: dso
<br>
configure:88691: checking for sys/bproc.h
<br>
configure:88696: result: no
<br>
configure:89208: checking if MCA component sds:bproc can compile
<br>
configure:89210: result: no
<br>
configure:89369: checking for MCA component sds:cnos compile mode
<br>
configure:89375: result: dso
<br>
configure:89385: checking for cnos_get_rank
<br>
configure:89442: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT   conftest.c -lm   &gt;&amp;5
<br>
/usr/bin/ld: Undefined symbols:
<br>
_cnos_get_rank
<br>
collect2: ld returned 1 exit status
<br>
configure:89448: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_LIBM 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_RML_CNOS_HAVE_BARRIER 0
<br>
| /* end confdefs.h.  */
<br>
| /* Define cnos_get_rank to an innocuous variant, in case &lt;limits.h&gt; declares cnos_get_rank.
<br>
|    For example, HP-UX 11i &lt;limits.h&gt; declares gettimeofday.  */
<br>
| #define cnos_get_rank innocuous_cnos_get_rank
<br>
| 
<br>
| /* System header to define __stub macros and hopefully few prototypes,
<br>
|     which can conflict with char cnos_get_rank (); below.
<br>
|     Prefer &lt;limits.h&gt; to &lt;assert.h&gt; if __STDC__ is defined, since
<br>
|     &lt;limits.h&gt; exists even on freestanding compilers.  */
<br>
| 
<br>
| #ifdef __STDC__
<br>
| # include &lt;limits.h&gt;
<br>
| #else
<br>
| # include &lt;assert.h&gt;
<br>
| #endif
<br>
| 
<br>
| #undef cnos_get_rank
<br>
| 
<br>
| /* Override any gcc2 internal prototype to avoid an error.  */
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot;
<br>
| {
<br>
| #endif
<br>
| /* We use char because int might match the return type of a gcc2
<br>
|    builtin and then its argument prototype would still apply.  */
<br>
| char cnos_get_rank ();
<br>
| /* The GNU C library defines this for functions which it implements
<br>
|     to always fail with ENOSYS.  Some functions are actually named
<br>
|     something starting with __ and the normal name is an alias.  */
<br>
| #if defined (__stub_cnos_get_rank) || defined (__stub___cnos_get_rank)
<br>
| choke me
<br>
| #else
<br>
| char (*f) () = cnos_get_rank;
<br>
| #endif
<br>
| #ifdef __cplusplus
<br>
| }
<br>
| #endif
<br>
| 
<br>
| int
<br>
| main ()
<br>
| {
<br>
| return f != cnos_get_rank;
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:89473: result: no
<br>
configure:89665: checking if MCA component sds:cnos can compile
<br>
configure:89667: result: no
<br>
configure:89826: checking for MCA component sds:pipe compile mode
<br>
configure:89832: result: dso
<br>
configure:89842: checking for pipe
<br>
configure:89930: result: yes
<br>
configure:89968: checking if MCA component sds:pipe can compile
<br>
configure:89970: result: yes
<br>
configure:90283: checking for MCA component sds:portals_utcp compile mode
<br>
configure:90289: result: dso
<br>
configure:90344: checking for PtlGetRank
<br>
configure:90372: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT   conftest.c -lm   -lutcpapi -lutcplib -lp3api -lp3lib -lp3rt &gt;&amp;5
<br>
conftest.c:346:22: error: portals3.h: No such file or directory
<br>
conftest.c:348:24: error: p3nal_utcp.h: No such file or directory
<br>
conftest.c:349:23: error: p3rt/p3rt.h: No such file or directory
<br>
conftest.c:350:25: error: p3api/debug.h: No such file or directory
<br>
conftest.c: In function 'main':
<br>
conftest.c:359: error: 'PTL_IFACE_DEFAULT' undeclared (first use in this function)
<br>
conftest.c:359: error: (Each undeclared identifier is reported only once
<br>
conftest.c:359: error: for each function it appears in.)
<br>
conftest.c:359: error: 'PTL_PID_ANY' undeclared (first use in this function)
<br>
configure:90378: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_LIBM 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_RML_CNOS_HAVE_BARRIER 0
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;portals3.h&gt;
<br>
| #include &lt;stdio.h&gt;
<br>
| #include &lt;p3nal_utcp.h&gt;
<br>
| #include &lt;p3rt/p3rt.h&gt;
<br>
| #include &lt;p3api/debug.h&gt;
<br>
| FILE *utcp_api_out;
<br>
| FILE *utcp_lib_out;
<br>
| int
<br>
| main ()
<br>
| {
<br>
| unsigned int nprocs, rank;
<br>
| int dummy;
<br>
| PtlInit(&amp;dummy);
<br>
| PtlNIInit(PTL_IFACE_DEFAULT, PTL_PID_ANY, NULL, NULL, NULL);
<br>
| PtlGetRank(&amp;rank, &amp;nprocs);
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:90400: result: no
<br>
configure:90600: checking if MCA component sds:portals_utcp can compile
<br>
configure:90602: result: no
<br>
configure:91269: checking for no configure components in framework soh
<br>
configure:91271: result: 
<br>
configure:91273: checking for m4 configure components in framework soh
<br>
configure:91275: result: bproc
<br>
configure:91397: checking for MCA component soh:bproc compile mode
<br>
configure:91403: result: dso
<br>
configure:91438: checking for sys/bproc.h
<br>
configure:91443: result: no
<br>
configure:92012: checking if MCA component soh:bproc can compile
<br>
configure:92014: result: no
<br>
configure:92604: checking for frameworks for ompi
<br>
configure:92606: result: allocator, bml, btl, coll, common, io, mpool, pml, ptl, rcache, topo
<br>
configure:92714: checking for no configure components in framework allocator
<br>
configure:92716: result: basic, bucket
<br>
configure:92718: checking for m4 configure components in framework allocator
<br>
configure:92720: result: 
<br>
configure:92834: checking for MCA component allocator:basic compile mode
<br>
configure:92840: result: dso
<br>
configure:92871: checking if MCA component allocator:basic can compile
<br>
configure:92873: result: yes
<br>
configure:93177: checking for MCA component allocator:bucket compile mode
<br>
configure:93183: result: dso
<br>
configure:93214: checking if MCA component allocator:bucket can compile
<br>
configure:93216: result: yes
<br>
configure:94036: checking for no configure components in framework bml
<br>
configure:94038: result: r2
<br>
configure:94040: checking for m4 configure components in framework bml
<br>
configure:94042: result: 
<br>
configure:94156: checking for MCA component bml:r2 compile mode
<br>
configure:94162: result: dso
<br>
configure:94193: checking if MCA component bml:r2 can compile
<br>
configure:94195: result: yes
<br>
configure:95015: checking for no configure components in framework btl
<br>
configure:95017: result: self, sm
<br>
configure:95019: checking for m4 configure components in framework btl
<br>
configure:95021: result: gm, mvapi, mx, openib, portals, tcp
<br>
configure:95135: checking for MCA component btl:self compile mode
<br>
configure:95141: result: dso
<br>
configure:95172: checking if MCA component btl:self can compile
<br>
configure:95174: result: yes
<br>
configure:95478: checking for MCA component btl:sm compile mode
<br>
configure:95484: result: dso
<br>
configure:95515: checking if MCA component btl:sm can compile
<br>
configure:95517: result: yes
<br>
configure:95829: checking for MCA component btl:gm compile mode
<br>
configure:95835: result: dso
<br>
configure:96061: checking gm.h usability
<br>
configure:96073: gcc -c -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT conftest.c &gt;&amp;5
<br>
conftest.c:380:16: error: gm.h: No such file or directory
<br>
configure:96079: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_LIBM 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_RML_CNOS_HAVE_BARRIER 0
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;gm.h&gt;
<br>
configure:96102: result: no
<br>
configure:96106: checking gm.h presence
<br>
configure:96116: gcc -E  -D_REENTRANT conftest.c
<br>
conftest.c:346:16: error: gm.h: No such file or directory
<br>
configure:96122: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_LIBM 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_RML_CNOS_HAVE_BARRIER 0
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;gm.h&gt;
<br>
configure:96142: result: no
<br>
configure:96177: checking for gm.h
<br>
configure:96184: result: no
<br>
configure:97327: checking if MCA component btl:gm can compile
<br>
configure:97329: result: no
<br>
configure:97488: checking for MCA component btl:mvapi compile mode
<br>
configure:97494: result: dso
<br>
configure:97739: checking vapi.h usability
<br>
configure:97751: gcc -c -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT conftest.c &gt;&amp;5
<br>
conftest.c:380:18: error: vapi.h: No such file or directory
<br>
configure:97757: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_LIBM 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_RML_CNOS_HAVE_BARRIER 0
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;vapi.h&gt;
<br>
configure:97780: result: no
<br>
configure:97784: checking vapi.h presence
<br>
configure:97794: gcc -E  -D_REENTRANT conftest.c
<br>
conftest.c:346:18: error: vapi.h: No such file or directory
<br>
configure:97800: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_LIBM 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_RML_CNOS_HAVE_BARRIER 0
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;vapi.h&gt;
<br>
configure:97820: result: no
<br>
configure:97855: checking for vapi.h
<br>
configure:97862: result: no
<br>
configure:98654: checking vapi.h usability
<br>
configure:98666: gcc -c -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT conftest.c &gt;&amp;5
<br>
conftest.c:380:18: error: vapi.h: No such file or directory
<br>
configure:98672: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_LIBM 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_RML_CNOS_HAVE_BARRIER 0
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;vapi.h&gt;
<br>
configure:98695: result: no
<br>
configure:98699: checking vapi.h presence
<br>
configure:98709: gcc -E  -D_REENTRANT conftest.c
<br>
conftest.c:346:18: error: vapi.h: No such file or directory
<br>
configure:98715: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_LIBM 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_RML_CNOS_HAVE_BARRIER 0
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;vapi.h&gt;
<br>
configure:98735: result: no
<br>
configure:98770: checking for vapi.h
<br>
configure:98777: result: no
<br>
configure:99609: checking if MCA component btl:mvapi can compile
<br>
configure:99611: result: no
<br>
configure:99770: checking for MCA component btl:mx compile mode
<br>
configure:99776: result: dso
<br>
configure:100006: checking myriexpress.h usability
<br>
configure:100018: gcc -c -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT conftest.c &gt;&amp;5
<br>
conftest.c:380:25: error: myriexpress.h: No such file or directory
<br>
configure:100024: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_LIBM 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_RML_CNOS_HAVE_BARRIER 0
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;myriexpress.h&gt;
<br>
configure:100047: result: no
<br>
configure:100051: checking myriexpress.h presence
<br>
configure:100061: gcc -E  -D_REENTRANT conftest.c
<br>
conftest.c:346:25: error: myriexpress.h: No such file or directory
<br>
configure:100067: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_LIBM 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_RML_CNOS_HAVE_BARRIER 0
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;myriexpress.h&gt;
<br>
configure:100087: result: no
<br>
configure:100122: checking for myriexpress.h
<br>
configure:100129: result: no
<br>
configure:101028: checking if MCA component btl:mx can compile
<br>
configure:101030: result: no
<br>
configure:101189: checking for MCA component btl:openib compile mode
<br>
configure:101195: result: dso
<br>
configure:101238: checking for sysfs_open_class in -lsysfs
<br>
configure:101268: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT   conftest.c -lsysfs  -lm   &gt;&amp;5
<br>
/usr/bin/ld: can't locate file for: -lsysfs
<br>
collect2: ld returned 1 exit status
<br>
configure:101274: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_LIBM 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_RML_CNOS_HAVE_BARRIER 0
<br>
| /* end confdefs.h.  */
<br>
| 
<br>
| /* Override any gcc2 internal prototype to avoid an error.  */
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot;
<br>
| #endif
<br>
| /* We use char because int might match the return type of a gcc2
<br>
|    builtin and then its argument prototype would still apply.  */
<br>
| char sysfs_open_class ();
<br>
| int
<br>
| main ()
<br>
| {
<br>
| sysfs_open_class ();
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:101300: result: no
<br>
configure:101352: checking for cm_timeout in -lcm
<br>
configure:101382: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT   conftest.c -lcm  -lm   &gt;&amp;5
<br>
/usr/bin/ld: can't locate file for: -lcm
<br>
collect2: ld returned 1 exit status
<br>
configure:101388: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_LIBM 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_RML_CNOS_HAVE_BARRIER 0
<br>
| /* end confdefs.h.  */
<br>
| 
<br>
| /* Override any gcc2 internal prototype to avoid an error.  */
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot;
<br>
| #endif
<br>
| /* We use char because int might match the return type of a gcc2
<br>
|    builtin and then its argument prototype would still apply.  */
<br>
| char cm_timeout ();
<br>
| int
<br>
| main ()
<br>
| {
<br>
| cm_timeout ();
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:101414: result: no
<br>
configure:101615: checking infiniband/verbs.h usability
<br>
configure:101627: gcc -c -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT conftest.c &gt;&amp;5
<br>
conftest.c:380:30: error: infiniband/verbs.h: No such file or directory
<br>
configure:101633: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_LIBM 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_RML_CNOS_HAVE_BARRIER 0
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;infiniband/verbs.h&gt;
<br>
configure:101656: result: no
<br>
configure:101660: checking infiniband/verbs.h presence
<br>
configure:101670: gcc -E  -D_REENTRANT conftest.c
<br>
conftest.c:346:30: error: infiniband/verbs.h: No such file or directory
<br>
configure:101676: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_LIBM 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_RML_CNOS_HAVE_BARRIER 0
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;infiniband/verbs.h&gt;
<br>
configure:101696: result: no
<br>
configure:101731: checking for infiniband/verbs.h
<br>
configure:101738: result: no
<br>
configure:102459: checking for ibv_create_srq
<br>
configure:102516: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT     conftest.c -lm    &gt;&amp;5
<br>
/usr/bin/ld: Undefined symbols:
<br>
_ibv_create_srq
<br>
collect2: ld returned 1 exit status
<br>
configure:102522: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_LIBM 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_RML_CNOS_HAVE_BARRIER 0
<br>
| /* end confdefs.h.  */
<br>
| /* Define ibv_create_srq to an innocuous variant, in case &lt;limits.h&gt; declares ibv_create_srq.
<br>
|    For example, HP-UX 11i &lt;limits.h&gt; declares gettimeofday.  */
<br>
| #define ibv_create_srq innocuous_ibv_create_srq
<br>
| 
<br>
| /* System header to define __stub macros and hopefully few prototypes,
<br>
|     which can conflict with char ibv_create_srq (); below.
<br>
|     Prefer &lt;limits.h&gt; to &lt;assert.h&gt; if __STDC__ is defined, since
<br>
|     &lt;limits.h&gt; exists even on freestanding compilers.  */
<br>
| 
<br>
| #ifdef __STDC__
<br>
| # include &lt;limits.h&gt;
<br>
| #else
<br>
| # include &lt;assert.h&gt;
<br>
| #endif
<br>
| 
<br>
| #undef ibv_create_srq
<br>
| 
<br>
| /* Override any gcc2 internal prototype to avoid an error.  */
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot;
<br>
| {
<br>
| #endif
<br>
| /* We use char because int might match the return type of a gcc2
<br>
|    builtin and then its argument prototype would still apply.  */
<br>
| char ibv_create_srq ();
<br>
| /* The GNU C library defines this for functions which it implements
<br>
|     to always fail with ENOSYS.  Some functions are actually named
<br>
|     something starting with __ and the normal name is an alias.  */
<br>
| #if defined (__stub_ibv_create_srq) || defined (__stub___ibv_create_srq)
<br>
| choke me
<br>
| #else
<br>
| char (*f) () = ibv_create_srq;
<br>
| #endif
<br>
| #ifdef __cplusplus
<br>
| }
<br>
| #endif
<br>
| 
<br>
| int
<br>
| main ()
<br>
| {
<br>
| return f != ibv_create_srq;
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:102547: result: no
<br>
configure:102569: checking for ibv_get_device_list
<br>
configure:102626: gcc -o conftest -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT     conftest.c -lm    &gt;&amp;5
<br>
/usr/bin/ld: Undefined symbols:
<br>
_ibv_get_device_list
<br>
collect2: ld returned 1 exit status
<br>
configure:102632: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_LIBM 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_RML_CNOS_HAVE_BARRIER 0
<br>
| #define OMPI_MCA_BTL_OPENIB_HAVE_SRQ 0
<br>
| /* end confdefs.h.  */
<br>
| /* Define ibv_get_device_list to an innocuous variant, in case &lt;limits.h&gt; declares ibv_get_device_list.
<br>
|    For example, HP-UX 11i &lt;limits.h&gt; declares gettimeofday.  */
<br>
| #define ibv_get_device_list innocuous_ibv_get_device_list
<br>
| 
<br>
| /* System header to define __stub macros and hopefully few prototypes,
<br>
|     which can conflict with char ibv_get_device_list (); below.
<br>
|     Prefer &lt;limits.h&gt; to &lt;assert.h&gt; if __STDC__ is defined, since
<br>
|     &lt;limits.h&gt; exists even on freestanding compilers.  */
<br>
| 
<br>
| #ifdef __STDC__
<br>
| # include &lt;limits.h&gt;
<br>
| #else
<br>
| # include &lt;assert.h&gt;
<br>
| #endif
<br>
| 
<br>
| #undef ibv_get_device_list
<br>
| 
<br>
| /* Override any gcc2 internal prototype to avoid an error.  */
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot;
<br>
| {
<br>
| #endif
<br>
| /* We use char because int might match the return type of a gcc2
<br>
|    builtin and then its argument prototype would still apply.  */
<br>
| char ibv_get_device_list ();
<br>
| /* The GNU C library defines this for functions which it implements
<br>
|     to always fail with ENOSYS.  Some functions are actually named
<br>
|     something starting with __ and the normal name is an alias.  */
<br>
| #if defined (__stub_ibv_get_device_list) || defined (__stub___ibv_get_device_list)
<br>
| choke me
<br>
| #else
<br>
| char (*f) () = ibv_get_device_list;
<br>
| #endif
<br>
| #ifdef __cplusplus
<br>
| }
<br>
| #endif
<br>
| 
<br>
| int
<br>
| main ()
<br>
| {
<br>
| return f != ibv_get_device_list;
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:102657: result: no
<br>
configure:102898: checking if MCA component btl:openib can compile
<br>
configure:102900: result: no
<br>
configure:103059: checking for MCA component btl:portals compile mode
<br>
configure:103065: result: dso
<br>
configure:103118: checking for Portals configuration
<br>
configure:103131: result: utcp
<br>
configure:103210: checking portals3.h usability
<br>
configure:103222: gcc -c -O3 -DNDEBUG -fno-strict-aliasing   -D_REENTRANT conftest.c &gt;&amp;5
<br>
conftest.c:386:22: error: portals3.h: No such file or directory
<br>
configure:103228: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTIL_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OMPI_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_HAVE_SA_RESTART 1
<br>
| #define OMPI_HAVE_SA_LEN 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_HTONL 1
<br>
| #define HAVE_NTOHL 1
<br>
| #define HAVE_HTONS 1
<br>
| #define HAVE_NTOHS 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define OMPI_HAVE_VA_COPY 1
<br>
| #define OMPI_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_LIBM 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define WORDS_BIGENDIAN 1
<br>
| #define OMPI_HAVE_BROKEN_QSORT 0
<br>
| #define OMPI_HAVE_SOLARIS_THREADS 0
<br>
| #define OMPI_HAVE_POSIX_THREADS 1
<br>
| #define OMPI_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OMPI_ENABLE_MPI_THREADS 0
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define HAVE_MACH_MACH_TIME_H 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define OMPI_RML_CNOS_HAVE_BARRIER 0
<br>
| #define OMPI_MCA_BTL_OPENIB_HAVE_SRQ 0
<br>
| #define OMPI_MCA_BTL_OPENIB_HAVE_DEVICE_LIST 0
<br>
| #define OMPI_BTL_PORTALS_HAVE_EVENT_UNLINK 1
<br>
| #define OMPI_BTL_PORTALS_UTCP 1
<br>
| #define OMPI_BTL_PORTALS_REDSTORM 0
<br>
| #define OMPI_BTL_PORTALS_STARTING_TABLE_ID 0
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #if HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #if HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #if STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # if HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_STRING_H
<br>
| # if !STDC_HEADERS &amp;&amp; HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #if HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #if HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #else
<br>
| # if HAVE_STDINT_H
<br>
| #  include &lt;stdint.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #if HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;portals3.h&gt;
<br>
configure:103251: result: no
<br>
configure:103255: checking portals3.h presence
<br>
configure:103265: gcc -E  -D_REENTRANT conftest.c
<br>
conftest.c:352:22: error: portals3.h: No such file or directory
<br>
configure:103271: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.0.2&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.0.2&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 0
<br>
| #define OMPI_RELEASE_VERSION 2
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;2&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 0
<br>
| #define ORTE_RELEASE_VERSION 2
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;2&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 0
<br>
| #define OPAL_RELEASE_VERSION 2
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;2&quot;
<br>
| #define _GNU_SOURCE 1
<br>
| #define OMPI_ARCH &quot;powerpc-apple-darwin8.6.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_MPI2_ONE_SIDED 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OMPI_CC &quot;gcc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 4
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_VOID_P 4
<br>
| #define SIZEOF_SIZE_T 4
<br>
| #define OMPI_ALIGNMENT_CHAR 1
<br>
| #define OMPI_ALIGNMENT_SHORT 2
<br>
| #define OMPI_ALIGNMENT_WCHAR 4
<br>
| #define OMPI_ALIGNMENT_INT 4
<br>
| #define OMPI_ALIGNMENT_LONG 4
<br>
| #define OMPI_ALIGNMENT_LONG_LONG 4
<br>
| #define OMPI_ALIGNMENT_FLOAT 4
<br>
| #define OMPI_ALIGNMENT_DOUBLE 4
<br>
| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OMPI_ALIGNMENT_VOID_P 4
<br>
| #define OMPI_NEED_C_BOOL 1
<br>
| #ifndef __cplusplus
<br>
| #define inline __inline__
<br>
| #endif
<br>
| #define restrict __restrict
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OMPI_HAVE_WEAK_SYMBOLS 0
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot; void std::exit (int); using std::exit;
<br>
| #endif
<br>
| #define OMPI_CXX &quot;g++&quot;
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define SIZEOF_BOOL 4
<br>
| #define OMPI_ALIGNMENT_CXX_BOOL 4
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OMPI_ASM_TEXT &quot;.text&quot;
<br>
| #define OMPI_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OMPI_ASM_GSYM &quot;_&quot;
<br>
| #define OMPI_ASM_LSYM &quot;L&quot;
<br>
| #define OMPI_ASM_TYPE &quot;&quot;
<br>
| #define OMPI_ASM_SIZE &quot;0&quot;
<br>
| #define OMPI_ASM_ALIGN_LOG 
<br>
| #define OMPI_WANT_SMP_LOCKS 1
<br>
| #define OMPI_POWERPC_R_REGISTERS 1
<br>
| #define OMPI_ASM_SUPPORT_64BIT 0
<br>
| #define OMPI_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:-_-L--0-1-1-0-0&quot;
<br>
| #define OMPI_ASSEMBLY_ARCH OMPI_POWERPC32
<br>
| #define OMPI_HAVE_ASM_FILE 1
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;gfortran&quot;
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;gfortran&quot;
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_INT1 1
<br>
| #define OMPI_SIZEOF_F90_INT2 2
<br>
| #define OMPI_SIZEOF_F90_INT4 4
<br>
| #define OMPI_SIZEOF_F90_INT8 8
<br>
| #define OMPI_SIZEOF_F90_INT16 0
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_F90_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_F90_INT 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLPREC 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX 4
<br>
| #define OMPI_ALIGNMENT_F90_DBLCOMPLEX 8
<br>
| #define OMPI_ALIGNMENT_F90_INT1 1
<br>
| #define OMPI_ALIGNMENT_F90_INT2 2
<br>
| #define OMPI_ALIGNMENT_F90_INT4 4
<br>
| #define OMPI_ALIGNMENT_F90_INT8 8
<br>
| #define OMPI_ALIGNMENT_F90_INT16 0
<br>
| #define OMPI_ALIGNMENT_F90_REAL4 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL8 4
<br>
| #define OMPI_ALIGNMENT_F90_REAL16 16
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX8 4
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX16 8
<br>
| #define OMPI_ALIGNMENT_F90_COMPLEX32 16
<br>
| #define OMPI_PRECISION_F90_REAL4 6
<br>
| #define OMPI_PRECISION_F90_REAL8 15
<br>
| #define OMPI_PRECISION_F90_REAL16 31
<br>
| #define OMPI_PRECISION_F90_COMPLEX8 6
<br>
| #define OMPI_PRECISION_F90_COMPLEX16 15
<br>
| #define OMPI_PRECISION_F90_COMPLEX32 31
<br>
| #define OMPI_RANGE_F90_REAL4 37
<br>
| #define OMPI_RANGE_F90_REAL8 307
<br>
| #define OMPI_RANGE_F90_REAL16 291
<br>
| #define OMPI_RANGE_F90_COMPLEX8 37
<br>
| #define OMPI_RANGE_F90_COMPLEX16 307
<br>
| #define OMPI_RANGE_F90_COMPLEX32 291
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_SYS_SOCKIO_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1