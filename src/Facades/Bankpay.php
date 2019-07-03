<?php
namespace Majiru\Bankpay\Facades;
use Illuminate\Support\Facades\Facade;
class Bankpay extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'bankpay';
    }
}
