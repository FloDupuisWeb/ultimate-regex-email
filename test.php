<?php

function testaddr( $addr ) {
  if( preg_match( "/^[a-z0-9]+([_|\.|\-|\+]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$/i", $addr ) ) {
    return TRUE;
  }
  
  return FALSE;
}

$test_emails = array(
  'florian@foo.bar',
  'florian.dupuis@foo.bar',
  'florian-dupuis@foo.bar',
  'florian-1-dupuis-2@foo.bar',
  'toto@foo.bar.com',
  'flo-dupuis+github-1@gmail.com',
  'flo_dupuis@dupuis-web.toto',
  'not-an-email@sure'
);

foreach( $test_emails as $email ) {
  if( testaddr( $email ) ) {
    echo "$email is a correct email !<br />";
  } else {
    echo "<strong>$email is not a correct email !</strong><br />";
  }
}
