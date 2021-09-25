<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Products</title>
</head>
<body>
        <header>
            <div class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 style="color:blue;" >Products</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <a href="/add" name="add" class="btn btn-sm btn-primary">Add new product</a>
                </div>
            </div>
		</header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-50">
                    <form action="/" method="get">
                    <?php echo csrf_field(); ?>

                    <div class="col-md-50">
                    <table class="table table-striped table-hover">
                    <tr>
                        <th>Name</th>
                        <th>Detail</th>
                        <th>Manufacturer</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($product->name); ?></td>
                            <td><?php echo e($product->detail); ?></td>
                            <?php foreach ($manufacturers as $m) {
                                if($m->id == $product->manufacturer_id){
                                    $manufacturer_name = $m->name;
                                }
                           } ?>
                           <td><?php echo e($manufacturer_name); ?></td>
                           <td><a href="/edit/<?php echo e($product->id); ?>" name="edit" class="btn btn-sm btn-primary">Edit</a></td>
                           <td><form action="/delete/<?php echo e($product->id); ?>" method="post">
                                <?php echo method_field('delete'); ?>
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>

                    </form>
                </div>

            </div>
        </div>
    </body>
</html><?php /**PATH C:\Users\Maxa\Desktop\IV god-I sem\ITEH\2.Domaci zadatak\moj dz\products\app\resources\views/show.blade.php ENDPATH**/ ?>