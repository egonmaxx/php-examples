<?php 
namespace Application\DesignPatterns\Behavioral\Observer;
interface ObserverInterface
{
    public function update(SubjectInterface $subject);
}