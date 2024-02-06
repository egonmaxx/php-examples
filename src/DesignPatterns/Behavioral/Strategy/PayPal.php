<?php
namespace Application\DesignPatterns\Behavioral\Strategy;

use Application\DesignPatterns\Behavioral\Strategy\PaymentInterface;
// Define Paypal class
class PayPal implements PaymentInterface{

    private ?string $email = 'null';
 
    public function __construct(string $email){
        $this->email = $email;
    }
 
    /**
     * Get the value of email
     */
    public function getEmail(): string
    {
        return $this->email;
    }
 
    public function pay(int $amount): bool
    {
        echo "PayPal payment ".$amount." processing from:". $this->getEmail();
 
        return true;
    }
 }