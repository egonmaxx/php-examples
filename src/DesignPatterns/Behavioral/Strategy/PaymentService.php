<?php 

namespace Application\DesignPatterns\Behavioral\Strategy;

use Application\DesignPatterns\Behavioral\Strategy\PaymentInterface;
// Define our context Payment Service
class PaymentService 
{
    private PaymentInterface $paymentProcessor;
 
    public function makePayment(int $amount): bool
    {
        return $this->paymentProcessor->pay($amount);
    }
 
    public function setPaymentProcessor($paymentProcessor): void
    {
        $this->paymentProcessor = $paymentProcessor;
    }
 }