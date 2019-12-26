<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Menue for shopping</h2>

<table>
  <tr>
 <td>Choose a number to order</td>
  </tr>
  <tr>
    <td>1. for Article A weight = 20 kg shipping cost = 9 Euro</td>
  </tr>
  <tr>
    <td>2. for Article B weight = 40 kg shipping cost = 16 Euro</td>
  </tr>
  <tr>
    <td>3. for Article C weight = 10 kg shipping cost = 5 Euro</td>
  </tr>
  <tr>
    <td>4. for Article D weight = 50 kg shipping cost = 20 Euro</td>
  </tr>
  <tr>
    <td>5. for Article E weight = 30 kg shipping cost = 12 Euro</td>
  </tr>
 <tr>
    <td>6. for combining Articles helps to make the shipping cost cheaper</td>
  </tr>
 <tr>
    <td>7. for suming up invidual Articles</td>
  </tr>
 <tr>
    <td>8. for suming up combined Articles</td>
  </tr>
 <tr>
    <td>9. for quit</td>
  </tr>

<h3>Note: Maximum capacity per packet is 50 KG</h3>
</table>


<form method="post" action="">
<input type="number" name="value">
<input type="submit">
</form>

</body>
</html>


<?php


// Items wight


// Items shipping price per weight


function cost() {


// Shipping costs

$shipping1=9;
$shipping2=16;
$shipping3=5;
$shipping4=20;
$shipping5=12;

// Weight per Artiekl

$ArtikelA=20;
$ArtikelB=40;
$ArtikelC=10;
$ArtikelD=50;
$ArtikelE=30;


if ($_POST['value'] == 11){


echo " \n  \n Article A is added in the basket";

file_put_contents("/var/www/html/shop/A.txt"," $ArtikelA KG Artikel A is added in the basket, \n  \n  shipping charge is $shipping1 Euro " );


//for($i=1;$i<$_POST['value'];$i++)

//{
//  file_put_contents("/var/www/html/$i A.txt"," $ArtikelA KG Artikel A is added in the basket, \n  \n  shipping charge is $shipping Euro " );
//}

//rename the file like $i A.mtxt

//use count file function to calculate the sum for the same article


}else {

$shipping1 = 0;

}


// Multiple order
//echo copy("/var/www/html/A.txt","/var/www/html/A1.txt");



if ($_POST['value'] == 2){

echo " \n  \n Article B is added in the basket";

file_put_contents("/var/www/html/B.txt"," $ArtikelB KG Artikel B is added in the basket, \n  \n  shipping charge is $shipping2 Euro " );


}else {

$shipping2 = 0;


}


if($_POST['value']  == 3){


echo "Article C is added in the basket";

file_put_contents("/var/www/html/C.txt"," $ArtikelC KG Artikel C is added in the basket, \n  \n  shipping charge is $shipping3 Euro " );


}else {

$shipping3 = 0;


}

if ($_POST['value']  == 4){


echo " \n  \n Article D is added in the basket";

file_put_contents("/var/www/html/D.txt"," $ArtikelD KG Artikel D is added in the basket, \n  \n  shipping charge is $shipping4 Euro " );

}else {

$shipping4 = 0;


}
 

if ($_POST['value'] == 5){

echo " \n  \n Article E is added in the basket";

file_put_contents("/var/www/html/E.txt"," $ArtikelE KG Artikel E is added in the basket, \n  \n  shipping charge is $shipping5 Euro " );


}else {

$shipping5 = 0;

}



// Combination



if ($_POST['value'] == 6) {


echo "Which Articles you would like to combine?";

echo "You combine like '12' or '23' or '13' but in reverse direction like '21' or '32' "; 

}


// cc combining

if ($_POST['value'] == 33){


$sumae = $ArtikelC+$ArtikelC;


if ($sumae<=20)

{ 


$shipping1=16;

echo "shipping wight is accpeted" ;
echo "Article C+E are combined in the basket";

file_put_contents("/var/www/html/cc.ctxt","$sumae KG Artikel are added in the basket,\n  \n  shipping charge is $shipping1 Euro ");

echo "Which Articles you would like to keep single? choose the articles number like '101' or '202' or '303' or '404' or '505' ";


}}


else {

$shipping1 = 0;


}

// ce combining

if ($_POST['value'] == 35){


$sumae = $ArtikelC+$ArtikelE;


if ($sumae<=40)

{ 


$shipping2=16;

echo "shipping wight is accpeted" ;
echo "Article C+E are combined in the basket";

file_put_contents("/var/www/html/ce.ctxt","$sumae KG Artikel are added in the basket,\n  \n  shipping charge is $shipping2 Euro ");

echo "Which Articles you would like to keep single? choose the articles number like '101' or '202' or '303' or '404' or '505' ";


}}


else {

$shipping2 = 0;


}


// ae combining

if ($_POST['value'] == '15'){


$sumae = $ArtikelA+$ArtikelE;


if ($sumae>40 && $sumae<=50)

{ 


$shipping4=20;

echo "shipping wight is accpeted" ;
echo "Article A+E are combined in the basket";

file_put_contents("/var/www/html/ae.ctxt","$sumae KG Artikel are added in the basket,\n  \n  shipping charge is $shipping4 Euro ");

echo "Which Articles you would like to keep single? choose the articles number like '101' or '202' or '303' or '404' or '505' ";


}}


else {

$shipping4 = 0;


}


// abc combining

if ($_POST['value'] == 123){


$sumae = $ArtikelA+$ArtikelB+$ArtikelC;


if ($sumae>50)

{ 

echo "$sumae KG";

echo "Sorry wight per paket is max 50 KG, try again";


}

}


// abd combining

if ($_POST['value'] == '124'){


$sumae = $ArtikelA+$ArtikelB+$ArtikelD;


if ($sumae>50)

{ 

echo "$sumae KG";

echo "Sorry wight per paket is 50 KG, try again";


}
}

// bc combining

if ($_POST['value'] == '23'){


$sumae = $ArtikelB+$ArtikelC;


if ($sumae<=50)

{ 

echo "$sumae KG";

$shipping4=20;

echo "shipping wight is accpeted" ;
echo "Article B+C are combined in the basket";

file_put_contents("/var/www/html/bc.ctxt","$sumae KG Artikel are added in the basket,\n  \n  shipping charge is $shipping4 Euro ");

echo "Which Articles you would like to keep single? choose the articles number like '101' or '202' or '303' or '404' or '505' ";


}}

else {

$shipping4 = 0;

}


// ace combining

if ($_POST['value'] == '13'){


$sumae = $ArtikelA+$ArtikelC;



if ($sumae<=30)

{ 

echo "$sumae KG";

$shipping5=12;

echo "shipping wight is accpeted" ;
echo "Article A+C are combined in the basket";

file_put_contents("/var/www/html/ac.ctxt","$sumae KG Artikel are added in the basket,\n  \n  shipping charge is $shipping5 Euro ");

echo "Which Articles you would like to keep single? choose the articles number like '101' or '202' or '303' or '404' or '505' ";


}}

else {

$shipping5 = 0;

}

}



