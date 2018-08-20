<?php ob_start(); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	
	<?php wp_head(); ?>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- font files -->
<link href="//fonts.googleapis.com/css?family=Wallpoet" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Hind" rel="stylesheet">
<!-- /font files -->
<!-- css files -->
<style>
	.text-center{
	text-align:center;
}
h1.header-w3ls {
    text-align: center;
    font-size: 2.5em;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: #ffffff;
    padding: 0.5em 0 0.3em;
}
.agileits-content {
    text-align: center;
	float:left;
	width:56%;
	background: url('<?php echo get_template_directory_uri(); ?>/assets/img/banner.png') center no-repeat;
	background-size: cover ;
	min-height:690px;
}
.agileits-content h2 {
    font-family: 'Wallpoet', cursive;
    color: #000;
    font-size: 9.5em;
    margin: 1.7em 0 0 0.5em;
}
.agileits-content h2  span {
    color: #fff;
}
.w3layouts-right {
    float: left;
    width: 44%;
	background:url(<?php echo get_template_directory_uri(); ?>/assets/img/cut.jpg)no-repeat center;
	background-size:cover;
    min-height: 690px;
}
.w3layouts-right h3 {
    color: #3397af;
    font-size: 2.5em;
    margin-top: 5.5em;
    text-transform: capitalize;
}
.w3layouts-right h4 {
    text-transform: capitalize;
    margin: 1.5em 0 1em;
    color: #000;
    font-size: 1.2em;
}
.w3ls-text{
	padding-left:5em;
}
.w3ls-text a {
    color: #000;
}
.w3ls-text a:hover {
    color: #fff;
}
.clearfix{
	clear:both;
}
.agileits-content h4 {
    font-size: 2em;
    text-align: left;
    margin: 3em 0 0 10em;
    text-transform: capitalize;
    color: #3397af;
}
p.copyright {
   margin:4em 0 0;
}
p.copyright a {
    color: #000;
}
p.copyright a:hover{
	color:#3397af;
}
/*-- background effects --*/
/* Header */
.w3layouts-bg {
    background: #3398af;
}

