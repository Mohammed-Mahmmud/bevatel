 <!-- JAVASCRIPT -->
 <script src="<?php echo e(asset('dashboard/assets/js/extensions/jquery-3.7.1.min.js')); ?>"></script>
 <script src="<?php echo e(asset('dashboard/assets/libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
 <script src="<?php echo e(asset('dashboard/assets/libs/simplebar/simplebar.min.js')); ?>"></script>
 <!--Swiper slider js-->
 <script src="<?php echo e(asset('dashboard/assets/css/extensions/fontawesome-5.15.3/js/all.min.js')); ?>"></script>
 <script src="<?php echo e(asset('dashboard')); ?>/assets/libs/swiper/swiper-bundle.min.js"></script>
 <script src="<?php echo e(asset('dashboard/assets/js/extensions/select2.min.js')); ?>"></script>
 <script src="<?php echo e(asset('dashboard/assets/js/extensions/dropzone.js')); ?>"></script>
 <script src="<?php echo e(asset('dashboard/assets/js/extensions/popper.min.js')); ?>"></script>
 <script src="<?php echo e(asset('dashboard/assets/js/extensions/flasher.min.js')); ?>"></script>
 <!-- Layout config Js -->
 <script src="<?php echo e(asset('dashboard')); ?>/assets/multiSelect/js/multiselect.js"></script>
 <script src="<?php echo e(asset('dashboard')); ?>/assets/js/layout.js"></script>
 <!-- App js -->
 <script src="<?php echo e(asset('dashboard')); ?>/assets/js/app.js"></script>
 <script src="<?php echo e(asset('dashboard')); ?>/assets/js/dashboard.js"></script>
 
 <script src="<?php echo e(asset('dashboard/assets/js/extensions/toastr.min.js')); ?>"></script>

 
 <script src="<?php echo e(asset('dashboard/assets/datatables/dataTables.min.js')); ?>"></script>
 <script src="<?php echo e(asset('dashboard/assets/datatables/tables.js')); ?>"></script>

 
 <script src="<?php echo e(asset('dashboard')); ?>/assets/js/syncDatabases.js"></script>

 
 <script>
     $(document).ready(function() {
         // Target the header and remove the classes
         $('.form-check-all').removeAttr('data-dt-column');
         // Use DataTables' `draw` event to ensure they stay removed after rendering
         $('#table_id').on('draw.dt', function() {
             $('.form-check-all').removeAttr('data-dt-column');
         });
     });
 </script>
 <script src="<?php echo e(asset('dashboard/assets/libs/sweetalert2/sweetalert2.min.js')); ?>"></script>
 <script src="<?php echo e(asset('dashboard')); ?>/assets/js/plugins.js"></script>
 <script src="<?php echo e(asset('dashboard')); ?>/assets/libs/list.js/list.min.js"></script>
 <script src="<?php echo e(asset('dashboard')); ?>/assets/js/pages/listjs.init.js"></script>
 <?php echo $__env->yieldContent('js'); ?>
<?php /**PATH /home/mohamed-khater/Documents/projects/bevatel/bevatel/resources/views/dashboard/layouts/scripts.blade.php ENDPATH**/ ?>