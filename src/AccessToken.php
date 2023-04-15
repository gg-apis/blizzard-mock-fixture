<?php declare(strict_types=1);

namespace GGApis\Blizzard\Fixture;

final class AccessToken {

    private function __construct() {}

    public static function json() : string {
        return json_encode([
            'access_token' => 'access-token',
            'token_type' => 'bearer',
            'expires_in' => 2500,
            'scope' => 'openid wow.profile'
        ], JSON_THROW_ON_ERROR);
    }

}