<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div id="content">
    <h1 class="archivetitle"><?php $this->archivetitle(array(
            'category'  =>  _t('%s'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h1>	

  <?php if ($this->have()): ?>
    <?php while($this->next()): ?>
      <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <h2 class="post-title-archive" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
        <div class="post-content-archive" itemprop="articleBody">
          <?php $this->excerpt(100); ?>
        </div>
      </article>
    <?php endwhile; ?>
     <div class="space"></div>
  <?php else: ?>
    <article class="post">
      <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
    </article>
  <?php endif; ?>

  <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div>

<?php $this->need('footer.php'); ?>
