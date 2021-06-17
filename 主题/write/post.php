<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div id="content">
  <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
    <h2 class="post-title" itemprop="name headline"><?php $this->title() ?></h2>
    <div class="post-content" itemprop="articleBody">
      <?php $this->content(); ?>
    </div>
    <div class="post-bottom">
    <!-- <div itemprop="keywords" class="tags"><?php $this->tags('', true, ''); ?></div> -->
    <div class="post-time-bottom">@<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date("Y-m-d H:i"); ?></time></div>
    </div>
  </article>
  <?php $this->need('comments.php'); ?>
</div>

<?php $this->need('footer.php'); ?>
