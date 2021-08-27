<?php
// We need to use sessions, so you should always start sessions using the below code. 
// session_start(); NO NEED BECAUSE IT IS ALREADY IN header.php file
// If the user is not logged in redirect to the login page... 
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'shopee';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT password, email FROM accounts WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>


<!-- Profile section-->
<section id="profile-page">
    <div class="container py-5">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h2 class="font-baloo">Profile</h2>
        <img class="card-img-top" alt="Profile Picture" src="assets/images/profile-pic.png">
            <h5 class="card-title font-baloo">Your account details are below:</h5>
            <table class="font-baloo">
                <tr>
                    <td>Username:</td>
                    <td><?= $_SESSION['name'] ?></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><?= $password ?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?= $email ?></td>
                </tr>
            </table>
            <div>
                <a href="index.php"><i class="fas fa-sign-out-alt btn-link font-baloo">Home Page</i></a>
                <a href="logout.php"><i class="fas fa-sign-out-alt btn btn-danger font-baloo">Logout</i></a>
            </div>
        </div>
    </div>      
    </div>
</section>
<!--!Profile section-->