<?php /* Smarty version 2.6.26, created on 2016-06-18 20:38:51
         compiled from xuehui.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link rel="stylesheet" href="http://localhost/engineer/theme/default/images/css/xiehui.css" />
<script src="http://localhost/engineer/theme/default/images/js/index.js" type="text/javascript" charset="utf-8"></script>
<script src="http://localhost/engineer/theme/default/images/js/my.js" type="text/javascript" charset="utf-8"></script>


<div class="middle">
		<!-- <div class="now">
			<span>当前位置 ：</span>
			<span class="span_now">
				会议首页
			</span>
		</div> -->
		<ul class="ul_1">
			<li>
				<div id="lunbo1" class="slideBox">
					  <ul class="items">
						<?php $_from = $this->_tpl_vars['show_list_middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['show'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['show']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['show']):
        $this->_foreach['show']['iteration']++;
?>
  						<li><img src="<?php echo $this->_tpl_vars['show']['show_img']; ?>
" width="1000px" height="280px"></li>
  						<?php endforeach; endif; unset($_from); ?>
					  </ul>
				</div>
			</li>
		</ul>
		<!-- <ul class="ul_2">
			<li style="padding-top:20px;height:50px;">学会首页</li>
			<li>启动投稿<br />2015-09-10</li>
			<li>抽稿截止<br />2016-02-15</li>
			<li>录用通知<br />2016-05-05</li>
			<li>开放注册<br />2016-05-15</li>
			<li style="border:none;">注册截止<br />2016-08-15</li>
		</ul> -->
		<ul class="ul_3">
			<li class="li_1">
				<ul>
					<?php $_from = $this->_tpl_vars['recommend_article1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['one'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['one']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['article1']):
        $this->_foreach['one']['iteration']++;
?>
					<li><a href ="xuehui.php?id=<?php echo $this->_tpl_vars['article1']['id']; ?>
"><button style="cursor:pointer"><?php echo $this->_tpl_vars['article1']['title']; ?>
</button></a></li>
					<?php endforeach; endif; unset($_from); ?>
				</ul>
			</li>

			<li class="li_2" >
				<div class="table1">
					<div class="tab1">
						<ul>
							<li class="now_tab1"><span><?php echo $this->_tpl_vars['article']['title']; ?>
</span></li>
						</ul>
					</div>
					<div class="cont">
						<!-- <p class="tit">2014年中国微生物学会学术年会征文通知</p> -->
						<!-- <p class="tit">会议组委会通知</p>
						<p class="date">发布时间：2015-05-12</p> -->
						<div class="con_text" style="overflow-y:scroll;">
							<?php echo $this->_tpl_vars['article']['content']; ?>

						</div>
					</div>
				</div>
			</li>
			<li class="li_3">
				<div class="nav_you"><?php echo $this->_tpl_vars['page']['page_name']; ?>
</div>
				<span class="tit"><?php echo $this->_tpl_vars['page']['description']; ?>
</span><br />
				<span class="cont"><?php echo $this->_tpl_vars['page']['content']; ?>
</span>
			</li>
			<li class="li_4">
				<div class="nav_you">联系信息(Contact)</div>
				<ul>
				<?php $_from = $this->_tpl_vars['product_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['list']):
?>
					<li><img src="http://localhost/engineer/theme/default/images/img/imgactive.png" alt="" width="20" height="15" /><?php echo $this->_tpl_vars['list']['description']; ?>
</li>
					<!-- <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;activeactiveactive</li> -->
					<li><img src="http://localhost/engineer/theme/default/images/img/imgpeople.jpg" alt="" width="20" height="15" /><?php echo $this->_tpl_vars['list']['name']; ?>
</li>
					<li><img src="http://localhost/engineer/theme/default/images/img/img10.png" alt="" width="20" height="15" /><?php echo $this->_tpl_vars['list']['mail']; ?>
</li>
					<li><img src="http://localhost/engineer/theme/default/images/img/img11.png" alt="" width="20" height="15"/><?php echo $this->_tpl_vars['list']['officephone']; ?>
</li>
					<li><img src="http://localhost/engineer/theme/default/images/img/img12.png" alt="" width="20" height="15"/><?php echo $this->_tpl_vars['list']['office']; ?>
</li>
                    <br/>
				<?php endforeach; endif; unset($_from); ?>
				</ul>
			</li>
			<li class="li_5">
				<img src="http://localhost/engineer/theme/default/images/img/greatwall.jpg" alt="" width="265" height="120"/>
				<img src="http://localhost/engineer/theme/default/images/img/railway.jpg" alt="" width="270" height="120"/>
				<img src="http://localhost/engineer/theme/default/images/img/railway2.jpg" alt="" width="270" height="120"/>
			</li>
			<li class="li_6 li_4">
				<table>
				<tr>
				<td class="li" style="border-top-left-radius: 10px;">主办单位</td>
				<td style="width:256px;background:#FFFFFF">
					<img src="http://localhost/engineer/theme/default/images/img/logo.jpg" alt="" width="150" height="60"/><br /><p style="color:#000000">铁路信号工程师协会<br/>Sponsor-IRSE</p></td>
				<td class="li">承办单位</td>
				<td style="width:256px;background:#FFFFFF">
					<img src="http://localhost/engineer/theme/default/images/img/bjtu.jpg" alt="" width="80" height="70"/><br /><p style="color:#000000">北京交通大学<br/>Co-sponsor-BJTU</p></td>
           <!--      <td style="width:256px;background:#FFFFFF;border-top-right-radius: 10px;">
                	<img src="http://localhost/engineer/theme/default/images/img/a.png" alt="" width="70" height="70"/><p style="color:#000000">中国铁路总公司<br/>Co-sponsor-China Rail Corp</p></td> -->
			</tr></table>
			</li>
			<li class="li_7">
				<div class="top_tit">荣誉支持单位 Supporters</div>
				<table>
					<tr>
						<td><img src="http://localhost/engineer/theme/default/images/img/support/n.png" alt="" width="250" height="70"/> </td>
						<td><img src="http://localhost/engineer/theme/default/images/img/support/mm.png" alt="" width="290" height="70"/> </td>
					</tr>
				</table>
				<div class="top_tit">赞助单位 Supporters</div>
					<div id="demo">
					<div id="indemo">
					<div id="demo1">
					<?php $_from = $this->_tpl_vars['show_list_hy_bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['show']):
?>
					<a href="<?php echo $this->_tpl_vars['show']['show_link']; ?>
"><img src="<?php echo $this->_tpl_vars['show']['show_img']; ?>
" border="0" />&nbsp;&nbsp;&nbsp;&nbsp;</a>
					<?php endforeach; endif; unset($_from); ?>

					</div>
					<div id="demo2"></div>
					</div>
					</div>
			</li>
			<li class="li_8 li_4">
				<div class="nav_you">往届风采(Pre-Events)</div>
				<ul class="list">
					<?php $_from = $this->_tpl_vars['nav_bottom_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['link']):
?>
					<li><a href="<?php echo $this->_tpl_vars['link']['guide']; ?>
"><?php echo $this->_tpl_vars['link']['nav_name']; ?>
</a></li>
					<?php endforeach; endif; unset($_from); ?>
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