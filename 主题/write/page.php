<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div id="content">
  <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
    <h2 class="page-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
    <div class="page-content" itemprop="articleBody">
      <?php $this->content(); ?>
    </div>
  </article>
  <?php $this->need('comments.php'); ?>
</div>

<?php $this->need('footer.php'); ?>
