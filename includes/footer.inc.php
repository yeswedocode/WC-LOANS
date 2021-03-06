 </div>
 <a class="scroll-to-top rounded" href="#page-top">
     <i class="fas fa-angle-up"></i>
 </a>

 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
 <script src="sweetAlert/jquery-3.5.1.min.js"></script>
 <script src="sweetAlert/sweetalert2.all.min.js"></script>
 <script>
     $(document).ready(function() {
         $(".table").prepend($("<thead></thead>").append($(this).find("tr:first"))).dataTable();
     });

 </script>
 <script src="vendor/jquery/jquery.min.js"></script>
 <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="datatables/js/jquery.dataTables.min.js"></script>
 <script src="js/jquery.dataTables.js"></script>
 <script src="js/dataTables.bootstrap4.js"></script>
 <script src="js/dataTables-demo.js"></script>
 <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
 <script src="js/sb-admin-2.min.js"></script>
 <script src="vendor/chart.js/Chart.min.js"></script>
 <script src="js/demo/chart-area-demo.js"></script>
 <script src="js/demo/chart-pie-demo.js"></script>

 </body>

 </html>
