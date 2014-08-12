/*
Lager en enkel horisontal strek.

Parametere:
  width : bredden i prosent. Hvis ikke satt er den 75%.
	  color : Farge på streken. Hvis den ikke er satt er den blå.
		  size :  Høyden på linjen i piksler. Hvis ikke satt er den 3. 

			Eksempler
			Linje med standard oppsett.
			{hrtag}

			Dette gir det samme som standard oppsett.
			{hrtag width='75' color='#0000CC' size='3'}

			En litt tykkere strek med rød farge.
			{hrtag width='75' color='#CC0000' size='4'}
*/

$width=isset($params['width']) ? $params['width'] : '75';   
$color=isset($params['color']) ? $params['color'] : '#0000CC';
$size=isset($params['size']) ? $params['size'] : '3';

echo '<hr width="' . $width . '%" size="' . $size . '" color=" . '$color' . " align="center"></hr>';

