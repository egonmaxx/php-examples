<?php 
namespace Application\DesignPatterns\Behavioral\Observer;

class FollowerFeed implements ObserverInterface
{
    public $content;
    public function update(SubjectInterface $subject)
    {
        $this->content = $subject->getContent();
    }
}