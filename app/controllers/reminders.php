<?php

class Reminders extends Controller {

    public function index() {
      
        $reminder = $this->model('Reminder');
        $list_of_reminders = $reminder->get_all_reminders();
        $this->view('reminders/index', ['reminders' => $list_of_reminders]);
    }

    public function create() {
      
        $reminder = $this->model('Reminder');

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user_id = $_SESSION['user_id']; // Ensure the user is logged in and user_id is set in session
            $subject = $_POST['subject'];
            $reminder->create_reminder($user_id, $subject);
            header('Location: /reminders');
            exit();
        }
      

        $this->view('reminders/create');
    }

    public function update($id) {
        $reminder = $this->model('Reminder');

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $status = $_POST['status'];
            $reminder->update_reminder($id, $status);
            header('Location: /reminders');
            exit();
        }

        $reminder_data = $reminder->get_reminder($id);
        $this->view('reminders/update', ['reminder' => $reminder_data]);
    }

    public function delete($id) {
        $reminder = $this->model('Reminder');
        $reminder->delete_reminder($id);
        header('Location: /reminders');
        exit();
    }
}
?>
