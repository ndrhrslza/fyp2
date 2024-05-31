


<?php $__env->startSection('content'); ?>
<!-- Page Content  -->
<div class="wrapper d-flex align-items-stretch">
    <div id="content" class="p-4 p-md-5 pt-5">
        <!-- Box with text in the middle -->
            <div class="text-center bg-light p-4">

                <p><h3>حَدَّثَنَا عَلِيُّ بْنُ مَيْمُونٍ الرَّقِّيُّ، حَدَّثَنَا أَبُو خُلَيْدٍ، عُتْبَةُ بْنُ حَمَّادٍ الدِّمَشْقِيُّ عَنِ ابْنِ ثَوْبَانَ، عَنْ عَطَاءِ بْنِ قُرَّةَ، عَنْ عَبْدِ اللَّهِ بْنِ ضَمْرَةَ السَّلُولِيِّ، قَالَ حَدَّثَنَا أَبُو هُرَيْرَةَ، قَالَ سَمِعْتُ رَسُولَ اللَّهِ ـ صلى الله عليه وسلم ـ وَهُوَ يَقُولُ ‏ "‏ الدُّنْيَا مَلْعُونَةٌ مَلْعُونٌ مَا فِيهَا إِلاَّ ذِكْرَ اللَّهِ وَمَا وَالاَهُ أَوْ عَالِمًا أَوْ مُتَعَلِّمًا ‏"‏ ‏.‏

                </h3>
            </p>

                <p>Abu Hurairah said: “I heard the Messenger of Allah (ﷺ) saying:
                    ‘This world is cursed and what is in it is cursed, except the remembrance of Allah (dhikr) and what is conducive to that, or one who has knowledge or who acquires knowledge.’”

                </p>
            </div>
            <br><br>
            <h2 style="text-align: center;">List of available courses: </h2>
            <br><br>


            <body>

                <div class="gallery">
                  <div class="gallery-item">
                    <a href="<?php echo e(route('course.coursepage')); ?>">
                    <img src="<?php echo e(asset('images/mis.jpg')); ?>" alt="MIS">
                    <div class="textbox">
                        <a href="<?php echo e(route('course.coursepage')); ?>">Management of Information Security</a>
                      <!--<p>Learn how to manage information security efficiently. Prepare to excel in information security management, protecting systems
                        and networks in a world of increasing threats and successful cyber attacks. </p>-->
                    </div>
                  </div>
                  <div class="gallery-item">
                    <a href="<?php echo e(route('course.bcdrcoursepage')); ?>">
                    <img src="<?php echo e(asset('images/bcdr.jpg')); ?>" alt="BCDR">
                    <div class="textbox">
                        <a href="<?php echo e(route('course.bcdrcoursepage')); ?>">Business Continuity & Disaster Recovery</a>
                        <br>
                      <!--<p>Methods and procedures are used to help a company recover from a disaster and resume normal business activities.
                        It incorporates both IT and business duties in the aftermath of a disaster.</p>-->
                    </div>
                  </div>
                  <div class="gallery-item">
                    <a href="<?php echo e(route('course.riskcoursepage')); ?>">
                    <img src="<?php echo e(asset('images/risk.jpeg')); ?>" alt="RISK">
                    <div class="textbox">
                        <a href="<?php echo e(route('course.riskcoursepage')); ?>">Risk Management</a>
                        <br><br>
                      <!--<p>A continual process of identifying, analyzing, assessing, and managing potential risks that include
                         monitoring risk control processes as well as financial resources to reduce the negative effects of losses.
                    </p>-->
                    </div>
                  </div>
                  <div class="gallery-item">
                    <a href="<?php echo e(route('course.auditcoursepage')); ?>">
                    <img src="<?php echo e(asset('images/audit.jpg')); ?>" alt="AUDIT">
                    <div class="textbox">
                        <a href="<?php echo e(route('course.auditcoursepage')); ?>">Control & Audit of Information System</a>
                        <br>
                      <!--<p>IT audits ensure that controls protect company assets, preserve data integrity, and align with business goals.
                        It confirms the proper functioning of information-related controls and processes.</p>-->
                    </div>
                  </div>
                </div>

                </body>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('dashboxes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('navbar.dashboardleftbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\nadirah\Documents\GitHub\fyp\fyp\resources\views/dashboard.blade.php ENDPATH**/ ?>