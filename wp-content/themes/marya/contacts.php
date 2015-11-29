  <?php 
/*
    Template Name: Contacts
*/
 get_header(); ?>
 
 <div class="col-sm-8">

<form name="contactform" method="post" action="/send_form_email.php">
 
<table width="450px">
 
<tr>
 
 <td valign="top">
 
  <label for="first_name">Введите Ваше имя *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" class="form-control" placeholder="Имя" name="first_name" maxlength="50" size="30">
 
 </td>
 
</tr>
<tr>
 
 <td valign="top">
 
  <label for="email">Ваш Email  *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" class="form-control" placeholder="Введите email"  name="email" maxlength="80" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="telephone">Номер телефона</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" class="form-control" placeholder="Номер телефона"  name="telephone" maxlength="30" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="comments">Сообщение *</label>
 
 </td>
 
 <td valign="top">
 
  <textarea type="text" class="form-control" placeholder="Сообщение" name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 
 </td>
 
</tr>
 <br>
<tr>
 
 <td colspan="2" style="text-align:center" >
 
  <input ID="btn-submit" type="submit"  value="Отправить">  
 </td>
 
</tr>
 
</table>
 
</form>
</div>
 
<div class="col-sm-3 sidebox">
                       <?php
query_posts('category_name=contacts'); // контакты из админки
while (have_posts()) : the_post();
?>
<h1><?php the_title();?></h1>
<?php the_content();
 //конец содержимого цикла
 endwhile;
 wp_reset_query();                
?>
</div>
<?php get_footer(); ?>