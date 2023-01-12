<?php

// the user has a role or not
if (!Authentication::whoCanAccess('user')){
  header('Location: /login');
  exit;
}

require dirname(__DIR__) . "/parts/header.php";

?>
  <body>
    <div class="container mx-auto my-5" style="max-width: 800px;">
      <h1 class="h1 mb-4 text-center">Dashboard</h1>
      <div class="row">
        <div class="col">
          <div class="card mb-2">
            <div class="card-body">
              <h5 class="card-title text-center">
                <div class="mb-1">
                  <i class="bi bi-pencil-square" style="font-size: 3rem;"></i>
                </div>
                Manage Posts
              </h5>
              <div class="text-center mt-3">
                <a href="/manage-posts" class="btn btn-primary btn-sm"
                  >Access</a
                >
              </div>
            </div>
          </div>
        </div>
        <!--manage user start-->
        <?php if (Authentication::whoCanAccess('admin')): ?>
        <div class="col">
          <div class="card mb-2">
            <div class="card-body">
              <h5 class="card-title text-center">
                <div class="mb-1">
                  <i class="bi bi-people" style="font-size: 3rem;"></i>
                </div>
                Manage Users
              </h5>
              <div class="text-center mt-3">
                <a href="/manage-users" class="btn btn-primary btn-sm"
                  >Access</a
                >
              </div><!-- .text_center-->
            </div><!-- .card-body-->
          </div><!-- .card-->
        </div><!-- .col-->
        <?php endif; ?>
        <!-- manage user end-->
      </div><!-- .row-->
      <div class="mt-4 text-center">
        <a href="/home" class="btn btn-link btn-sm"
          ><i class="bi bi-arrow-left"></i> Back</a
        >
      </div>
    </div><!-- .container-->

    <?php require dirname(__DIR__) . "/parts/footer.php"; ?>