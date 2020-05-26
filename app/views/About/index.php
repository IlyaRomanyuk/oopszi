<div class="about">
    <?php if(!empty($result)):?>
        <?php foreach($result as $key=>$value):?>
            <div class="about_card">
                <div class="about_img">
                    <img src="/images/<?=$value['images']?>">
                    <p class="about_title"><?=$value['name']?></p>
                    <p class="about_title"><?=$value['author']?></p>
                    <p class="about_title"><?=$value['year']?></p>
                    <p class="about_title"><?=$value['description']?></p>
                </div>
            </div>
        <?php endforeach;?>
    <?php endif;?>
</div>