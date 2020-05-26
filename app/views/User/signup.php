<div class="formContainer">

<?php if($_SESSION['error']):?>
    <?=$_SESSION['error']?>
    <?php unset($_SESSION['error'])?>
<?php endif;?>

<?php if($_SESSION['success']):?>
    <p>Вы успешно зарегестрировались!</p>
    <?php unset($_SESSION['success'])?>
<?else:?>
<h2>Signup</h2>
    <form class="form"  method="post">
        <p>
            <input type="text" placeholder="name" name="login">
        </p>

        <p>
         <input type="password" placeholder="password" name="password">
        </p>

        <p>
            <input type="text" placeholder="email" name="email">
        </p>

        <p>
            <input type="submit">
        </p>
    </form>
<?php endif;?>
</div>