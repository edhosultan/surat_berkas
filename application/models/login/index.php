<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial- scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - Disposisi Surat</title>
        <link href="<?= base_url('assets/css/styles.css')?>" re
l="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-
awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
ed-lg mt-5">
<div id="layoutAuthentication_content">
    <main>
        <div class="container">
            <div class="row justify-content-center">
<div class="col-lg-5">
<div class="card shadow-lg border-0 round
                                    <div class="card-header"><h3 clas
s="text-center font-weight-light my-4">Login</h3></div>
>flashdata('message'); ?>
3">
<form action="<?= base_url('login/dologin') ?>" method="POST">
    <div class="form-floating mb-
<div class="card-body">
<div class="form-check mb-3">
<input class="form-check- input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-
label" for="inputRememberPassword">Remember Password</label>
</div>
<div class="d-flex align- items-center justify-content-between mt-4 mb-0">
ssword.html">Forgot Password?</a> s="btn btn-primary" value="Login" />
y-3">
            <a class="small" href="pa
            <input type="submit" clas
        </div>
    </form>
</div>
<div class="card-footer text-center p
<div class="small"><a href="regis ter.html">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
content-between small">
Website 2021</div>
<div class="d-flex align-items-center justify-
<div class="text-muted">Copyright &copy; Your
    <div>
        <a href="#">Privacy Policy</a>
        &middot;
        <a href="#">Terms &amp; Conditions</a>
    </div>
</div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/
js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/js/scripts.js')?> "></script>
    </body>
</html>