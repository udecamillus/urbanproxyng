 <!-- Jquery Core Js -->
 <script src="<?= ROOT ?>assets/bundles/libscripts.bundle.js"></script>

 <!-- Plugin Js -->
 <script src="<?= ROOT ?>assets/bundles/apexcharts.bundle.js"></script>
 <script src="<?= ROOT ?>assets/bundles/daterangepicker.bundle.js"></script>
 <script src="<?= ROOT ?>assets/bundles/dataTables.bundle.js"></script>

 <!-- Jquery Page Js -->
 <script src="<?= ROOT ?>assets/js/page/dashboard.js"></script>

 <script src="<?= ROOT ?>assets/js/custom.js"></script>
 <script src="<?= ROOT ?>assets/js/iziToast.min.js"></script>

 <script>
     <?= showAlert(); ?>
 </script>

 <script>
    
     // date range picker
     $(function() {
         $('input[name="daterange"]').daterangepicker({
             opens: 'left'
         }, function(start, end, label) {
             console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
         });
     })

     // project data table
     $('.myDataTable')
         .addClass('nowrap')
         .dataTable({
             responsive: true,
             searching: true,
             paging: true,
             ordering: true,
             info: false,
         });
 </script>