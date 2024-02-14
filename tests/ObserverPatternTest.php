<?php 

use Application\DesignPatterns\Behavioral\Observer\FollowerFeed;
use Application\DesignPatterns\Behavioral\Observer\UserFeed;
use PHPUnit\Framework\TestCase;

final class ObserverPatternTest extends TestCase
{
    public function testUserFeed()
    {
        $userFeed = new UserFeed();
        $userFeed->addContent('Lorem ipsum dolor sit amet.');
        $this->assertEquals('Lorem ipsum dolor sit amet.',$userFeed->getContent());
    }

    public function testUserFeedAttach()
    {
        $userFeed = new UserFeed();
        $followerFeed = new FollowerFeed();
        $userFeed->attach($followerFeed);
        $this->assertCount(1, $userFeed->observers);
    }

    public function testUserFeedDetach()
    {
        $userFeed = new UserFeed();
        $followerFeed = new FollowerFeed();
        $userFeed->attach($followerFeed);
        $userFeed->detach($followerFeed);
        $this->assertCount(0, $userFeed->observers);
    }

    public function testUpdate()
    {
        $userFeed = new UserFeed();
        $followerFeed = new FollowerFeed();
        $followerFeed2 = new FollowerFeed();
        $userFeed->attach($followerFeed);
        $userFeed->attach($followerFeed2);
        $userFeed->addContent('Lorem ipsum dolor sit amet.');
        $this->assertEquals('Lorem ipsum dolor sit amet.',$followerFeed->content);
        $this->assertEquals('Lorem ipsum dolor sit amet.',$followerFeed2->content);
    }
}