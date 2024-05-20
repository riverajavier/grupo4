<?php $__env->startSection('titulo', 'Tienda'); ?>
<?php $__env->startSection('imagen' , ('storage/img/uploads/blog-tecnologia-informatica-redes.jpg')); ?>
<?php $__env->startSection('url' , ''); ?>
<?php $__env->startSection('estracto' , 'Bienvenido a mi blog oficial, sitio dedicado a la tienda'); ?>
<?php $__env->startSection('contenido'); ?>
<div class="container py-3 my-5 rounded z-depth-1" >
    <div class="row" id="carrito">
        <div class="col-lg-12">
            <section class="dark-grey-text">
                <div class="table-responsive">
                    <table class="table mb-0 product-table">
                        <thead class="mdb-color lighten-5">
                            <tr>
                                <th></th>
                                <th class="font-weight-bold">
                                    <strong>Producto</strong>
                                </th>
                                <th></th>
                                <th class="font-weight-bold">
                                    <strong>Precio</strong>
                                </th>
                                <th class="font-weight-bold">
                                    <strong>Cantidad</strong>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(session()->has('success_msg')): ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?php echo e(session()->get('success_msg')); ?>

                            </div>
                            <?php endif; ?>
                            <?php if(session()->has('alert_msg')): ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?php echo e(session()->get('alert_msg')); ?>

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <?php endif; ?>
                            <?php if(count($errors) > 0): ?>
                            <?php $__currentLoopData = $errors0>all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?php echo e($error); ?>

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            <?php if(\Cart::getTotalQuantity()>0): ?>
                            <h4><?php echo e(\Cart::getTotalQuantity()); ?> Producto(s) en la lista de favoritos</h4><br>
                            <?php else: ?>
                            <div class="text-center">
                                <h4>No hay productos por mostrar</h4><br>
                                <a href="/" class="btn btn-dark btn-rounded">ir a la tienda</a>
                            </div>
                            <?php endif; ?>
                            <?php $__currentLoopData = $cartCollection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="">
                                <th scope="row ">
                                    <img src="<?php echo e(URL::asset('storage/img/carrito/'.$item->attributes->image)); ?>"
                                        alt="" class="rounded img-fluid">
                                        <p class="mt-3 text-dark"> <?php echo e($item->description); ?></p>

                                </th>
                                <td class="pb-4"><p class="mt-3"> <?php echo e($item->name); ?></p></td>
                                <td></td>
                                <td class="pb-4">$<?php echo e($item->price); ?></td>
                                <td>
                                    <form action="<?php echo e(route('cart.update')); ?>" method="POST">
                                        <?php echo e(csrf_field()); ?>

                                        <div class="mb-3 input-group">
                                            <input type="hidden" value="<?php echo e($item->id); ?>" id="id" name="id">
                                            <input type="number" class="form-control form-control-sm "
                                                value="<?php echo e($item->quantity); ?>" id="quantity" name="quantity"
                                                style="width: 70px; margin-right: 10px;">

                                            <button class="btn btn-sm btn-primary btn-rounded"><i
                                                    class="fa fa-edit"></i>
                                            </button>
                                    </form>
                                    <form action="<?php echo e(route('cart.remove')); ?>" method="POST">
                                        <?php echo e(csrf_field()); ?>

                                        <input type="hidden" value="<?php echo e($item->id); ?>" id="id" name="id">
                                        <button class="btn btn-sm btn-danger btn-rounded"><i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                </div>
                </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                </table>
                <div class="text-center form-group">
                    <h2 class="mt-5 text-cente text-dark">$<?php echo e(\Cart::getTotal()); ?></h2>
                    <a href="<?php echo e(route('index')); ?>" class="btn btn-primary btn-rounded">Proceder al CheckOut</a>
                    <a href="<?php echo e(route('index')); ?>" class="btn btn-success btn-rounded">Seguir comprando</a>
                </div>
        </div>
        </section>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('estilos'); ?>
<link rel="stylesheet" href="<?php echo e(URL::asset('FrontEnd/css/tienda.css')); ?>">

<?php $__env->stopPush(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\carrito\resources\views/Web/Carrito/index.blade.php ENDPATH**/ ?>