<?php $__env->startSection('titulo'); ?>
    <h1>Listado de zapatillas de la tienda <?php echo e($nombreTienda); ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('tabla'); ?>
    <table>
        <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Tipo</th>
            <th>Precio</th>
        </tr>
        <?php $__currentLoopData = $zapatillas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zapatilla): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($zapatilla->getMarca()); ?></td>
                <td><?php echo e($zapatilla->getModelo()); ?></td>
                <td><?php echo e($zapatilla->getTipo()); ?></td>
                <td><?php echo e($zapatilla->getPrecio()); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /vagrant/blade/ejercicio5/views/zapatos.blade.php ENDPATH**/ ?>