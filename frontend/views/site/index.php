<?php

/* @var $this yii\web\View */
/* @var yii\data\ActiveDataProvider $dataProvider */


$this->title = 'My Yii Application';
?>
<header>
    <div class="owl-carousel owl-theme">

        <?php $i=1;
        foreach ($slider as $slider) {
        if ($i==1) $slider_class="slide";
        ?>
            <div class="item">
                <img src="<?php echo $slider->getImageUrl() ?>" alt="images not found">
                <div class="cover">
                    <div class="container">
                        <div class="header-content">
                            <div class="line"></div>
                            <h2>Teimagine Digital Experience with</h2>
                            <h1><?=$slider->name?></h1>
                            <h4><?=$slider->description?></h4>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $i++;
            $slider_class="";
        }?>
</header>