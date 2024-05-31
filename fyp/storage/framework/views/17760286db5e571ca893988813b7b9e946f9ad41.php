<?php $__env->startSection('content'); ?>
<!-- Page Content  -->
<div class="wrapper d-flex align-items-stretch">
    <div id="content" class="p-4 p-md-5 pt-5">
        <!-- Box with text in the middle -->
            <div class="text-center bg-light p-4">
                <h2>Articles on CyberAttacks</h2>

            </div>
            <br><br>

        <div class="mb-4" style="text-align: center;">List of available articles: </h2></p>
            <!-- Box with text in the middle for overview
            <div class="text-center bg-light p-4">
                <p>la pariatur. Excepteur sint occa</p>
                <br><br>
                <div class="text-center bg-light p-4">
                    <p>diwjdkj</p>
                </div>
            </div>-->
    </div>
    <div class="container">
        <div class="box">

          <img src="<?php echo e(asset('images/article1.jpg')); ?>" alt="MIS">
          <a href="https://ieeexplore.ieee.org/document/7592703">
          <p>Cyber-Attack Modeling Analysis Techniques: An Overview</p>
          <br>
          <p>H. Al-Mohannadi, Q. Mirza, A. Namanya, I. Awan, A. Cullen and J. Disso, "Cyber-Attack Modeling Analysis Techniques: An Overview,
            " 2016 IEEE 4th International Conference on Future Internet of Things and Cloud Workshops (FiCloudW), Vienna, Austria, 2016, pp. 69-76, doi: 10.1109/W-FiCloud.2016.29.</p>
        </div>
        <div class="box">
          <img src="<?php echo e(asset('images/article3.jpg')); ?>" alt="MIS">
          <a href="//academic.oup.com/cybersecurity/article/4/1/tyy006/5133288">
            <p>A taxonomy of cyber-harms: Defining the impacts of cyber-attacks and understanding how they propagate</p>
            <br>
          <p>Ioannis Agrafiotis, Jason R C Nurse, Michael Goldsmith, Sadie Creese, David Upton, A taxonomy of cyber-harms:
            Defining the impacts of cyber-attacks and understanding how they propagate,
            Journal of Cybersecurity, Volume 4, Issue 1, 2018, tyy006, https://doi.org/10.1093/cybsec/tyy006.</p>
        </div>
        <div class="box">
            <img src="<?php echo e(asset('images/article2.jpg')); ?>" alt="MIS">
            <a href="https://ieeexplore.ieee.org/abstract/document/4983396">
                <p>Cyberattacks: Why, What, Who, and How</p>
                <br>
            <p>S. Liu and B. Cheng, "Cyberattacks: Why, What, Who, and How," in IT Professional, vol. 11, no. 3, pp. 14-21,
                May-June 2009, doi: 10.1109/MITP.2009.46.</p>
          </div>

        <!-- Add more boxes as needed -->
      </div>
    <!--<div class="container">
        <div class="box">
            <img src="<?php echo e(asset('images/mis.jpg')); ?>" alt="MIS">
            <div class="content">
                <h3>jkekkf3jf3od3dko3ko3kfp3kfp3f2</h3>
                <p>Description 1</p>
            </div>
        </div>
        <div class="box">
            <img src="image2.jpg" alt="Image 2">
            <div class="content">
                <h2>Title 2</h2>
                <p>Description 2</p>
            </div>
        </div>
        <div class="box">
            <img src="image2.jpg" alt="Image 2">
            <div class="content">
                <h2>Title 2</h2>
                <p>Description 2</p>
            </div>
        </div>
        <div class="box">
            <img src="image2.jpg" alt="Image 2">
            <div class="content">
                <h2>Title 2</h2>
                <p>Description 2</p>
            </div>
        </div>
         Add more boxes as needed
    </div>-->
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('articleboxes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('navbar.articleleftbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Documents\GitHub\fyp\fyp\resources\views/articlepage.blade.php ENDPATH**/ ?>