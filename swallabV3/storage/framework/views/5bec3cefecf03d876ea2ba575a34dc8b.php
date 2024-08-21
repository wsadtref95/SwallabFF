<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>查看個人檔案</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="<?php echo e(asset('css/profilexi.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/backstage.css')); ?>" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .email {
            margin-top: 15px;
        }

        .fa-instagram {
            color: #E1306C;
        }

        .fa-facebook {
            color: #4267B2
        }

        .fa-threads {
            color: black;
            text-decoration: none;
        }

        .fa-facebook:hover,
        .fa-instagram:hover,
        .fa-threads:hover {
            transform: scale(1.2);
            cursor: pointer;

        }
    </style>
</head>

<body>
    <header>
        <div class="container-md">
            <div class="row ">
                <div class="col-6">
                    <a href="<?php echo e(url('http://localhost/swallabLa/swallab/public/headpage/headpage')); ?>"> <img
                            src="<?php echo e(asset('/images/other/logo.jpg')); ?>" style="border-radius: 50%; width:15%"
                            class="m-2 ">
                    </a>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="mySidebar col-2 mt-3">
                <a href="<?php echo e(route('profile.show')); ?>" class="active">
                    <p>個人檔案</p>
                </a>
                <a href="<?php echo e(url('/login/profile/order')); ?>">
                    <p>我的訂單</p>
                </a>
                <a href="#">
                    <p>歷史紀錄</p>
                </a>
                <a href="#">
                    <p>發布食記</p>
                </a>
            </div>
            <div class="col-9">
                <div class="row mt-3">
                    <div class="col-12 d-flex justify-content-between">
                        <h4>個人檔案</h4>
                    </div>
                    <div class="col-12 d-flex">
                        <?php if(session('success')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('success')); ?>

                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="container mt-3">
                    <div class="row">
                        <div class="ml-5 d-flex">

                            <img src="<?php echo e($user->avatar ? asset( $user->avatar) : asset('/images/other/default-avatar.jpg')); ?>"
                                style="width: 180px; height: auto;">
                            <div class="col-md-5 ml-5 ">

                                <div class="name"><?php echo e($user->name); ?></div>
                                <div class="email">
                                    <?php echo e($user->email); ?>

                                </div>
                                <div class="icon mt-2">
                                    <?php if($member->ig_link): ?>
                                        <a href="<?php echo e($member->ig_link); ?>" target="_blank"
                                            style="text-decoration: none;">
                                            <i class="fa-brands fa-instagram mr-3"></i>
                                        </a>
                                    <?php else: ?>
                                        <i class="fa-brands fa-instagram mr-3" style="color: gray;"></i>
                                    <?php endif; ?>

                                    <?php if($member->fb_link): ?>
                                        <a href="<?php echo e($member->fb_link); ?>" target="_blank"
                                            style="text-decoration: none;">
                                            <i class="fa-brands fa-facebook mr-3"></i>
                                        </a>
                                    <?php else: ?>
                                        <i class="fa-brands fa-facebook mr-3" style="color: gray;"></i>
                                    <?php endif; ?>

                                    <?php if($member->threads_link): ?>
                                        <a href="<?php echo e($member->threads_link); ?>" target="_blank"
                                            style="text-decoration: none;">
                                            <i class="fa-brands fa-threads mr-3"></i>
                                        </a>
                                    <?php else: ?>
                                        <i class="fa-brands fa-threads mr-3" style="color: gray;"></i>
                                    <?php endif; ?>

                                </div>


                            </div>

                            <div class="col-md-7 ">
                                <div class="follow">30 追蹤中 20 粉絲</div>
                                <?php if($user->phone): ?>
                                    <div class="follow"><?php echo e($user->phone); ?></div>
                                <?php endif; ?>

                                <a href="<?php echo e(route('profile.edit')); ?>"style="text-decoration: none;"
                                    class="btn d-flex delete mx-5">編輯個人檔案</a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="ml-5 mt-3 profile">個人簡介：
                        <div class="mt-3 introduce">
                            <?php echo e($member->bio); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
</body>

</html>
<?php /**PATH C:\xampp\htdocs\swallabV3\resources\views/profile/show.blade.php ENDPATH**/ ?>