<?php $__env->startSection('content'); ?>

<!-- Page Content  -->
<div class="wrapper d-flex align-items-stretch">
    <div id="content" class="p-4 p-md-5 pt-5">
        <!-- Box with text in the middle -->
        <a href="<?php echo e(route('profile.profilefrontpage')); ?>"><-Back</a>
        <br><br>

        <h2> Share your feedback</h2>
        <h5>We value your feedback! Your thoughts are important to us as we strive to continuously enhance your experience.
            Share your comments with us, and let's build something great together!</h5>
        <br><br>
        <p>Please leave your feedback in the form below:</p>
        <br>
        <p> (feedback form here which the table of user feedbacks will display in the admin list of feedback page.)</p>

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
<?php echo $__env->make('navbar.profileleftbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Documents\GitHub\fyp\fyp\resources\views/feedback/userfeedback.blade.php ENDPATH**/ ?>