<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="<?php echo e(asset ('import/style.css')); ?>" rel="stylesheet">

<!-- Scripts -->
<div class="wrapper d-flex align-items-stretch">
    <?php echo $__env->yieldContent('chapter'); ?>
    <div id="content" class="p-4 p-md-5 pt-5">
        <h1 class="mb-4">Chapter 1: Introduction to Information Security Management <?php echo $__env->yieldContent('chaptitle'); ?></h1>
        <!-- Box with text in the middle -->
        <div class="text-center bg-light p-4">
            <?php echo $__env->yieldContent('overview'); ?>
            <p>An overview of information security is provided in this chapter, along with information on its properties, sources, and effects on both persons and organizations.
                Additionally, it addresses the ISO/IEC 27002 standard and how information security relates to the SDGs and Maqasid Shariah.
            </p>
        </div>

        <h4>Video lesson links</h4>
        <div class="link">
            <i class="fas fa-file-video"></i>
            <a href="https://www.youtube.com/watch?v=Wp_9nsEHjn8">Intro to InfoSec</a><!-- Link to external video -->
        </div>

        <h4>Reading Notes:</h4>
        <div class="link">
            <i class="fas fa-book"></i>
            <!--<a href="<?php echo e(asset('storage/private/private/uploads/Week 4 - Project Initiation.pdf')); ?>">Week 4 - Project Initiation.pdf</a>-->
            <a href="<?php echo e(route('get-file')); ?>" target="_blank">Week 4 - Project Initiation.pdf</a>
            <!--<a href="https://www.youtube.com/watch?v=Wp_9nsEHjn8">Intro to InfoSec</a> Link to external video -->
        </div>

        <h4>Visual Notes:</h4>
        <div class="link">
            <i class="fas fa-file-import"></i>
            <a href="https://www.youtube.com/watch?v=Wp_9nsEHjn8">Intro to InfoSec</a><!-- Link to external video -->
        </div>

        <h4>Exercise Module:</h4>
        <div class="link">
            <i class="fas fa-file-import"></i>
            <a href="https://www.youtube.com/watch?v=Wp_9nsEHjn8">Intro to InfoSec</a><!-- Link to external video -->
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('navbar.leftbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Documents\GitHub\fyp\fyp\resources\views/chapter/chapterpage.blade.php ENDPATH**/ ?>