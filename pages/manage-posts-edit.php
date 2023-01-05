<?php

require "parts/header.php";

?>
  <body>
    <div class="container mx-auto my-5" style="max-width: 700px;">
      <div class="d-flex justify-content-between align-items-center mb-2">
        <h1 class="h1">Edit Post</h1>
      </div>
      <div class="card mb-2 p-4">
        <form>
          <div class="mb-3">
            <label for="post-title" class="form-label">Title</label>
            <input
              type="text"
              class="form-control"
              id="post-title"
              value="Post 1"
            />
          </div>
          <div class="mb-3">
            <label for="post-content" class="form-label">Content</label>
            <textarea class="form-control" id="post-content" rows="10">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris purus risus, euismod ac tristique in, suscipit quis quam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum eget dapibus nibh. Pellentesque nec maximus odio. In pretium diam metus, sed suscipit neque porttitor vitae. Vestibulum a mattis eros. Integer fermentum arcu dolor, nec interdum sem tincidunt in. Cras malesuada a neque ut sodales. Nulla facilisi.

Phasellus sodales arcu quis felis sollicitudin vehicula. Aliquam viverra sem ac bibendum tincidunt. Donec pulvinar id purus sagittis laoreet. Sed aliquet ac nisi vehicula rutrum. Proin non risus et erat rhoncus aliquet. Nam sollicitudin facilisis elit, a consequat arcu placerat eu. Pellentesque euismod et est quis faucibus.

Curabitur sit amet nisl feugiat, efficitur nibh et, efficitur ex. Morbi nec fringilla nisl. Praesent blandit pellentesque urna, a tristique nunc lacinia quis. Integer semper cursus lectus, ac hendrerit mi volutpat sit amet. Etiam iaculis arcu eget augue sollicitudin, vel luctus lorem vulputate. Donec euismod eu dolor interdum efficitur. Vestibulum finibus, lectus sed condimentum ornare, velit nisi malesuada ligula, eget posuere augue metus et dolor. Nunc purus eros, ultricies in sapien quis, sagittis posuere risus.
                        </textarea
            >
          </div>
          <div class="mb-3">
            <label for="post-content" class="form-label">Status</label>
            <select class="form-control" id="post-status" name="status">
              <option value="review">Pending for Review</option>
              <option value="publish">Publish</option>
            </select>
          </div>
          <div class="text-end">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
      <div class="text-center">
        <a href="/manage-posts" class="btn btn-link btn-sm"
          ><i class="bi bi-arrow-left"></i> Back to Posts</a
        >
      </div>
    </div>

<?php require "parts/footer.php"; ?>
