
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Create a New Reminder</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form action="/reminders/create" method="post">
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject" required>
                </div>
                <button type="submit" class="btn btn-primary">Create Reminder</button>
            </form>
        </div>
    </div>
</div>

<?php require_once 'app/views/templates/footer.php'; ?>
