<center> 
    <form action="/crud/public/tasks/post" method="POST">
        <?= view("form", ['task' => '0', 'edit' => FALSE]); ?>
    </form>

    <div class="list-group" style="width: 70%;">
        <a href="#" class="list-group-item list-group-item-action active">
            ToDo - List by NeoTRAN001
        </a>

        <?php foreach($tasks as $key => $task): ?>
            <a href="/crud/public/tasks/get/<?= $task['id']; ?>" class="list-group-item list-group-item-action"><?= $task['title']; ?></a>
        <?php endforeach; ?>   
    </div>
</center>