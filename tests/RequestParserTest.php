<?php

namespace TestTaker\Tests;

use \PHPUnit\Framework;
use \TestTaker\Utils\RequestParser;

class RequestParserTest extends Framework\TestCase
{
    public function testUsersRequestParse()
    {
        // /api/users
        $request = 'users';
        $parsedRequest = RequestParser::parse($request);
        $this->assertEquals($parsedRequest['controller'], 'Users');
        $this->assertEquals($parsedRequest['id'], -1);
    }

    public function testUserWithoutId()
    {
        // /api/user
        $request = 'user';
        $parsedRequest = RequestParser::parse($request);
        $this->assertEquals($parsedRequest['controller'], 'User');
        $this->assertEquals($parsedRequest['id'], -1);
    }

    public function testUserWithIdRequestParse()
    {
        // /api/user/10
        $request = 'user/10';
        $parsedRequest = RequestParser::parse($request);
        $this->assertEquals($parsedRequest['controller'], 'User');
        $this->assertEquals($parsedRequest['id'], 10);
    }
}
