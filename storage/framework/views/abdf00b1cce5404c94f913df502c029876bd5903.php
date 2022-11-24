<?php $__env->startSection('content'); ?>
    <!--== Slider Area Start ==-->
    <section id="slider-area">
        <div class="slider-active-wrap owl-carousel text-center text-md-left">
            <!-- Single Slide Item Start -->
            <div class="single-slide-wrap slide-bg-1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="slider-content">
                                <h2>We Are Proud</h2>
                                <h3>Students of <span style="color: goldenrod !important;">SMK PRAKARYA INTERNASIONAL </span></h3>
                                <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need (academic, relocation, career, projects, mentorship, etc. you can ask the community and get responses in three.</p>
                                <div class="slider-btn">
                                    <a href="/about" class="btn btn-brand smooth-scroll">our mission</a>
                                    <a href="about" class="btn btn-brand-rev">our story</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide Item End -->

            <!-- Single Slide Item Start -->
            <div class="single-slide-wrap slide-bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="slider-content">
                                <h2>We Are Proud</h2>
                                <h3>Students of <span style="color: goldenrod !important;">SMK PRAKARYA INTERNASIONAL </span></h3>
                                <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need (academic, relocation, career, projects, mentorship, etc. you can ask the community and get responses in three.</p>
                                <div class="slider-btn">
                                    <a href="/about" class="btn btn-brand smooth-scroll">our mission</a>
                                    <a href="about" class="btn btn-brand-rev">our story</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide Item End -->

            <!-- Single Slide Item Start -->
            <div class="single-slide-wrap slide-bg-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="slider-content">
                                <h2>We Are Proud</h2>
                                <h3>Students of <span style="color: goldenrod !important;">SMK PRAKARYA INTERNASIONAL </span></h3>
                                <p>Kebutuhan Alumni memungkinkan Anda untuk memanfaatkan kekuatan jaringan alumni Anda. Apa pun yang mungkin dibutuhkan (akademik, relokasi, karir, proyek, bimbingan, dll. Anda dapat bertanya kepada komunitas dan mendapatkan tanggapan dalam tiga.</p>
                                <div class="slider-btn">
                                    <a href="/about" class="btn btn-brand smooth-scroll">Misi Kami</a>
                                    <a href="about" class="btn btn-brand-rev">Sejarah Kami</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide Item End -->
        </div>

        <!-- Social Icons Area Start -->
        <div class="social-networks-icon">
            <ul>
                <li><a href="#"><i class="fa fa-facebook"></i> <span>7.2k Likes</span></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i> <span>80k Followers</span></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i> <span>7.2k Likes</span></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i> <span>2.2k Subscribers</span></a></li>
            </ul>
        </div>
        <!-- Social Icons Area End -->
    </section>
    <!--== Slider Area End ==-->
    <!--== Upcoming Event Area Start ==-->
    <section id="upcoming-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="upcoming-event-wrap">
                        <div class="up-event-titile">
                            <h3>Upcoming events</h3>
                        </div>
                        <div class="upcoming-event-content owl-carousel">
                            <!-- No 1 Event -->
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
                            <!-- partial -->
                                <?php else: ?>
                                <div class="alert alert-danger" role="alert">
                                    <p>No upcoming events.</p>
                                </div>

                                <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Upcoming Event Area End ==-->

    <!--== About Area Start ==-->
    <section id="about-area" class="section-padding">
        <div class="about-area-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-10 ml-auto">
                        <div class="about-content-wrap">
                            <div class="section-title text-center text-lg-left">
                                <h2>Tekad Kami</h2>
                            </div>

                            <div class="about-thumb">
                                <img src="assets/img/bg.JPG" alt="" class="img-fluid">
                            </div>

                            <ul>
                                <li>
                                    <p>
                                    Mewujudkan pelayanan pendidikan prima, sejalan dengan delapan standar nasional pendidikan dan sesuai dengan visi kami, yaitu menjadi SMK yang unggul, kompetitif, berdaya saing nasional dan internasional dengan menghasilkan pribadi-pribadi berakhlak mulia, cerdas, mandiri, bertanggung jawab, memiliki jiwa kewirausahaan yang berkeahlian siap kerja dan mampu bersaing di pasar global.
                                    </p>
                                    
                                </li>
                            </ul>
                            <a href="/about" class="btn btn-brand about-btn">know more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== About Area End ==-->

    <!--== Our Responsibility Area Start ==-->
    <section id="responsibility-area" class="section-padding">
        <div class="container">
            <!--== Section Title Start ==-->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Our Responsibility</h2>
                    </div>
                </div>
            </div>
            <!--== Section Title End ==-->

            <!--== Responsibility Content Wrapper ==-->
            <div class="row text-center text-sm-left">
                <!--== Single Responsibility Start ==-->
                <div class="col-lg-6 col-sm-12">
                    <div class="single-responsibility">
                        <center>
                            <img src="img/responsibility/01.png" alt="Responsibility">
                        </center>

                        <h4 class="text-center">Visi</h4>
                        <hr>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente enim voluptatibus ad, molestias illo quas aliquid adipisci in similique laudantium itaque nisi eius eos illum rerum debitis incidunt excepturi ea?
                        </p>
                    </div>
                </div>
                <!--== Single Responsibility End ==-->

                <!--== Single Responsibility Start ==-->
                <div class="col-lg-6 col-sm-12">
                    <div class="single-responsibility">
                        <center>
                            <img src="img/responsibility/02.png" alt="Responsibility">
                        </center>

                        <h4 class="text-center">Misi</h4>
                        <hr>
                        <p>
                            Menjadi SMK yang unggul, kompetitif berdaya saing nasional dan internasional dengan menghasilkan pribadi-pribadi berakhlak mulia, cerdas, mandiri, bertanggungjawab, memiliki jiwa kewirausahaan yang berkeahlian siap kerja dan mampu bersaing dipasar global


                        </p>
                    </div>
                </div>
                <!--== Single Responsibility End ==-->



            </div>
            <!--== Responsibility Content Wrapper ==-->
        </div>
    </section>
    <!--== Our Responsibility Area End ==-->


    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>