<html>
    <head>
        <title>Register</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
            crossorigin="anonymous"
        >
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"
        >
        </script>
    </head>
    <body>
    <section class="col-md-12">
        <div class="container  d-flex justify-content-center">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="display-4">Register</h1>
                    <p class="lead">Please register your account</p>
                </div>
            </div>

            <div class="row">
                <form method="post" action="register.php">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="text" name="nick" id="formRegister1" class="form-control" />
                        <label class="form-label" for="formRegister1">Nick</label>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" name="email" id="formRegister2" class="form-control" />
                        <label class="form-label" for="formRegister2">Email address</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" name="password" id="formRegister3" class="form-control" />
                        <label class="form-label" for="formRegister3">Password</label>
                    </div>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </form>
            </div>
        </div>
    </section>
    </body>
</html>
