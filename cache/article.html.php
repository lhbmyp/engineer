<?php /* Smarty version 2.6.26, created on 2016-05-06 16:10:51
         compiled from article.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <link rel="stylesheet" href="http://bjtutuan.com/engineer/theme/default/images/css/style.css" />
    <link rel="stylesheet" href="http://bjtutuan.com/engineer/theme/default/images/css/tuwen.css" />
    <script src="http://bjtutuan.com/engineer/theme/default/images/js/jquery-1.8.3.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="http://bjtutuan.com/engineer/theme/default/images/js/base.js" type="text/javascript" charset="utf-8"></script>

	<div class="zhe"></div>
	<div class="middle">
		<div class="now">
			<span>当前位置</span>
			<span class="span_now">
				<?php if ($this->_tpl_vars['ur_here']): ?><b>></b><?php echo $this->_tpl_vars['ur_here']; ?>
<?php endif; ?>
			</span>
		</div>
		<div class="mid_con">
			<p class="con_tit"><?php echo $this->_tpl_vars['article']['title']; ?>
</p><br />
			<p class="date_time">发布时间：<?php echo $this->_tpl_vars['article']['add_time']; ?>
 点击次数：<?php echo $this->_tpl_vars['article']['click']; ?>
</p>
			<div class="con_txt">
				<?php echo $this->_tpl_vars['article']['content']; ?>

				<!-- <div class="con_img">
					<ul>
						<li>
							<img src="http://bjtutuan.com/engineer/theme/default/images/img/img1.jpg" alt="" />
							<p class="img_tit">图片标题</p>
							<p class="img_con">图片简短说明图片简短说明图片简短说明</p>
						</li>
						<li>
							<img src="http://bjtutuan.com/engineer/theme/default/images/img/img2.jpg" alt="" />
							<p class="img_tit">图片标题</p>
							<p class="img_con">图片简短说明图片简短说明图片简短说明</p>
						</li>
						<li style="margin-right: 0px;">
							<img src="http://bjtutuan.com/engineer/theme/default/images/img/img3.jpg" alt="" />
							<p class="img_tit">图片标题</p>
							<p class="img_con">图片简短说明图片简短说明图片简短说明</p>
						</li>
					</ul>
				</div>
				<p class="fujian_p">附件下载</p> -->
				<!-- <ul class="fujian">
					<li><img src="http://bjtutuan.com/engineer/theme/default/images/img/fujian.jpg" alt="" />file.doc</li>
					<li><img src="http://bjtutuan.com/engineer/theme/default/images/img/fujian.jpg" alt="" />file.doc</li>
					<li><img src="http://bjtutuan.com/engineer/theme/default/images/img/fujian.jpg" alt="" />file.doc</li>
				</ul> -->
			</div>
		</div>
	</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>