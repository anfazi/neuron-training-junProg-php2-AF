
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>
    <!-- Custom fonts for this template -->
    <link href="{{asset('admin_assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('admin_assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{asset('admin_assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Barang</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Judul</h1>
                    <p class="mb-4">Isi</p>
                    <!-- DataTables Example -->
                    <div class="card shadow mb-4">
                        @if (session('status'))
                            <div class="aler alert-success">{{ session('status') }}</div>
                        @endif
                        <div class="card-header py-3">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah">Tambah Data</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center align-middle">
                                            <th>Nama Barang</th>
                                            <th>Harga Barang</th>
                                            <th>Ketersediaan Barang</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($data as $row)
                                    <tr class="text-center align-middle">
                                        <td>{{ $row->nama_barang }}</td>
                                        <td>Rp.{{ $row->harga }}</td>
                                        <td>{{ $row->ketersediaan }}</td>
                                        <td>
                                            <button type="button" value="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapus">Delete</button>
                                            <button type="button" value="{{ $row->id }}" class="btn btn-primary editBtn">Edit</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


<!-- add barang -->
    <div id="modalTambah" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ url('add-barang') }}" method="POST">
                    @csrf
                    <div class="modal-header">						
                        <h4 class="modal-title" id="modalHeading">Tambah Barang</h4>
                    </div>
                    <div class="modal-body">					
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input type="text" class="form-control" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label>Harga Barang</label>
                            <input type="number" class="form-control" name="harga" required>
                        </div>
                        <div class="form-group">
                            <label>Ketersediaan Barang</label>
                            <input list="ketersediaanBarang" name="ketersediaan" id="browser" class="form-control" required>
                            <datalist id="ketersediaanBarang" >
                                <option value="Ya">
                                <option value="Tidak">
                            </datalist>
                        </div>				
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- Edit barang -->
    <div id="modalEdit" class="modal fade">
        
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ url('update-barang') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="id" name="id" value=""/>
                    <div class="modal-header">						
                        <h4 class="modal-title" id="modalHeading">Edit Barang</h4>
                    </div>
                    <div class="modal-body">					
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input type="text" id="nama" class="form-control" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label>Harga Barang</label>
                            <input type="number" id="harga" class="form-control" name="harga" required>
                        </div>
                        <div class="form-group">
                            <label>Ketersediaan Barang</label>
                            <input list="ketersediaanBarang" name="ketersediaan" id="ketersediaan" class="form-control" required>
                            <datalist id="ketersediaanBarang">
                                <option value="Ya">
                                <option value="Tidak">
                            </datalist>
                        </div>				
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success" value="Edit">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

<!-- Delete barang -->
    <div id="modalHapus" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ url('add-barang') }}" method="POST">
                    @csrf
                    <div class="modal-header">						
                        <h4 class="modal-title" id="modalHeading">Apakah Anda Yakin akan Menghapus Barang?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('admin_assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('admin_assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('admin_assets/js/sb-admin-2.min.js')}}"></script>
    
    <!-- Page level plugins -->
    <script src="{{asset('admin_assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('admin_assets/js/demo/datatables-demo.js')}}"></script>


</body>
<script>

    $(document).ready(function () {
        
        $(document).on('click', '.editBtn', function() {
            var id = $(this).val();
            $('#modalEdit').modal('show');

            $.ajax({
                type: "GET",
                url: "/edit-barang/"+id,
                success: function (response) {
                    $('#nama').val(response.barang.nama_barang);
                    $('#harga').val(response.barang.harga);
                    $('#ketersediaan').val(response.barang.ketersediaan);
                    $('#id').val(id);
                }
                });
            })
        });
</script>  
  
</html>