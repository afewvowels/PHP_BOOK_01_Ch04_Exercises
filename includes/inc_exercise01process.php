<h2>#01 - Word Scrambler</h2>
<?php
  $errorcount = 0;
  $words = array();

  function displayError($fieldname, $errorMsg) {
    global $errorcount;
    echo 'Error for '.$fieldname.': '.$errorMsg.'<br />';
    ++$errorcount;
  }

  function validateWordData($data, $fieldname) {
    global $errorcount;
    if(empty($data)) {
      displayError($fieldname, 'This field is required');
      $retval = '';
    } else {
      $retval = trim($data);
      $retval = stripslashes($retval);

      if ((strlen($retval)<4) || (strlen($retval)>7)) {
        diplayError($fieldname, 'Words must be between 4 and 7 letters in length');
      }

      if (preg_match("/^[a-z]+$/i",$retval)==0) {
        displayError($fieldname, 'Words must be only letters');
      }
    }

    $retval = strtoupper($retval);
    $retval = str_shuffle($retval);

    return($retval);
  }

  $words[] = validateWordData($_GET['word1'], 'Word 1');
  $words[] = validateWordData($_GET['word2'], 'Word 2');
  $words[] = validateWordData($_GET['word3'], 'Word 3');
  $words[] = validateWordData($_GET['word4'], 'Word 4');

  if ($errorcount > 0) {
    echo "Please use the 'Back' button to re-enter the data.<br />\n";
  } else {
    $wordnum = 0;
    foreach ($words as $word) {
      echo 'Word '.++$wordnum.': '.$word.'<br />';
    }
  }
?>
