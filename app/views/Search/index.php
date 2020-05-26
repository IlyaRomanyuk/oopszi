<?php foreach($vars as $key=>$value):?>
    <div class="searchCard">
        <div class="searchInfo">
            <a href="/about/index?title=<?=$value['name']?>" class='title'><?= $value['name']?></a>
        </div>
        <div>
            <img class="searchImg" src="/images/<?= $value['images']?>">
        </div>
    </div>
<?php endforeach;?>