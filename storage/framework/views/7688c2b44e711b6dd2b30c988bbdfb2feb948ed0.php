<?php $__env->startSection('content'); ?>

    <!--== Blog Page Content Start ==-->

    <div id="page-content-wrap">

        <div class="blog-page-content-wrap ">
            <div class="container-fluid">
                <br>
                <h5>Internships/Attachment</h5>
                <br>
                <div class="row">
                    <!-- Blog content Area Start -->
                    <div class="col-lg-12">
                        <div class="blog-page-contant-start">
                            <div class="row">
                            <?php $__currentLoopData = $internships; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $internship): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <!--== Single Blog Post start ==-->
                                    <div class="col-lg-3 col-md-6">
                                        <article class="single-blog-post">
                                            <figure class="blog-thumb">
                                                <div class="blog-thumbnail">
                                                    <img src="/storage/cover_images/<?php echo e($internship->cover_image); ?>" alt="Blog" class="img-fluid" />
                                                </div>

                                            </figure>

                                            <div class="blog-content">
                                                <h3><a href="/internship-details/<?php echo e($internship->id); ?>"> <?php echo str_limit($internship->title,$limit = 50, $end = '...'); ?></a></h3>
                                                <p>
                                                    <?php echo str_limit($internship->description,$limit = 150, $end = '...'); ?>


                                                </p>
                                                <a href="/internship-details/<?php echo e($internship->id); ?>" class="btn btn-brand">More</a>
                                            </div>
                                        </article>
                                    </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <!--== Single Blog Post End ==-->

                            </div>

                        </div>
                    </div>
                    <!-- Blog content Area End -->


                </div>
            </div>
        </div>
    </div>
    <!--== Blog Page Content End ==-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>