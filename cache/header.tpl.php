<?php /* Smarty version 2.6.26, created on 2016-06-18 20:49:14
         compiled from inc/header.tpl */ ?>
<!DOCTYPE html>
<!--STATUS OK-->
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="always" name="referrer">
    <link rel="stylesheet" href="http://localhost/engineer/theme/default/images/css/style.css" />
    
    <link rel="stylesheet" href="http://localhost/engineer/theme/default/images/css/jquery.slideBox.css" />
    <script src="http://localhost/engineer/theme/default/images/js/jquery-1.8.3.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="http://localhost/engineer/theme/default/images/js/dropdown.js" type="text/javascript" charset="utf-8"></script>
    <script src="http://localhost/engineer/theme/default/images/js/jquery.slideBox.min.js" type="text/javascript" charset="utf-8">
    </script>

   <!-- <script src="http://localhost/engineer/theme/default/images/global.js" type="text/javascript" charset="utf-8">
    </script>
    -->
</head>
<body>

<table align="center" cellpadding="0" cellspacing="0" background="http://localhost/engineer/theme/default/images/img/top_bg1.jpg" height="122">
<tr>
    <td rowspan="2" width="270"><img src="http://localhost/engineer/theme/default/images/img/logo.jpg" height="118"></td>
     <!-- align="right" -->
    <td   align="right">
        <span style="position:relative;bottom:40px"><a href="/engineer_en/index.php" style="color:#FFFFFF">English&nbsp;</a></span>
    </td>
</tr>
</table>
<table class="anow">
<tr>
<td valign="middle"><ul id="nav_ul">
	                    <li class="nav_li"><a href="index.php">首页</a></li> 
		                <?php $_from = $this->_tpl_vars['nav_middle_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['nav']):
?>
						<li class="nav_li"><a href="<?php echo $this->_tpl_vars['nav']['url']; ?>
"><?php echo $this->_tpl_vars['nav']['nav_name']; ?>
</a>
						</li>
						<?php endforeach; endif; unset($_from); ?>
					</ul>
                    <div class="clear"> </div> 
</td>
</tr>
</table>