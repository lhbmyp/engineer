<?php /* Smarty version 2.6.26, created on 2016-06-18 20:51:14
         compiled from index.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script src="http://localhost/engineer/theme/default/images/js/index.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="http://localhost/engineer/theme/default/images/css/xuehui.css" />
<link rel="stylesheet" href="http://localhost/engineer/theme/default/images/js/jquery.slideBox.css" />
    <script src="http://localhost/engineer/theme/default/images/js/jquery-1.8.3.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="http://localhost/engineer/theme/default/images/js/base.js" type="text/javascript" charset="utf-8"></script>
    <script src="http://localhost/engineer/theme/default/images/js/jquery.slideBox.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="http://localhost/engineer/theme/default/images/js/myy.js" type="text/javascript" charset="utf-8"></script>
	<div class="middle index">
		<!--  <div class="now">
			<span>当前位置 :</span>
			<span class="span_now">
				学会主页
			</span>
		</div>  -->
		<ul class="ul_1">
			<li class="li_1">
				<div class="shad_tit">IRSE International Convention</div>
				<div id="lunbo1" class="slideBox">
					  <ul class="items">
					    <?php $_from = $this->_tpl_vars['show_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['show'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['show']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['show']):
        $this->_foreach['show']['iteration']++;
?>
  						<li><img src="<?php echo $this->_tpl_vars['show']['show_img']; ?>
" width="270" height="260"></li>
  						<?php endforeach; endif; unset($_from); ?>
					  </ul>
				</div>
			</li>
			<li class="li_2">
				<div class="table1" id='tab'>
					<div class="tab1">
						<ul>
							<li><span><a href = "article_category.php?id=1">协会动态</a></span></li>
							<li class="now_tab1"><span><a href = "article_category.php?id=2">通知公告</a></span></li>
							<li><span><a href = "article_category.php?id=3">会议预告</a></span></li>
						</ul>
					</div>
					<div class="tabCon">
                    <div>
                    	
                 	<p class="tit1"></p>

                 	<?php $_from = $this->_tpl_vars['recommend_article1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['article']):
?>
					<p class="tit1"><a href="article.php?id=<?php echo $this->_tpl_vars['article']['id']; ?>
" style="color:#000000"><?php echo $this->_tpl_vars['article']['title']; ?>
</a><span class="tabDate"><?php echo $this->_tpl_vars['article']['add_time']; ?>
</span></p>
					<?php endforeach; endif; unset($_from); ?>
					</div>
                    <div class="now_tab1">
					<p class="tit1"></p>
					<?php $_from = $this->_tpl_vars['recommend_article2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['article']):
?>
					<p class="tit1"><a href="article.php?id=<?php echo $this->_tpl_vars['article']['id']; ?>
"  style="color:#000000"><?php echo $this->_tpl_vars['article']['title']; ?>
</a><span class="tabDate"><?php echo $this->_tpl_vars['article']['add_time']; ?>
</span></p>
					<?php endforeach; endif; unset($_from); ?>
					
					</div>
                    <div>
					<p class="tit1"></p>
					<?php $_from = $this->_tpl_vars['recommend_article3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['article']):
?>
					<p class="tit1"><a href="article.php?id=<?php echo $this->_tpl_vars['article']['id']; ?>
" style="color:#000000"><?php echo $this->_tpl_vars['article']['title']; ?>
</a><span class="tabDate"><?php echo $this->_tpl_vars['article']['add_time']; ?>
</span></p>
					<?php endforeach; endif; unset($_from); ?>
				
					</div>
				</div>
			</li>
			<li class="li_3">
				<ul>
					<li class="nav"><a href="./xuehui.php?id=14"><img src="http://localhost/engineer/theme/default/images/img/btn_会议首页.jpg" alt="" width="210"/></a></li>
					<li class="nav"><a href=""><img src="http://localhost/engineer/theme/default/images/img/btn_会员服务.jpg" alt="" width="210"/></a></li>
					<li class="nav"><a href=""><img src="http://localhost/engineer/theme/default/images/img/btn_账户管理.jpg" alt="" width="210"/></a></li>
				</ul>
			</li>
		</ul>
		<ul class="ul_2">
			<li class="li_1">
				<div class="table1">
					<div class="tab1">
						<ul>
							<li class="now_tab1"><span>学会活动</span></li>
							<li><a href = "article_category.php?id=4">更多</a></li>
						</ul>
					</div>
					<div class="tit1"></div>
					<table>
					<?php $_from = $this->_tpl_vars['recommend_article4']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['one'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['one']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['article']):
        $this->_foreach['one']['iteration']++;
?>
						<tr>
							<td><div class="con_tit"><a href="<?php echo $this->_tpl_vars['article']['url']; ?>
"><?php echo $this->_tpl_vars['article']['title']; ?>
</a></div><div class="date"><?php echo $this->_tpl_vars['article']['add_time']; ?>
</div></td>
						</tr>
					<?php endforeach; endif; unset($_from); ?>
					</table>
				</div>
			</li>
			<li class="li_2 li_1">
				<div class="table1">
					<div class="tab1">
						<ul>
							<li class="now_tab1"><span>科技动态</span></li>
							<li><a href="article_category.php?id=5">更多</a></li>
						</ul>
					</div>
					<div class="tit1"></div>
					<table>
					<?php $_from = $this->_tpl_vars['recommend_article5']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['one'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['one']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['article']):
        $this->_foreach['one']['iteration']++;
?>
						<tr>
							<td><div class="con_tit"><a href="<?php echo $this->_tpl_vars['article']['url']; ?>
"><?php echo $this->_tpl_vars['article']['title']; ?>
</a></div><div class="date"><?php echo $this->_tpl_vars['article']['add_time']; ?>
</div></td>
						</tr>
					<?php endforeach; endif; unset($_from); ?>
					</table>
				</div>
			</li>
			<li class="li_3">
				<div id="lunbo2" class="slideBox">
					  <ul class="items">
					    <?php $_from = $this->_tpl_vars['show_list_bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['show'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['show']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['show']):
        $this->_foreach['show']['iteration']++;
?>
  						<li><img src="<?php echo $this->_tpl_vars['show']['show_img']; ?>
" width="765px" height="260px"></li>
  						<?php endforeach; endif; unset($_from); ?>
					  </ul>
				</div>
			</li>
			<li class="li_4" >
				<div class="nav_you"><span><b>友情链接</b></span></div>
				<ul >
					<?php $_from = $this->_tpl_vars['nav_top_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['friend_link'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['friend_link']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['link']):
        $this->_foreach['friend_link']['iteration']++;
?>
					<li><a href="<?php echo $this->_tpl_vars['link']['guide']; ?>
"><?php echo $this->_tpl_vars['link']['nav_name']; ?>
</a></li>
					<?php endforeach; endif; unset($_from); ?>
					<li><a href=""></a></li>
				</ul>
			</li>
		</ul>
	</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>