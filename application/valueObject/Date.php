<?php

namespace App\valueObject;


use DateTime;
use Exception;

readonly class Date
{
    public function __construct(
        private int $year,
        private int $month,
        private int $day

    )
    {
        if (!checkdate($this->month, $this->day, $this->year)) {

            throw new Exception("Incorrect data");
        }
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function getMonth(): int
    {
        return $this->month;
    }

    public function getDay(): int
    {
        return $this->day;
    }

    public function comparison(Date $date): string
    {
        if ($this->year != $date->getYear()) {
            return "date isn`t the same";
        } elseif ($this->month != $date->getMonth()) {
            return "date isn`t the same";
        } elseif ($this->day != $date->getDay()) {
            return "date isn`t the same";
        } else {
            return "date is the same";
        }


    }

    public function dateDifference(Date $date): string
    {
        $date1 = new DateTime($this->formatDataToString());
        $date2 = new DateTime($date->formatDataToString());
        $interval = $date1->diff($date2);

        return "Date difference: " . $interval->y . " years, " . $interval->m . " months, " . $interval->d . " days";
    }

    public function formatDataToString(): string
    {

        return sprintf('%04d-%02d-%02d', $this->year, $this->month, $this->day);
    }


}