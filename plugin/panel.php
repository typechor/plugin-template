<?php
include 'common.php';
include 'header.php';
include 'menu.php';
?>

<main class="main">
    <div class="body container">
        <div class="typecho-page-title">
            <h2><?php _e('菜单页面标题'); ?></h2>
        </div>
        <div class="row typecho-page-main" role="form">
            <div class="col-mb-12 col-tb-8 col-tb-offset-2">
                <!-- 菜单页面实现，下面是插件配置示例 -->
                <?php \Widget\Plugins\Config::alloc()->config()->render(); ?>
            </div>
        </div>
    </div>
</main>

<?php
include 'copyright.php';
include 'common-js.php';
include 'form-js.php';
include 'footer.php';
?>