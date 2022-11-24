<?php $__env->startSection('content'); ?>
    <!--== Page Title Area Start ==-->
    <section id="page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="page-title-content">
                        <h1 class="h2">All Event Archive</h1>
                        <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the
                            need</p>
                        <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Check out the events</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Gallery Page Content Start ==-->
    <section id="page-content-wrap">
        <div class="event-page-content-wrap ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="all-event-list">
                            <!-- Single Event Start -->

                            <?php if(count($events)>0): ?>
                            <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="single-upcoming-event">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="up-event-thumb">
                                            <img src="/storage/cover_images/<?php echo e($event->image); ?>" class="img-fluid" alt="Upcoming Event">
                                            <h4 class="up-event-date"><?php echo e($event->eventdate); ?></h4>
                                            <br>
                                            <i class="fa fa-map-marker"></i>&nbsp;<?php echo e($event->location); ?>

                                        </div>
                                    </div>

                                    <div class="col-lg-7">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <div class="up-event-text">
                                                    <div class="event-countdown">
                                                        <div class="event-countdown-counter" data-date="<?php echo e($event->eventdate); ?>"></div>
                                                        <p>Remaining</p>
                                                    </div>
                                                    <h3><a href="/event-details/<?php echo e($event->id); ?>"><?php echo e($event->title); ?></a></h3>
                                                    <p> <?php echo str_limit($event->details, $limit = 250, $end = '...'); ?></p>
                                                    <a href="/event-details/<?php echo e($event->id); ?>" class="btn btn-brand btn-brand-dark">View details about the event</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($events->links()); ?>

                                <?php else: ?>
                                <br><br><br>
                                <div class="alert alert-danger" role="alert">
                                  No event scheduled at this time Check back later
                                </div>
                            <?php endif; ?>
                            <!-- Single Event End -->


                        </div>
                    </div>
                </div>
                <br> <br>
            </div>
        </div>
    </section>
    <!--== Gallery Page Content End ==-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>