@media screen and (max-width: 1920px){
	.agileits-content,.w3layouts-right {
		min-height: 1104px;
	}
	.agileits-content h2 {
        margin: 3.2em 0 0 0.5em;
	}
	.w3layouts-right h3 {
        margin-top: 9.5em;
	}
}
@media screen and (max-width: 1680px){
	.agileits-content, .w3layouts-right {
		min-height: 954px;
	}
	.agileits-content h2 {
		margin: 2.5em 0 0 0.5em;
	}
	.w3layouts-right h3 {
		margin-top: 7.5em;
	}
}
@media screen and (max-width: 1080px){
	.agileits-content h2 {
		margin: 2.5em 0 0 0em;
	}	
	.w3ls-text {
		padding-left: 5em;
	}
}
@media screen and (max-width: 1024px){
	.agileits-content, .w3layouts-right {
		min-height: 477px;
		width:100%;
	}
	.w3ls-text {
		padding-left: 12em;
	}
	.agileits-content h2 {
		margin: 1em 0 0 0.5em;
	}
	.w3layouts-right h3 {
		margin-top: 1.5em;
	}
}
@media screen and (max-width: 1024px){
	.agileits-content h2 {
		font-size:8.5em;
		margin: 1.2em 0 0 0.5em;
	}
}
@media screen and (max-width: 800px){
	.agileits-content, .w3layouts-right {
		min-height: 412px;
	}
	.agileits-content h2 {
		font-size: 7.5em;
		margin: 1.1em 0 0 0.5em;
	}
	.w3ls-text {
		padding-left: 10em;
	}
}
@media screen and (max-width: 667px){
	.agileits-content h2 {
		font-size: 7em;
		margin: 1.3em 0 0 0.5em;
	}
	.w3ls-text {
		padding-left: 8em;
	}
}
@media screen and (max-width: 640px){
	.w3ls-text {
		padding-left: 6em;
	}
}
@media screen and (max-width: 600px){
	h1.header-w3ls {
		font-size: 2.3em;
	}
	.w3ls-text {
		padding-left: 4em;
	}
}
@media screen and (max-width: 568px){
	.w3ls-text {
		padding-left: 3em;
	}
	.agileits-content, .w3layouts-right {
		min-height: 384px;
	}
	.w3layouts-right h4 {
		font-size: 1.1em;
	}
	.agileits-content h2 {
		font-size: 6em;
		margin: 1.4em 0 0 0.5em;
	}
	.w3layouts-right h3 {
		font-size: 2.3em;
	}
}
@media screen and (max-width: 480px){
	.w3layouts-right h3 {
		margin-top: 1em;
	}
	p.copyright {
		margin: 2em 0 0;
	}
	.agileits-content, .w3layouts-right {
		min-height: 356px;
	}
	.agileits-content h2 {
		font-size: 5em;
		margin: 1.65em 0 0 0.5em;
	}
}
@media screen and (max-width: 414px){
	h1.header-w3ls {
		font-size: 2.1em;
	}
	.agileits-content, .w3layouts-right {
		min-height: 360px;
	}
	.agileits-content h2 {
		font-size: 4.5em;
		margin: 1.9em 0 0 0.5em;
	}
	.w3layouts-right h3 {
		font-size: 2.2em;
		margin:0;
	}
	.w3layouts-right h4 {
		font-size: 1.1em;
	    margin: 1em 0 1em;
	}
	.w3ls-text {
		padding: 2em;
	}
}
@media screen and (max-width: 384px){
	.w3layouts-right h3 {
		font-size: 2em;
	}
	h1.header-w3ls {
		font-size: 1.8em;
	}
	.w3layouts-right{
		min-height: 421px;
	}
	.agileits-content{
		min-height: 310px;
	}
	.w3layouts-right h4 {
		font-size: 1em;
	}
	.agileits-content h2 {
		margin: 1.6em 0 0 0.5em;
	}
	.w3ls-text {
		padding: 2em 1em 0 1.5em;
	}
}
@media screen and (max-width: 375px){
	.w3layouts-right h3 {
		font-size: 1.8em;
	}
	.w3layouts-right h4 {
		font-size: 1em;
	}
	p {
		font-size: 0.9em;
	}
	.agileits-content h2 {
		margin: 1.9em 0 0 0.5em;
		font-size: 4em;
	}
	.w3ls-text {
		padding: 2em 0.8em 2em 1.5em;
	}
}
@media screen and (max-width: 320px){
	h1.header-w3ls {
		font-size: 1.7em;
	}
	.w3ls-text {
		padding: 3em 0.8em 2em 1.5em;
	}
	.w3layouts-right {
		min-height: 404px;
	}
	.agileits-content {
		min-height: 330px;
	}
	.agileits-content h2 {
		margin: 2em 0 0 0.5em;
	}
}
</style>
</head>
<body>
	<div class="w3layouts-bg">
		<h1 class="header-w3ls"><?php echo get_bloginfo('name'); ?></h1>
		<div class="agileits-content">
			<h2><span>4</span><span>0</span><span>4</span></h2>
			
		</div>
		<div class="w3layouts-right">
			<div class="w3ls-text">
				<h3>we're sorry!</h3>
				<h4 class="w3-agileits2">the page you requested could not be found.</h4>
				<p>Please go back to the <a href="<?php if(isset($_SERVER['HTTP_REFERER'])) {
  echo $_SERVER['HTTP_REFERER'];
}else{echo esc_url(get_home_url('/'));} ?>">Home</a> page or contact us at <a href="mailto:support@example.com">Facebook Fanspage</a></p>
				<p class="copyright">© 2017 Yugen Novel. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts</a></p>
	
			</div>
				
		</div>
		<div class="clearfix"></div>
	</div>
	<?php wp_footer(); ?>
</body>
</html>