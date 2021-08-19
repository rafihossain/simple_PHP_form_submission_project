<?php

class Helper
{
   public static function totalTime($start, $end, $differentiate = 'hour')
   {
      $startDate        = strtotime($start);
      $endDate          = strtotime($end);
      $totalSecondsDiff = abs($startDate - $endDate);
      $totalMinutesDiff = $totalSecondsDiff / 60;
      $totalHoursDiff   = $totalSecondsDiff / 60 / 60;
      $totalDaysDiff    = $totalSecondsDiff / 60 / 60 / 24;
      $totalMonthsDiff  = $totalSecondsDiff / 60 / 60 / 24 / 30;
      $totalYearsDiff   = $totalSecondsDiff / 60 / 60 / 24 / 365;

      switch ($differentiate) {
         case 'second':
            $timeCalculation = $totalSecondsDiff;
            break;
         case 'minute':
            $timeCalculation = $totalMinutesDiff;
            break;
         case 'day':
            $timeCalculation = ceil($totalDaysDiff);
            break;
         case 'month':
            $timeCalculation = $totalMonthsDiff;
            break;
         case 'year':
            $timeCalculation = $totalYearsDiff;
            break;
         default:
            $timeCalculation = $totalHoursDiff;
            break;
      }

      return $timeCalculation;
   }
}
