<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <?php if(count($tests)>0): ?>
            <?php $__currentLoopData = $tests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-4">
                <article class="single-blog-post">



                    <div class="blog-content">
                        <blockquote>

                        </blockquote>
                       <p><?php echo $test->testimonial; ?></p>
                        <a href="" class="btn btn-brand">by &nbsp;<?php echo e($test->names); ?></a>
                    </div>
                </article>
            </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <div class="container-fluid">
                    <p>No testimonials at this time, check back later</p>
                </div>
                <?php endif; ?>

        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>