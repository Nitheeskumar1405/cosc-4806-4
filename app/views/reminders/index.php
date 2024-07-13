
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Reminders</h1>
                <p><a href="/reminders/create" class="btn btn-primary">Create a new reminder</a></p>
                <p><a href="/home" class="btn btn-secondary">Home</a></p> <!-- Added Home button -->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h2>Your Reminders</h2>
            <?php if (!empty($data['reminders'])): ?>
                <ul>
                    <?php foreach ($data['reminders'] as $reminder): ?>
                        <li>
                            <?php echo htmlspecialchars($reminder['subject']); ?> 
                            (Created at: <?php echo htmlspecialchars($reminder['created_at']); ?>, Status: <?php echo htmlspecialchars($reminder['status']); ?>)
                            <a href="/reminders/update/<?php echo $reminder['id']; ?>" class="btn btn-secondary">Update</a>
                            <a href="/reminders/delete/<?php echo $reminder['id']; ?>" class="btn btn-danger">Delete</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>No reminders found.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php require_once 'app/views/templates/footer.php'; ?>
