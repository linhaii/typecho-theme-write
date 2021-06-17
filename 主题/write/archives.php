<?php    
/**  
 * 归档    
 * @package custom   
 */    
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php'); 
?>

<div id="content">
 <div class="archive">
  <article>
    <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);   
    $year=0; $mon=0; $i=0; $j=0;   
    $output = '<div class="archive-title">';   
    while($archives->next()):   
              $year_tmp = date('Y',$archives->created);   
    $mon_tmp = date('m',$archives->created);   
    // var_dump($year_tmp);   
    $y=$year; $m=$mon;   
    if ($mon != $mon_tmp && $mon > 0) $output .= '</ul></li>';   
    if ($year != $year_tmp && $year > 0) $output .= '</ul>';   
    if ($year != $year_tmp) {   
      $year = $year_tmp;   
      $output .= '<h1>'. $year .' </h1><ul class="al_mon_list">'; // 输出年份   
    }   
    $output .= '<li> <span class=date>'.date('Y-m-d',$archives->created).'</span><a href="'.$archives->permalink .'">'. $archives->title .'</a> </li>'; // 输出文章日期和标题   
    endwhile;   
    $output .= '</ul></div>';   
    echo $output;  
    $archives->pageNav('&laquo; 前一页', '后一页 &raquo;'); 
    ?>
  </article>
 </div>
</div>

<?php $this->need('footer.php'); ?>
