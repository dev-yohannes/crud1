<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Crud1</title>
</head>

<body>
    <div class="container my-5">
        <h2>List of clients</h2>
        <a class="btn btn-primary" href="create.php" role="button">New Client</a> <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php

                include "connection.php";

                $sql = "SELECT * FROM clients";
                $result = $conn->query($sql);

                if (!$result) {
                    die("Invalid query: " . $conn->error);
                }

                ?>

                <tr>
                    <td>10</td>
                    <td>Bill Gates</td>
                    <td>bill.gates@microsoft.com</td>
                    <td>+22323342423</td>
                    <td>New York, USA</td>
                    <td>18/05/22</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="edit.php">Edit</a>
                        <a class="btn btn-danger btn-sm" href="delete.php">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>