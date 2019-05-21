<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row section">
            <h3 align="center">Sobre</h3>
            <div class="divider"></div>
        </div>
        <div class="row section">
            <div class="col s12 m6">
                <?php if(isset($pagina->mapa)): ?>
                    <div class="video-container">
                        <?php echo $pagina->mapa; ?>

                    </div>
                <?php else: ?>
                    <img class="responsive-img" src="<?php echo e(asset($pagina->imagem)); ?>" alt="">
                <?php endif; ?>
            </div>
            <div class="col s12 m6">
                <h4><?php echo e($pagina->titulo); ?></h4>
                <blockquote>
                    <?php echo e($pagina->descricao); ?>

                </blockquote>
                <p><?php echo e($pagina->texto); ?></p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Estudos\laravel\webSite_completo\SiteDinamico\resources\views/site/sobre.blade.php ENDPATH**/ ?>