<div class="container">
    <h2>User Account</h2>
    <h3>Welcome <?php echo $user['username']; ?>!</h3>
    <div class="account-info">
        <p><b>Name: </b><?php echo $user['username']; ?></p>
        <p><b>Email: </b><?php echo $user['email']; ?></p>
        <p><b>Phone: </b><?php echo $user['phone']; ?></p>
        <p><b>Gender: </b><?php echo $user['gender']; ?></p>
        <p><a href="<?php echo base_url(); ?>users/logout">Log out</a></p>
    </div>
</div>
