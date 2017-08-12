<?php

/*************************************************

Made by @YanisOSLM - https://twitter.com/YanisOSLM

**************************************************/
 
function Array2Text( $array, $options ) {
  
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
  if( isset($options) ){
	if( isset($options['comma']) && $options['comma'] === true ){
	    /*Remove commas */
	    $text = str_replace(",", " ", $text);
	    /*Remove extra spaces */
	    $text = preg_replace('/\s+/', ' ', $text);
	}
  }
  
  /* Return the plain text */
  return $text;
}

?>
