<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div id="side-nav" style="height: 100vh !important;" class="col-lg-2">
                <div id="side-nav-overlay">
                    <?php echo $__env->make('inc.alumni-sidenav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
            <div class="col-lg-10">

                <div class="row">
                    <div class="col-lg-4">
                        <center>
                        <img style="height: 100px;width: 100px;border-radius: 50%" src="/storage/cover_images/<?php echo e($user->Avatar); ?>" alt="">
                        <br>
                        <?php echo e($user->First_Name); ?>&nbsp; <?php echo e($user->Middle_Name); ?>

                        </center>
                       <ul class="list-group">
                           <br>
                           <a href="/Alumni/<?php echo e($user->id); ?>/edit">
                               <li style="border-radius: 0px !important;" class="list-group-item">Edit your profile</li>
                           </a>
                           <a href="/Alumni/Internships"> <li style="border-radius: 0px !important;" class="list-group-item">View your internship posts</li></a>

                           <a href="/Alumni/Jobs"> <li style="border-radius: 0px !important;" class="list-group-item">View your jobs posts</li></a>

                       </ul>
                    </div>
                    <div class="col-lg-8">
                        <h4>Profile</h4>

                        <div class="row">

                            <div class="col-lg-12">
                                <table class="table table-hover">

                                    <tbody>
                                    <tr>
                                        <td><b>Names</b></td>
                                        <td> <?php echo e($user->First_Name); ?>&nbsp; <?php echo e($user->Middle_Name); ?> <?php echo e($user->Surname); ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Phone number</b></td>
                                        <td> <?php echo e($user->Phone_Number); ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Working Station</b></td>
                                        <td> <?php echo e($user->Work_station); ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Course</b></td>
                                        <td> <?php echo e($user->Course); ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Profession</b></td>
                                        <td> <?php echo e($user->Profession); ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Location</b></td>
                                        <td> <?php echo e($user->Location); ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Year</b></td>
                                        <td>joined <?php echo e($user->Year_joined); ?>&nbsp;graduated <?php echo e($user->Year_graduated); ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Email</b></td>
                                        <td> <?php echo e($user->email); ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Gender</b></td>
                                        <td> <?php echo e($user->gender); ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>