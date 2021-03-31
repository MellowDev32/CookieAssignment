<?php include('header.php') ?>
<h1>Register</h1>
<?php if(!$firstname) { ?>
<form action="." method="get">
    <input type="hidden" name="action" value="register">
    <label>First Name:</label>
    <input type="text" name="firstname" required>
    <input type="submit" class="button blue">
</form>
<?php } else { ?>
<h3>Thank You For Registering <?php echo '$firstname'; ?>!</h3>
<p>Click link below to view Vehicle List</p>
<p><a href=".?action=list_vehicles">View Vehicles</a></p>
<?php } ?>
<?php include('footer.php') ?>