////////////////

if ($_POST['value']==101)

{ 

$shipping11=9;

echo "Article A is added with the combined Article";

file_put_contents("/var/www/html/a.ctxt","$sumae KG Artikel are added in the basket,\n  \n  shipping charge is $shipping11 Euro ");


}

else {

$shipping11 = 0;

}


if ($_POST['value']==202)

{ 

echo "Article B is added with the combined Article";

$shipping22=16;

file_put_contents("/var/www/html/b.ctxt","$sumae KG Artikel are added in the basket,\n  \n  shipping charge is $shipping22 Euro ");


}

else {

$shipping22 = 0;

}


if ($_POST['value']==303)

{ 

  //  echo "The file $filename3 exists";

echo "Article C is added with the combined Article";

$shipping33=5;

file_put_contents("/var/www/html/c.ctxt","$sumae KG Artikel are added in the basket,\n  \n  shipping charge is $shipping33 Euro ");


}

else {

$shipping33 = 0;

}

if ($_POST['value']==404)

{ 

echo "Article D is added with the combined Article";

$shipping44=20;

file_put_contents("/var/www/html/d.ctxt","$sumae KG Artikel are added in the basket,\n  \n  shipping charge is $shipping44 Euro ");


}

else {

$shipping44 = 0;

}

if ($_POST['value']==505)

{ 

echo "Article E is added with the combined Article";

$shipping55=12;

file_put_contents("/var/www/html/e.ctxt","$sumae KG Artikel are added in the basket,\n  \n  shipping charge is $shipping55 Euro ");


}

else {

$shipping55 = 0;

}


////////////////
//items_in_basket_af();

//$sum = $shipping1 + $shipping2 + $shipping3 + $shipping4 + $shipping5;

//echo "Total Price $sum €";


// Before combining sum up


