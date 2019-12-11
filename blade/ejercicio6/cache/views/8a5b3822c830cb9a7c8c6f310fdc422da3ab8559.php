<?php $__env->startSection('titulo'); ?>
    <h1>Listado de zapatillas de la tienda <?php echo e($nombreTienda); ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('tabla'); ?>
    <h2>Estas en la tabla de zapatos</h2>
    <table>
        <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Tipo</th>
            <th>Precio</th>
        </tr>
        <?php $__currentLoopData = $zapatos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zapato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($zapato->getMarca()); ?></td>
                <td><?php echo e($zapato->getModelo()); ?></td>
                <td><?php echo e($zapato->getTipo()); ?></td>
                <td><?php echo e($zapato->getPrecio()); ?></td>
                <td><a href="index.php?id=<?php echo e($zapato->getId()); ?>">Detalle Zapatilla</a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /vagrant/blade/ejercicio6/views/zapatos.blade.php ENDPATH**/ ?>