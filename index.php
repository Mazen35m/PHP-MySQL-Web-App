<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task: Smart Methods</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        .form-container { margin-bottom: 30px; }
        table { margin: 0 auto; border-collapse: collapse; width: 50%; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: center; }
        th { background-color: #f9f9f9; }
        input[type="text"], input[type="number"] { width: 120px; padding: 5px; margin: 0 10px; }
        button { padding: 5px 15px; cursor: pointer; }
    </style>
</head>
<body>

    <div class="form-container">
        <form action="insert.php" method="POST">
            <label>Name: </label>
            <input type="text" name="name" required>
            <label>Age: </label>
            <input type="number" name="age" required>
            <button type="submit">Submit</button>
        </form>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = $conn->query("SELECT * FROM users");
            while($row = $result->fetch_assoc()):
            ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= htmlspecialchars($row['name']) ?></td>
                <td><?= $row['age'] ?></td>
                <td id="status-<?= $row['id'] ?>"><?= $row['status'] ?></td>
                <td>
                    <button onclick="toggleStatus(<?= $row['id'] ?>, document.getElementById('status-<?= $row['id'] ?>').innerText)">Toggle</button>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <script>
        function toggleStatus(id, currentStatus) {
            const formData = new FormData();
            formData.append('id', id);
            formData.append('status', currentStatus);

          
            fetch('toggle.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(newStatus => {
            
                document.getElementById('status-' + id).innerText = newStatus;
            });
        }
    </script>
</body>
</html>