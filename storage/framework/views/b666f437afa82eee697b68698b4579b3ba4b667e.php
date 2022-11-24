<?php $__env->startSection('content'); ?>
    <!--== Page Title Area Start ==-->
    <section id="page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="page-title-content">
                        <h1 class="h2">News &amp;Notices</h1>

                        <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Check out <i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->
    <!--== Blog Page Content Start ==-->

    <div id="page-content-wrap">

        <div class="blog-page-content-wrap ">
            <div class="container-fluid">
                <br>
                <div class="row">
                    <!-- Blog content Area Start -->
                    <div class="col-lg-12">
                        <div class="blog-page-contant-start">
                            <div class="row">
<?php $__currentLoopData = $notices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <!--== Single Blog Post start ==-->
                                <div class="col-lg-3 col-md-6">
                                    <article class="single-blog-post">
                                        <figure class="blog-thumb">
                                            <div class="blog-thumbnail">
                                                <img src="/storage/cover_images/<?php echo e($notice->cover_image); ?>" alt="Blog" class="img-fluid" />
                                            </div>
                                            <figcaption class="blog-meta clearfix">
                                                <a href="" class="author">
                                                    <div class="author-pic">
                                                        <img src="assets/img/blog/author.jpg" alt="Author">
                                                    </div>
                                                    <div class="author-info">

                                                        <p>2 hours Ago</p>
                                                    </div>
                                                </a>
                                                <div class="like-comm pull-right">

                                                </div>
                                            </figcaption>
                                        </figure>

                                        <div class="blog-content">
                                            <h3><a href="/news-details/<?php echo e($notice->id); ?>"> <?php echo str_limit($notice->title,$limit = 50, $end = '...'); ?></a></h3>
                                            <p>
                                                    <?php echo str_limit($notice->description,$limit = 150, $end = '...'); ?>


                                                    </p>
                                            <a href="/news-details/<?php echo e($notice->id); ?>" class="btn btn-brand">More</a>
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