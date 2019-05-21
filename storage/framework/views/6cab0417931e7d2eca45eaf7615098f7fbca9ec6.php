<div class="input-field">
    <input type="text" name="name" class="validate" value="<?php echo e(isset($usuario->name) ? $usuario->name : ''); ?>">
    <label>Nome</label>
</div>
<div class="input-field">
    <input type="text" name="email" class="validate" value="<?php echo e(isset($usuario->email) ? $usuario->email : ''); ?>">
    <label>E-mail</label>
</div>
<div class="input-field">
    <input type="password" name="password" class="validate">
    <label>Senha</label>
</div><?php /**PATH C:\Estudos\laravel\webSite_completo\SiteDinamico\resources\views\admin\usuarios\_form.blade.php ENDPATH**/ ?>