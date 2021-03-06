<?
$subject_val = "Re: [OMPI users] errors trying to run a simple mpi task";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 23 15:22:02 2013" -->
<!-- isoreceived="20130623192202" -->
<!-- sent="Sun, 23 Jun 2013 22:21:53 +0300" -->
<!-- isosent="20130623192153" -->
<!-- name="dani" -->
<!-- email="dani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] errors trying to run a simple mpi task" -->
<!-- id="51C74AD1.2050905_at_letai.org.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="07F2E635-C1F6-4E30-9022-43BA73F69B5F_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] errors trying to run a simple mpi task<br>
<strong>From:</strong> dani (<em>dani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-23 15:21:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22200.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<li><strong>Previous message:</strong> <a href="22198.php">Reem Alraddadi: "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<li><strong>In reply to:</strong> <a href="22196.php">Ralph Castain: "Re: [OMPI users] errors trying to run a simple mpi task"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22201.php">Jeff Squyres (jsquyres): "Re: [OMPI users] errors trying to run a simple mpi task"</a>
<li><strong>Reply:</strong> <a href="22201.php">Jeff Squyres (jsquyres): "Re: [OMPI users] errors trying to run a simple mpi task"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<html style="direction: ltr;">
  <head>
    <meta content="text/html; charset=ISO-8859-1"
      http-equiv="Content-Type">
    <style type="text/css">body p { margin-bottom: 0cm; margin-top: 0pt; } </style>
  </head>
  <body style="direction: ltr;"
    bidimailui-detected-decoding-type="latin-charset" text="#000000"
    bgcolor="#FFFFFF">
    Thanks, that actually solved one of the errors:<br>
    <blockquote type="cite">-&gt;mpirun -n 1 hello<br>
--------------------------------------------------------------------------<br>
      WARNING: It appears that your OpenFabrics subsystem is configured
      to only<br>
      allow registering part of your physical memory.&nbsp; This can cause
      MPI jobs to<br>
      run with erratic performance, hang, and/or crash.<br>
      <br>
      This may be caused by your OpenFabrics vendor limiting the amount
      of<br>
      physical memory that can be registered.&nbsp; You should investigate
      the<br>
      relevant Linux kernel module parameters that control how much
      physical<br>
      memory can be registered, and increase them to allow registering
      all<br>
      physical memory on your machine.<br>
      <br>
      See this Open MPI FAQ item for more information on these Linux
      kernel module<br>
      parameters:<br>
      <br>
      &nbsp;&nbsp;&nbsp;
      <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a><br>
      <br>
      &nbsp; Local host:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; n01<br>
      &nbsp; Registerable memory:&nbsp;&nbsp;&nbsp;&nbsp; 32768 MiB<br>
      &nbsp; Total memory:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 65503 MiB<br>
      <br>
      Your MPI job will continue, but may be behave poorly and/or hang.<br>
--------------------------------------------------------------------------<br>
      Process 0 on n01 out of 1</blockquote>
    BTW, the node has 64GB total ram. Is it possible openmpi is limited
    to only 32GB? or possibly the ofed installation has such a limit?<br>
    <br>
    <br>
    <div class="moz-cite-prefix">On 23/06//2013 17:58, Ralph Castain
      wrote:<br>
    </div>
    <blockquote
      cite="mid:07F2E635-C1F6-4E30-9022-43BA73F69B5F@gmail.com"
      type="cite">
      <meta http-equiv="content-type" content="text/html;
        charset=ISO-8859-1">
      <div>Don't include udapl - that code may well be stale<br>
        <br>
        Sent from my iPhone</div>
      <div><br>
        On Jun 23, 2013, at 3:42 AM, dani &lt;<a moz-do-not-send="true"
          href="mailto:dani@letai.org.il">dani@letai.org.il</a>&gt;
        wrote:<br>
        <br>
      </div>
      <blockquote type="cite">
        <div>
          <meta http-equiv="content-type" content="text/html;
            charset=ISO-8859-1">
          Hi,<br>
          <br>
          I've encountered strange issues when trying to run a simple
          mpi job on a single host which has IB.<br>
          The complete errors:<br>
          <br>
          <blockquote type="cite">-&gt; mpirun -n 1 hello<br>
--------------------------------------------------------------------------<br>
            WARNING: Failed to open "ofa-v2-mlx4_0-1"
            [DAT_PROVIDER_NOT_FOUND:DAT_NAME_NOT_REGISTERED]. <br>
            This may be a real error or it may be an invalid entry in
            the uDAPL<br>
            Registry which is contained in the dat.conf file. Contact
            your local<br>
            System Administrator to confirm the availability of the
            interfaces in<br>
            the dat.conf file.<br>
--------------------------------------------------------------------------<br>
--------------------------------------------------------------------------<br>
            [[53031,1],0]: A high-performance Open MPI point-to-point
            messaging module<br>
            was unable to find any relevant network interfaces:<br>
            <br>
            Module: uDAPL<br>
            &nbsp; Host: n01<br>
            <br>
            Another transport will be used instead, although this may
            result in<br>
            lower performance.<br>
--------------------------------------------------------------------------<br>
--------------------------------------------------------------------------<br>
            WARNING: It appears that your OpenFabrics subsystem is
            configured to only<br>
            allow registering part of your physical memory.&nbsp; This can
            cause MPI jobs to<br>
            run with erratic performance, hang, and/or crash.<br>
            <br>
            This may be caused by your OpenFabrics vendor limiting the
            amount of<br>
            physical memory that can be registered.&nbsp; You should
            investigate the<br>
            relevant Linux kernel module parameters that control how
            much physical<br>
            memory can be registered, and increase them to allow
            registering all<br>
            physical memory on your machine.<br>
            <br>
            See this Open MPI FAQ item for more information on these
            Linux kernel module<br>
            parameters:<br>
            <br>
            &nbsp;&nbsp;&nbsp; <a moz-do-not-send="true" class="moz-txt-link-freetext"
href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a><br>
            <br>
            &nbsp; Local host:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; n01<br>
            &nbsp; Registerable memory:&nbsp;&nbsp;&nbsp;&nbsp; 32768 MiB<br>
            &nbsp; Total memory:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 65503 MiB<br>
            <br>
            Your MPI job will continue, but may be behave poorly and/or
            hang.<br>
--------------------------------------------------------------------------<br>
            Process 0 on n01 out of 1<br>
            [n01:13534] 7 more processes have sent help message
            help-mpi-btl-udapl.txt / dat_ia_open fail<br>
            [n01:13534] Set MCA parameter "orte_base_help_aggregate" to
            0 to see all help / error messages</blockquote>
          Following my setup and other info:<br>
          OS: CentOS 6.3 x86_64<br>
          installed ofed 3.5 from source ( ./install.pl --all)<br>
          installed openmpi 1.6.4 with the following build parameters:<br>
          <blockquote type="cite">rpmbuild --rebuild
            openmpi-1.6.4-1.src.rpm --define '_prefix
            /opt/openmpi/1.6.4/gcc' --define '_defaultdocdir
            /opt/openmpi/1.6.4/gcc' --define '_mandir
            %{_prefix}/share/man' --define '_datadir %{_prefix}/share'
            --define 'configure_options --with-openib=/usr
            --with-openib-libdir=/usr/lib64 CC=gcc CXX=g++ F77=gfortran
            FC=gfortran --enable-mpirun-prefix-by-default
            --target=x86_64-unknown-linux-gnu --with-hwloc=/usr/local
            --with-libltdl --enable-branch-probabilities --with-udapl
            --with-sge --disable-vt' --define 'use_default_rpm_opt_flags
            1' --define '_name openmpi-1.6.4_gcc' --define
            'install_shell_scripts 1' --define 'shell_scripts_basename
            mpivars' --define '_usr /usr' --define 'ofed 0' 2&gt;&amp;1
            | tee openmpi.build.sge</blockquote>
          (disable -vt was used due to cuda presence which is
          automatically linked by vt, and becomes a dependency with no
          matching rpm).<br>
          <br>
          memorylocked is unlimited:<br>
          <blockquote type="cite">-&gt;ulimit -a<br>
            core file size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (blocks, -c) 0<br>
            data seg size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (kbytes, -d) unlimited<br>
            scheduling priority&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (-e) 0<br>
            file size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (blocks, -f) unlimited<br>
            pending signals&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (-i) 515028<br>
            max locked memory&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (kbytes, -l) unlimited<br>
            max memory size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (kbytes, -m) unlimited<br>
            open files&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (-n) 1024<br>
            pipe size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (512 bytes, -p) 8<br>
            POSIX message queues&nbsp;&nbsp;&nbsp;&nbsp; (bytes, -q) 819200<br>
            real-time priority&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (-r) 0<br>
            stack size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (kbytes, -s) 10240<br>
            cpu time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (seconds, -t) unlimited<br>
            max user processes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (-u) 1024<br>
            virtual memory&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (kbytes, -v) unlimited<br>
            file locks&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (-x) unlimited</blockquote>
          IB devices are present:<br>
          <blockquote type="cite">-&gt;ibv_devinfo<br>
            hca_id:&nbsp;&nbsp; &nbsp;mlx4_0<br>
            &nbsp;&nbsp; &nbsp;transport:&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;InfiniBand (0)<br>
            &nbsp;&nbsp; &nbsp;fw_ver:&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;2.9.1000<br>
            &nbsp;&nbsp; &nbsp;node_guid:&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;0002:c903:004d:b0e2<br>
            &nbsp;&nbsp; &nbsp;sys_image_guid:&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;0002:c903:004d:b0e5<br>
            &nbsp;&nbsp; &nbsp;vendor_id:&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;0x02c9<br>
            &nbsp;&nbsp; &nbsp;vendor_part_id:&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;26428<br>
            &nbsp;&nbsp; &nbsp;hw_ver:&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;0xB0<br>
            &nbsp;&nbsp; &nbsp;board_id:&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;MT_0D90110009<br>
            &nbsp;&nbsp; &nbsp;phys_port_cnt:&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;1<br>
            &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;port:&nbsp;&nbsp; &nbsp;1<br>
            &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;state:&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;PORT_ACTIVE (4)<br>
            &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;max_mtu:&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;4096 (5)<br>
            &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;active_mtu:&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;4096 (5)<br>
            &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;sm_lid:&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;2<br>
            &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;port_lid:&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;53<br>
            &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;port_lmc:&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;0x00<br>
            &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;link_layer:&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;InfiniBand<br>
          </blockquote>
          <br>
          the hello program source:<br>
          <blockquote type="cite">-&gt;cat hello.c<br>
            #include &lt;stdio.h&gt;<br>
            #include &lt;mpi.h&gt;<br>
            <br>
            int main(int argc, char *argv[]) {<br>
            &nbsp; int numprocs, rank, namelen;<br>
            &nbsp; char processor_name[MPI_MAX_PROCESSOR_NAME];<br>
            <br>
            &nbsp; MPI_Init(&amp;argc, &amp;argv);<br>
            &nbsp; MPI_Comm_size(MPI_COMM_WORLD, &amp;numprocs);<br>
            &nbsp; MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);<br>
            &nbsp; MPI_Get_processor_name(processor_name, &amp;namelen);<br>
            <br>
            &nbsp; printf("Process %d on %s out of %d\n", rank,
            processor_name, numprocs);<br>
            <br>
            &nbsp; MPI_Finalize();<br>
            }</blockquote>
          simply compiled as:<br>
          <blockquote type="cite">mpicc hello.c -o hello</blockquote>
          <br>
          the IB modules seem to be present:<br>
          <blockquote type="cite">-&gt;service openibd status<br>
            <br>
            &nbsp; HCA driver loaded<br>
            <br>
            Configured IPoIB devices:<br>
            ib0<br>
            <br>
            Currently active IPoIB devices:<br>
            ib0<br>
            <br>
            The following OFED modules are loaded:<br>
            <br>
            &nbsp; rdma_ucm<br>
            &nbsp; rdma_cm<br>
            &nbsp; ib_addr<br>
            &nbsp; ib_ipoib<br>
            &nbsp; mlx4_core<br>
            &nbsp; mlx4_ib<br>
            &nbsp; mlx4_en<br>
            &nbsp; ib_mthca<br>
            &nbsp; ib_uverbs<br>
            &nbsp; ib_umad<br>
            &nbsp; ib_sa<br>
            &nbsp; ib_cm<br>
            &nbsp; ib_mad<br>
            &nbsp; ib_core<br>
            &nbsp; iw_cxgb3<br>
            &nbsp; iw_cxgb4<br>
            &nbsp; iw_nes<br>
            &nbsp; ib_qib</blockquote>
          <br>
          Can anyone help?<br>
        </div>
      </blockquote>
      <blockquote type="cite">
        <div><span>_______________________________________________</span><br>
          <span>users mailing list</span><br>
          <span><a moz-do-not-send="true"
              href="mailto:users@open-mpi.org">users@open-mpi.org</a></span><br>
          <span><a moz-do-not-send="true"
              href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a></span></div>
      </blockquote>
      <br>
      <fieldset class="mimeAttachmentHeader"></fieldset>
      <br>
      <pre wrap="">_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a></pre>
    </blockquote>
    <br>
  </body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22200.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<li><strong>Previous message:</strong> <a href="22198.php">Reem Alraddadi: "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<li><strong>In reply to:</strong> <a href="22196.php">Ralph Castain: "Re: [OMPI users] errors trying to run a simple mpi task"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22201.php">Jeff Squyres (jsquyres): "Re: [OMPI users] errors trying to run a simple mpi task"</a>
<li><strong>Reply:</strong> <a href="22201.php">Jeff Squyres (jsquyres): "Re: [OMPI users] errors trying to run a simple mpi task"</a>
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
