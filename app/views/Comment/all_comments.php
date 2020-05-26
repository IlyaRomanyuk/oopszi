<div class="response">
    <?php foreach($vars as $item):?>
        <p>Участник <b><?= $item['user_login']?></b> Оставил комментарий: </p>
        <p><?= $item['comment']?></p>
        <p><?= $item['data']?></p>
    <?php endforeach; ?>
</div>