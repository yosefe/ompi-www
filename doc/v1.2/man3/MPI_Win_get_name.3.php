<?php
$topdir = "../../..";
$title = "MPI_Win_get_name(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Win_get_name</B> - Obtains the name of a window.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Win_get_name(MPI_Win <I>win</I>, char *<I>win</I><B>_</B><I>name</I>, int *<I>resultlen</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_WIN_GET_NAME(<I>WIN,</I> <I>WIN</I><B>_</B><I>NAME,</I> <I>RESULTLEN,</I> <I>IERROR</I>)
            INTEGER <I>WIN,</I> <I>RESULTLEN,</I> <I>IERROR</I>
            CHARACTER*(*) <I>WIN</I><B>_</B><I>NAME</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Win::Get_name(char* <I>win</I><B>_</B><I>name</I>, int&amp; <I>resultlen</I>) const

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       win       Window whose name is to be returned (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       win_name  the  Tame previously stored on the window, or an empty string
                 if no such name exists (string).

       resultlen Length of returned name (integer).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before the error value is returned, the current MPI  error  handler  is
       called.  By  default, this error handler aborts the MPI job, except for
       I/O  function  errors.  The  error  handler   may   be   changed   with
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
       may be used to cause error values to be returned. Note  that  MPI  does
       not guarantee that an MPI program can continue past an error.

Open MPI 1.2                    September 2006      MPI_Win_get_name(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
