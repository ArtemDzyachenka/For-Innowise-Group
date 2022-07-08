<?php

namespace src;

//1.01.1980(Вторник) до 31.12.1999(Пятница) 28 понедельников должно быть


use InvalidArgumentException;

class Task6
{
    public function main(int $year, int $lastYear, int $month, int $lastMonth, string $day = 'Monday'): int
    {
        $counter = 0;
        $firstDate = strtotime("01.$month.$year");
        $secondDate = strtotime("01.$lastMonth.$lastYear");
        while ($firstDate < $secondDate) {
            $firstDate = strtotime('+1 month', $firstDate);
            if ($day == date('l', $firstDate)) {
                echo '<pre>';
                $dates = date('l m Y', $firstDate) ;
                $counter++;
            }
        }

        return $counter;
    }
}
$itog = new Task6();

try {
    echo $itog->main(1980, 1999, 01, 12);
} catch (InvalidArgumentException $exception) {
    echo $exception->getMessage();
}


















//        $secondDate = $secondDate->modify( '+1 day' );

//        $interval = new DateInterval('P1D');
//        $daterange = new DatePeriod($firstDate, $interval ,$secondDate);
//
//        foreach($daterange as $date1){
//            $counter = 0;
//            if ($firstDate >= $secondDate) {
//                return $counter-1;  // A hack to make this function return the correct number of days.
//            } else  {
//                $day2 = strtotime($day);
//                if ($day2 == "$date1"){
//                    echo ( strtotime("next ".$day2, $firstDate));
//                    ++$counter;
//                }
//            }
//            return 'ada';
//
//        }
//
/// //        function daycount(string $day1, int $startdate, int $enddate, int $counter)
////        {
////
////            if ($startdate >= $enddate) {
////                return $counter-1;
////            } else  {
////
////                if (strtotime("first day of next month",$startdate) ===  strtotime("monday",$startdate)){
//////                    echo "good";
////                   return daycount($day1, strtotime("$day1", $startdate), $enddate, ++$counter);
////
////                }
////            }
////            return daycount($day1, $startdate, $enddate, 0);
////        }
