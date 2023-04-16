<!DOCTYPE html>
<html>

<head>
    <title>User Registration Form</title>
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h2 class="text-center mb-4">User Registration Form</h2>
                <form id="user-registration-form">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                        <span class="error-message" id="username-error"></span>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                        <span class="error-message" id="email-error"></span>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" minlength="8">
                        <span class="error-message" id="password-error"></span>
                    </div>
                    <div class="mb-3">
                        <label for="confirm-password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm-password" name="confirm-password">
                        <span class="error-message" id="confirm-password-error"></span>
                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" id="dob" name="dob">
                        <span class="error-message" id="dob-error"></span>
                    </div>
                    <div class="mb-3">
                        <label for="country-code" class="form-label">Country Code</label>
                        <!-- Replace "COUNTRY CODES" with the list of all country codes obtained from a web source -->
                        <select class="form-select" id="country-code" name="country-code">
							<option value="">-- Select Country Code --</option>
							<option value="+91">+91</option>
							<option value="+1">+1</option>
							<option value="+44">+44</option>
						</select>
                        <span class="error-message" id="country-code-error
                    </div>
                    <div class=" mb-3 ">
                        <label for="phone " class="form-label ">Phone Number</label>
                        <input type="tel " class="form-control " id="phone " name="phone ">
                        <span class="error-message " id="phone-error "></span>
                    </div>
                    <button type="submit " class="btn btn-primary ">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap 5 JS and jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js "></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js "></script>
    <script src="js/register.js "></script>
    </body>
    </html>