<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo csrf_token(); ?>">
        <title>Data Processor Architecture</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="<?php echo e(url('frontend/css/style.css')); ?>" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    </head>
    <body>

        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Data Processor Architecture<a href="<?php echo e(url('api/v1/docs')); ?>" style="font-size:15px;color:#000">Using Api</a><br/>
                </div>
                
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <a class="close" data-dismiss="alert" aria-label="close">×</a>
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php if(Session::has('success')): ?>
                    <p class="alert alert-success"><?php echo e(Session::get('success')); ?></p>
                <?php elseif(Session::has('error')): ?>
                    <p class="alert alert-danger"><?php echo e(Session::get('error')); ?></p>
                <?php endif; ?>

                <div class="links row">
                    <div class="col-md-3"> 
                        <?php echo Form::Open(['url'=>'exportJSON']); ?>

                        <button id="exportJSON">Export JSON</button>
                        <?php echo Form::Close(); ?>

                    </div>
                    <div class="col-md-3"> 
                        <?php echo Form::Open(['url'=>'exportCSV']); ?>

                        <button id="exportCVS">Export CSV</button>
                        <?php echo Form::Close(); ?>

                    </div>
                    <div class="col-md-3"> 
                        <?php echo Form::Open(['url'=>'importJSON','files'=>true]); ?>

                        <button id="1importJSON">IMPORT JSON</button>
                        <input type="file" name="import_file">
                        <?php echo Form::Close(); ?>

                    </div>
                    <div class="col-md-3"> 
                        <?php echo Form::Open(['url'=>'importCSV','files'=>true]); ?>

                        <button id="importXML">Import CSV</button>
                        <input type="file" name="import_file">
                        <?php echo Form::Close(); ?>

                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Product Name</th>
                                <th>Product Description</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($key+1); ?></td>
                                <td><?php echo e($row->name); ?></td>
                                <td><?php echo e($row->description); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php if(count($data) == 0): ?>
                        <tr><td  colspan="6"> No data found.</td></tr>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </body>
</html>

<?php /* /Users/apple/Sites/ideas/data_processor_architecture/resources/views/frontend/layouts/app.blade.php */ ?>