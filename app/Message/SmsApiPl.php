<?php


namespace App\Message;


use Smsapi\Client\Feature\Sms\Bag\SendSmsBag;
use Smsapi\Client\SmsapiHttpClient;

class SmsApiPl
{
    /**
     * @var \Smsapi\Client\Service\SmsapiPlService
     */
    protected $service;

    public function __construct(SmsapiHttpClient $smsClient)
    {
        $this->service = $smsClient->smsapiPlService(config('sms.smsapi-pl.token'));
    }

    public function send($phone, $message)
    {
        $sms = SendSmsBag::withMessage($phone, $message);

        $this->service
            ->smsFeature()
            ->sendSms($sms);
    }
}