<?php 
// Inizio primo selfwork PHP.
$integer = 50; 
$float = 5.5;
$string = 'I love Aulab';
$boolean = true; 

var_dump($integer);
var_dump($float);
var_dump($string); 
var_dump($boolean);

define('INTEGER', $integer);
define('FLOAT', $float);
define('STRING', $string);
define('BOOLEAN', $boolean);


echo INTEGER ."\n";
echo FLOAT ."\n";
echo STRING ."\n";
echo BOOLEAN ."\n";
// Fine primo selfwork PHP.


//! Inizio secondo selfwork PHP.
$text1 = "Marco";
$text2 = "hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perchè";
$text6 = 'hai';
$text7 = 'bevuto';
$text8 = "tutto.";
echo $text1 . ' ' . $text2 . ' ' . $text3 . $text4. "\n"  .  $text5 . ' '  . $text6 . ' ' . $text7 . ' ' . $text8 ;
//! Fine secondo selfwork PHP.

// ? Inizio terzo selfwork PHP
$words1 = [
    'vostro',
    67,
    'essere',
    'colle',
    'mi',
    'sempre',
  [
    'oscura',
    'era',
    89,
    [
    'mezzo',
     'E'
    ],
  'ritrovai',
  'per'
  ],
  'diritta'
  ];
  
  $words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'possa',
    'elemento3' => [
      'Virgilio',
      'Favore',
      'favore',
      ['fortuna']
    ],
   'fine' => '!'
  ];

$words3 = [ 
    'Nel',
    'di',
    'vita',
    ['selva','la'],
];


$words4 = [ 
  'el1' => 'cammin',
  'el2' => 'nostra',
  'el3' => 'una',
  'el4' => ',',
  'el5' => 'chè',
  'el6' => ['via',95,7 ,['Dante','.']]

   
];

$parolaBonus= 'smarrita';



$result = $words3[0] . ' ' . $words1[6][3][0] . ' ' . $words3[1] . ' ' . $words4['el1'] .' ' . $words3[1] . ' ' . $words4['el2'] . ' ' . $words3[2] . ' ' . $words1[4] . ' ' . $words1[6][4] . ' ' . $words1[6][5] . ' ' . $words4['el3'] . ' ' . $words3[3][0] . ' ' . $words1[6][0] . $words4['el4'] . ' ' . $words4['el5'] .  ' ' . $words3[3][1] . ' ' . $words1[7] . ' ' .  $words4['el6'][0] . ' ' . $words1[6][1] . ' ' . $parolaBonus .  $words4['el6'][3][1] ;


var_dump($result);

// ? Fine terzo selfwork PHP  

?>