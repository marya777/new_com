<?php
/**
 * Footer Template
 *
 *
 * @file           footer.php
 * @package        StanleyWP 
 * @author         Brad Williams & Carlos Alvarez 
 * @copyright      2011 - 2014 Gents Themes
 * @license        license.txt
 * @version        Release: 3.0.3
 * @link           http://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29
 * @since          available since Release 1.0
 */
?>
<style>


/* Icon */

.icon {
text-decoration: none;
position: relative;
}

.icon:before {
-moz-osx-font-smoothing: grayscale;
-webkit-font-smoothing: antialiased;
font-family: FontAwesome;
font-style: normal;
font-weight: normal;
text-transform: none !important;
}

.icon.circle {
-moz-transition: all 0.2s ease-in-out;
-webkit-transition: all 0.2s ease-in-out;
-ms-transition: all 0.2s ease-in-out;
transition: all 0.2s ease-in-out;
border: 0;
border-radius: 100%;
display: inline-block;
font-size: 1.25em;
height: 2.25em;
left: 0;
line-height: 2.25em;
text-align: center;
text-decoration: none;
top: 0;
width: 2.25em;
}

.icon.circle:hover {
top: -0.2em;
}


.icon.circle.fa-facebook {
background: #7490c3;
color: #fff;
}

.icon.circle.fa-facebook:hover {
background: #829bc9;
}

.icon.circle.fa-instagram {
background: #dcad8b;
color: #fff;
}

.icon.circle.fa-instagram:hover {
background: #e1b89b;
}

.icon.circle.fa-vk {
background: #57799D;
color: #fff;
}

.icon.circle.fa-vk:hover {
background: #57799D;
}



.icon > .label {
display: none;
}

/* List */

ul.icons li {
display: inline-block;
line-height: 1em;
padding-left: 0.5em;
}

#footer {
background: #F0F0F0;
color: #7c8081;
padding: 5px 5px 5px 5px;
text-align: left;
}

#footer .copyright {
font-size: 0.8em;
line-height: 1em;
}

#footer .copyright a {
color: inherit;
}

#footer .copyright li {
display: inline-block;
margin-left: 1em;
padding-left: 1em;
border-left: dotted 1px;
}

#footer .copyright li:first-child {
margin: 0;
padding: 0;
border: 0;
}
.new {
	
}
</style>

  <!-- +++++ Footer Section +++++ -->
 
<footer id="footer">
 <div class="col-sm-4">
                <ul style="list-style-type:none">
                <li><i class="glyphicon glyphicon-phone"> телефон</i>(123) 456 7890/45691</li>
                <li><i class="glyphicon glyphicon-envelope icon"> Email:</i>
                        <a href="mailto:info@yourdomain.com" title="Email">info@yourdomain.com</a>
                    </li>
                 </ul>
            </div>
			
			 <div class="col-sm-4">
<ul class="icons" style="text-align:center">
<li><a href="#" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
<li><a href="#" class="icon circle fa-instagram"><span class="label">Instagram</span></a></li>
<li><a href="#" class="icon circle fa-vk"><span class="label">VK</span></a></li>
</ul>

<ul class="copyright"  style="text-align:center">
<li>&copy; Untitled</li><li>Design: Marina</a></li>
</ul>

 </div>

</footer>
            
  
 



<?php wp_footer(); ?>

</body>
</html>