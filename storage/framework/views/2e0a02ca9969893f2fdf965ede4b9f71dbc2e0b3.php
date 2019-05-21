<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Adicionar Usuario</h2>
        <div class="row">
            <nav>
                <div class="nav-wrapper green">
                    <div class="col s12">
                        <a href="<?php echo e(route('admin.principal')); ?>" class="breadcrumb">Inicio</a>
                        <a href="<?php echo e(route('admin.usuarios')); ?>" class="breadcrumb">Lista de Usuario</a>
                        <a class="breadcrumb">Adicionar Usuario</a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row">
            <form action="<?php echo e(route('admin.usuarios.salvar')); ?>" method="post">
                <?php echo e(csrf_field()); ?>

                <?php echo $__env->make('admin.usuarios._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <button class="btn blue">Adicionar</button>

            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Estudos\laravel\webSite_completo\SiteDinamico\resources\views/admin/usuarios/adicionar.blade.php ENDPATH**/ ?>