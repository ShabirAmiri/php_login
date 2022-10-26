<?php 
    define('TITLE',"Home | Complete Registertion From");
    include 'includes/header.php';
?>
<div id="philosophy">
    <h1>Advanced Login and Registration Application</h1>
<?php 
    if(isset($_SESSION['userId'])) {
?>
        <div style="text-align: center;">
            <img id="userDp" src=./uploads/<?php echo $_SESSION["userImg"] ?>>
            <h3>' <?php echo strtoupper($_SESSION['userUid']) ?> '</h3>
            <a href="profile.php" class="button login">Profile</a>  
            <a href="edit-profile.php" class="button login">Edit Profile</a>
            <a href="includes/logout.inc.php" class="button login">Logout</a>
        </div>
<?php
    } else {
        if(isset($_GET['error']))
        {
            if($_GET['error'] == 'emptyfields')
            {
                echo '<p class="closed">*please fill in all the fields</p>';
            }
            else if($_GET['error'] == 'nouser')
            {
                echo '<p class="closed">*username does not exist</p>';
            }
            else if ($_GET['error'] == 'wrongpwd')
            {
                echo '<p class="closed">*wrong password</p>';
            }
            else if ($_GET['error'] == 'sqlerror')
            {
                echo '<p class="closed">*website error. contact admint to have it fixed</p>';
            }
        }
?>
        <form method="post" action="includes/login.inc.php" id="login-form">
            <div class="inputGroup">
                <label for="name">Name</label>
                <input type="text" id="name" name="mailuid" placeholder="Username">
            </div>
            <div class="inputGroup">
                <label for="password">Password</label>
                <input type="password" id="password" name="pwd" placeholder="Password">
            </div>
            <input type="submit" class="button next login fullBtn" name="login-submit" value="Login">
        </form>
        <a href="signup.php" class="button previous">Signup</a>
<?php 
    }
?>  
</div>

<?php 
    include 'includes/footer.php';
?>
