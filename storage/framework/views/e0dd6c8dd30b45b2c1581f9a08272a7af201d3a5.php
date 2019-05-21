<nav>
    <div class="nav-wrapper blue">
        <div class="container">
            <a href="<?php echo e(route('admin.principal')); ?>" class="brand-logo">SisAdmin</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="<?php echo e(route('admin.principal')); ?>">Inicio</a></li>
                <li><a target="_blanck" href="<?php echo e(route('site.home')); ?>">Site</a></li>

                <?php if(Auth::guest()): ?>
                    <li><a href="<?php echo e(route('admin.login')); ?>">Login</a></li>
                <?php else: ?>
                    <li><a href="#"><?php echo e(Auth::user()->name); ?></a></li>
                    <li><a href="<?php echo e(route('admin.logar.sair')); ?>">Sair</a></li>
                <?php endif; ?>
            </ul>

            <ul class="sidenav" id="mobile-demo">
                <li><a href="<?php echo e(route('admin.principal')); ?>">Inicio</a></li>
                <li><a target="_blanck" href="<?php echo e(route('site.home')); ?>">Site</a></li>

                <?php if(Auth::guest()): ?>
                    <li><a href="<?php echo e(route('admin.login')); ?>">Login</a></li>
                <?php else: ?>
                    <li><a href="#"><?php echo e(Auth::user()->name); ?></a></li>
                    <li><a href="<?php echo e(route('admin.logar.sair')); ?>">Sair</a></li>
                <?php endif; ?>

            </ul>
        </div>
    </div>
</nav><?php /**PATH C:\Estudos\laravel\webSite_completo\SiteDinamico\resources\views\layouts\_admin\_nav.blade.php ENDPATH**/ ?>