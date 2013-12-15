<?php $this->need('header.php'); ?>
<div class="layout article_post">
  <section class="content">
    <article>
      <div class="article_title">
        <h1><?php $this->title() ?></h1>
        <p class="author">
          <time datetime="<?php $this->date('Y-m-d'); ?>T<?php $this->date('H:i:s'); ?>" title="<?php $this->date('F j,Y H:i'); ?>"><?php $this->date('M j,Y H:i'); ?></time> / <span class="category"><?php $this->category(','); ?></span> / <a href="<?php $this->permalink() ?>#comments" class="comment_link"><?php $this->commentsNum('No Comments', '1 Comment', '%d Comments'); ?></a>
        </p>
        <div class="about_article"><p class="prev_article"><?php $this->thePrev('前一篇：%s', '当前是最前一篇') ?></p><p class="next_article"><?php $this->theNext('后一篇：%s', '当前是最后一篇') ?></p></div>
      </div>
      <section class="article_content" id="article_content">
        <?php $this->content(); ?>
      </section>
      <section class="share_url">
        分享到： <a href="javascript:void(0)" onclick=""><img src="" alt="分享到腾讯微博" /></a>
      </section>
      <section class="tags">Tags:<?php $this->tags(',', true, 'none'); ?></section>
      <div class="about_article_end"><p class="prev_article"><?php $this->thePrev('前一篇：%s', '当前是最前一篇') ?></p><p class="next_article"><?php $this->theNext('后一篇：%s', '当前是最后一篇') ?></p></div>
    </article>
    <?php $this->need('comments.php'); ?>
  </section><!-- end #content-->
</div>
<?php $this->need('footer.php'); ?>