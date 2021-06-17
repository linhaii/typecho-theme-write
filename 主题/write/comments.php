<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div id="comments">
  <?php $this->comments()->to($comments); ?>
  <?php if ($comments->have()): ?>
    <h4><?php $this->commentsNum(_t(''), _t(''), _t('')); ?></h4>
    <div class="comment-list-wrap">
    <?php $comments->listComments(); ?>
    </div>
    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
  <?php endif; ?>
  <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
      <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
      </div>
      <h4 id="response"><?php _e(''); ?></h4>
      <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form">
    	<p>
          <textarea rows="5" cols="50" name="text" class="textarea" placeholder="" required><?php $this->remember('text'); ?></textarea>
    	</p>
        <?php if($this->user->hasLogin()): ?>
    	  <p><?php _e('登录身份：'); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
        <?php else: ?>
    	  <p>
    	    <input type="text" name="author" id="author" class="text" placeholder="<?php _e('名字（必填）'); ?>" value="<?php $this->remember('author'); ?>" required />

    	    <input type="email" name="mail" id="mail" class="text" placeholder="<?php _e('邮箱（必填，不会被公开)'); ?>" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />

    	    <input type="url" name="url" id="url" class="text" placeholder="<?php _e('网址 http(s)://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
        </p>
        <?php endif; ?>
    	  <p>
          <button id="submit-button" type="submit" class="button submit"><?php _e('提交评论'); ?></button>
        </p>
      </form>
    </div>
  <?php endif; ?>
</div>
