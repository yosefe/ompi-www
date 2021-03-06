#include <stdio.h>
#include <stdint.h>

#include "mpi.h"

int main (int argc, char * argv[])
{
    int comm_size, comm_rank;
    char processor_name[MPI_MAX_PROCESSOR_NAME];
    int len;
    int rc;
    MPI_Info info;
    char * ptr;

    MPI_Init (&argc, &argv);
    MPI_Comm_size (MPI_COMM_WORLD, &comm_size);
    MPI_Comm_rank (MPI_COMM_WORLD, &comm_rank);

    MPI_Get_processor_name (processor_name, &len);


    MPI_Info_create (&info);

    if (0 == comm_rank) {
        printf ("1. MPI_Allocmem w/ MPI_INFO_NULL\n");
        rc = MPI_Alloc_mem (1024, MPI_INFO_NULL, &ptr);
        if (MPI_SUCCESS != rc || ptr == NULL)
          printf ("(Rank:%d) Error:%d after MPI_Alloc_mem\n",
                  comm_rank, rc);

        printf ("2. MPI_Allocmem w/ rubbish key\n");
        rc = MPI_Info_set (info, "zipp", "nada");
        if (MPI_SUCCESS != rc)
          printf ("(Rank:%d) Error:%d after MPI_Info_set\n",
                  comm_rank, rc);
        rc = MPI_Alloc_mem (1024, info, &ptr);
        if (MPI_SUCCESS != rc || ptr == NULL)
          printf ("(Rank:%d) Error:%d after MPI_Alloc_mem\n",
                  comm_rank, rc);

        printf ("3. MPI_Allocmem w/ mpool and good value\n");
        rc = MPI_Info_set (info, "mpool", "sm");
        if (MPI_SUCCESS != rc)
          printf ("(Rank:%d) Error:%d after MPI_Info_set\n",
                  comm_rank, rc);
        rc = MPI_Alloc_mem (1024, info, &ptr);
        if (MPI_SUCCESS != rc || ptr == NULL)
          printf ("(Rank:%d) Error:%d after MPI_Alloc_mem\n",
                  comm_rank, rc);

        printf ("4. MPI_Allocmem w/ mpool but rubbish value, EXPECT FAILURE\n");
        rc = MPI_Info_set (info, "mpool", "kjsahdfk");
        if (MPI_SUCCESS != rc)
          printf ("(Rank:%d) Error:%d after MPI_Info_set\n",
                  comm_rank, rc);
        rc = MPI_Alloc_mem (1024, info, &ptr);
        if (MPI_SUCCESS != rc || ptr == NULL)
          printf ("(Rank:%d) Error:%d after MPI_Alloc_mem\n",
                  comm_rank, rc);
    }

    MPI_Finalize ();

    return 0;
}

