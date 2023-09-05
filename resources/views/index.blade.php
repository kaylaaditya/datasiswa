<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Siswa</title>
    <h1>Tabel Siswa</h1>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />

    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>

    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Bootstrap untuk DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js">
</head>

<body>
    <div>
        <table class="table table-boorded" id="siswa">
            <!-- <caption>Tabel Siswa</caption> -->
            <thead class="table-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nis</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">No Telp</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Berat badan</th>
                    <th scope="col">Tinggi Badan</th>
                </tr>
            </thead>
        </table>
    </div>

    <script>
        $(function() {
            var t = $('#siswa').DataTable({
                processing: true,
                serverSide: true,
                info: false,
                ajax: {
                    "url": "{{ route('siswa.dt') }}",
                    "dataSrc": ""
                },

                columns: [{
                        data: 'id'
                    },
                    {
                        data: 'nis'
                    },
                    {
                        data: 'nama'
                    },
                    {
                        data: 'jenis_kelamin'
                    },
                    {
                        data: 'no_telepon'
                    },
                    {
                        data: 'alamat'
                    },
                    {
                        data: 'berat_badan'
                    },
                    {
                        data: 'tinggi_badan'
                    },
                ],

            });
        });
    </script>
</body>


</html>