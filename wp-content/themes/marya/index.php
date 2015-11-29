<?php
/**
 * Index Template
 *
 *
 * @file           index.php
 * @package        StanleyWP 
 * @author         Brad Williams & Carlos Alvarez 
 * @copyright      2011 - 2014 Gents Themes
 * @license        license.txt
 * @version        Release: 3.0.3
 * @link           http://codex.wordpress.org/Theme_Development#Index_.28index.php.29
 * @since          available since Release 1.0
 */
?>
<?php get_header(); ?> <!-- подключаем уже созданный хедер с меню-->
<div id="decorative1" style="position:relative">
<div class="row-fluid">

<div class="container">

<div class="col-sm-6">

<div id="slider_title">
<?php
query_posts('category_name=slider_title'); // большой текст
while (have_posts()) : the_post();
// содержимое цикла
?>
<h1><?php the_title();?></h1>
<?php the_content();
 //конец содержимого цикла
 endwhile;
 wp_reset_query();                
?></div>

<div id="slider_tag">
<?php
query_posts('category_name=slider_tag'); // какая-то подпись

while (have_posts()) : the_post();
// содержимое цикла
?>
<h1><?php the_title();?></h1>
<?php the_content();
 //конец содержимого цикла
 endwhile;
 wp_reset_query();                
?>
</div>

							<br />
                                <div id="divHeaderLine3"><a class="btn btn-danger" href="#">Read More</a></div>
                          
</div>


						
		 			
						
<!-- Place somewhere in the <body> of your page -->


<div class="col-sm-6">

<div class="flexslider">
 

	<?php
query_posts('category_name=slider'); // слайдер

while (have_posts()) : the_post();
// содержимое цикла
?>
 
 <?php the_content();?>  
 
<?php endwhile;
 wp_reset_query();                
?>
	
	

  
</div>
</div>						
</div>						
</div>						

</div>	

						
						
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="<?php bloginfo ('template_url');?>/js/jquery.flexslider-min.js"></script>
<script>
    $(document).ready(function () {
        $('.flexslider').flexslider({
            animation: 'fade',
            controlsContainer: '.flexslider'
        });
    });
</script>					
											
						
 

  </div>

 
 
 <div class="container">

                <div class="span12" id="desc">

                       <?php
query_posts('category_name=desc'); // велкам
while (have_posts()) : the_post();
// содержимое цикла
?>
<h1><?php the_title();?></h1>
<?php the_content();
 //конец содержимого цикла
 endwhile;
 wp_reset_query();                
?>
</div>
					
					
                    <hr style="margin:45px 0 35px" />
                    
<div id="column">
<?php  // строки с доп инфо
query_posts('category_name=column'); 
while (have_posts()) : the_post();?>
<div class="col-sm-4 "> 
<div class="row">
<h1><?php the_title();?></h1>

<?php the_content(); ?>
 </div>
</div> 
<?php endwhile;
 wp_reset_query();                
?>
</div>    
                    <hr style="margin:45px 0 35px" />
        
 </div>
					<div class="container">

<div class="else">
                       <?php
query_posts('category_name=more'); // что мы можем еще делать
while (have_posts()) : the_post();
?>
<h1><?php the_title();?></h1>
<?php the_content();
 //конец содержимого цикла
 endwhile;
 wp_reset_query();                
?>
</div>


                    <div class="list_carousel responsive">
                        <ul id="list_photos">
                            <li><img src="<?php bloginfo ('template_url');?>/carousal/muffin.jpg" class="img-polaroid">  </li>
                            <li><img src="<?php bloginfo ('template_url');?>/carousal/strawberries.jpg" class="img-polaroid">  </li>
                            <li><img src="<?php bloginfo ('template_url');?>/carousal/cheesecake.jpg" class="img-polaroid">  </li>
                            <li><img src="<?php bloginfo ('template_url');?>/carousal/peppers.jpg" class="img-polaroid">  </li>
                            <li><img src="<?php bloginfo ('template_url');?>/carousal/pomengranates.jpg" class="img-polaroid">  </li>
                            <li><img src="<?php bloginfo ('template_url');?>/carousal/refreshment.jpg" class="img-polaroid">  </li>
                            <li><img src="<?php bloginfo ('template_url');?>/carousal/kitchen.jpg" class="img-polaroid">  </li>
                            <li><img src="<?php bloginfo ('template_url');?>/carousal/soup.jpg" class="img-polaroid">  </li>                            
                        </ul>
                    </div> 
                    <div></div>
<script src="<?php bloginfo ('template_url');?>/scripts/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script>
<script type="text/javascript">$('#list_photos').carouFredSel({ responsive: true, width: '100%', scroll: 2, items: {width: 320,visible: {min: 2, max: 6}} });</script>

<link href="<?php bloginfo ('template_url');?>/scripts/carousel/style.css" rel="stylesheet" type="text/css" />

			
<div>

 <?php
query_posts('category_name=success'); // немного выделенного цвета, на который надо обратить внимание.

while (have_posts()) : the_post();
?>
<div class="blockquote">
                    <blockquote><h3 class="text-success"><?php the_title();?></h3>       </blockquote>
      </div>          
<?php the_content();
 endwhile;
 wp_reset_query();                
?>
</div>	
   
</div>	

					
<?php get_footer(); ?>