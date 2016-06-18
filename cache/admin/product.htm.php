<?php /* Smarty version 2.6.26, created on 2016-05-06 16:55:16
         compiled from product.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $this->_tpl_vars['lang']['home']; ?>
<?php if ($this->_tpl_vars['ur_here']): ?> - <?php echo $this->_tpl_vars['ur_here']; ?>
 <?php endif; ?></title>
<meta name="Copyright" content="Douco Design." />
<link href="templates/public.css" rel="stylesheet" type="text/css">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "javascript.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript" src="images/jquery.autotextarea.js"></script>
</head>
<body>
<div id="dcWrap">
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <div id="dcLeft"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
 <div id="dcMain">
   <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ur_here.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
   <div id="mainBox">
    <?php if ($this->_tpl_vars['rec'] == 'default'): ?>
    <h3><a href="<?php echo $this->_tpl_vars['action_link']['href']; ?>
" class="actionBtn add"><?php echo $this->_tpl_vars['action_link']['text']; ?>
</a><?php echo $this->_tpl_vars['ur_here']; ?>
</h3>
    <div class="filter">
    <form action="product.php" method="post">
     <select name="cat_id">
      <option value="0"><?php echo $this->_tpl_vars['lang']['uncategorized']; ?>
</option>
      <?php $_from = $this->_tpl_vars['product_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cate']):
?>
      <?php if ($this->_tpl_vars['cate']['cat_id'] == $this->_tpl_vars['cat_id']): ?>
      <option value="<?php echo $this->_tpl_vars['cate']['cat_id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['cate']['mark']; ?>
 <?php echo $this->_tpl_vars['cate']['cat_name']; ?>
</option>
      <?php else: ?>
      <option value="<?php echo $this->_tpl_vars['cate']['cat_id']; ?>
"><?php echo $this->_tpl_vars['cate']['mark']; ?>
 <?php echo $this->_tpl_vars['cate']['cat_name']; ?>
</option>
      <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?>
     </select>
     <input name="keyword" type="text" class="inpMain" value="<?php echo $this->_tpl_vars['keyword']; ?>
" size="20" />
     <input name="submit" class="btnGray" type="submit" value="<?php echo $this->_tpl_vars['lang']['btn_filter']; ?>
" />
    </form>
    <span>
    <a class="btnGray" href="product.php?rec=re_thumb"><?php echo $this->_tpl_vars['lang']['product_thumb']; ?>
</a>
    <?php if ($this->_tpl_vars['if_home_sort']): ?>
    <a class="btnGray" href="product.php?rec=home_sort"><?php echo $this->_tpl_vars['lang']['home_sort_close']; ?>
</a>
    <?php else: ?>
    <a class="btnGray" href="product.php?rec=home_sort"><?php echo $this->_tpl_vars['lang']['home_sort_product']; ?>
</a>
    <?php endif; ?>
    </span>
    </div>
    <?php if ($this->_tpl_vars['if_home_sort']): ?>
    <div class="homeSortRight">
     <ul class="homeSortBg">
      <?php echo $this->_tpl_vars['home_sort_bg']; ?>

     </ul>
     <ul class="homeSortList">
      <?php $_from = $this->_tpl_vars['home_sort']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['home_sort'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['home_sort']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['product']):
        $this->_foreach['home_sort']['iteration']++;
?>
      <?php if ($this->_foreach['home_sort']['iteration'] <= $this->_tpl_vars['site']['home_display_product']): ?>
      <li>
       <img src="<?php echo $this->_tpl_vars['product']['product_image']; ?>
" width="60" height="60">
       <a href="product.php?rec=del_home_sort&id=<?php echo $this->_tpl_vars['product']['id']; ?>
" title="<?php echo $this->_tpl_vars['lang']['home_sort_cancel']; ?>
">X</a>
      </li>
      <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?>
     </ul>
    </div>
    <?php endif; ?>
    <div id="list"<?php if ($this->_tpl_vars['if_home_sort']): ?> class="homeSortLeft"<?php endif; ?>>
    <form name="action" method="post" action="product.php?rec=action">
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
        <th width="42" align="center"><input name='chkall' type='checkbox' id='chkall' onclick='selectcheckbox(this.form)' value='check'></th>
        <th width="80" align="center"><?php echo $this->_tpl_vars['lang']['record_id']; ?>
</th>
        <th align="left"><?php echo $this->_tpl_vars['lang']['product_name']; ?>
</th>
        <th width="180" align="center"><?php echo $this->_tpl_vars['lang']['product_category']; ?>
</th>
       <th width="120" align="center"><?php echo $this->_tpl_vars['lang']['add_time']; ?>
</th>
        <th width="120" align="center"><?php echo $this->_tpl_vars['lang']['handler']; ?>
</th>
      </tr>
      <?php $_from = $this->_tpl_vars['product_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['product']):
?>
      <tr>
        <td align="center"><input type="checkbox" name="checkbox[]" value="<?php echo $this->_tpl_vars['product']['id']; ?>
" /></td>
        <td align="center"><?php echo $this->_tpl_vars['product']['id']; ?>
</td>
        <td><a href="product.php?rec=edit&id=<?php echo $this->_tpl_vars['product']['id']; ?>
"><?php echo $this->_tpl_vars['product']['product_name']; ?>
</a></td>
        <td align="center"><?php if ($this->_tpl_vars['product']['cat_name']): ?><a href="product.php?id=<?php echo $this->_tpl_vars['product']['cat_id']; ?>
"><?php echo $this->_tpl_vars['product']['cat_name']; ?>
</a><?php else: ?><?php echo $this->_tpl_vars['lang']['uncategorized']; ?>
<?php endif; ?></td>
        <td align="center"><?php echo $this->_tpl_vars['product']['add_time']; ?>
</td>
        <td align="center">
         <?php if ($this->_tpl_vars['if_home_sort']): ?>
         <a href="product.php?rec=set_home_sort&id=<?php echo $this->_tpl_vars['product']['id']; ?>
"><?php echo $this->_tpl_vars['lang']['home_sort_btn']; ?>
</a>
         <?php else: ?>
         <a href="product.php?rec=edit&id=<?php echo $this->_tpl_vars['product']['id']; ?>
"><?php echo $this->_tpl_vars['lang']['edit']; ?>
</a> | <a href="product.php?rec=del&id=<?php echo $this->_tpl_vars['product']['id']; ?>
"><?php echo $this->_tpl_vars['lang']['del']; ?>
</a>
         <?php endif; ?>
        </td>
      </tr>
      <?php endforeach; endif; unset($_from); ?>
    </table>
    <div class="action">
     <select name="action" onchange="douAction()">
      <option value="0"><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
      <option value="del_all"><?php echo $this->_tpl_vars['lang']['del']; ?>
</option>
      <option value="category_move"><?php echo $this->_tpl_vars['lang']['category_move']; ?>
</option>
     </select>
     <select name="new_cat_id" style="display:none">
      <option value="0"><?php echo $this->_tpl_vars['lang']['uncategorized']; ?>
</option>
      <?php $_from = $this->_tpl_vars['product_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cate']):
?>
      <?php if ($this->_tpl_vars['cate']['cat_id'] == $this->_tpl_vars['cat_id']): ?>
      <option value="<?php echo $this->_tpl_vars['cate']['cat_id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['cate']['mark']; ?>
 <?php echo $this->_tpl_vars['cate']['cat_name']; ?>
</option>
      <?php else: ?>
      <option value="<?php echo $this->_tpl_vars['cate']['cat_id']; ?>
"><?php echo $this->_tpl_vars['cate']['mark']; ?>
 <?php echo $this->_tpl_vars['cate']['cat_name']; ?>
</option>
      <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?>
     </select>
     <input name="submit" class="btn" type="submit" value="<?php echo $this->_tpl_vars['lang']['btn_execute']; ?>
" />
    </div>
    </form>
    </div>
    <div class="clear"></div>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "pager.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['rec'] == 'add' || $this->_tpl_vars['rec'] == 'edit'): ?>
    <h3><a href="<?php echo $this->_tpl_vars['action_link']['href']; ?>
" class="actionBtn"><?php echo $this->_tpl_vars['action_link']['text']; ?>
</a><?php echo $this->_tpl_vars['ur_here']; ?>
</h3>
    <form action="product.php?rec=<?php echo $this->_tpl_vars['form_action']; ?>
" method="post" enctype="multipart/form-data">
     <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
       <td width="90" align="right"><?php echo $this->_tpl_vars['lang']['product_name']; ?>
</td>
       <td>
        <input type="text" name="product_name" value="<?php echo $this->_tpl_vars['product']['product_name']; ?>
" size="30" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="right"><?php echo $this->_tpl_vars['lang']['product_category']; ?>
</td>
       <td>
        <select name="cat_id">
         <option value="0"><?php echo $this->_tpl_vars['lang']['uncategorized']; ?>
</option>
         <?php $_from = $this->_tpl_vars['product_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cate']):
?>
         <?php if ($this->_tpl_vars['cate']['cat_id'] == $this->_tpl_vars['product']['cat_id']): ?>
         <option value="<?php echo $this->_tpl_vars['cate']['cat_id']; ?>
" selected="selected"><?php echo $this->_tpl_vars['cate']['mark']; ?>
 <?php echo $this->_tpl_vars['cate']['cat_name']; ?>
</option>
         <?php else: ?>
         <option value="<?php echo $this->_tpl_vars['cate']['cat_id']; ?>
"><?php echo $this->_tpl_vars['cate']['mark']; ?>
 <?php echo $this->_tpl_vars['cate']['cat_name']; ?>
</option>
         <?php endif; ?>
         <?php endforeach; endif; unset($_from); ?>
        </select>
       </td>
      </tr>

      <tr>
       <td align="right"><?php echo $this->_tpl_vars['lang']['product_sex']; ?>
</td>
       <td>
       <form action="product.php" method="post">
       	<select name="sex">
         <option <?php if ($this->_tpl_vars['product']['sex'] == '男'): ?>selected="selected"<?php endif; ?>   value="男"><?php echo $this->_tpl_vars['lang']['male']; ?>
 </option>
         <option <?php if ($this->_tpl_vars['product']['sex'] == '女'): ?>selected="selected"<?php endif; ?>  value="女"> <?php echo $this->_tpl_vars['lang']['female']; ?>
 </option>
		</select>
      </form>
      </td>
      </tr>
 
<!--
	  <tr>
       <td align="right"><?php echo $this->_tpl_vars['lang']['product_sex']; ?>
</td>
       <td>
        <input type="text" name="sex" value="<?php echo $this->_tpl_vars['product']['sex']; ?>
" size="30" class="inpMain" />
       </td>
      </tr>
-->
      <tr>
       <td align="right"><?php echo $this->_tpl_vars['lang']['product_birth']; ?>
</td>
       <td>
        <input type="text" name="birth" value="<?php echo $this->_tpl_vars['product']['birth']; ?>
" size="30" class="inpMain" />
       </td>
      </tr>

      <tr>
       <td align="right"><?php echo $this->_tpl_vars['lang']['product_title']; ?>
</td>
       <td>
        <input type="text" name="title" value="<?php echo $this->_tpl_vars['product']['title']; ?>
" size="30" class="inpMain" />
       </td>
      </tr>

      <tr>
       <td align="right"><?php echo $this->_tpl_vars['lang']['product_subject']; ?>
</td>
       <td>
        <input type="text" name="subject" value="<?php echo $this->_tpl_vars['product']['subject']; ?>
" size="30" class="inpMain" />
       </td>
      </tr>

      <tr>
       <td align="right"><?php echo $this->_tpl_vars['lang']['product_officephone']; ?>
</td>
       <td>
        <input type="text" name="officephone" value="<?php echo $this->_tpl_vars['product']['officephone']; ?>
" size="30" class="inpMain" />
       </td>
      </tr>

      <tr>
       <td align="right"><?php echo $this->_tpl_vars['lang']['product_mail']; ?>
</td>
       <td>
        <input type="text" name="mail" value="<?php echo $this->_tpl_vars['product']['mail']; ?>
" size="30" class="inpMain" />
       </td>
      </tr>

      <tr>
       <td align="right"><?php echo $this->_tpl_vars['lang']['product_office']; ?>
</td>
       <td>
        <input type="text" name="office" value="<?php echo $this->_tpl_vars['product']['office']; ?>
" size="30" class="inpMain" />
       </td>
      </tr>

      <tr>
       <td align="right" valign="top"><?php echo $this->_tpl_vars['lang']['product_content']; ?>
</td>
       <td>
        <!-- umeditor -->
        <link href="include/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" charset="utf-8" src="include/umeditor/umeditor.config.js"></script>
        <script type="text/javascript" charset="utf-8" src="include/umeditor/umeditor.min.js"></script>
        <script type="text/javascript" src="include/umeditor/lang/zh-cn/zh-cn.js"></script>
        <script type="text/plain" id="content" name="content" style="width:780px;height:300px;"><?php echo $this->_tpl_vars['product']['content']; ?>
</script>
        <script type="text/javascript">
            //实例化编辑器
            var um = UM.getEditor('content');
        </script>
        <!-- /umeditor -->
       </td>
      </tr>
      <tr>
       <td align="right"><?php echo $this->_tpl_vars['lang']['thumb']; ?>
</td>
       <td>
        <input type="file" name="product_image" size="38" class="inpFlie" />
        <?php if ($this->_tpl_vars['product']['product_image']): ?><a href="../<?php echo $this->_tpl_vars['product']['product_image']; ?>
" target="_blank"><img src="images/yes.gif"></a><?php else: ?><img src="images/no.gif"><?php endif; ?></td>
      </tr>
      <tr>
       <td align="right"><?php echo $this->_tpl_vars['lang']['sort']; ?>
</td>
       <td>
        <input type="text" name="keywords" value="<?php echo $this->_tpl_vars['product']['keywords']; ?>
" size="50" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="right"><?php echo $this->_tpl_vars['lang']['description']; ?>
</td>
       <td>
        <input type="text" name="description" value="<?php echo $this->_tpl_vars['product']['description']; ?>
" size="50" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td></td>
       <td>
        <input type="hidden" name="token" value="<?php echo $this->_tpl_vars['token']; ?>
" />
        <input type="hidden" name="product_image" value="<?php echo $this->_tpl_vars['product']['product_image']; ?>
">
        <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['product']['id']; ?>
">
        <input name="submit" class="btn" type="submit" value="<?php echo $this->_tpl_vars['lang']['btn_submit']; ?>
" />
       </td>
      </tr>
     </table>
    </form>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['rec'] == 're_thumb'): ?>
    <h3><a href="<?php echo $this->_tpl_vars['action_link']['href']; ?>
" class="actionBtn"><?php echo $this->_tpl_vars['action_link']['text']; ?>
</a><?php echo $this->_tpl_vars['ur_here']; ?>
</h3>
				<script type="text/javascript">
				 <?php echo '
     function mask(i) {
        document.getElementById(\'mask\').innerHTML += i;
        document.getElementById(\'mask\').scrollTop = 100000000;
     }
     function success() {
        var d=document.getElementById(\'success\');
        d.style.display="block";
     }
					'; ?>

    </script>
    <dl id="maskBox">
     <dt><em><?php echo $this->_tpl_vars['mask']['count']; ?>
</em><?php if (! $this->_tpl_vars['mask']['confirm']): ?><form action="product.php?rec=re_thumb" method="post"><input name="confirm" class="btn" type="submit" value="<?php echo $this->_tpl_vars['lang']['product_thumb_start']; ?>
" /></form><?php endif; ?></dt>
     <dd class="maskBg"><?php echo $this->_tpl_vars['mask']['bg']; ?>
<i id="success"><?php echo $this->_tpl_vars['lang']['product_thumb_succes']; ?>
</i></dd>
     <dd id="mask"></dd>
    </dl>
    <?php endif; ?>
   </div>
 </div>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 </div>
 <script language="JavaScript">
 <?php echo '
 onload = function()
 {
  document.forms[\'action\'].reset();
 }

 function douAction()
 {
  var frm = document.forms[\'action\'];
  frm.elements[\'new_cat_id\'].style.display = frm.elements[\'action\'].value == \'category_move\' ? \'\' : \'none\';
 }
 '; ?>

 </script>
<?php if ($this->_tpl_vars['rec'] != 're_thumb'): ?>
</body>
</html>
<?php endif; ?>