<?php 

$a = 10;
$b = 15;
$d = $a + $b;
echo "yig'indi = ".$d."<br>";
echo "modul ijobiy holati uchun",abs(10),"<br>";
echo "sonning sinusi uchun ", sin(8.3),"<br>";
echo "sonning giperbolik sinusi uchun ", sinh(8.3),"<br>";
echo "raqamni cosinusi uchun ", cos(15.3),"<br>";
echo "raqamni giperbolic cosinusi uchun ", cosh(15.3),"<br>";
echo "125 raqamining kosinusi uchun ",acos(125),"<br>";
echo "10 raqamining teskari kosinus uchun ",acosh(10),"<br>";
echo "10 raqamining sinusi uchun ",asin(10),"<br>";
echo "10 raqamining teskari sinusi uchun ",asinh(10),"<br>";
echo "10 raqamining radiani uchun ",atan(10),"<br>";
echo "10 va 15 raqamlarining teskari radiani uchun ", atan2(10, 15),"<br>";
echo "10 raqamining teskari radiani uchun ", atanh(10),"<br>";
echo "raqamlar bazasini o'zgartirish uchun", base_convert(10, 12, 15),"<br>";
echo "raqamni sakkizlik sistemaga o'tqazish uchun ", decoct(1285),"<br>";
echo "ikkilik raqamni kasr songa o'zgartirish uchun ", bindec(15),"<br>";
echo "raqamni yaxlitlash uchun ", ceil(15.3),"<br>";
echo "raqamni ikkilik sistemaga o'tqazish uchun ", decbin(185),"<br>";
echo "raqamni o'n oltilik sistemaga o'tqazish uchun ", dechex(1285),"<br>";
echo "raqamni radius qiymatga o'zgartirish uchun ", deg2rad(100),"<br>";
echo "raqamni elektronini aniqlash uchun ", exp(15),"<br>";
echo "exp() bilan bir xil qiymat ", expm1(15),"<br>";
echo "eng yaqin butun songacha pastga yaxlitlash ", floor(17.8),"<br>";
echo ".... ", fmod(15, 17),"<br>";
echo "getrandmax funksiyasi vazifasini tushinmadim ", getrandmax(),"<br>";
echo "raqamni o'n oltilik sistemaga o'tqazish uchun ", hexdec(505),"<br>";
echo "to'g'ri burchakli uchburchakning gipotenuzasini hisoblash uchun ", hypot(15, 5),"<br>";
echo "qiymatni tekshiradi ", is_finite(35),"<br>";
echo "qiymatni cheksizligini tekshirish ", is_infinite(33.5),"<br>";
echo "raqam emasligini tekshirish ", is_nan(5.5),"<br>";
echo "tasodifiy son qaytaradi ", lcg_value(),"<br>";
echo "logarifm buyicha ", log(12),"<br>";
echo "bazaviy logarifm buyicha ", log10(12),"<br>";
echo "log buyicha ", log1p(12),"<br>";
echo "qiymatlar orasida eng yuqorisi uchun ", max(10, 15, 27,142, 33),"<br>";
echo "qiymatlar orasida eng kichigi uchun ", min(15, 27, 10, 33, 142),"<br>";
echo "mt_rand() dan qaytarilgan eng katta qiymat ", mt_getrandmax(),"<br>";
echo "qaytarilgan eng katta qiymat ", mt_rand(),"<br>";
echo "qaytarilgan tasodifiy qiymat ", mt_srand(),"<br>";
echo "ikkilik sonni kasr songa o'zgartiradi ", octdec(01),"<br>";
echo "pi ni qaytaradi ", pi(),"<br>";
echo "sonni darajaga ko'tarish ", pow(5, 5),"<br>";
echo "radian qiymatni darajaga ko'tarish ", rad2deg(15),"<br>";
echo "tasodifiy son ", rand(),"<br>";
echo "sonni yaxlitlash uchun ", round(8.3),"<br>";
echo "sonning  kvadrat ildizi uchun ", sqrt(16),"<br>";
echo "tasodifiy sonlar uchun ", srand(),"<br>";
echo "sonning tangenti uchun ", tan(-25),"<br>";
echo "giperbolik tangent uchun ", tanh(25),"<br>";

?>