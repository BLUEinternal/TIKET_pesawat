<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">


   

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <section class=" vh-100 " style="background-color: #11009E;">
        <div class="container py-5 h-100  ">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong " style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <h1 class="mb-5">e-ticketing</h1>
                        <h2 class="mb-5">Registrasi akun</h2>


                        <form action="process.php" method="POST">
                            <div class=" mb-4">
                                <label class="form-label" for="nama_lengkap">nama lengkap</label>
                                <input type="text" name="nama_lengkap" id="nama_lengkap"  class="form-control form-control-lg" />
                            </div>

                            <div class=" mb-4">
                                <label class="form-label" for="username">username</label>
                                <input type="text" name="username" id="username"  class="form-control form-control-lg" />
                            </div>

                            <div class="mb-4">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control form-control-lg" />
                            </div>

                            <button class="btn btn-primary btn-lg btn-block w-100" type="submit" name="login" >Login</button>

                        </form>
                        
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- <div class="kotak-register">
        <h3>Printer Renday</h3>
        <h4>Register your account</h4>

        <form action="process.php" method="POST">
            <label for="nama_lengkap">Nama Lengkap</label><br />
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"><br /><br />

            <label for="username">Username</label><br />
            <input type="text" name="username" id="username" class="form-control"><br /><br />

            <label for="password">Password</label><br />
            <input type="password" name="password" id="password" class="form-control"><br /> <br />

            <button type="submit" name="register">Register</button>
        </form>
    </div> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>