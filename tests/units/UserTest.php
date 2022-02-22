<?php 
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testSuccessCreateUser()
    {
        $user = new \App\Models\User;
        return $this->assertInstanceOf(\App\Models\User::class, $user);
    }
    public function testSuccessSetAndGetNameUser()
    {
        $user = new \App\Models\User;
        $user->setName('addin');

        return $this->assertEquals('addin', $user->getName());
    }
    public function testFailedIfEmptyGetNameUser()
    {
        $user = new \App\Models\User;
        return $this->assertEmpty($user->getName());
    }
}

?>