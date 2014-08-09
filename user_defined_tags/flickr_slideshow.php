/*
Description: Shows a picture gallery as flash from flickr web site.

How to use:
 - First go to flickr web site and find the gallery you want.
 - Copy the URL from the link bar in your broser. 
 - THe URL must be the start parameter for this tag. 

Example usage (note ' between the URL) :
{flickr_slideshow start='https://www.flickr.com/photos/sggn/sets/72157642342311603/'}

*/

$startimg = $params['start'];

echo '<iframe src="' . $startimg . 'player/" width="500" height="333" frameborder="0" style="display:block; margin: 5px auto;" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>';

