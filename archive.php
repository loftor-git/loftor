<?php $this->need('header.php'); ?>
<div class="layout">
<section class="content index">
 <?php if ($this->have()): ?>
  <?php while($this->next()): ?>
    <article>
      <div class="article_title">
        <h3><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
        <p class="author">
          <time datetime="<?php $this->date('Y-m-d'); ?>T<?php $this->date('H:i:s'); ?>" title="<?php $this->date('F j,Y H:i'); ?>"><?php $this->date('M j,Y H:i'); ?></time> / <span class="category"><?php $this->category(','); ?></span> / <a href="<?php $this->permalink() ?>#comments" class="comment_link"><?php $this->commentsNum('No Comments', '1 Comment', '%d Comments'); ?></a>
        </p>
      </div>
      <section class="article_content"><?php $this->content('Read more...'); ?></section>
    </article>
  <?php endwhile; ?>
  <?php else: ?>
            <article>
            <h2>找不到相关内容</h2>
            <section>
              <p style="margin-top:1em;">你要查找的东西，我还没写出来^_^</p>
            </section>
          </article>
        <?php endif; ?>
  <div class="pages pagenav clearfix">
    <?php $this->pageNav('&laquo; PREV', 'NEXT &raquo;'); ?>
  </div>
  <div class="pages pagelink clearfix">
    <?php $this->pageLink('&laquo; PREV', 'prev') ?>
    <?php $this->pageLink('NEXT &raquo;', 'next') ?>
  </div>
</section>
<!-- end #content-->
</div>
<?php $this->need('footer.php');?>