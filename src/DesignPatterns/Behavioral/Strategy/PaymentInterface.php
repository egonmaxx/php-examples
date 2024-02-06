<?php
namespace Application\DesignPatterns\Behavioral\Strategy;
interface PaymentInterface{
   /* Declare the main payments algorithms */
   public function pay(int $amount): bool;
}