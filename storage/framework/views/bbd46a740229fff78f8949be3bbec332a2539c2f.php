<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Editar Paginas</h2>
        <div class="row">
            <nav>
                <div class="nav-wrapper green">
                    <div class="col s12">
                        <a href="<?php echo e(route('admin.principal')); ?>" class="breadcrumb">Inicio</a>
                        <a href="<?php echo e(route('admin.paginas')); ?>" class="breadcrumb">Lista de Paginas</a>
                        <a class="breadcrumb">Editar Pagina</a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row">
            <form action="<?php echo e(route('admin.paginas.atualizar', $pagina->id)); ?>" method="post" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                <input type="hidden" name="_method" value="put">
                <?php echo $__env->make('admin.paginas._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <button class="btn blue">Atualizar</button>

            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Estudos\laravel\webSite_completo\SiteDinamico\resources\views/admin/paginas/editar.blade.php ENDPATH**/ ?>