<?php
//
// 1.0
//
$family = ['Géraldine','Florine', 'Lysandre','Khaijit','Dagon'];
echo '<pre>';
print_r($family);
echo '</pre>';

$recipe = ['Lasagne','Spaguetti','Hamburger', 'Ramen'];
echo '<pre>';
print_r($recipe);
echo '</pre>';

$moovie = ['Bad taste','Battle royal','Usual suspect','Evil dead'];
echo '<pre>';
echo $moovie[1];
echo '</pre>';
//
// 2.0
//
$me = array(
    'firstname' => 'Aurélien',
    'lastename' => 'Blampain',
    'favoriteSeason' => 'Autumn',
    'age' => '41',
    'likeFootball' => false
);
$mywife = array(
    'firstname' => 'Géraldine',
    'lastename' => 'Abrassart',
    'favoriteSeason' => 'Autumn',
    'age' => '40',
    'likeFootball' => true
);

$me['hobbies'] = ['listen to music'];
$me['hobbies'][] = 'taxidermy';
$me['wife'] = $mywife;
echo '<pre>'; 
print_r($me);
echo '</pre>';
//
// 3.0  
//
$me = array('ride','running','listen to music');
$soulmate = array( 'ride','gaming','coloring' );

// perform array operation
$possible_hobbies_via_intersection = array_intersect_assoc($me, $soulmate);
$possible_hobbies_via_merge = array_diff_assoc($me, $soulmate);

echo '<pre>';
print_r($possible_hobbies_via_intersection);
print_r($possible_hobbies_via_merge);
echo '</pre>'; 
//
// 4.0
//
$web_development = array(
    'frontend' => [],
    'backend' => []
);
$web_development['frontend'][] = 'xhtml';
$web_development['backend'][] = 'Ruby on Rails';
$web_development['frontend'][] = 'CSS';
$web_development['backend'][] = 'Flash';
$web_development['frontend'][] = 'JavaScript';
$web_development['frontend'][0] = 'html';
unset($web_development['backend'][1]);
echo '<pre>';
print_r($web_development);
echo '</pre>'; 
?>