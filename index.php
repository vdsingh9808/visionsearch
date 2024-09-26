<?php
require_once('init.php');

use libs\router;
if(isset($_GET['s']) && !empty($_GET['s']))
{

	Router::search('\Search@index');
	die;
}
//static pages
Router::any('/','\index@index');
Router::any('contact-us/','\contact@index');
Router::any('about-us/','\about@index');
Router::any('privacy-policy/','\privacyPolicy@index');
Router::any('term-and-condition/','\termsConditions@index');

//  services 
Router::any('seo-services/','\services@seo');
Router::any('ppc-services/','\services@ppc');
Router::any('web-design/','\services@webDesign');
Router::any('web-development/','\services@webDevelopment');
Router::any('social-media-marketing/','\services@socialMedia');
Router::any('content-marketing/','\services@contentMarketing');
Router::any('additional-services/','\services@additionalServices');


Router::any('sitemap.xml','\XmlSitemap@index');
Router::any('(:any)-sitemap-(:num).xml','\XmlSitemap@sitemap');
Router::any('(:any)-sitemap.xml','\XmlSitemap@sitemap');


Router::$fallback=true;

Router::error('\Error404@index');

//execute matched routes
Router::dispatch();
?>