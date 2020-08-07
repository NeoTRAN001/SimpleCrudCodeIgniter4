<div class="mb-4" style="width: 70%">
        <div class="form-group">
            <?php if($edit): ?>
                <input name="id" class="form-control" type="text" placeholder="title" value="<?= old('id', $tasks['id']) ?>" readonly>
                <input name="title" class="form-control" type="text" placeholder="title" value="<?= old('title', $tasks['title']) ?>">
            <?php else: ?>
                <input name="title" class="form-control" type="text" placeholder="title">
            <?php endif; ?>
        </div>
        <div class="form-group">
            <?php if($edit): ?>
                <textarea name="body" placeholder="Message..." class="form-control" id="" rows="3"><?= old('body', $tasks['body']) ?></textarea>
            <?php else: ?>
                <textarea name="body" placeholder="Message..." class="form-control" id="" rows="3"></textarea>
            <?php endif; ?>
        </div>
        <button type="submit" class="btn btn-success ">
            Guardar
        </button>
</div>