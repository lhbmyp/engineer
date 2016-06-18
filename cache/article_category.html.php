<?php /* Smarty version 2.6.26, created on 2016-05-06 16:10:45
         compiled from article_category.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <link rel="stylesheet" href="http://bjtutuan.com/engineer/theme/default/images/css/style.css" />
    <link rel="stylesheet" href="http://bjtutuan.com/engineer/theme/default/images/css/jilu.css" />
    <script src="http://bjtutuan.com/engineer/theme/default/images/js/jquery-1.8.3.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="http://bjtutuan.com/engineer/theme/default/images/js/base.js" type="text/javascript" charset="utf-8"></script>

	<!-- <div class="top">
		<div class="logo">
			<img src="http://bjtutuan.com/engineer/theme/default/images/img/logo.jpg" alt="" width="282" height="156"/>
		</div>
		<div class="right">
			<div class="tuoyuan">
				
			</div>
			<div class="nav">
				<span>铁道信号工程师协会(IRSE)北京分会</span>
				<div class="lang">English</div>
				<ul class="nav_ul">
					<li><a href="">首页</a></li>
					<li><a href="">主席寄语</a></li>
					<li><a href="">学会介绍</a></li>
					<li><a href="">组织机构</a></li>
					<li><a href="">学会章程</a></li>
					<li><a href="">国际交流</a></li>
					<li><a href="">教育培训</a></li>
					<li><a href="">会议活动</a></li>
					<li><a href="">联系我们</a></li>
				</ul>
			</div>
		</div>
	</div> -->
	<div class="zhe"></div>
	<div class="middle">
		<div class="now">
			<span>当前位置 : </span>
			<span class="span_now">
				<?php echo $this->_tpl_vars['cate_info']['cat_name']; ?>
 
			</span>
		</div>
		<!-- <div class="mid_left">
			<div class="left_tit">
				菜单导航
			</div>
			<div class="tit_list">
				<ul>
					<li class="first_cat">>&nbsp;<a href="">一级标题</a></li>
					<li class="second_cat">>&nbsp;<a href="">二级标题</a></li>
					<li class="second_cat">>&nbsp;<a href="">二级标题</a></li>
				</ul>
			</div>
		</div> -->
		<div class="mid_right">
			<div class="left_tit">
				<?php echo $this->_tpl_vars['cate_info']['cat_name']; ?>

			</div>
			<table border="" cellspacing="" cellpadding="">
				<div id="articleList">
		       	<?php $_from = $this->_tpl_vars['article_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['article_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['article_list']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['article']):
        $this->_foreach['article_list']['iteration']++;
?>
			       <dl<?php if (($this->_foreach['article_list']['iteration'] == $this->_foreach['article_list']['total'])): ?> class="last"<?php endif; ?>>
			         <div class="numDate">
			           <em><?php echo $this->_tpl_vars['article']['click']; ?>
</em>
			           <p><?php echo $this->_tpl_vars['article']['add_time_short']; ?>
</p>
			         </div>
			         <dt><a href="<?php echo $this->_tpl_vars['article']['url']; ?>
"><?php echo $this->_tpl_vars['article']['title']; ?>
</a></dt>
			       </dl>
			    <?php endforeach; endif; unset($_from); ?>
			    </div>
			</table>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/pager.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div>
		<div class="clear"></div>
	</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>