<?php $__env->startSection('content'); ?>


    <!--== Gallery Page Content Start ==-->
    <section id="page-content-wrap">
        <div class="single-event-page-content ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-event-details">
                            <br>
                            <a href="/news">Go back</a>
                            <h5 class="h5 text-center"><?php echo e($post->title); ?></h5>
                            <div class="event-thumbnails">


                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <img style="height: 100px" src="/storage/cover_images/<?php echo e($post->cover_image); ?>" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-8">



                                    <?php echo $post->description; ?>

                                </div>
                            </div>

                        </div>
    </section>
    <!--== Gallery Page Content End ==-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>