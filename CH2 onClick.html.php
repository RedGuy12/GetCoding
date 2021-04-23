<?php
$design['title']       = "Get Coding! Book - OnClick";
$design['description'] = "OnClick activity from the book Get Coding! by Young Rewired State_";
$design['keywords']    = 'javascript, js, onclick, google, click, book, get coding, young rewired state, activities';
$design['showInclude'] = '.';
$design['LEFT']        = <<<_END
<a href='https://paul-s-reid.com/web-dev/Get%20Coding!%20Book-html'><h1><i>Get Coding!</i></h1>
<h2>Young Rewired State_</h2></a>
Here is some code from the book <i>Get Coding!</i> by Young Rewired State_.
<br>In this activity, I make a link to the Google homepage, then used JavaScript to make it not work.
<br>See what it evaluates to over there 👉!
_END;
$design['RIGHT']       = '<a href="https://www.google.com" onclick="return FALSE">Google</a>';
require_once "../twoColumnDesign.php";
