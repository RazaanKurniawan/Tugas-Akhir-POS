<?php 
include ('includes/header.php'); 

// Cek apakah level pengguna adalah Admin atau Manajer
if ($_SESSION['loggedInUser']['level'] != 'Admin' && $_SESSION['loggedInUser']['level'] != 'Manajer') {
    echo '<script>window.location.href = "index.php";</script>';
    exit();
}
?>

<div class="container mt-5">
        <h2>Add New Supplier</h2>
        <form action="code.php" method="post">
            <div class="form-group">
                <label for="name">Supplier Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="contact_person">Contact Person:</label>
                <input type="text" class="form-control" id="contact_person" name="contact_person">
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea class="form-control" id="address" name="address"></textarea>
            </div>
            <button type="submit" name="saveSuppliers" class="btn btn-primary">Add Supplier</button>
        </form>
    </div>

<?php include( 'includes/footer.php' ); ?>