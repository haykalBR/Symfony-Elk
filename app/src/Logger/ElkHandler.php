<?php


namespace App\Logger;


use Monolog\Handler\AbstractProcessingHandler;
use Monolog\Logger;
use Psr\Log\LoggerInterface;

class ElkHandler extends AbstractProcessingHandler
{
    private $logger;
    public function  __construct($level = Logger::DEBUG, $bubble = true,LoggerInterface $logger)
    {
        $this->logger=$logger;
        parent::__construct($level, $bubble);
    }

    protected function write(array $record)
    {
        dd($record);

       // dd($this->getDefaultFormatter());
    }
}