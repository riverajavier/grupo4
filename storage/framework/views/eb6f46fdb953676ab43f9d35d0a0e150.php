<?php $__env->startSection('titulo', ' Tienda'); ?>
<?php $__env->startSection('imagen' , ('storage/img/uploads/blog-tecnologia-informatica-redes.png')); ?>
<?php $__env->startSection('url' , ''); ?>
<?php $__env->startSection('estracto' , 'Bienvenido a mi blog oficial, sitio dedicado a la tienda'); ?>
<?php $__env->startSection('contenido'); ?>
<div class="p-0 container-fluid">
    
</div>

<div id="tienda" class="container">
    <div class="mt-5 row justify-content-center">
        <div class="text-center col-lg-12">
            <h4 class="">Productos</h4>
                <hr>
            <div class="row">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3">
                    <div class="card" >
                        <img src="<?php echo e(URL::asset('storage/img/carrito/'.$pro->image_path)); ?>"
                        class="mx-auto card-img-top"
                         alt="<?php echo e($pro->image_path); ?>">
                        <div class="text-center card-body">
                            <a href="#">
                                <h6 class="card-title"><?php echo e($pro->name); ?></h6>
                            </a>
                            <p>$<?php echo e($pro->price); ?></p>
                            <form action="<?php echo e(route('cart.store')); ?>" method="POST">
                                <?php echo e(csrf_field()); ?>

                                <input type="hidden" value="<?php echo e($pro->id); ?>" id="id" name="id">
                                <input type="hidden" value="<?php echo e($pro->name); ?>" id="name" name="name">
                                <input type="hidden" value="<?php echo e($pro->price); ?>" id="price" name="price">
                                <input type="hidden" value="<?php echo e($pro->description); ?>" id="description" name="description">
                                <input type="hidden" value="<?php echo e($pro->image_path); ?>" id="img" name="img">
                                <input type="hidden" value="<?php echo e($pro->slug); ?>" id="slug" name="slug">
                                <input type="hidden" value="1" id="quantity" name="quantity">
                                <div class="card-footer" style="background-color: white;">
                                    <div class="row">
                                        <button class="btn btn-warning btn-sm" class="tooltip-test" title="add to cart">
                                            <i class="fa fa-star" aria-hidden="true"></i></i> agregar a favoritos
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('estilos'); ?>
<link rel="stylesheet" href="<?php echo e(URL::asset('FrontEnd/css/tienda.css')); ?>">

<?php $__env->stopPush(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\carrito\resources\views/Web/Tienda/index.blade.php ENDPATH**/ ?>