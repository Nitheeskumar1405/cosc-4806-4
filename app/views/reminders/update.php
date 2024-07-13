
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Update Reminder</h1>
                <p><a href="/home" class="btn btn-secondary">Home</a></p> <!-- Added Home button -->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form action="/reminders/update/<?php echo $data['reminder']['id']; ?>" method="post">
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" name="status" id="status" required>
                        <option value="not completed" <?php if ($data['reminder']['status'] == 'not completed') echo 'selected'; ?>>Not Completed</option>
                        <option value="completed" <?php if ($data['reminder']['status'] == 'completed') echo 'selected'; ?>>Completed</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update Reminder</button>
            </form>
        </div>
    </div>
</div>

<?php require_once 'app/views/templates/footer.php'; ?>
