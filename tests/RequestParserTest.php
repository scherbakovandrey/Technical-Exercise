<?php

namespace TestTaker\Tests;

use \PHPUnit\Framework;
use \TestTaker\Utils\RequestParser;

class RequestParserTest extends Framework\TestCase
{
    public function testUsersRequestParseWithParams()
    {
        // /api/users?limit=10&offset=20
        $request = [
            'resources' => 'users',
            'limit' => 5,
            'offset' => 0,
        ];
        $parsedRequest = RequestParser::parse($request);
        $this->assertEquals($parsedRequest['controller'], 'Users');
        $this->assertEquals($parsedRequest['params']['limit'], 5);
        $this->assertEquals($parsedRequest['params']['offset'], 0);
    }

    public function testUsersRequestParseWithParamsAndFilter()
    {
        // /api/users?limit=10&offset=20&
        $request = [
            'resources' => 'users',
            'limit' => 10,
            'offset' => 20,
            'name' => 'john'
        ];
        $parsedRequest = RequestParser::parse($request);
        $this->assertEquals($parsedRequest['controller'], 'Users');
        $this->assertEquals($parsedRequest['params']['limit'], 10);
        $this->assertEquals($parsedRequest['params']['offset'], 20);
        $this->assertEquals($parsedRequest['params']['name'], 'john');
    }

    public function testUsersRequestParseWithFilter()
    {
        // /api/users?limit=10&offset=20&
        $request = [
            'resources' => 'users',
            'name' => 'john'
        ];
        $parsedRequest = RequestParser::parse($request);
        $this->assertEquals($parsedRequest['controller'], 'Users');
        $this->assertEquals($parsedRequest['params']['name'], 'john');
    }


    public function testUserWithoutId()
    {
        // /api/user
        $request = [
            'resources' => 'user',
        ];
        $parsedRequest = RequestParser::parse($request);
        $this->assertEquals($parsedRequest['controller'], 'User');
        $this->assertEquals($parsedRequest['resourceId'], -1);
    }

    public function testUserWithIdRequestParse()
    {
        // /api/user/10
        $request = [
            'resources' => 'user/10',
        ];
        $parsedRequest = RequestParser::parse($request);
        $this->assertEquals($parsedRequest['controller'], 'User');
        $this->assertEquals($parsedRequest['resourceId'], 10);
    }
}