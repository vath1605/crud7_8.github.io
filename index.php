<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <header class="container d-flex justify-content-center pt-2">
        <nav class="py-2 px-5 bg-primary rounded-pill">  
            <ul class="d-flex w-100 h-100 d-lg-flex justify-content-center align-items-center gap-4  p-0">
                <li class="nav-link"><a class="text-white fw-semibold text-decoration-none active" href="index.php">Register</a></li>
                <li class="nav-link"><a class="text-white fw-semibold text-decoration-none" href="user.php">Users</a></li>
            </ul>
        </nav>
    </header>

    <main class="container pt-5">
        <form action="insert.php" class="col-5 mt-5 container shadow p-5 rounded-4" method="post">
        <div class="mb-3 text-center ">
            <h3>Register Form</h3>
            <p class="text-secondary">Register with us for making a bright.</p>
        </div>
        <?php 
            session_start();
            if(isset($_SESSION['msg'])){
        ?>
        <div class="mb-3">
            <div class="card <?= $_SESSION['isSuccess'] ? 'bg-success':'bg-danger' ?>">
                <div class="card-body text-light fw-semibold">
                    <?= $_SESSION['msg'] ?>
                </div>
            </div>
        </div>
        <?php }
            unset($_SESSION['msg']);
            unset($_SESSION['isSuccess']);
        ?>
        <div class="mb-3">
            <label for="name" class="form-label">User Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" placeholder="Name..." id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address <span class="text-danger">*</span></label>
            <input type="email" class="form-control" placeholder="Email..." id="email" name="email">
            <div class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="pw" class="form-label">Password <span class="text-danger">*</span></label>
            <input type="password" class="form-control" placeholder="########" id="pw" name="pass">
        </div>
        <div class="mb-3">
            <label for="cpw" class="form-label">Confirm Password <span class="text-danger">*</span></label>
            <input type="password" class="form-control" placeholder="########" id="cpw" name="cpass">
        </div>
        <button type="submit" name="submitBtn" class="btn btn-primary">Submit</button>
        </form>
    </main>
</body>
</html>