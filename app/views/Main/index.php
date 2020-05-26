<?php if($allBooks): ?>
    <div class="card">
        <form class="searchForm" action="/search/index" method="GET">
            <input class="input" placeholder="Search" type="text" name="search">
            <input type="submit" value="Search">
        </form>
        <?php if($_SESSION['ready']) :?>
        <?= $_SESSION['ready']?>
        <?php unset($_SESSION['ready'])?>
        <?php elseif($_SESSION['not_ready']) :?>
        <?=$_SESSION['not_ready']?>
        <?php unset($_SESSION['not_ready'])?>
        <?php endif;?>
        <?php foreach($allBooks as $key=>$value):?>
            <div class="cardBook">
                <div class="cardImg">
                    <img src="/images/<?= $value['images']?>">
                </div>
                <div class="cardInfo">
                    <p class='title'><?= $value['name']?> <small><?= $value['author']?></small></p>
                    <p class='description'>
                        <?=$value['description']?>
                    </p>
                    <?php if(isset($_SESSION['user'])) :?>
                        <a data-id="<?= $value['id']?>" class="link_add" href="#">Добавить комментарий</a>
                    <?php endif;?>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a data-id="<?= $value['id']?>" class="link_check" href="#">Просмотреть комментарии</a>
                </div>
            </div>
        <?php endforeach;?>
    </div>
<?php endif;?>