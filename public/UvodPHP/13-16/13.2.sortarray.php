<?php

/**
13. PODACI- RAD SA KOLEKCIJAMA

Obraditi funkcije za sortiranje kolekcija (sort(), ksort(),
rsort(), krsort(), asort(), arsort()). Obraditi ostale korisne
funkcije za rad s poljima (is_array(), explode(), implode(),
split(), count(), end(), array_search(), in_array()).

*/

// sortranje arraya
# sort()

$fruits = array('0'=> 'limun', 
	            'a'=> 'naranca', 
	             1 => 'banana',
	            'b'=> 'jabuka' );
echo "<pre>";
print_r($fruits);
echo "</pre>";

sort($fruits);

echo "sortirano<br>";
echo "<pre>";
print_r($fruits);
echo "</pre>";
echo "<hr>";

# rsort()
echo "<br>";
rsort($fruits);
echo "rsort() sortirano<br>";
echo "<pre>";
print_r($fruits);
echo "</pre>";
echo "<hr>";
// ubijam varijablu jer sam sortiranjem 
// izgubio kljuceve 
unset($fruits); 

$fruits = array(0=> 'limun', 
	            'a'=> 'naranca', 
	             1 => 'banana',
	            'b'=> 'jabuka',
	            2=>'grejp' );

echo "<pre>";
print_r($fruits);
echo "</pre>";
#asort()
echo "<br>";
asort($fruits);
echo "asort() sortirano<br>";
echo "<pre>";
print_r($fruits);
echo "</pre>";
echo "<hr>";
#arsort()
echo "<br>";
arsort($fruits);
echo "arsort() sortirano<br>";
echo "<pre>";
print_r($fruits);
echo "</pre>";
echo "<hr>";
unset($fruits); 

$fruits = array(0=> 'limun', 
	            'a'=> 'naranca', 
	             1 => 'banana',
	            'b'=> 'jabuka',
	            2=>'grejp' );


echo "<pre>";
print_r($fruits);
echo "</pre>";

#ksort()
echo "<br>";
ksort($fruits);
echo "ksort() sortirano<br>";
echo "<pre>";
print_r($fruits);
echo "</pre>";

echo "<br>";
ksort($fruits);
echo "ksort() sortirano<br>";
echo "<pre>";
print_r($fruits);
echo "</pre>";



#krsort()
echo "<br>";
krsort($fruits,0);
echo "krsort() sortirano<br>";
echo "<pre>";
print_r($fruits);
echo "</pre>";
phpinfo();
?>