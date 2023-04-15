<?php declare(strict_types=1);

namespace GGApis\Blizzard\Fixture;

final class UserAccount {

    private function __construct() {}

    public static function json() : string {
        return json_encode([
            'sub' => '123456789',
            'id' => 123456789,
            'battletag' => 'UserTag#1234'
        ], JSON_THROW_ON_ERROR);
    }

}