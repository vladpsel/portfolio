<header class="header">
    <div class="wrapper">
        <div class="flex v-center f-between">
            <a href="<?php echo $tplData::normalize(APP_LANG); ?>" class="logo np">
                <img src="<?php echo $this->getAsset('img/logo.svg'); ?>" alt="Vlad Panov Logo">
            </a>

            <?php $tplData->renderLangList(['lang-list', 'list', 'np-i']); ?>
        </div>
        <div class="header__banner flex f-center v-center">
            <div class="icon">
                <img src="<?php echo $this->getAsset('img/flag-icon.svg'); ?>" alt="Ukraine flag">
            </div>
            <span class="subtitle-sm">Glory to Ukraine!</span>
        </div>
    </div>
</header>