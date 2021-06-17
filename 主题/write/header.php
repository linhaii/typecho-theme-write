<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
  <head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <meta http-equiv = "X-UA-Compatible" content = "IE=Edge,chrome=1" >
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Cache-Control" content="no-transform" /> 
    <meta http-equiv="Cache-Control" content="no-siteapp" /> 

    <title>
      <?php if($this->is('index')): ?>
	<?php $this->options->title(); ?> - <?php $this->options->description(); ?>
      <?php else:?><?php $this->archiveTitle(array(
                   'category'  =>  _t('%s'),
                   'search'    =>  _t('包含关键字 %s 的文章'),
                   'tag'       =>  _t('标签 %s 下的文章'),
                   'author'    =>  _t('%s 发布的文章')
                   ), '', ' - '); ?><?php $this->options->title(); ?>
      <?php endif; ?>
    </title>
    
    <!-- 使用url函数转换相关路径 -->
    <link href="<?php $this->options->themeUrl('style.css'); ?>" media="screen, projection" rel="stylesheet" type="text/css">

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header('generator=&template=&pingback=&xmlrpc=&wlw='); ?>
  </head>

  <body>
    <!--[if lt IE 8]>
         <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
         <![endif]-->


    <div class="container">
      <header id="header">
        <div id="nav_wrap">
          <ul id="nav">
            <li><a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>
              <li><a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
            <?php endwhile; ?>
          </ul>
        </div>
      </header>