@extends('layouts.school_app')

@section('content')
<div id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('inc.school_sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                
                @include('inc.school_topbar')
                @include('inc.message')
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">

                     
                        <div class="pt-3"></div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Payment Summary</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                           
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        
                                            <th>STUDENT NO.</th>
                                            <th>NAME</th>
                                            <th>GENDER</th>
                                            <th>DOB</th>
                                            <th>DISABILITY</th>
                                            <th>EMAIL</th>
                                            <th>PHONE NUMBER</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>    
                                                                             
                                        <th>STUDENT NUMBER</th>
                                            <th>NAME</th>
                                            <th>GENDER</th>
                                            <th>DOB</th>
                                            <th>DISABILITY</th>
                                            <th>EMAIL</th>
                                            <th>PHONE NUMBER</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                   
                                        <tr>
                                            <td>input data </td>
                                            <td>input data </td>
                                            <td>input data</td>
                                            <td>input data</td>
                                            <td>input data</td>
                                            <td>input data</td>
                                            <td>input data}</td>
                                            <td><div class="pt-1">
                                                <button data-toggle="modal" data-target="#" class="btn btn-danger ">
                                                <i class="fas fa-list "></i>
                                                </button>
                                            </div>
                                           </td>
                                                    
                                        </tr>
                                       
                                    
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
                        <span>Copyright &copy; Dayepsoft ltd 2021</span>
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    
    <script src="js/passportPreviewScripts.js"></script>
</body>

</html>
<!-- implement school register
    make of table of codes with name of schools
    select if a code is equal to the code on table
    the open a school Profile Registration to

    Payment
    Add another column and on the student table
    the number should be incrementing as the number of student on the 
    payment table is decrementing

    when the number of students is 0 on the payment table, 
    student cannot be registered
-->