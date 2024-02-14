<?php 
namespace Application\DesignPatterns\Behavioral\Observer;

use SplObjectStorage;

class UserFeed implements SubjectInterface
{
    public SplObjectStorage $observers;
    private $content = null;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    public function attach(ObserverInterface $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(ObserverInterface $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        foreach ($this->observers as $observer)
        {
            $observer->update($this);
        }
    }

    public function addContent($content)
    {
        $this->content = $content;
        $this->notify();
    }

    public function getContent()
    {
        return $this->content;
    }
}