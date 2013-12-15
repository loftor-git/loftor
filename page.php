<?php $this->need('header.php'); ?>
<div class="layout article_post">
  <section class="content">
    <article>
      <div class="article_title">
        <h1><?php $this->title() ?></h1>
      </div>
      <section class="article_content" id="article_content">
      <?php $this->content(); ?>
      </section>
    </article>
    <?php $this->need('comments.php'); ?>
  </section><!-- end #content-->
</div>
<?php $this->need('footer.php'); ?>