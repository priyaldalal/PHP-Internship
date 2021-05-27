  <?php
function leap_year($year)
{
   if ($year%400==0)
      print("It is a leap year");
   if ($year%4==0)
      print("It is a leap year");
   else if ($year%100==0)
      print("It is not a leap year");
   else
      print("It is not a leap year");
}
$year = 2021;
leap_year($year);
?>
