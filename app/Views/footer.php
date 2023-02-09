 <!-- COPYRIGHT-->
 <section class="p-t-60 p-b-20">
     <div class="container">
         <div class="d-flex align-items-center justify-content-between small">

             <div class="text-muted">Copyright &copy; Codage de programation <?php echo date('Y'); ?></div>

             <div>
                 <a href="https://facebook.com/codigosprogramacion" target="_blank">Facebook</a>
                 &middot;
                 <a href="https://codigosdeprogramacion.com" target="_blank">Website</a>
             </div>
         </div>
     </div>
 </section>
 <script src="<?php echo base_url(); ?>/js/jquery-3.2.1.min.js"></script>
 <!-- Bootstrap JS-->
 <script src="<?php echo base_url(); ?>/js/popper.min.js"></script>
 <script src="<?php echo base_url(); ?>/js/bootstrap.min.js"></script>
 <!-- Vendor JS       -->
 <script src="<?php echo base_url(); ?>/js/slick.min.js">
 </script>
 <script src="<?php echo base_url(); ?>/js/wow.min.js"></script>
 <script src="<?php echo base_url(); ?>/js/animsition.min.js"></script>
 <script src="<?php echo base_url(); ?>/js/bootstrap-progressbar.min.js">
 </script>
 <script src="<?php echo base_url(); ?>/js/jquery.waypoints.min.js"></script>
 <script src="<?php echo base_url(); ?>/js/jquery.counterup.min.js">
 </script>
 <script src="<?php echo base_url(); ?>/js/circle-progress.min.js"></script>
 <script src="<?php echo base_url(); ?>/js/perfect-scrollbar.js"></script>
 <script src="<?php echo base_url(); ?>/js/Chart.bundle.min.js"></script>
 <script src="<?php echo base_url(); ?>/js/select2.min.js">
 </script>

 <!-- Main JS-->
 <script src="<?php echo base_url(); ?>/js/main.js"></script>

 <!-- jQuery -->
 <script src="<?php echo base_url(); ?>/js/jquery.min.js"></script>
 <!-- Bootstrap 4 -->
 <script src="<?php echo base_url(); ?>/js/bootstrap.bundle.min.js"></script>
 <!-- DataTables  & Plugins -->



 <script src="<?php echo base_url(); ?>/js/jquery.dataTables.min.js"></script>
 <script src="<?php echo base_url(); ?>/js/js/dataTables.bootstrap4.min.js"></script>
 <script src="<?php echo base_url(); ?>/js/js/dataTables.responsive.min.js"></script>
 <script src="<?php echo base_url(); ?>/js/js/responsive.bootstrap4.min.js"></script>
 <script src="<?php echo base_url(); ?>/js/js/dataTables.buttons.min.js"></script>
 <script src="<?php echo base_url(); ?>/js/js/buttons.bootstrap4.min.js"></script>

 <script src="<?php echo base_url(); ?>/js/js/buttons.html5.min.js"></script>
 <script src="<?php echo base_url(); ?>/js/js/buttons.print.min.js"></script>
 <script src="<?php echo base_url(); ?>/js/js/buttons.colVis.min.js"></script>
 <script src="<?php echo base_url(); ?>/js/buttons.html5.js"></script>
 <script src="<?php echo base_url(); ?>/js/dataTables.buttons.js"></script>
 <script src="<?php echo base_url(); ?>/js/dataTables.buttons.js"></script>


 <!-- AdminLTE App -->
 <script src="<?php echo base_url(); ?>/js/adminlte.min.js"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="<?php echo base_url(); ?>/js/demo.js"></script>
 <!-- Page specific script -->
 <script>
     $(function() {
         $("#example1").DataTable({
             "responsive": true,
             "lengthChange": false,
             "autoWidth": false,
             "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
         }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
         $('#example2').DataTable({
             "paging": true,
             "lengthChange": false,
             "searching": false,
             "ordering": true,
             "info": true,
             "autoWidth": false,
             "responsive": true,
         });
     });
 </script>
 </body>

 </html>