<?php declare(strict_types=1);

namespace GGApis\Blizzard\Fixture;

final class MythicKeystoneCharacterProfile {

    private function __construct() {}

    public static function json() : string {
        return <<<JSON
{
  "_links": {
    "self": {
      "href": "https://us.api.blizzard.com/profile/wow/character/area-52/adaxion/mythic-keystone-profile?namespace=profile-us"
    }
  },
  "current_period": {
    "period": {
      "key": {
        "href": "https://us.api.blizzard.com/data/wow/mythic-keystone/period/897?namespace=dynamic-us"
      },
      "id": 897
    }
  },
  "seasons": [
    {
      "key": {
        "href": "https://us.api.blizzard.com/profile/wow/character/area-52/adaxion/mythic-keystone-profile/season/9?namespace=profile-us"
      },
      "id": 9
    },
    {
      "key": {
        "href": "https://us.api.blizzard.com/profile/wow/character/area-52/adaxion/mythic-keystone-profile/season/8?namespace=profile-us"
      },
      "id": 8
    }
  ],
  "character": {
    "key": {
      "href": "https://us.api.blizzard.com/profile/wow/character/area-52/adaxion?namespace=profile-us"
    },
    "name": "Adaxion",
    "id": 234345345,
    "realm": {
      "key": {
        "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
      },
      "name": "Area 52",
      "id": 1566,
      "slug": "area-52"
    }
  },
  "current_mythic_rating": {
    "color": {
      "r": 163,
      "g": 53,
      "b": 238,
      "a": 1
    },
    "rating": 2323.952
  }
}
JSON;
    }

}