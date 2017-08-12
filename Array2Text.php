<?php

/*************************************************

Made by @YanisOSLM - https://twitter.com/YanisOSLM

**************************************************/
 
function Array2Text( $array ) {
  
  /* First, json_encode the array (JSON_UNESCAPED_UNICODE is recommended, cf step 2 ) */
  $text = json_encode($array, JSON_UNESCAPED_UNICODE );
  
   /* Then, list noisy tags due to json_encode */
  $exclusions = array(
      "[",
      "]",
      "{",
      "}",
      "\\",
      ":",
      '"'
	);
  
  /* We replace all keys */
  $text = trim(preg_replace('/"[^"]+"\\:/', '', $text));
  
  /* We exclude all noisy tags defined in step 2 */
  foreach( $exclusions as $pat ){
		$text = trim(str_replace($pat, '', $text));
	}
  
  /* Return the plain text */
  return $text;
}

?>
