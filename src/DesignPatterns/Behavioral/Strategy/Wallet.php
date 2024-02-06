<?php 

namespace Application\DesignPatterns\Behavioral\Strategy;

use Application\DesignPatterns\Behavioral\Strategy\PaymentInterface;
// Define Wallet class
class Wallet implements PaymentInterface{

    public string $walletAddress;

    public function __construct(string $walletAddress)
    {
        $this->walletAddress = $walletAddress;
    }

    /**
        * Get the value of walletAddress
        */
    public function getWalletAddress(): string
    {
        return $this->walletAddress;
    }

    public function pay(int $amount): bool
    {
        echo "Wallet payment ".$amount." processing from: " . $this->getWalletAddress();

        return true;
    }
}