<h1>Sign in here</h1>

<?php if($_SESSION['user_id']): ?>
    <h3>Already sign in</h3>
<?php else: ?>
    <h3>Not sign in</h3>
<?php endif; ?>

<form action="/users/authenticate.php" method="post">
    <input type="email" name="email">
    <input type="password" name="password">
    <button type="submit">Submit</button>
</form>