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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <form action="/edit/<?php echo e($product->id); ?>" method="post">
                <?php echo csrf_field(); ?>

                    <div class="row form-group">
                        <div class="col-md-12">
                           <label for="">Name: </label>
                           <input type="text" name="name" class="form-control" value="<?php echo e($product->name); ?>" required>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                           <label for="">Detail: </label>
                           <input type="text" name="detail" class="form-control" value="<?php echo e($product->detail); ?>" required>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                           <label for="manufacturer">Manufacturer: </label>
                           <select class="form-control" id="manufacturer" name="manufacturer" value="<?php echo $product->manufacturer_id ?>">
                                <?php $__currentLoopData = $manufacturers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manufacturer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>           
                                    <?php if($manufacturer->id == $product->manufacturer_id): ?>{
                                        <option selected="selected" value="<?php echo $manufacturer->id ?>"><?php echo e($manufacturer->name); ?></option>
                                    <?php else: ?>
                                        <option value="<?php echo $manufacturer->id ?>"><?php echo e($manufacturer->name); ?></option>        
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                           <button type="submit" class="btn btn-success w-50" style="margin:10px;">Update</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</body>
</html><?php /**PATH C:\Users\Maxa\Desktop\IV god-I sem\ITEH\2.Domaci zadatak\moj dz\products\app\resources\views/edit.blade.php ENDPATH**/ ?>