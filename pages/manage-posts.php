<?php

require "parts/header.php";

?>
  <body>
    <div class="container mx-auto my-5" style="max-width: 700px;">
      <div class="d-flex justify-content-between align-items-center mb-2">
        <h1 class="h1">Manage Posts</h1>
        <div class="text-end">
          <a href="/manage-posts-add" class="btn btn-primary btn-sm"
            >Add New Post</a
          >
        </div>
      </div>
      <div class="card mb-2 p-4">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col" style="width: 40%;">Title</th>
              <th scope="col">Status</th>
              <th scope="col" class="text-end">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">5</th>
              <td>Post 5</td>
              <td><span class="badge bg-warning">Pending Review</span></td>
              <td class="text-end">
                <div class="buttons">
                  <a
                    href="/post"
                    target="_blank"
                    class="btn btn-primary btn-sm me-2 disabled"
                    ><i class="bi bi-eye"></i
                  ></a>
                  <a
                    href="/manage-posts-edit"
                    class="btn btn-secondary btn-sm me-2"
                    ><i class="bi bi-pencil"></i
                  ></a>
                  <a href="#" class="btn btn-danger btn-sm"
                    ><i class="bi bi-trash"></i
                  ></a>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Post 4</td>
              <td><span class="badge bg-success">Publish</span></td>
              <td class="text-end">
                <div class="buttons">
                  <a
                    href="/post"
                    target="_blank"
                    class="btn btn-primary btn-sm me-2"
                    ><i class="bi bi-eye"></i
                  ></a>
                  <a
                    href="/manage-posts-edit"
                    class="btn btn-secondary btn-sm me-2"
                    ><i class="bi bi-pencil"></i
                  ></a>
                  <a href="#" class="btn btn-danger btn-sm"
                    ><i class="bi bi-trash"></i
                  ></a>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Post 3</td>
              <td><span class="badge bg-success">Publish</span></td>
              <td class="text-end">
                <div class="buttons">
                  <a
                    href="/post"
                    target="_blank"
                    class="btn btn-primary btn-sm me-2"
                    ><i class="bi bi-eye"></i
                  ></a>
                  <a
                    href="/manage-posts-edit"
                    class="btn btn-secondary btn-sm me-2"
                    ><i class="bi bi-pencil"></i
                  ></a>
                  <a href="#" class="btn btn-danger btn-sm"
                    ><i class="bi bi-trash"></i
                  ></a>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Post 2</td>
              <td><span class="badge bg-success">Publish</span></td>
              <td class="text-end">
                <div class="buttons">
                  <a
                    href="/post"
                    target="_blank"
                    class="btn btn-primary btn-sm me-2"
                    ><i class="bi bi-eye"></i
                  ></a>
                  <a
                    href="/manage-posts-edit"
                    class="btn btn-secondary btn-sm me-2"
                    ><i class="bi bi-pencil"></i
                  ></a>
                  <a href="#" class="btn btn-danger btn-sm"
                    ><i class="bi bi-trash"></i
                  ></a>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">1</th>
              <td>Post 1</td>
              <td><span class="badge bg-success">Publish</span></td>
              <td class="text-end">
                <div class="buttons">
                  <a
                    href="/post"
                    target="_blank"
                    class="btn btn-primary btn-sm me-2"
                    ><i class="bi bi-eye"></i
                  ></a>
                  <a
                    href="/manage-posts-edit"
                    class="btn btn-secondary btn-sm me-2"
                    ><i class="bi bi-pencil"></i
                  ></a>
                  <a href="#" class="btn btn-danger btn-sm"
                    ><i class="bi bi-trash"></i
                  ></a>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="text-center">
        <a href="/dashboard" class="btn btn-link btn-sm"
          ><i class="bi bi-arrow-left"></i> Back to Dashboard</a
        >
      </div>
    </div>

<?php require "parts/footer.php"; ?>
