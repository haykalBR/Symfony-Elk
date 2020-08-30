<?php


namespace App\Logger;


use Monolog\Formatter\FormatterInterface;

class ELkFormatter implements FormatterInterface
{

    public function format(array $record)
    {
        dd('format');
    }

    public function formatBatch(array $records)
    {
        // TODO: Implement formatBatch() method.
    }
}