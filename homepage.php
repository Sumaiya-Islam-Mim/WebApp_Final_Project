
<script>
function checkAlerts() {
    fetch("check_deadlines.php")
        .then(res => res.json())
        .then(alerts => {
            alerts.forEach(msg => {
                alert(msg);
            });
        });
}
setInterval(checkAlerts, 5 * 60 * 1000);
window.onload = checkAlerts;
</script>



<?php
            $result = $conn->query("SELECT * FROM tasks WHERE user_id = $user_id AND completed = FALSE ORDER BY deadline ASC");
            while ($task = $result->fetch_assoc()) {
                echo "<div class='task'>
                        <strong>{$task['title']}</strong><br>
                        <small>Due: {$task['deadline']}</small><br>
                        <a class='done-btn' href='?complete={$task['id']}'>✔️ Done</a>
                      </div>";
            }
            ?>
