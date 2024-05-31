<?php $__env->startSection('content'); ?>
<!-- Page Content  -->
<div class="wrapper d-flex align-items-stretch">
    <div id="content" class="p-4 p-md-5 pt-5">
        <!-- Box with text in the middle -->
            <div class="text-center bg-light p-4">

                <p><h3> Welcome to Admin Dashboard Management
                </h3>
            </p>


            </div>
            <br><br>
            <br><br>

            <body>

                <div class="gallery">
                  <div class="gallery-item">
                    <img src="<?php echo e(asset('images/upload.png')); ?>" alt="UPLOAD">
                    <div class="textbox">
                        <a href="<?php echo e(route('uploadfile')); ?>">Upload Contents</a>

                    </div>
                  </div>
                  <div class="gallery-item">
                    <img src="<?php echo e(asset('images/feedback.jpg')); ?>" alt="FEEDBACK">
                    <div class="textbox">
                        <a href="<?php echo e(route('course.coursepage')); ?>">Feedbacks</a>
                        <br>

                    </div>
                  </div>
                  <div class="gallery-item">
                    <img src="<?php echo e(asset('images/quiz.jpg')); ?>" alt="QUIZ">
                    <div class="textbox">
                        <a href="<?php echo e(route('course.coursepage')); ?>">Manage Quiz</a>
                        <br><br>

                    </div>
                  </div>
                  <!--<div class="gallery-item">
                    <img src="<?php echo e(asset('images/audit.jpg')); ?>" alt="AUDIT">
                    <div class="textbox">
                        <a href="<?php echo e(route('course.coursepage')); ?>">Control & Audit of Information System</a>
                        <br>
                      <p>IT audits ensure that controls protect company assets, preserve data integrity, and align with business goals.
                        It confirms the proper functioning of information-related controls and processes.</p>
                    </div>
                  </div>-->
                </div>

                </body>
    </div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('dashboxes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('navbar.adminleftbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Documents\GitHub\fyp\fyp\resources\views/admindashboard.blade.php ENDPATH**/ ?>