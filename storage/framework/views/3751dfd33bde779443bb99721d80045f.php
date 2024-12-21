 <!-- JAVASCRIPT -->
 <script src="<?php echo e(asset('dashboard/assets/js/extensions/jquery-3.7.1.min.js')); ?>"></script>
 <script src="<?php echo e(asset('dashboard/assets/libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
 <script src="<?php echo e(asset('dashboard/assets/js/extensions/flasher.min.js')); ?>"></script>
 <!-- Layout config Js -->
 <script src="<?php echo e(asset('dashboard')); ?>/assets/js/layout.js"></script>
 <!-- App js -->
 <script src="<?php echo e(asset('dashboard')); ?>/assets/js/app.js"></script>
 <script src="<?php echo e(asset('dashboard')); ?>/assets/js/dashboard.js"></script>
 
 <script src="<?php echo e(asset('dashboard/assets/js/extensions/toastr.min.js')); ?>"></script>

 
 <?php if(Session::has('message')): ?>
     <script>
         toastr.success("<?php echo e(Session::get('message')); ?>");
     </script>
 <?php endif; ?>
 <?php echo $__env->yieldContent('js'); ?>
<?php /**PATH /home/mohamed-khater/Documents/projects/bevatel/bevatel/resources/views/dashboard/layouts/scripts.blade.php ENDPATH**/ ?>