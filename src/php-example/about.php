<?php
    session_start();
    $title = "About us";
    require "blocks/header.php"
?>
<div class="container mt-2">
    <h1>About us</h1>

    <form action="check_get.php" method="get">
        <input type="text" name="username" placeholder="Input name" class="form-control"><br>
        <input type="email" name="email" placeholder="Input email" class="form-control"><br>
        <input type="password" name="password" placeholder="Input password" class="form-control"><br>
        <textarea name="message" class="form-control" placeholder="Input message..."></textarea><br>
        <input type="submit" value="Send" class="btn btn-success">
    </form>

    <!-- <form action="check_post.php" method="post">
        <input type="text" name="username" placeholder="Input name" class="form-control"><br>
        <input type="email" name="email" placeholder="Input email" class="form-control"><br>
        <input type="password" name="password" placeholder="Input password" class="form-control"><br>
        <textarea name="message" class="form-control" placeholder="Input message..."></textarea><br>
        <input type="submit" value="Send" class="btn btn-success">
    </form> -->
</div>

<?php
    require "blocks/footer.php"
?>
