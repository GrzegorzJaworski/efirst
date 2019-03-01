<?php


namespace App\Message;


class SmsMessage implements MessageInterface
{
    protected $phone;
    protected $message;
    /**
     * @var SmsApiPl
     */
    private $smsApi;

    public function __construct(SmsApiPl $smsApi)
    {
        $this->smsApi = $smsApi;
    }

    public function phone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    public function message($message)
    {
        $this->message = $message;
        return $this;

    }

    public function send()
    {
        $this->smsApi->send($this->phone, $this->message);
    }
}