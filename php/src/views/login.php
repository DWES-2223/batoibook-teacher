<html>
    <head>
        <title>Login</title>
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
                    <h1 class="display-4">Login</h1>
                    <p class="lead">Please login to your account</p>
                </div>
            </div>

            <div class="row">
                <form >
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="form1Example1" class="form-control" />
                        <label class="form-label" for="form1Example1">Email address</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="form1Example2" class="form-control" />
                        <label class="form-label" for="form1Example2">Password</label>
                    </div>

                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                        <div class="col d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                                <label class="form-check-label" for="form1Example3"> Remember me </label>
                            </div>
                        </div>

                        <div class="col">
                            <!-- Simple link -->
                            <a href="#!">Forgot password?</a>
                        </div>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                    <a href="register.php" class="btn btn-primary btn-block">Register</a>
                </form>
            </div>
        </div>
    </section>
    </body>
</html>
