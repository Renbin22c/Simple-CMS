<?php

    // set CSRF token
    CSRF::generateToken('signup_form');

    // make sure user not already logged-in
    // if user is already logged in, redirect the user to dashboard
    if ( Authentication::isLoggedIn() )
    {
      header('Location: /dashboard');
      exit;
    }

    // make sure it's POST request
    if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {

      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $confirm_password = $_POST['confirm_password'];

      // step #1: do error check
      $error = FormValidation::validate(
        $_POST,
        [
          'name' => 'required',
          'email' => 'email_check',
          'password' => 'password_check',
          'confirm_password' => 'is_password_match',
          'csrf_token' => 'signup_form_csrf_token'
        ]
      );

      // step #2: make sure email is unique (not in the database)
      if ( FormValidation::checkEmailUniqueness( $email ) ) {
        $error = FormValidation::checkEmailUniqueness( $email );
      }

      // make sure $error is false
      if ( !$error ) {

        // step #3: insert user into database
        $user_id = Authentication::signup(
          $name,
          $email,
          $password
        );

        // step #4: assign the user data to $_SESSION['user'] data
        Authentication::setSession( $user_id );

        // step #5: redirect the user to dashboard
          // 5.1: remove csrf token
          CSRF::removeToken('signup_form');

          // 5.2: redirect user to dashboard
          header('Location: /dashboard');
          exit;

      } // end - !$error

    }

    require dirname(__DIR__) . '/parts/header.php';
?>
<div class="container my-5 mx-auto" style="max-width: 500px;">
      <h1 class="h1 mb-4 text-center">Sign Up a New Account</h1>

      <div class="card p-4">
        <?php require dirname( __DIR__ ) . '/parts/error_box.php'; ?>
        <form 
          method="POST" 
          action="<?php echo $_SERVER["REQUEST_URI"]; ?>">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" />
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" />
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input
              type="password"
              class="form-control"
              id="password"
              name="password"
            />
          </div>
          <div class="mb-3">
            <label for="confirm_password" class="form-label"
              >Confirm Password</label
            >
            <input
              type="password"
              class="form-control"
              id="confirm_password"
              name="confirm_password"
            />
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-primary btn-fu">
              Sign Up
            </button>
          </div>
          <!-- insert csrf token input here -->
          <input 
            type="hidden"
            name="csrf_token"
            value="<?php echo CSRF::getToken('signup_form'); ?>"  
          />
        </form>
      </div>

      <!-- links -->
      <div
        class="d-flex justify-content-between align-items-center gap-3 mx-auto pt-3"
      >
        <a href="/" class="text-decoration-none small"
          ><i class="bi bi-arrow-left-circle"></i> Go back</a
        >
        <a href="/login" class="text-decoration-none small"
          >Already have an account? Login here
          <i class="bi bi-arrow-right-circle"></i
        ></a>
      </div>
    </div>
<?php

    require dirname(__DIR__) . '/parts/footer.php';