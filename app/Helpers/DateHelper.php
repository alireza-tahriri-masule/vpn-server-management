<?php

namespace App\Helpers;

use Morilog\Jalali\Jalali;

class DateHelper
{
    // Translate Persian month to English
    public static function translateMonthToEnglish($persianDate)
    {
        // Ensure the input is a valid date string
        $persianMonth = explode('/', $persianDate);

        // Ensure the date has exactly 3 parts (year, month, day)
        if (count($persianMonth) !== 3) {
            return $persianDate; // Return the original date if the format is invalid
        }

        // Month translation map
        $monthMap = [
            'فروردین' => 'Farvardin',
            'اردیبهشت' => 'Ordibehesht',
            'خرداد' => 'Khordad',
            'تیر' => 'Tir',
            'مرداد' => 'Mordad',
            'شهریور' => 'Shahrivar',
            'مهر' => 'Mehr',
            'آبان' => 'Aban',
            'آذر' => 'Azar',
            'دی' => 'Dey',
            'بهمن' => 'Bahman',
            'اسفند' => 'Esfand',
        ];

        // Ensure that the month exists in the map
        $monthInEnglish = $monthMap[$persianMonth[1]] ?? $persianMonth[1]; // Default to the original month if not found

        // Construct the corrected date
        $correctFormat = $persianMonth[0] . '/' . $monthInEnglish . '/' . $persianMonth[2];

        return $correctFormat; // Return the translated date
    }
}
