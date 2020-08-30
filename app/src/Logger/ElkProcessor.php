<?php


namespace App\Logger;


use Symfony\Component\HttpFoundation\IpUtils;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Core\Security;

class ElkProcessor
{
    private $request;

    public function __construct(RequestStack $requestStack)
    {
        $this->request = $requestStack;
    }

    public function __invoke(array $record)
    {
       $request= $this->request->getCurrentRequest();
        if ($request != null){
            $record['extra']['PathInfo'] = $request->getPathInfo();
            $record['extra']['methode'] = $request->getMethod();
            $record['extra']['ip'] = IpUtils::anonymize($request->getClientIp());
            $record['extra']['host'] = $request->getHost();
            $record['extra']['http_user_agent'] = $request->headers->get('User-Agent');

        }

        return $record;
    }

}