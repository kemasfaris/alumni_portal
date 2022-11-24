<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div id="side-nav" style="height: auto !important;" class="col-lg-2">
                <div id="side-nav-overlay">
                    <?php echo $__env->make('inc.admin-sidenav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
            <div class="col-lg-10">
                <a href="/Alumni">Go back &nbsp; <i class="fa fa-chevron-circle-left"></i></a>

                <?php echo $__env->make('inc.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <div class="container">
                    <div class="row">
                        <table id="studentstable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th><input type="checkbox" onclick="checkAll(this)"></th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Surname</th>
                                <th>Email</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $alumnis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alumni): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><input type="checkbox" name=""></td>
                                    <td><?php echo e($alumni->First_Name); ?></td>
                                    <td><?php echo e($alumni->Middle_Name); ?></td>
                                    <td><?php echo e($alumni->Surname); ?></td>
                                    <td><?php echo e($alumni->email); ?></td>
                                    <td><a class="btn btn-success" href="/Alumni/<?php echo e($alumni->id); ?>/edit">View</a></td>

                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th></th>
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