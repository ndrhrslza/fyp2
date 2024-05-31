<?php $__env->startSection('content'); ?>

<!-- Page Content  -->
<div class="wrapper d-flex align-items-stretch">
    <div id="content" class="p-4 p-md-5 pt-5">
        <!-- Box with text in the middle -->
        <h1> Hi,username!</h1>
        <br><br>
        <p>(Put the user learning progress in this area)</p>
        <br><br>

            <!--<div class="text-center bg-light p-4">-->
                <h3><a href="<?php echo e(route('dashboard')); ?>" style="text-decoration: none; color: black;">Edit Profile</a></h3>
                <br>
                <hr class="short-line">
                <br>
                <h3><a href="<?php echo e(route('feedback.userfeedback')); ?>" style="text-decoration: none; color: black;">Feedback</a></h3>
                <br>
                <hr class="short-line">
                <br>
                <h3><a href="<?php echo e(route('landingpage')); ?>" style="text-decoration: none; color: black;">Sign Out</a></h3>

            </div>
            <br><br>

        <!--<div class="mb-4" style="text-align: center;">List of available articles: </h2></p>
             Box with text in the middle for overview
            <div class="text-center bg-light p-4">
                <p>la pariatur. Excepteur sint occa</p>
                <br><br>
                <div class="text-center bg-light p-4">
                    <p>diwjdkj</p>
                </div>
            </div>
    </div>


</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('profileoptions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('navbar.profileleftbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Documents\GitHub\fyp\fyp\resources\views/profile/profilefrontpage.blade.php ENDPATH**/ ?>