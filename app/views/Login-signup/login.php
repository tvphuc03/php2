<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<section class="vh-300" style="background-color: #eee;">
    <div class="container h-100 ">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5 ">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>

                                <form>
                                    <p >Please login to your account</p>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form211">Username</label>
                                        <input type="text" id="form211" class="form-control" name="txtUsername">
                                    </div>

                                    <div class="form-outline mb-4">
                                        
                                        <label class="form-label" for="form222">Password</label>
                                        <input type="password" id="form222" class="form-control" name="txtPassword">
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1 col-6 mx-auto gap-2 d-grid">
                                        <button class="btn btn-danger btn-block fa-lg gradient-custom-2 " >Log
                                            in</button>
                                        <a class="text-muted" href="#!">Forgot password?</a>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-center pb-4">
                                        <p class="mb-0 me-2">Don't have an account?</p>
                                        <a href="<?php echo base_url; ?>dangki" type="button" class="btn btn-outline-danger">Create new</a>
                                    </div>

                                </form>

                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                <img src="./public/images/draw1.webp" class="img-fluid" alt="Sample image">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>