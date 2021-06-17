<?php
/**
 * 极简写作 
 * 
 * @package write
 * @author 
 * @version
 * @link 
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div id="content">
  <?php while($this->next()): ?>
    <?php if ($this->sequence == 1): ?> 
    <div class="newpost">
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
      <h2 class="newer-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
      <a itemtype="url" href="<?php $this->permalink() ?>"><div class="newer-content" itemprop="articleBody"> 

    <?php 
            if(preg_match('/<!--more-->/',$this->content)||mb_strlen($this->content, 'utf-8') < 270)
            {
                $this->content('');
            }
            else
            {    
                    $c=mb_substr($this->content, 0, 270, 'utf-8');
                    $c=preg_replace("/<[img|IMG].*?src=[\'\"](.*?(?:[\.gif|\.jpg|\.jpeg|\.png|\.tiff|\.bmp]))[\'|\"].*?[\/]?>/","",$c);
                    if(preg_match('/<pre>/',$c))
                    {
                       echo $c,'</code></pre>','...';;
                    }
                    else
                    {
                       echo $c.'...';
                    }
                    echo '';
            }
        ?>

      </div></a>
    </article>
    </div>
  <?php endif; ?>
  <?php endwhile; ?>

  <ul id="categories" class="categories">
		<?php $this->widget('Widget_Metas_Category_List')->parse('<li><a href="{permalink}" class=""><name>{name}</name><br/><br/><span> {count} posts</span></a></li>'); ?>
  </ul>

<script>function auto_margin(){
    var e = document.getElementById('categories');
    e.style.marginLeft = 0;
    var width = document.width || document.body.clientWidth;
    if (e && width > 292){
            e.style.marginLeft = ( width% 296) /2 + 'px';
    }
    }
auto_margin();
window.onresize = auto_margin;
</script>

</div>

<?php $this->need('footer.php'); ?>
