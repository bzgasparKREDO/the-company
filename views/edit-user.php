<?php
session_start();
require "../classes/User.php";

$user_obj = new User;

$user = $user_obj->getUser();

// print_r($user);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../assets/styles/style.css">
</head>
<body>

<?php
include "main-nav.php";
?>
<main class="row justify-content-center">
    <div class="col-4">
        <h2 class="text-center text-uppercase">Edit User</h2>

        <form action="../actions/edit-user.php" method="post" enctype="multipart/form-data">

        <div class="row justify-content-center mb-3">
            <div class="col-6">
                <?php if($user['photo']){ ?> 
                    <img src="../assets/images/<?= $user['photo'] ?>" alt="<?= $user['photo'] ?>" class="d-block mx-auto edit-photo">
                <?php }else{ ?> 
                    <i class="fa-solid fa-user text-secondary d-block text-center edit-icon"></i>
                <?php } ?> 

                <input type="file" name="photo" class="form-control mt-2" accept="image/*">
            </div>
        </div>       
        <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
                <input type="text" class="form-control" name="first_name" id="first_name" value="<?= $user['first_name'] ?>" required autofocus>
        </div>
        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="last_name" id="last_name" value="<?= $user['last_name'] ?>" required >
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username" value="<?= $user['username'] ?>" required >
        </div>
        <div class="text-end">
            <a href="dashboard.php" class="btn btn-secondary btn-sm px-5">Cancel</a>
            <button type="submit" class="btn btn-warning btn-sm px-5">Save</button>
        </div>
        </form>
    </div>
</main>
    
</body>
</html>