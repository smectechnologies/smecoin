<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
<?= $this->include('layouts/navbar') ?> <!-- Load navbar layout -->

<section class="h-100 gradient-form" style="background-color: #eee; height: 100vh;">
  <div class="container py-2 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <!-- Increase container width here -->
      <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="card rounded-3 text-black shadow-lg">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center mb-4">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                    style="width: 185px;" alt="logo">
                </div>
                <?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger">
        <?= session()->getFlashdata('error') ?>
    </div>
<?php endif; ?>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('success') ?>
    </div>
<?php endif; ?>

                <!-- Form starts here -->
                <form action="<?= base_url('register') ?>" method="POST">
                  <p class="h5 mb-4 text-center">Please Register your account</p>
                  <form action="<?= base_url('registration/authenticate') ?>" method="POST">
                  <div class="row">
                    <!-- Full Name -->
                    <div class="col-md-6 mb-2">
                      <div class="form-outline">
                        <label class="form-label" for="form2Example11">Full Name</label>
                        <input type="text" id="form2Example11" name="full_name" class="form-control" required />
                      </div>
                    </div>

                    <!-- Mobile Number -->
                    <div class="col-md-6 mb-2">
                      <div class="form-outline">
                        <label class="form-label" for="form2Example22">Mobile Number</label>
                        <input type="text" id="form2Example22" name="mobile_number" class="form-control" required />
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <!-- Email -->
                    <div class="col-md-6 mb-2">
                      <div class="form-outline">
                        <label class="form-label" for="form2Example33">Email</label>
                        <input type="email" id="form2Example33" name="email" class="form-control" required />
                      </div>
                    </div>

                    <!-- Password -->
                    <div class="col-md-6 mb-2">
                      <div class="form-outline">
                        <label class="form-label" for="form2Example44">Password</label>
                        <input type="password" id="form2Example44" name="password" class="form-control" required />
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <!-- Department -->
                    <div class="col-md-6 mb-2">
                      <div class="form-outline">
                        <label class="form-label" for="form2Example88">Department</label>
                        <select id="form2Example88" name="department" class="form-control" required>
                          <option>Select Your Department</option>
                          <option>MEP</option>
                          <option>Civil</option>
                          <option>Oil & Gas</option>
                          <option>Instrumentation</option>
                          <option>Python</option>
                          <option>DataScience</option>
                          <option>Networking</option>
                          <option>Software Testing</option>
                          <option>UI/UX Designing</option>
                          <option>Digital Marketing</option>
                        </select>
                      </div>
                    </div>

                    <!-- Instagram ID -->
                    <div class="col-md-6 mb-2">
                      <div class="form-outline">
                        <label class="form-label" for="form2Example55">Instagram ID</label>
                        <input type="text" id="form2Example55" name="instagram_id" class="form-control" required />
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <!-- Profile Link -->
                    <div class="col-md-12 mb-2">
                      <div class="form-outline">
                        <label class="form-label" for="form2Example66">Profile Link</label>
                        <input type="url" id="form2Example66" name="profile_link" class="form-control" required />
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <!-- Accept Terms -->
                    <div class="col-md-12 mb-2">
                      <div class="form-outline">
                        <input type="checkbox" id="form2Example77" name="accept_terms" required />
                        <label class="form-label" for="form2Example77">I Accept Terms and Conditions.</label>
                      </div>
                    </div>
                  </div>

                  <!-- Register Button -->
                  <div class="text-center pt-1 mb-5 pb-1">
                     <button type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" id="registerButton" disabled>Register</button>
                  </div>
                  </form>
                  <!-- Login Link -->
                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Already have an account?&nbsp;&nbsp;  </p>
                    <a href="<?= base_url('login') ?>" class="btn btn-outline-danger">Login</a>
                  </div>

                </form> <!-- End of Form -->

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than just a company</h4>
                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  // Get the checkbox and the register button
  const acceptTermsCheckbox = document.getElementById('form2Example77');
  const registerButton = document.getElementById('registerButton');

  // Function to toggle the button's disabled state
  function toggleRegisterButton() {
    if (acceptTermsCheckbox.checked) {
      registerButton.disabled = false;  // Enable the button
    } else {
      registerButton.disabled = true;   // Disable the button
    }
  }

  // Add event listener for checkbox change
  acceptTermsCheckbox.addEventListener('change', toggleRegisterButton);

  // Call the function initially in case the checkbox is already checked
  toggleRegisterButton();
</script>

