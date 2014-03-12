<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-ca">
<head>
	{literal}<script type="text/javascript">
 var RecaptchaOptions = {
    theme : 'blackglass'
 };
 </script>{/literal}


  {asset name='Head'}
</head>
<body id="{$BodyID}" class="{$BodyClass}">
  <div id="Frame">
  	<h9 class="Title"><a href="{link path="/"}">{logo}</a></h9>
	 <div class="Banner">
		<ul>
		  {discussions_link}
		  {inbox_link}
		  {custom_menu}
		  {event name="BeforeSignInLink"}
		  {if !$User.SignedIn}
			 <li class="SignInItem">{link path="signin" class="SignIn"}</li>
		  {/if}
		</ul>
	 </div>
	 <div id="Body">
		<div id="Content">
		  {asset name="Content"}
		</div>
		<div id="Panel">
		  {asset name="Panel"}
		</div>
	 </div>
	 <div id="Foot">
		<div class="FootMenu">
		  <!--
		  <span>Mobile</span>
		  <span><a href="#">Desktop</a></span>
		  -->
        {nomobile_link wrap="span"}
		  {dashboard_link wrap="span"}
		  {signinout_link wrap="span"}
		</div>
		
		<div>
		  <a href="{vanillaurl}"><span>Powered by Vanilla</span></a>
		</div>
		{asset name="Foot"}
		<!-- Begin TranslateThis Button -->

<div id="translate-this"><a style="width:100%!important;height:25px;display:block;" class="translate-this-button" href="http://www.translatecompany.com/" title="Translate">Translate Company</a></div>
<p id="back-top" style="float: right;top:0px; display: inline-block; position:relative;margin-right:0px;"><a href="#top" title="Back to Top"><img src="http://i34.tinypic.com/30ua4cg.png"></a></p>
{literal}<script type="text/javascript">
$(document).ready(function() {

	$("#back-top").hide();
	
	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});

});
</script>{/literal}

{literal}<script type="text/javascript" src="http://x.translateth.is/translate-this.js"></script>{/literal}
{literal}<script type="text/javascript">
TranslateThis();
</script>{/literal}

<!-- End TranslateThis Button -->
	 </div>
  </div><p class="author">Vanilla Theme by VrijVlinder</p>
{event name="AfterBody"}
</body>
</html>
