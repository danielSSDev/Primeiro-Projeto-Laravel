<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row section">
            <h3 align="center">Sobre</h3>
            <div class="divider"></div>
        </div>
        <div class="row section">
            <div class="col s12 m6">
                <img class="responsive-img" src="<?php echo e(asset('img/modelo_img_home.jpg')); ?>" alt="">
            </div>
            <div class="col s12 m6">
                <h4>A Empresa</h4>
                <blockquote>
                    Descrição breve sobre a empresa.
                </blockquote>
                <p>Texto sobre a empresa.</p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Estudos\laravel\webSite_completo\SiteDinamico\resources\views\site\sobre.blade.php ENDPATH**/ ?>