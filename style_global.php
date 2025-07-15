<?

$heading_font = "'Tilt Warp'";
$body_font = "'Georgia', serif";
$search_font = "'Helvetica'";
$hashtag_heading_font = "Monoton, sans-serif";
$hashtag_general_font = "'Rubik Mono One', sans-serif";

$dark_color		= "rgb(15,15,15)";
$light_color		= "rgb(235,235,235)";
$logo_color_primary	= "rgba(30, 175, 200, 1)";
$logo_color_secondary	= "rgba(0, 15, 195, 1)";

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
	"background"			=> "linear-gradient(45deg, ".$logo_color_primary." 20%, ".$logo_color_secondary.")",
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

".body-tagline-primary-color, .body-tagline-secondary-color" => [
	"background"			=> "linear-gradient(-200deg, ".$logo_color_primary." 40%, ".$logo_color_secondary.")",
	"-webkit-background-clip"	=> "text",
 	"color"				=> "transparent",
	],

".body-tagline-description" => [
	"font-size"			=> "1.3em",
	"opacity"			=> "0.7",
	"clear"				=> "both",
	"display"			=> "inline-block",
	"max-width"			=> "700px",
	"padding"			=> "0 30px",
	"margin"			=> "0 auto 80px",
	"text-align"			=> "center",
	"letter-spacing"		=> "0",
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
