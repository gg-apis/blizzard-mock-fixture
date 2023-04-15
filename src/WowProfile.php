<?php declare(strict_types=1);

namespace GGApis\Blizzard\Fixture;

final class WowProfile {

    private function __construct() {}

    public static function json() : string {
        return <<<JSON
{
  "_links": {
    "self": {
      "href": "https://us.api.blizzard.com/profile/user/wow?namespace=profile-us"
    },
    "user": {
      "href": "https://us.api.blizzard.com/profile/user"
    },
    "profile": {
      "href": "https://us.api.blizzard.com/profile/user/wow?namespace=profile-us"
    }
  },
  "id": 2056856,
  "wow_accounts": [
    {
      "id": 2937834,
      "characters": [
        {
          "character": {
            "href": "https://us.api.blizzard.com/profile/wow/character/area-52/adaxion?namespace=profile-us"
          },
          "protected_character": {
            "href": "https://us.api.blizzard.com/profile/user/wow/protected-character/1566-234345345?namespace=profile-us"
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
          },
          "playable_class": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-class/13?namespace=static-10.0.5_47621-us"
            },
            "name": "Evoker",
            "id": 13
          },
          "playable_race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/70?namespace=static-10.0.5_47621-us"
            },
            "name": "Dracthyr",
            "id": 70
          },
          "gender": {
            "type": "FEMALE",
            "name": "Female"
          },
          "faction": {
            "type": "HORDE",
            "name": "Horde"
          },
          "level": 70
        },
        {
          "character": {
            "href": "https://us.api.blizzard.com/profile/wow/character/arygos/velukh?namespace=profile-us"
          },
          "protected_character": {
            "href": "https://us.api.blizzard.com/profile/user/wow/protected-character/1297-153269335?namespace=profile-us"
          },
          "name": "Velukh",
          "id": 153269335,
          "realm": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/realm/1297?namespace=dynamic-us"
            },
            "name": "Arygos",
            "id": 1297,
            "slug": "arygos"
          },
          "playable_class": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-class/3?namespace=static-10.0.5_47621-us"
            },
            "name": "Hunter",
            "id": 3
          },
          "playable_race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/6?namespace=static-10.0.5_47621-us"
            },
            "name": "Tauren",
            "id": 6
          },
          "gender": {
            "type": "MALE",
            "name": "Male"
          },
          "faction": {
            "type": "HORDE",
            "name": "Horde"
          },
          "level": 43
        },
        {
          "character": {
            "href": "https://us.api.blizzard.com/profile/wow/character/sargeras/velukh?namespace=profile-us"
          },
          "protected_character": {
            "href": "https://us.api.blizzard.com/profile/user/wow/protected-character/76-193498135?namespace=profile-us"
          },
          "name": "Velukh",
          "id": 193498135,
          "realm": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/realm/76?namespace=dynamic-us"
            },
            "name": "Sargeras",
            "id": 76,
            "slug": "sargeras"
          },
          "playable_class": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-class/1?namespace=static-10.0.5_47621-us"
            },
            "name": "Warrior",
            "id": 1
          },
          "playable_race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/4?namespace=static-10.0.5_47621-us"
            },
            "name": "Night Elf",
            "id": 4
          },
          "gender": {
            "type": "MALE",
            "name": "Male"
          },
          "faction": {
            "type": "ALLIANCE",
            "name": "Alliance"
          },
          "level": 24
        }
      ]
    }
  ],
  "collections": {
    "href": "https://us.api.blizzard.com/profile/user/wow/collections?namespace=profile-us"
  }
}
JSON;
    }

}