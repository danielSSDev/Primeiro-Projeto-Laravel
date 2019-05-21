<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2 class="center">Lista de Paginas</h2>

        <div class="row">
            <nav>
                <div class="nav-wrapper green">
                    <div class="col s12">
                        <a href="<?php echo e(route('admin.principal')); ?>" class="breadcrumb">Inicio</a>
                        <a class="breadcrumb">Lista de Paginas</a>
                    </div>
                </div>
            </nav>

        </div>

        <div class="row">
            <table>
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Descrição</th>
                    <th>Tipo</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $paginas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pagina): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($pagina->id); ?></td>
                        <td><?php echo e($pagina->titulo); ?></td>
                        <td><?php echo e($pagina->descricao); ?></td>
                        <td><?php echo e($pagina->tipo); ?></td>
                        <td>
                            <a class="btn orange" href="<?php echo e(route('admin.paginas.editar', $pagina->id)); ?>">Editar</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Estudos\laravel\webSite_completo\SiteDinamico\resources\views/admin/paginas/index.blade.php ENDPATH**/ ?>