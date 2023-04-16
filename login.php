<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>

</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-4">Login</h4>
                        <form id="loginForm">
                            <div class="mb-3">
                                <label for="usernameInput" class="form-label">Username or Email</label>
                                <input type="text" class="form-control" id="usernameInput" name="username" required />
                            </div>
                            <div class="mb-3">
                                <label for="passwordInput" class="form-label">Password</label>
                                <input type="password" class="form-control" id="passwordInput" name="password" required />
                                <div class="invalid-feedback">Password must be at least 8 characters long</div>
                            </div>
                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" id="rememberMeInput" name="rememberMe" />
                                <label class="form-check-label" for="rememberMeInput">Remember me</label>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            <div class="text-center mt-3">
                                <a href="forgetpass.html" target="_self">Forgot password?</a>
                            </div>
                            <br>
                            <div>
                                <label class="form-label">Need an account ? <a href="register.html">Signup</a></label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/login.js"></script>
</body>

</html>