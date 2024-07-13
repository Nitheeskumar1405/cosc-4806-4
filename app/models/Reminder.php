<?php

class Reminder {

    public function __construct() {
        // Any initialization code can go here
    }

    public function get_all_reminders() {
        $db = db_connect();
        $statement = $db->prepare("SELECT * FROM reminders WHERE Deleted = 'No';");
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC); // Fetch all rows
        return $rows;
    }

    public function get_reminder($reminder_id) {
        $db = db_connect();
        $statement = $db->prepare("SELECT * FROM reminders WHERE id = :id;");
        $statement->bindValue(':id', $reminder_id);
        $statement->execute();
        $row = $statement->fetch(PDO::FETCH_ASSOC); // Fetch single row
        return $row;
    }

    public function create_reminder($user_id, $subject) {
        $db = db_connect();
        $statement = $db->prepare("INSERT INTO reminders (user_id, subject, status, Deleted, created_at) VALUES (:user_id, :subject, 'not completed', 'No', NOW());");
        $statement->bindValue(':user_id', $user_id);
        $statement->bindValue(':subject', $subject);
        return $statement->execute();
    }

    public function update_reminder($reminder_id, $status) {
        $db = db_connect();
        $statement = $db->prepare("UPDATE reminders SET status = :status WHERE id = :id;");
        $statement->bindValue(':id', $reminder_id);
        $statement->bindValue(':status', $status);
        return $statement->execute();
    }

    public function delete_reminder($reminder_id) {
        $db = db_connect();
        $statement = $db->prepare("UPDATE reminders SET deleted = 'Yes' WHERE id = :id;");
        $statement->bindValue(':id', $reminder_id);
        return $statement->execute();
    }
}
?>
