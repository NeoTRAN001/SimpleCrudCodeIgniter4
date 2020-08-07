<div class="card">
  <div class="card-header">
    <h2><?= $tasks['title']; ?></h2>
  </div>
  <div class="card-body">
    <h5 class="card-title"><?= $tasks['date']; ?></h5>
    <p class="card-text"><?= $tasks['body']; ?></p>
    <a href="/crud/public/tasks/delete/<?= $tasks['id'] ?>" class="btn btn-outline-danger">Delete</a>
    <a href="/crud/public/tasks/edit/<?= $tasks['id'] ?>" type="button" class="btn btn-outline-info">Edit</a>
  </div>
</div>
