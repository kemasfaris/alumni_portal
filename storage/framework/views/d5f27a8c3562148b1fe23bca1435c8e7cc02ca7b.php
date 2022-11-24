<div>
    <a id="admin-link" class="btn btn-warning" href="/student-dashboard"><i class="fa fa-dashboard"></i> Dashboard</a>

    <?php if(Auth::guard('student')->user()->isBlocked==true): ?>
        <a id="admin-link" class="disabled link2 btn btn-warning" href="/student-dashboard/alumni"><i class="fa fa-users"></i> Alumni members</a>
        <?php else: ?>
    <a id="admin-link" class="link2 btn btn-warning" href="/student-dashboard/alumni"><i class="fa fa-users"></i> Alumni members</a>
    <a id="admin-link" class="link2 btn btn-warning" href="/communications"><i class="fa fa-inbox"></i> Communications</a>
 <?php endif; ?>


    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" >
        <?php echo csrf_field(); ?>
        <button id="admin-link" class=" link2 btn btn-warning"><i class="fa fa-unlock"></i>&nbsp;&nbsp;Logout</button>
    </form>
</div>