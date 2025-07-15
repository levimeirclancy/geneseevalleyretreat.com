<?

$heading_font = "'Playfair Display', serif";
$body_font = "'Lato', sans serif";
// $search_font = "'Helvetica'";

$light_color		= "rgb(245, 241, 235)"; // linen color
$dark_color		= "rgb(54, 54, 54)"; // charcoal gray

$cold_color		= "rgb(124, 138, 125)"; // sage
$warm_color		= "rgb(194, 139, 110"; // terracotta

$highlight_color	= "rgb(184, 138, 70)"; // warm gold

$css_array = [

":root"	=> [
	"--bg"				=> $light_color,
	"--text"			=> "#111",
	"--accent"			=> "#111",
	],

"*" => [
	"margin"			=> "0",
	"padding"			=> "0",
	"box-sizing"			=> "border-box",
	],

"body" => [
	"text-align" 			=> "center",
	"font-family" 			=> $body_font,
	"background"			=> "var(--bg)",
	"color"				=> "var(--text)",
	"line-height"			=> "1.6",
	"padding"			=> "0 0 0 0",
	"margin"			=> "0",
	],

"header" => [
	"width"				=> "100%",
	"display"			=> "block",
	"text-align"			=> "center",
	"padding"			=> "1em",
	],
	
".header-logo" => [
	"display"			=> "block",
	"text-align"			=> "left",
	"margin"			=> "0 1em 2em",
	"font-family"			=> $heading_font,
 	"font-size"			=> "1.8em",
	"line-height"			=> "1.6em",
	"font-weight"			=> "bold",
	"background"			=> "linear-gradient(45deg, ".$dark_color." 20%, ".$warm_color.")",
	"-webkit-background-clip"	=> "text",
	"color"				=> "transparent",
	],

"a" => [
	"text-decoration"		=> "inherit",
	"color"				=> "inherit",
	],

".body-tagline" => [
	"display"			=> "block",
	"max-width"			=> "400px",
	"margin"			=> "200px auto 20px",
	"text-align"			=> "center",
	"Font-size"			=> "3em",
	"font-family"			=> $heading_font,
	"color"				=> $dark_color,
	],

".body-tagline-colorized" => [
	"background"			=> "linear-gradient(-200deg, ".$dark_color." 40%, ".$cold_color.")",
	"-webkit-background-clip"	=> "text",
 	"color"				=> "transparent",
	],

".body-statement" => [
	"display"			=> "block",
	"max-width"			=> "400px",
	"margin"			=> "200px auto 20px",
	"text-align"			=> "center",
	"Font-size"			=> "3em",
	"font-family"			=> $heading_font,
	"color"				=> $dark_color,
	],

".body-statement-one, .body-statement-two, .body-statement-three" => [
	"background"			=> "linear-gradient(-200deg, ".$dark_color." 40%, ".$cold_color.")",
	"-webkit-background-clip"	=> "text",
 	"color"				=> "transparent",
	],

"main" => [
	"padding"			=> "0",
	"margin"			=> "0",
	], 

"a, a:visited" => [
	"color"				=> "inherit",
	],

];

?>
