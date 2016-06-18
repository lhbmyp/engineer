<?php /* Smarty version 2.6.26, created on 2016-05-06 16:09:52
         compiled from product_category.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <link rel="stylesheet" href="http://bjtutuan.com/engineer/theme/default/images/css/style.css" />
    <link rel="stylesheet" href="http://bjtutuan.com/engineer/theme/default/images/css/renming.css" />
    <script src="http://bjtutuan.com/engineer/theme/default/images/js/jquery-1.8.3.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="http://bjtutuan.com/engineer/theme/default/images/js/base.js" type="text/javascript" charset="utf-8"></script>

	<div class="zhe"></div>
	<div class="middle">
		<div class="now">
			<span>当前位置 : </span>
			<span class="span_now">
				<?php echo $this->_tpl_vars['cate_info']['cat_name']; ?>
 
			</span>
		</div>
		
		<div class="conten">
            <div class="con">
            	<div class="title"><?php echo $this->_tpl_vars['cate_info']['cat_name']; ?>
 </div>
            	<div class="row-fluid">
        			<?php $_from = $this->_tpl_vars['product_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['list']):
?>
	        		<div class="bg_list">
                    	<div class="photo_box">
                        	<a href="<?php echo $this->_tpl_vars['list']['url']; ?>
">
                        	<img src="<?php echo $this->_tpl_vars['list']['photo']; ?>
" width="135" height="150">
                        	</a>
                        </div>
                        <div class="intro_box">
                        	<div class="name_p"><p><a href="<?php echo $this->_tpl_vars['list']['url']; ?>
"><?php echo $this->_tpl_vars['list']['name']; ?>
</a></p></div>
                            <p><?php echo $this->_tpl_vars['list']['title']; ?>
</p>
                            <p class="p_gray"><?php echo $this->_tpl_vars['list']['subject']; ?>
</p>
                        </div>
                	</div>
                    <?php endforeach; endif; unset($_from); ?>
					<div class="clear"></div>
                	</div>
       			</div>
				<div class="clear"></div>
				<div class="pages">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/pager.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</div>
          		<div class="clearfix"></div>
			</div>
			<div class="clear"></div>
			
		</div>
		<div class="clear"></div>
		
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>