if ($_POST['value'] == '7'){


items_in_basket();

$filename = '/var/www/html/A.txt';

if (file_exists($filename)) {
   // echo "The file $filename1 exists";

$shipping1=9 ;

}else {
    $shipping1 = 0;
}

$filename = '/var/www/html/B.txt';

if (file_exists($filename)) {

   // echo "The file $filename2 exists";

$shipping2=16 ;

}else {
    $shipping2 = 0;
}


$filename = '/var/www/html/C.txt';

if (file_exists($filename)) {

  //  echo "The file $filename3 exists";

$shipping3=5 ;

}else {
    $shipping3 = 0;
}


$filename = '/var/www/html/D.txt';

if (file_exists($filename)) {

  //  echo "The file $filename3 exists";

$shipping4=20 ;

}else {
    $shipping4 = 0;
}

$filename = '/var/www/html/E.txt';

if (file_exists($filename)) {

  //  echo "The file $filename3 exists";

$shipping5=12 ;

}else {
    $shipping5 = 0;
}

$sum = $shipping1+ $shipping2+ $shipping3+ $shipping4+ $shipping5;

echo "Total Price $sum €";

}



//else {
//    echo "The file $filename does not exist";
//}

//$count = count($_POST['member']); 

//echo $count;


//file_put_contents("sum.txt", "Total Price $sum €");



// After combining sum up

if ($_POST['value'] == '8'){


items_in_basket_af();

$filename = '/var/www/html/cc.ctxt';

if (file_exists($filename)) {
   // echo "The file $filename1 exists";

$shipping1=9 ;

}else {
    $shipping1 = 0;
}

$filename = '/var/www/html/ce.ctxt';

if (file_exists($filename)) {

   // echo "The file $filename2 exists";

$shipping2=16 ;

}else {
    $shipping2 = 0;
}


$filename = '/var/www/html/ae.ctxt';

if (file_exists($filename)) {

  //  echo "The file $filename3 exists";

$shipping4=20 ;

}else {
    $shipping4 = 0;
}


$filename = '/var/www/html/bc.ctxt';

if (file_exists($filename)) {

  //  echo "The file $filename3 exists";

$shipping40=20 ;

}else {
    $shipping40 = 0;
}

$filename = '/var/www/html/ac.ctxt';

if (file_exists($filename)) {

  //  echo "The file $filename3 exists";

$shipping5=12 ;

}else {
    $shipping5 = 0;
}


// Single items

$filename = '/var/www/html/a.ctxt';

if (file_exists($filename)) {
   // echo "The file $filename1 exists";

$shipping11=9 ;

}else {
    $shipping11 = 0;
}

$filename = '/var/www/html/b.ctxt';

if (file_exists($filename)) {

   // echo "The file $filename2 exists";

$shipping22=16 ;

}else {
    $shipping22 = 0;
}


$filename = '/var/www/html/c.ctxt';

if (file_exists($filename)) {

  //  echo "The file $filename3 exists";

$shipping33=20 ;

}else {
    $shipping33 = 0;
}


$filename = '/var/www/html/d.ctxt';

if (file_exists($filename)) {

  //  echo "The file $filename3 exists";

$shipping44=20 ;

}else {
    $shipping44 = 0;
}

$filename = '/var/www/html/e.ctxt';

if (file_exists($filename)) {

  //  echo "The file $filename3 exists";

$shipping55=12 ;

}else {
    $shipping55 = 0;
}

$sum1 = $shipping1+ $shipping2+ $shipping3+ $shipping4+$shipping40+$shipping5;
$sum2 = $shipping11+ $shipping22+ $shipping33+ $shipping44+ $shipping55;

$sum_final = $sum1+$sum2;

echo "Total Price $sum_final €";

}

// quit

if ($_POST['value'] == '9'){

exit("Thanks for visiting our shop");

}

// Items in the Basket


function items_in_basket()

{
   $i = 0; 
    $dir = '/var/www/html';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
            {
                $temp = explode(".",$file);
                if($temp[1]=="txt")
                    $i++;
            }
        }
    }
    // prints out how many were in the directory
    echo "There are $i items in the basket  \n  \n ";
}

function items_in_basket_af()

{
   $i = 0; 
    $dir = '/var/www/html';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
            {
                $temp = explode(".",$file);
                if($temp[1]=="ctxt")
                    $i++;
            }
        }
    }
    // prints out how many were in the directory
    echo "There are $i items in the basket  \n  \n ";
}

//$i = 0;

//do {

//menue();
cost();

//} while ($i == 0);

?>
