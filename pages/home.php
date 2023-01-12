<?php
    // require the header part
    require dirname(__DIR__) . "/parts/header.php";

?>
  <body>

    <div class="container mx-auto my-5" style="max-width: 500px">
      <h1 class="h1 mb-4 text-center">My Blog</h1>
      <div class="card mb-2">
        <div class="card-body">
        <?php foreach( Post::getAllPosts() as $post ): ?>
          <h5 class="card-title"><?php echo $post['title']; ?></h5>
          <p class="card-text">This is a post</p>
          <div class="text-end">
            <a href="/post" class="btn btn-primary btn-sm">Read More</a>
          </div>
        <?php endforeach; ?>
        </div>
      </div>

      <div class="mt-4 d-flex justify-content-center gap-3">
      <?php if ( Authentication::isLoggedIn() ) : ?>
        <a href="/logout" class="btn btn-link btn-sm">Logout</a>
      <?php else : ?>
        <a href="/login" class="btn btn-link btn-sm">Login</a>
        <a href="/signup" class="btn btn-link btn-sm">Sign Up</a>
      <?php endif; ?>
      </div>
    </div>

<?php require dirname(__DIR__) . "/parts/footer.php"; ?>