<?
$subject_val = "Re: [OMPI users] error openmpi check hdf5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 06:50:43 2016" -->
<!-- isoreceived="20160210115043" -->
<!-- sent="Wed, 10 Feb 2016 05:50:40 -0600" -->
<!-- isosent="20160210115040" -->
<!-- name="Edgar Gabriel" -->
<!-- email="egabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error openmpi check hdf5" -->
<!-- id="56BB2410.6020105_at_central.uh.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="56BB0D39.3060009_at_univ-reunion.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] error openmpi check hdf5<br>
<strong>From:</strong> Edgar Gabriel (<em>egabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-10 06:50:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28490.php">Peter Wind: "Re: [OMPI users] error openmpi check hdf5"</a>
<li><strong>Previous message:</strong> <a href="28488.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>In reply to:</strong> <a href="28484.php">Delphine Ramalingom: "[OMPI users] error openmpi check hdf5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28490.php">Peter Wind: "Re: [OMPI users] error openmpi check hdf5"</a>
<li><strong>Reply:</strong> <a href="28490.php">Peter Wind: "Re: [OMPI users] error openmpi check hdf5"</a>
<li><strong>Reply:</strong> <a href="28492.php">Delphine Ramalingom: "Re: [OMPI users] error openmpi check hdf5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
which version of Open MPI is this?
<br>
Thanks
<br>
Edgar
<br>
<p>On 2/10/2016 4:13 AM, Delphine Ramalingom wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I try to compile a parallel version of hdf5.
</span><br>
<span class="quotelev1">&gt; I have error messages when I check with openmpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Support on HDF5 told me that the errors seem related to the new ompio 
</span><br>
<span class="quotelev1">&gt; implementation inside
</span><br>
<span class="quotelev1">&gt; open MPI for MPI-I/O. He suggests that I talk to the OMPI mailing list 
</span><br>
<span class="quotelev1">&gt; to resolve  these errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For information, my version of openmpi is : gcc (GCC) 4.8.2
</span><br>
<span class="quotelev1">&gt; mpicc --showme
</span><br>
<span class="quotelev1">&gt; gcc -I/programs/Compilateurs2/usr/include -pthread -Wl,-rpath 
</span><br>
<span class="quotelev1">&gt; -Wl,/programs/Compilateurs2/usr/lib -Wl,--enable-new-dtags 
</span><br>
<span class="quotelev1">&gt; -L/programs/Compilateurs2/usr/lib -lmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Errors are :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; .../hdf5-1.8.16_gnu/testpar/.libs/t_mpi: symbol lookup error: 
</span><br>
<span class="quotelev1">&gt; /programs/Compilateurs2/usr/lib/openmpi/mca_fcoll_two_phase.so: 
</span><br>
<span class="quotelev1">&gt; undefined symbol: ompi_io_ompio_decode_datatype
</span><br>
<span class="quotelev1">&gt; .../hdf5-1.8.16_gnu/testpar/.libs/t_mpi: symbol lookup error: 
</span><br>
<span class="quotelev1">&gt; /programs/Compilateurs2/usr/lib/openmpi/mca_fcoll_two_phase.so: 
</span><br>
<span class="quotelev1">&gt; undefined symbol: ompi_io_ompio_decode_datatype
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; .../hdf5-1.8.16_gnu/testpar/.libs/t_mpi: symbol lookup error: 
</span><br>
<span class="quotelev1">&gt; /programs/Compilateurs2/usr/lib/openmpi/mca_fcoll_two_phase.so: 
</span><br>
<span class="quotelev1">&gt; undefined symbol: ompi_io_ompio_set_aggregator_props
</span><br>
<span class="quotelev1">&gt; .../hdf5-1.8.16_gnu/testpar/.libs/t_mpi: symbol lookup error: 
</span><br>
<span class="quotelev1">&gt; /programs/Compilateurs2/usr/lib/openmpi/mca_fcoll_two_phase.so: 
</span><br>
<span class="quotelev1">&gt; undefined symbol: ompi_io_ompio_set_aggregator_props
</span><br>
<span class="quotelev1">&gt; .../hdf5-1.8.16_gnu/testpar/.libs/t_mpi: symbol lookup error: 
</span><br>
<span class="quotelev1">&gt; /programs/Compilateurs2/usr/lib/openmpi/mca_fcoll_two_phase.so: 
</span><br>
<span class="quotelev1">&gt; undefined symbol: ompi_io_ompio_set_aggregator_props
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance for your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Delphine
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.univ-reunion.fr">http://www.univ-reunion.fr</a>&gt; *Delphine Ramalingom Barbary | Ing&#195;&#169;nieure 
</span><br>
<span class="quotelev1">&gt; en Calcul Scientifique *
</span><br>
<span class="quotelev1">&gt; Direction des Usages du Num&#195;&#169;rique (DUN)
</span><br>
<span class="quotelev1">&gt; Centre de D&#195;&#169;veloppement du Calcul Scientifique
</span><br>
<span class="quotelev1">&gt; TEL : 02 62 93 84 87- FAX : 02 62 93 81 06
</span><br>
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
--
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28489/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-28489/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28490.php">Peter Wind: "Re: [OMPI users] error openmpi check hdf5"</a>
<li><strong>Previous message:</strong> <a href="28488.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>In reply to:</strong> <a href="28484.php">Delphine Ramalingom: "[OMPI users] error openmpi check hdf5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28490.php">Peter Wind: "Re: [OMPI users] error openmpi check hdf5"</a>
<li><strong>Reply:</strong> <a href="28490.php">Peter Wind: "Re: [OMPI users] error openmpi check hdf5"</a>
<li><strong>Reply:</strong> <a href="28492.php">Delphine Ramalingom: "Re: [OMPI users] error openmpi check hdf5"</a>
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
