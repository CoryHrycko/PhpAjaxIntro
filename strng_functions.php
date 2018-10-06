<?php
//substr()
//return portions of strings
$output = substr("Hello", 1);

echo $output;
echo '<br><br><br>';

$output = substr("Hello", 1, 3);
echo $output;
echo '<br><br><br>';
$output = substr("Hello", -2, 3);
echo $output;
echo '<br><br><br>';
$output = strlen('Hello World');
echo $output;

//Finds the postion of the first occurence of a sub
//string

$output = strpos('hello World','o');
echo $output;
echo '<br><br><br>';

//last
$output = strrpos('Hello World', 'o');
echo $output;
echo '<br><br><br>';


//trim white space
$text= 'Hello world                                         ';
var_dump($text);

//trimmed
$trimmed = trim($text);
var_dump($trimmed);
echo '<br><br><br>';

//str to upper

$output = strtoupper('hello world');
echo $output;
echo '<br><br><br>';


//str to lower

$output = strtolower('Hello World');
echo $output;
echo '<br><br><br>';


//cap every word

$output = ucwords('hello sworld');
echo $output;
echo '<br><br><br>';

//str_replace
//like find and replace (Searched word, Replaced word, strng)

$text = 'Hello World';
$output= str_replace('World', 'Everyone', $text);
echo $output;
echo '<br><br><br>';

//is strng
//check string

$val = 'Hello';
$output =is_string($val);
echo $output;
echo '<br><br><br>';

$values= array(true, false, null, 'abc', 33, "33", 22.4, '22.4',' ', '  ', 0, '0');

foreach($values as $value){
    if(is_string($value)){
        echo "{$value} is a string<br>";
    };
};


echo '<br><br><br>';

//compress string

$string = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero exercitationem illum adipisci ex explicabo, non, temporibus optio dolores eaque ullam culpa ipsam qui veritatis dicta doloribus dignissimos aperiam facere assumenda voluptatibus perspiciatis expedita suscipit mollitia atque. Ipsa, corporis quisquam deserunt voluptatibus eligendi unde assumenda modi eum sit nam odit quasi fugiat perferendis alias exercitationem hic impedit rem magnam quidem placeat ratione consequuntur dolor atque laboriosam. Voluptatum rem ducimus quod provident nulla magni dignissimos praesentium harum eveniet! Ea in deleniti, incidunt unde reiciendis pariatur corporis, magni molestiae, minus impedit autem? Voluptates rem necessitatibus quaerat ratione nemo ipsam laudantium consequuntur similique, numquam unde vitae quasi cum expedita ut nihil nostrum nam aspernatur? Aliquid placeat et perferendis pariatur quos? Tenetur ipsum nam, quod dolorem eius delectus aut vitae dignissimos neque nisi debitis nulla dicta pariatur? Velit enim perferendis nesciunt doloremque delectus perspiciatis possimus maiores numquam similique dolore, vero eum eaque, molestias incidunt molestiae et alias sit modi sequi expedita saepe. Rerum saepe eveniet accusamus asperiores beatae illum ut assumenda maiores aut ea quisquam voluptates iusto ex autem provident suscipit aspernatur corporis, deserunt ducimus quo quae minima. Similique laborum nobis perferendis repudiandae quas fugit fuga soluta ad natus est. Consequuntur placeat nulla fugiat soluta, quibusdam voluptate neque doloremque incidunt libero dolore error culpa officia ducimus impedit enim nam magnam minima harum saepe dicta ab. Veritatis ducimus soluta magni, alias, fugit debitis quisquam veniam eligendi, corporis quibusdam a non rem natus eos. Dolores reprehenderit dignissimos excepturi, ipsam ex numquam reiciendis veritatis tempora quasi, blanditiis iste beatae laudantium esse ducimus, quo nesciunt voluptatibus. Rem culpa quam debitis ea enim, reprehenderit impedit deserunt distinctio animi similique ipsam illum optio ipsa veritatis maxime harum beatae suscipit excepturi vel eius, sit et magnam modi recusandae? Autem veritatis eius soluta odit harum ex cumque est molestias inventore, quo, architecto fuga itaque possimus aut quia modi similique quas asperiores dignissimos culpa beatae ullam. Minus praesentium facere accusamus unde, ut illum laboriosam id fugiat minima beatae quas earum tempore maxime non quisquam deserunt alias optio, possimus sed. Aperiam harum id eligendi consequuntur cumque. Similique tempora voluptatem porro ut. Voluptatum delectus, ut dolores itaque in consequuntur ullam reprehenderit sequi cum minus! Maiores a quos sint libero temporibus tempora aliquam, incidunt dolores, hic dignissimos vitae. Atque modi, libero quisquam a magnam mollitia magni animi pariatur numquam, doloremque officiis recusandae natus accusamus! Quisquam, sapiente sunt natus hic nulla dolorum magni, rerum, voluptates beatae libero et?';

$compressed = gzcompress($string);

echo $compressed;








