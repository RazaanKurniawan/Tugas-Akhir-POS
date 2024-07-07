<?php
include 'includes/header.php';

$sql = "SELECT * FROM suppliers";
$result = $conn->query($sql);
?>
    <div class="container mt-5">
        <h2>Supplier List</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Contact Person</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["id"]. "</td>
                                <td>" . $row["name"]. "</td>
                                <td>" . $row["contact_person"]. "</td>
                                <td>" . $row["phone"]. "</td>
                                <td>" . $row["email"]. "</td>
                                <td>" . $row["address"]. "</td>
                                <td>
                                    <a href='edit_supplier.php?id=" . $row["id"]. "' class='btn btn-warning btn-sm'>Edit</a>
                                    <a href='delete_supplier.php?id=" . $row["id"]. "' class='btn btn-danger btn-sm'>Delete</a>
                                </td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>No suppliers found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
<?php include('includes/footer.php'); ?>

