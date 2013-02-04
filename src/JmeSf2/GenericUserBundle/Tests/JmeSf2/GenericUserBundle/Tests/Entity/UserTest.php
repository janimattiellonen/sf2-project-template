<?php
namespace JmeSf2\GenericUserBundle\Tests\Entity;

use JmeSf2\GenericUserBundle\Entity\User;

class UserTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     *
     * @group entity
     * @group user
     * @group user-entity
     */
    public function assertExpectedUsername()
    {
        $user = new User();
        $user->setUsername('John');

        $this->assertEquals('John', $user->getUsername() );
    }
}
