<?php if(session()->has('flash_message')): ?>

    <script type="text/javascript">
        swal({      title: "<?php echo e(session('flash_message.title')); ?>",
                    text: "<?php echo e(session('flash_message.message')); ?>",
                    type: "<?php echo e(session('flash_message.level')); ?>",
                    timer: 2300,
                   /* showConfirmButton: false */
                    confirmButtonText: "OK"
                    });


    </script>
<?php endif; ?>



<?php if(session()->has('flash_message_overlay')): ?>

    <script type="text/javascript">
        swal({      title: "<?php echo e(session('flash_message_overlay.title')); ?>",
                    text: "<?php echo e(session('flash_message_overlay.message')); ?>",
                    type: "<?php echo e(session('flash_message_overlay.level')); ?>",
                    /* showConfirmButton: false */
                    confirmButtonText: "OK"
        });


    </script>
<?php endif; ?>