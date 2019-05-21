<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(asset('lib/materialize/dist/css/materialize.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->

    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
</head>
<body>
    <header>
        <?php echo $__env->make('layouts._site._nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>

    <main class="py-4">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer class="page-footer blue">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Footer Content</h5>
                    <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="<?php echo e(route('site.home')); ?>">Home</a></li>
                        <li><a class="grey-text text-lighten-3" href="<?php echo e(route('site.sobre')); ?>">Sobre</a></li>
                        <li><a class="grey-text text-lighten-3" href="<?php echo e(route('site.contato')); ?>">Contato</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2019 Copyright Text
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>


    <script src="<?php echo e(asset('lib/jquery/dist/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/materialize/dist/js/materialize.js')); ?>"></script>
    <script src="<?php echo e(asset('js/init.js')); ?>"></script>

</body>
</html>
<?php /**PATH C:\Estudos\laravel\webSite_completo\SiteDinamico\resources\views/layouts/site.blade.php ENDPATH**/ ?>