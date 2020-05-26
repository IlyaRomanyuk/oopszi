<div class="formContainer">
<?php if($_SESSION['user']) :?>
    <p><?=$_SESSION['user']['login']?>, Вы успешно авторизовались!</p>
<?php else:?>
    <form class="form" action="/user/login" method="post">
        <p>
            <input type="text" name="login" placeholder="login">
        </p>

        <p>
            <input type="password" name="password" placeholder="password">
        </p>

        <p>
            <input type="submit">
        </p>
    </form>
<?php endif;?>
</div>
