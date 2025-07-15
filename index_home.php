<?

if ($index_temp !== "valid"): exit; endif;

$html_temp = null;

	// 404 design

$html_temp .= html_begin("Genesee Valley Retreat", [ "style_global", "style_transitions" ]);

$html_temp .= '<div class="body-tagline">A <span class="body-tagline-colorized">return</span> to what <span class="body-tagline-colorized">matters</span>.</div>';

$text_temp = 'In the heart of the Lost Sierra, Genesee Valley Retreat is more than a destination,';
$html_temp .= '<div class="body-tagline body-tagline-one">'.$text_temp.'</div>';

$text_temp .= 'we are a place to disconnect from the noise and reconnect with the land, with others, and with yourself.';
$html_temp .= '<div class="body-tagline body-tagline-two">'.$text_temp.'</div>';

$text_temp .= 'Here, amidst a healing landscape and a thriving four-acre food forest, we invite you to find your natural rhythm.';
$html_temp .= '<div class="body-tagline body-tagline-three">'.$text_temp.'</div>';

$html_temp .= '<main>';

$html_temp .= '<div class="body-sections">';

$html_temp .= 'dfgdsfgdsfg';

$html_temp .= '</div>';

$html_temp .= '</main>';

$html_temp .= html_end();

echo $html_temp;

?>
