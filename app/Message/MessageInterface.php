<?php


namespace App\Message;


interface MessageInterface
{
    public function message($message);
    public function send();
}