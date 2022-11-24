<?php $__env->startSection('content'); ?>
        <div class="container-fluid">
            <div class="row">
            <div id="side-nav" style="height: 100vh !important;" class="col-lg-2">
                <div id="side-nav-overlay">
                    <?php echo $__env->make('inc.admin-sidenav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
            <div class="col-lg-10">

                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="text-center">Welcome <span style="color: #1c7430"><?php echo e($user->name); ?> !</span></h4>
                        <hr>
                    </div>
                    <div class="col-lg-8">
                        <h6>Your profile</h6>
                        <hr>
                        <table class="table table-striped">
                            <thead>

                            </thead>
                            <tbody>
                            <tr>
                                <td><b>Names</b></td>
                                <td><?php echo e($user->name); ?></td>

                            </tr>
                            <tr>
                                <td><b>Email</b></td>
                                <td><?php echo e($user->email); ?></td>

                            </tr>
                            <tr>
                                <td><b>Job title</b></td>
                                <td><?php echo e($user->job_title); ?></td>

                            </tr>
                            <tr>
                                <td><b>Department</b></td>
                                <td><?php echo e($user->department); ?></td>

                            </tr>
                            <tr>
                                <td><b>Staff Id</b></td>
                                <td><?php echo e($user->staffID); ?></td>

                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-4">
                        <ul class="list-group">
                           <center>
                               <img style="border-radius: 50%;width: 150px;height: 150px;" src="storage/cover_images/<?php echo e($user->avatar); ?>" alt="avatar">
                           </center>

                            <a href="/Staff/<?php echo e($user->id); ?>/edit"><li class="list-group-item">Edit your profile</li></a>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>