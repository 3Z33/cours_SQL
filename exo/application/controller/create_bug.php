<?php
    require_once '../function/db.php';
    session_start();

    if (isset($_POST) && !empty($_POST)) {
        $insert = $bdd->prepare('INSERT INTO bug (author, owner, severity, summary, description, status) VALUES (?, ?, ?, ?, ?, ?)');
        $insert->execute(array(
            $_SESSION['name'],
            $_POST['owner'],
            $_POST['severity'],
            $_POST['summary'],
            $_POST['description'],
            "unsolved"
        ));
<<<<<<< HEAD

        $update = $bdd->prepare('UPDATE software SET bug_id=? WHERE id=?')
        $update->execute(array(

            $_POST['app_id']
        ))
=======
>>>>>>> refs/remotes/origin/main
        header('Location: ../application.php');
    } else {
        echo '<script>alert(\'LOLILOMEGALOL\')</script>';
    }
    
?>