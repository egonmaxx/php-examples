<?php

namespace Application;

use Application\DesignPatterns\Behavioral\Strategy\PaymentService;
use Application\DesignPatterns\Behavioral\Strategy\PayPal;
use Application\DesignPatterns\Behavioral\Strategy\Wallet;
use PHPUnit\Framework\TestCase;

final class StrategyPatternTest extends TestCase
{
    public function testPaypal()
    {
        $paypal = new PayPal('test@mail.com');
        $this->assertInstanceOf(PayPal::class,$paypal);
    }

    public function testPaypalGetEmail()
    {
        $paypal = new PayPal('test@mail.com');
        $this->assertIsString($paypal->getEmail());
        $this->assertEquals('test@mail.com',$paypal->getEmail());
    }

    public function testWallet()
    {
        $wallet = new Wallet('ysdfSSv23sdfWWFkrenmc');
        $this->assertInstanceOf(Wallet::class,$wallet);
    }

    public function testGetWallet()
    {
        $wallet = new Wallet('ysdfSSv23sdfWWFkrenmc');
        $this->assertEquals('ysdfSSv23sdfWWFkrenmc',$wallet->getWalletAddress());
    }

    public function testPayPalPayment()
    {
        $payment = new PaymentService();
        $payment->setPaymentProcessor(new PayPal('test@mail.com'));
        $this->assertEquals(true,$payment->makePayment('100'));
    }

    public function testWalletPayment()
    {
        $payment = new PaymentService();
        $payment->setPaymentProcessor(new Wallet('ysdfSSv23sdfWWFkrenmc'));
        $this->assertEquals(true,$payment->makePayment('100'));
    }
}