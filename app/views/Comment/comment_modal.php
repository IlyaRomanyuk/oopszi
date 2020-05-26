<img class="close" src="/images/close.png" alt="">
<h3>Добавить комментарий к книге <?= $vars['name']?></h3>
<form method="POST" action="/comment/add" class="form">
    <p>
        <textarea name="text" class="textarea"></textarea>
    </p>
    <input type="submit" value="Добавить">
</form>