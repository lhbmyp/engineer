<?php /* Smarty version 2.6.26, created on 2016-05-10 21:57:47
         compiled from product.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $this->_tpl_vars['keywords']; ?>
" />
<meta name="description" content="<?php echo $this->_tpl_vars['description']; ?>
" />
<meta name="generator" content="DouPHP v1.1" />
<title><?php echo $this->_tpl_vars['page_title']; ?>
</title>
<link href="http://bjtutuan.com/engineer/theme/default/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://bjtutuan.com/engineer/theme/default/images/jquery.min.js"></script>
<script type="text/javascript" src="http://bjtutuan.com/engineer/theme/default/images/global.js"></script>
</head>
<body>
<div id="wrapper">
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <div class="wrap mb">
   <!-- <div id="pageLeft">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/product_tree.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
   </div> -->
   <div id="pageIn" style="width: 100%;">
     <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/ur_here.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
     <div id="product">
       <div class="productImg" style="width: 200px;"><a href="<?php echo $this->_tpl_vars['product']['product_image']; ?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['product']['product_image']; ?>
" width="150" /></a></div>
       <div class="productInfo">
         <h1>姓名：<?php echo $this->_tpl_vars['product']['product_name']; ?>
</h1>
         <h1>职称：<?php echo $this->_tpl_vars['product']['title']; ?>
</h1>
         <h1>专业：<?php echo $this->_tpl_vars['product']['subject']; ?>
</h1>
         <h1>电话：<?php echo $this->_tpl_vars['product']['officephone']; ?>
</h1>
         <h1>邮箱：<?php echo $this->_tpl_vars['product']['mail']; ?>
</h1>
         
       </div>
       <div class="clear"></div>
       <div class="productContent">
         <h3><?php echo $this->_tpl_vars['lang']['product_content']; ?>
</h3>
         <ul><?php echo $this->_tpl_vars['product']['content']; ?>
</ul>
       </div>
     </div>
   </div>
   <div class="clear"></div>
 </div>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/online_service.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> </div>
</body>
</html>