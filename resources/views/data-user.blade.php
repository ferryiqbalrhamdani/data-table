<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
  </head>
  <body class="bg-primary">
    <div class="container">
        <div class="row d-flex justify-content-center py-5">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header">
                        <h3 class="text-center">Data Anggota TNI</h3>
                    </div>
                    <div class="card-body  overflow-auto">
                        <table id="example" class="table table-hover" style="width:100%">
                            <thead>
                                <tr class="table-success">
                                    <th>NRP</th>
                                    <th>Nama</th>
                                    <th>Pangkat</th>
                                    <th>Satker</th>
                                    <th>Jabatan</th>
                                    <th>JK</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                order: [[3, "desc"]],
                processing: true,
                serverSide: true,
                ajax: "{{ route('user.index') }}",
                columns: [
                    {data: 'nrp', name: 'nrp'},
                    {data: 'nama', name: 'nama'},
                    {data: 'pangkat', name: 'pangkat'},
                    {data: 'satker', name: 'satker', searchable : true, visible: false},
                    {data: 'jabatan', name: 'jabatan'},
                    {data: 'jk', name: 'jk'},
                ]
            });
        });
    </script>
  </body>
</html>