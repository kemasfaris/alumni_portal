<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div id="side-nav" style="height: 100vh !important;" class="col-lg-2">
                <div id="side-nav-overlay">
                    <?php echo $__env->make('inc.admin-sidenav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
            <div class="col-lg-10">
                <!--== Blog Page Content Start ==-->
                <div   id="page-content-wrap">
                    <div style="padding-top: 10px !important;" class="blog-page-content-wrap ">
                        <div  class="container">
                            <div  class="row">
                                <!-- Blog content Area Start -->
                                <div   class="col-lg-12">
                                    <div  class="blog-page-contant-start">
                                        <div class="row">
                                            <!--== Single Blog Post start ==-->
                                            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div  class="col-lg-4 col-md-4">
                                                    <article class="single-blog-post">
                                                        <figure class="blog-thumb">
                                                            <div class="blog-thumbnail">
                                                                <img src="/storage/cover_images/<?php echo e($post->cover_image); ?>" alt="Blog" class="img-fluid" />
                                                            </div>
                                                        <figcaption class="blog-meta clearfix">


                                                        </figcaption>
                                                        </figure>

                                                        <div class="blog-content">
                                                            <h3><a href="/Notices/<?php echo e($post->id); ?>/edit"><?php echo e($post->title); ?></a></h3>
                                                            <p><?php echo str_limit($post->description, $limit = 150, $end = '...'); ?></p>
                                                            <a href="/Notices/<?php echo e($post->id); ?>/edit" class="btn btn-lg btn-warning ">View and edit</a>
                                                        </div>
                                                    </article>
                                                </div>
                                                <!--== Single Blog Post End ==-->
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                                        </div>

                                        <!-- Pagination Start -->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="pagination-wrap text-center">

                                                </div>
                                            </div>
                                        </div>
                                        <!-- Pagination End -->
                                    </div>
                                </div>
                                <!-- Blog content Area End -->


                            </div>
                        </div>
                    </div>
                </div>
                <!--== Blog Page Content End ==-->
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>