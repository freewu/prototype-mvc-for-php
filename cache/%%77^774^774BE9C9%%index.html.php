<?php /* Smarty version 2.6.24, created on 2010-11-23 18:21:29
         compiled from index.html */ ?>
<table width="100%" align="center">
  <tr>
      <td>编号</td>
      <td>标题</td>
      <td>时间</td>
      <td>操作</td>
  </tr>
  <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
  <tr>
      <td><?php echo $this->_tpl_vars['item']['id']; ?>
</td>
      <td><?php echo $this->_tpl_vars['item']['title']; ?>
</td>
      <td><?php echo $this->_tpl_vars['item']['add_time']; ?>
</td>
      <td>
         <a href="?ctl=message&act=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
">修改</a>
         <a href="?ctl=message&act=delete&id=<?php echo $this->_tpl_vars['item']['id']; ?>
">删除</a>
      </td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
  
    <tr>
      <td colspan="4"><?php echo $this->_tpl_vars['pager']; ?>
</td>
    </tr>
  
</table>
<a href="?ctl=message&act=add">添加</a>