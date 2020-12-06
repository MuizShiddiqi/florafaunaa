<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">
                <img src="<?php echo e(asset('assets/img/floruna.png')); ?>" width="50%"/>
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">FF</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header"></li>
            <li class="<?php echo e(Request::is('dashboard/admin/flora*')  ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(route('dashboard.admin.flora.index')); ?>"><i class="fas fa-th-large"></i>
                    <span>Flora</span></a>
            </li>
            <li class="<?php echo e(Request::is('dashboard/admin/fauna*')  ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(route('dashboard.admin.fauna.index')); ?>"><i class="fas fa-th-large"></i>
                    <span>Fauna</span></a>
            </li>








        </ul>
    </aside>
</div>
<?php /**PATH C:\xampp\htdocs\florafauna\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>