<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaints</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .container {
            width: 80%;
            margin: auto;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Customer Complaints</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Complaint</th>
            </tr>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "murtuza");

            $result = mysqli_query($conn, "SELECT * FROM customerComplaint");

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['complaint'] . "</td>";
                    echo "</tr>";
                }
            }
            mysqli_close($conn);
            ?>
        </table>

        <a href="index.html">Back to Home</a><br><br>
        <a href="delete.php">Delete a  Complaint</a>
    </div>
</body>
</html>
