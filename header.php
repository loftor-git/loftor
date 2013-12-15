<!DOCTYPE html>
<html lang="zh-cn" dir="ltr">
<head>
	<meta charset="<?php $this->options->charset(); ?>" />
	<title><?php $this->archiveTitle(' &raquo; ', '', ' - '); ?><?php $this->options->title(); ?></title>
	<!-- 通过自有函数输出HTML头部信息 -->
	<?php $this->header(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">                            
	<link rel="icon" href="/favicon.ico" type="image/icon" /> 
	<link rel="shortcut icon" href="/favicon.ico" type="image/icon" />
	<!--<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.min.css');?>">-->
	<link rel="stylesheet" type="text/css" media="all" href="http://cdn.loftor.com/usr/themes/loftor/style.min.css?20121125">

<!--[if lt IE 9]>
<script src="<?php $this->options->themeUrl('js/html5.js'); ?>"></script>
<![endif]-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!--<script type="text/javascript" src="<?php $this->options->themeUrl('js/common.js'); ?>"></script>-->
<script type="text/javascript" src="http://cdn.loftor.com/usr/themes/loftor/js/common.js"></script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?b45de94782693406ca2bfaa29f408f4d";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</head>
<body>
<div class="wrap">
	<header id="top">
		<div class="logo" id="logo">
			<h1><a href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->title() ?>"><span><?php $this->options->title() ?></span></a></h1>
			<h2><?php $this->options->description() ?></h2>
		</div>
		<div class="top_op">
			<nav>
				<p>
					<a href="<?php $this->options->siteUrl(); ?>">Home</a>
					<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
					<?php while($pages->next()): ?>
						<a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->slug(); ?></a>
					<?php endwhile; ?>/
					<a href="<?php $this->options->feedUrl(); ?>" class="rss_feed" target="_blank">Rss</a>
				</p>
				<p>
					
					<?php $this->widget('Widget_Metas_Category_List')->parse('<a href="{permalink}" title="{name}({count})">{slug}</a>'); ?>
				</p>
				<form id="search" method="post" action="/">
						<input type="text" name="s" class="text" size="20" onblur="if (this.value == '') {this.value = 'To search type and hit enter';}" onfocus="if (this.value == 'To search type and hit enter') {this.value = '';}" value="To search type and hit enter" />
					</form>
			</nav>
			
		</div>
		
	</header>
<div class="clearfix"></div>