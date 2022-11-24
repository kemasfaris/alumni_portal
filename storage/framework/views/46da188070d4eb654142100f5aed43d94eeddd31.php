<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div id="side-nav" style="height: auto !important;" class="col-lg-2">
                <div id="side-nav-overlay">
                    <?php echo $__env->make('inc.admin-sidenav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
            <div class="col-lg-10">
                <h4 style="color: green" class="text-center">Registered students </h4>
                <hr>
    <?php echo $__env->make('inc.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <div class="container">
                    <div class="row">
                        <table id="studentstable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>

                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Surname</th>
                                <th>Registration number</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>

                                <td><?php echo e($post->First_name); ?></td>
                                <td><?php echo e($post->Middle_name); ?></td>
                                <td><?php echo e($post->Surname); ?></td>
                                <td><?php echo e($post->RegNo); ?></td>
                                <td><a class="btn btn-success" href="/Student/<?php echo e($post->id); ?>/edit">View</a>
                                <?php if($post->isBlocked==true): ?>
                                        <a class="btn  btn-danger btn-lg">Blocked</a>
                                    <?php endif; ?>
                                </td>

                            </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            <tfoot>
                            <tr>

                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Surname</th>
                                <th>Registration number</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>