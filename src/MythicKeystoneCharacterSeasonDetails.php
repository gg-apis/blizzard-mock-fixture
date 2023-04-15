<?php declare(strict_types=1);

namespace GGApis\Blizzard\Fixture;

final class MythicKeystoneCharacterSeasonDetails {

    private function __construct() {}

    public static function json() : string {
        return <<<JSON
{
  "_links": {
    "self": {
      "href": "https://us.api.blizzard.com/profile/wow/character/area-52/adaxion/mythic-keystone-profile/season/9?namespace=profile-us"
    }
  },
  "season": {
    "key": {
      "href": "https://us.api.blizzard.com/data/wow/mythic-keystone/season/9?namespace=dynamic-us"
    },
    "id": 9
  },
  "best_runs": [
    {
      "completed_timestamp": 1675134610000,
      "duration": 2623734,
      "keystone_level": 17,
      "keystone_affixes": [
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/10?namespace=static-10.0.5_47621-us"
          },
          "name": "Fortified",
          "id": 10
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/7?namespace=static-10.0.5_47621-us"
          },
          "name": "Bolstering",
          "id": 7
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/124?namespace=static-10.0.5_47621-us"
          },
          "name": "Storming",
          "id": 124
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/132?namespace=static-10.0.5_47621-us"
          },
          "name": "Thundering",
          "id": 132
        }
      ],
      "members": [
        {
          "character": {
            "name": "Jump",
            "id": 175591090,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/11?namespace=dynamic-us"
              },
              "id": 11,
              "slug": "tichondrius"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/64?namespace=static-10.0.5_47621-us"
            },
            "name": "Frost",
            "id": 64
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/2?namespace=static-10.0.5_47621-us"
            },
            "name": "Orc",
            "id": 2
          },
          "equipped_item_level": 395
        },
        {
          "character": {
            "name": "Adaxion",
            "id": 234345345,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/1468?namespace=static-10.0.5_47621-us"
            },
            "name": "Preservation",
            "id": 1468
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/70?namespace=static-10.0.5_47621-us"
            },
            "name": "Dracthyr",
            "id": 70
          },
          "equipped_item_level": 402
        },
        {
          "character": {
            "name": "Hayword",
            "id": 167281682,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/262?namespace=static-10.0.5_47621-us"
            },
            "name": "Elemental",
            "id": 262
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/2?namespace=static-10.0.5_47621-us"
            },
            "name": "Orc",
            "id": 2
          },
          "equipped_item_level": 403
        },
        {
          "character": {
            "name": "Precize",
            "id": 244641244,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/61?namespace=dynamic-us"
              },
              "id": 61,
              "slug": "zuljin"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/66?namespace=static-10.0.5_47621-us"
            },
            "name": "Protection",
            "id": 66
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/10?namespace=static-10.0.5_47621-us"
            },
            "name": "Blood Elf",
            "id": 10
          },
          "equipped_item_level": 402
        },
        {
          "character": {
            "name": "Cheegee",
            "id": 234688651,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/269?namespace=static-10.0.5_47621-us"
            },
            "name": "Windwalker",
            "id": 269
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/2?namespace=static-10.0.5_47621-us"
            },
            "name": "Orc",
            "id": 2
          },
          "equipped_item_level": 401
        }
      ],
      "dungeon": {
        "key": {
          "href": "https://us.api.blizzard.com/data/wow/mythic-keystone/dungeon/400?namespace=dynamic-us"
        },
        "name": "The Nokhud Offensive",
        "id": 400
      },
      "is_completed_within_time": false,
      "mythic_rating": {
        "color": {
          "r": 255,
          "g": 128,
          "b": 0,
          "a": 1.0
        },
        "rating": 142.83472
      },
      "map_rating": {
        "color": {
          "r": 255,
          "g": 128,
          "b": 0,
          "a": 1.0
        },
        "rating": 280.79675
      }
    },
    {
      "completed_timestamp": 1675541068000,
      "duration": 2345673,
      "keystone_level": 17,
      "keystone_affixes": [
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/9?namespace=static-10.0.5_47621-us"
          },
          "name": "Tyrannical",
          "id": 9
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/123?namespace=static-10.0.5_47621-us"
          },
          "name": "Spiteful",
          "id": 123
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/14?namespace=static-10.0.5_47621-us"
          },
          "name": "Quaking",
          "id": 14
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/132?namespace=static-10.0.5_47621-us"
          },
          "name": "Thundering",
          "id": 132
        }
      ],
      "members": [
        {
          "character": {
            "name": "Marklink",
            "id": 225636628,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/57?namespace=dynamic-us"
              },
              "id": 57,
              "slug": "illidan"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/265?namespace=static-10.0.5_47621-us"
            },
            "name": "Affliction",
            "id": 265
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/8?namespace=static-10.0.5_47621-us"
            },
            "name": "Troll",
            "id": 8
          },
          "equipped_item_level": 413
        },
        {
          "character": {
            "name": "Trickgoinham",
            "id": 225636208,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/57?namespace=dynamic-us"
              },
              "id": 57,
              "slug": "illidan"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/254?namespace=static-10.0.5_47621-us"
            },
            "name": "Marksmanship",
            "id": 254
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/2?namespace=static-10.0.5_47621-us"
            },
            "name": "Orc",
            "id": 2
          },
          "equipped_item_level": 410
        },
        {
          "character": {
            "name": "Spicybull",
            "id": 225698971,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/57?namespace=dynamic-us"
              },
              "id": 57,
              "slug": "illidan"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/250?namespace=static-10.0.5_47621-us"
            },
            "name": "Blood",
            "id": 250
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/6?namespace=static-10.0.5_47621-us"
            },
            "name": "Tauren",
            "id": 6
          },
          "equipped_item_level": 407
        },
        {
          "character": {
            "name": "Brayjay",
            "id": 225718325,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/57?namespace=dynamic-us"
              },
              "id": 57,
              "slug": "illidan"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/64?namespace=static-10.0.5_47621-us"
            },
            "name": "Frost",
            "id": 64
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/27?namespace=static-10.0.5_47621-us"
            },
            "name": "Nightborne",
            "id": 27
          },
          "equipped_item_level": 405
        },
        {
          "character": {
            "name": "Adaxion",
            "id": 234345345,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/1468?namespace=static-10.0.5_47621-us"
            },
            "name": "Preservation",
            "id": 1468
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/70?namespace=static-10.0.5_47621-us"
            },
            "name": "Dracthyr",
            "id": 70
          },
          "equipped_item_level": 406
        }
      ],
      "dungeon": {
        "key": {
          "href": "https://us.api.blizzard.com/data/wow/mythic-keystone/dungeon/200?namespace=dynamic-us"
        },
        "name": "Halls of Valor",
        "id": 200
      },
      "is_completed_within_time": false,
      "mythic_rating": {
        "color": {
          "r": 255,
          "g": 128,
          "b": 0,
          "a": 1.0
        },
        "rating": 143.63995
      },
      "map_rating": {
        "color": {
          "r": 255,
          "g": 128,
          "b": 0,
          "a": 1.0
        },
        "rating": 298.5891
      }
    },
    {
      "completed_timestamp": 1674956731000,
      "duration": 2214082,
      "keystone_level": 17,
      "keystone_affixes": [
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/10?namespace=static-10.0.5_47621-us"
          },
          "name": "Fortified",
          "id": 10
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/7?namespace=static-10.0.5_47621-us"
          },
          "name": "Bolstering",
          "id": 7
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/124?namespace=static-10.0.5_47621-us"
          },
          "name": "Storming",
          "id": 124
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/132?namespace=static-10.0.5_47621-us"
          },
          "name": "Thundering",
          "id": 132
        }
      ],
      "members": [
        {
          "character": {
            "name": "Karamoon",
            "id": 250910497,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/60?namespace=dynamic-us"
              },
              "id": 60,
              "slug": "stormrage"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/102?namespace=static-10.0.5_47621-us"
            },
            "name": "Balance",
            "id": 102
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/4?namespace=static-10.0.5_47621-us"
            },
            "name": "Night Elf",
            "id": 4
          },
          "equipped_item_level": 393
        },
        {
          "character": {
            "name": "Tydepod",
            "id": 190815746,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/60?namespace=dynamic-us"
              },
              "id": 60,
              "slug": "stormrage"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/73?namespace=static-10.0.5_47621-us"
            },
            "name": "Protection",
            "id": 73
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/29?namespace=static-10.0.5_47621-us"
            },
            "name": "Void Elf",
            "id": 29
          },
          "equipped_item_level": 405
        },
        {
          "character": {
            "name": "Cabas",
            "id": 170932104,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/60?namespace=dynamic-us"
              },
              "id": 60,
              "slug": "stormrage"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/72?namespace=static-10.0.5_47621-us"
            },
            "name": "Fury",
            "id": 72
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/11?namespace=static-10.0.5_47621-us"
            },
            "name": "Draenei",
            "id": 11
          },
          "equipped_item_level": 404
        },
        {
          "character": {
            "name": "Solvern",
            "id": 246055738,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/60?namespace=dynamic-us"
              },
              "id": 60,
              "slug": "stormrage"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/254?namespace=static-10.0.5_47621-us"
            },
            "name": "Marksmanship",
            "id": 254
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/4?namespace=static-10.0.5_47621-us"
            },
            "name": "Night Elf",
            "id": 4
          },
          "equipped_item_level": 409
        },
        {
          "character": {
            "name": "Adaxion",
            "id": 234345345,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/1468?namespace=static-10.0.5_47621-us"
            },
            "name": "Preservation",
            "id": 1468
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/70?namespace=static-10.0.5_47621-us"
            },
            "name": "Dracthyr",
            "id": 70
          },
          "equipped_item_level": 402
        }
      ],
      "dungeon": {
        "key": {
          "href": "https://us.api.blizzard.com/data/wow/mythic-keystone/dungeon/200?namespace=dynamic-us"
        },
        "name": "Halls of Valor",
        "id": 200
      },
      "is_completed_within_time": true,
      "mythic_rating": {
        "color": {
          "r": 255,
          "g": 128,
          "b": 0,
          "a": 1.0
        },
        "rating": 149.36139
      },
      "map_rating": {
        "color": {
          "r": 255,
          "g": 128,
          "b": 0,
          "a": 1.0
        },
        "rating": 298.5891
      }
    },
    {
      "completed_timestamp": 1674963639000,
      "duration": 1950815,
      "keystone_level": 16,
      "keystone_affixes": [
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/10?namespace=static-10.0.5_47621-us"
          },
          "name": "Fortified",
          "id": 10
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/7?namespace=static-10.0.5_47621-us"
          },
          "name": "Bolstering",
          "id": 7
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/124?namespace=static-10.0.5_47621-us"
          },
          "name": "Storming",
          "id": 124
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/132?namespace=static-10.0.5_47621-us"
          },
          "name": "Thundering",
          "id": 132
        }
      ],
      "members": [
        {
          "character": {
            "name": "Yaboyshagga",
            "id": 248816202,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/69?namespace=dynamic-us"
              },
              "id": 69,
              "slug": "arthas"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/73?namespace=static-10.0.5_47621-us"
            },
            "name": "Protection",
            "id": 73
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/10?namespace=static-10.0.5_47621-us"
            },
            "name": "Blood Elf",
            "id": 10
          },
          "equipped_item_level": 404
        },
        {
          "character": {
            "name": "Adaxion",
            "id": 234345345,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/1468?namespace=static-10.0.5_47621-us"
            },
            "name": "Preservation",
            "id": 1468
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/70?namespace=static-10.0.5_47621-us"
            },
            "name": "Dracthyr",
            "id": 70
          },
          "equipped_item_level": 402
        },
        {
          "character": {
            "name": "Doomshade",
            "id": 249207682,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/60?namespace=dynamic-us"
              },
              "id": 60,
              "slug": "stormrage"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/267?namespace=static-10.0.5_47621-us"
            },
            "name": "Destruction",
            "id": 267
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/1?namespace=static-10.0.5_47621-us"
            },
            "name": "Human",
            "id": 1
          },
          "equipped_item_level": 405
        },
        {
          "character": {
            "name": "Vûx",
            "id": 249463602,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/60?namespace=dynamic-us"
              },
              "id": 60,
              "slug": "stormrage"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/269?namespace=static-10.0.5_47621-us"
            },
            "name": "Windwalker",
            "id": 269
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/7?namespace=static-10.0.5_47621-us"
            },
            "name": "Gnome",
            "id": 7
          },
          "equipped_item_level": 405
        },
        {
          "character": {
            "name": "Evingor",
            "id": 194722340,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/162?namespace=dynamic-us"
              },
              "id": 162,
              "slug": "emerald-dream"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/261?namespace=static-10.0.5_47621-us"
            },
            "name": "Subtlety",
            "id": 261
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/10?namespace=static-10.0.5_47621-us"
            },
            "name": "Blood Elf",
            "id": 10
          },
          "equipped_item_level": 401
        }
      ],
      "dungeon": {
        "key": {
          "href": "https://us.api.blizzard.com/data/wow/mythic-keystone/dungeon/400?namespace=dynamic-us"
        },
        "name": "The Nokhud Offensive",
        "id": 400
      },
      "is_completed_within_time": true,
      "mythic_rating": {
        "color": {
          "r": 255,
          "g": 128,
          "b": 0,
          "a": 1.0
        },
        "rating": 144.33951
      },
      "map_rating": {
        "color": {
          "r": 255,
          "g": 128,
          "b": 0,
          "a": 1.0
        },
        "rating": 280.79675
      }
    },
    {
      "completed_timestamp": 1674970953000,
      "duration": 2250045,
      "keystone_level": 16,
      "keystone_affixes": [
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/10?namespace=static-10.0.5_47621-us"
          },
          "name": "Fortified",
          "id": 10
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/7?namespace=static-10.0.5_47621-us"
          },
          "name": "Bolstering",
          "id": 7
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/124?namespace=static-10.0.5_47621-us"
          },
          "name": "Storming",
          "id": 124
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/132?namespace=static-10.0.5_47621-us"
          },
          "name": "Thundering",
          "id": 132
        }
      ],
      "members": [
        {
          "character": {
            "name": "Precize",
            "id": 244641244,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/61?namespace=dynamic-us"
              },
              "id": 61,
              "slug": "zuljin"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/66?namespace=static-10.0.5_47621-us"
            },
            "name": "Protection",
            "id": 66
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/10?namespace=static-10.0.5_47621-us"
            },
            "name": "Blood Elf",
            "id": 10
          },
          "equipped_item_level": 401
        },
        {
          "character": {
            "name": "Adaxion",
            "id": 234345345,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/1468?namespace=static-10.0.5_47621-us"
            },
            "name": "Preservation",
            "id": 1468
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/70?namespace=static-10.0.5_47621-us"
            },
            "name": "Dracthyr",
            "id": 70
          },
          "equipped_item_level": 402
        },
        {
          "character": {
            "name": "Jump",
            "id": 175591090,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/11?namespace=dynamic-us"
              },
              "id": 11,
              "slug": "tichondrius"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/64?namespace=static-10.0.5_47621-us"
            },
            "name": "Frost",
            "id": 64
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/2?namespace=static-10.0.5_47621-us"
            },
            "name": "Orc",
            "id": 2
          },
          "equipped_item_level": 394
        },
        {
          "character": {
            "name": "Kaethon",
            "id": 180879481,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/60?namespace=dynamic-us"
              },
              "id": 60,
              "slug": "stormrage"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/577?namespace=static-10.0.5_47621-us"
            },
            "name": "Havoc",
            "id": 577
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/4?namespace=static-10.0.5_47621-us"
            },
            "name": "Night Elf",
            "id": 4
          },
          "equipped_item_level": 400
        },
        {
          "character": {
            "name": "Hayword",
            "id": 167281682,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/262?namespace=static-10.0.5_47621-us"
            },
            "name": "Elemental",
            "id": 262
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/2?namespace=static-10.0.5_47621-us"
            },
            "name": "Orc",
            "id": 2
          },
          "equipped_item_level": 403
        }
      ],
      "dungeon": {
        "key": {
          "href": "https://us.api.blizzard.com/data/wow/mythic-keystone/dungeon/401?namespace=dynamic-us"
        },
        "name": "The Azure Vault",
        "id": 401
      },
      "is_completed_within_time": false,
      "mythic_rating": {
        "color": {
          "r": 163,
          "g": 53,
          "b": 238,
          "a": 1.0
        },
        "rating": 135.71297
      },
      "map_rating": {
        "color": {
          "r": 255,
          "g": 128,
          "b": 0,
          "a": 1.0
        },
        "rating": 286.81458
      }
    },
    {
      "completed_timestamp": 1675625580000,
      "duration": 1758033,
      "keystone_level": 16,
      "keystone_affixes": [
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/9?namespace=static-10.0.5_47621-us"
          },
          "name": "Tyrannical",
          "id": 9
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/123?namespace=static-10.0.5_47621-us"
          },
          "name": "Spiteful",
          "id": 123
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/14?namespace=static-10.0.5_47621-us"
          },
          "name": "Quaking",
          "id": 14
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/132?namespace=static-10.0.5_47621-us"
          },
          "name": "Thundering",
          "id": 132
        }
      ],
      "members": [
        {
          "character": {
            "name": "Worgstabby",
            "id": 174524904,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1143?namespace=dynamic-us"
              },
              "id": 1143,
              "slug": "khaz-modan"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/259?namespace=static-10.0.5_47621-us"
            },
            "name": "Assassination",
            "id": 259
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/1?namespace=static-10.0.5_47621-us"
            },
            "name": "Human",
            "id": 1
          },
          "equipped_item_level": 409
        },
        {
          "character": {
            "name": "Mhosunwell",
            "id": 198515623,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/11?namespace=dynamic-us"
              },
              "id": 11,
              "slug": "tichondrius"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/66?namespace=static-10.0.5_47621-us"
            },
            "name": "Protection",
            "id": 66
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/10?namespace=static-10.0.5_47621-us"
            },
            "name": "Blood Elf",
            "id": 10
          },
          "equipped_item_level": 407
        },
        {
          "character": {
            "name": "Parentless",
            "id": 236536380,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/11?namespace=dynamic-us"
              },
              "id": 11,
              "slug": "tichondrius"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/577?namespace=static-10.0.5_47621-us"
            },
            "name": "Havoc",
            "id": 577
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/10?namespace=static-10.0.5_47621-us"
            },
            "name": "Blood Elf",
            "id": 10
          },
          "equipped_item_level": 403
        },
        {
          "character": {
            "name": "Adaxion",
            "id": 234345345,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/1468?namespace=static-10.0.5_47621-us"
            },
            "name": "Preservation",
            "id": 1468
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/70?namespace=static-10.0.5_47621-us"
            },
            "name": "Dracthyr",
            "id": 70
          },
          "equipped_item_level": 406
        },
        {
          "character": {
            "name": "Zarioh",
            "id": 190703551,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/76?namespace=dynamic-us"
              },
              "id": 76,
              "slug": "sargeras"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/269?namespace=static-10.0.5_47621-us"
            },
            "name": "Windwalker",
            "id": 269
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/29?namespace=static-10.0.5_47621-us"
            },
            "name": "Void Elf",
            "id": 29
          },
          "equipped_item_level": 403
        }
      ],
      "dungeon": {
        "key": {
          "href": "https://us.api.blizzard.com/data/wow/mythic-keystone/dungeon/401?namespace=dynamic-us"
        },
        "name": "The Azure Vault",
        "id": 401
      },
      "is_completed_within_time": true,
      "mythic_rating": {
        "color": {
          "r": 255,
          "g": 128,
          "b": 0,
          "a": 1.0
        },
        "rating": 143.72774
      },
      "map_rating": {
        "color": {
          "r": 255,
          "g": 128,
          "b": 0,
          "a": 1.0
        },
        "rating": 286.81458
      }
    },
    {
      "completed_timestamp": 1674877971000,
      "duration": 2581360,
      "keystone_level": 17,
      "keystone_affixes": [
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/10?namespace=static-10.0.5_47621-us"
          },
          "name": "Fortified",
          "id": 10
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/7?namespace=static-10.0.5_47621-us"
          },
          "name": "Bolstering",
          "id": 7
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/124?namespace=static-10.0.5_47621-us"
          },
          "name": "Storming",
          "id": 124
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/132?namespace=static-10.0.5_47621-us"
          },
          "name": "Thundering",
          "id": 132
        }
      ],
      "members": [
        {
          "character": {
            "name": "Juicyjerry",
            "id": 136756245,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/267?namespace=static-10.0.5_47621-us"
            },
            "name": "Destruction",
            "id": 267
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/2?namespace=static-10.0.5_47621-us"
            },
            "name": "Orc",
            "id": 2
          },
          "equipped_item_level": 401
        },
        {
          "character": {
            "name": "Darnak",
            "id": 116681103,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/252?namespace=static-10.0.5_47621-us"
            },
            "name": "Unholy",
            "id": 252
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/2?namespace=static-10.0.5_47621-us"
            },
            "name": "Orc",
            "id": 2
          },
          "equipped_item_level": 397
        },
        {
          "character": {
            "name": "Destructable",
            "id": 234779426,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/250?namespace=static-10.0.5_47621-us"
            },
            "name": "Blood",
            "id": 250
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/10?namespace=static-10.0.5_47621-us"
            },
            "name": "Blood Elf",
            "id": 10
          },
          "equipped_item_level": 401
        },
        {
          "character": {
            "name": "Auster",
            "id": 234601350,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/62?namespace=static-10.0.5_47621-us"
            },
            "name": "Arcane",
            "id": 62
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/10?namespace=static-10.0.5_47621-us"
            },
            "name": "Blood Elf",
            "id": 10
          },
          "equipped_item_level": 398
        },
        {
          "character": {
            "name": "Adaxion",
            "id": 234345345,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/1468?namespace=static-10.0.5_47621-us"
            },
            "name": "Preservation",
            "id": 1468
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/70?namespace=static-10.0.5_47621-us"
            },
            "name": "Dracthyr",
            "id": 70
          },
          "equipped_item_level": 402
        }
      ],
      "dungeon": {
        "key": {
          "href": "https://us.api.blizzard.com/data/wow/mythic-keystone/dungeon/210?namespace=dynamic-us"
        },
        "name": "Court of Stars",
        "id": 210
      },
      "is_completed_within_time": false,
      "mythic_rating": {
        "color": {
          "r": 255,
          "g": 255,
          "b": 255,
          "a": 0.0
        },
        "rating": 0.0
      },
      "map_rating": {
        "color": {
          "r": 255,
          "g": 128,
          "b": 0,
          "a": 1.0
        },
        "rating": 311.75772
      }
    },
    {
      "completed_timestamp": 1675544080000,
      "duration": 2327399,
      "keystone_level": 17,
      "keystone_affixes": [
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/9?namespace=static-10.0.5_47621-us"
          },
          "name": "Tyrannical",
          "id": 9
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/123?namespace=static-10.0.5_47621-us"
          },
          "name": "Spiteful",
          "id": 123
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/14?namespace=static-10.0.5_47621-us"
          },
          "name": "Quaking",
          "id": 14
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/132?namespace=static-10.0.5_47621-us"
          },
          "name": "Thundering",
          "id": 132
        }
      ],
      "members": [
        {
          "character": {
            "name": "Juicyjerry",
            "id": 136756245,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/266?namespace=static-10.0.5_47621-us"
            },
            "name": "Demonology",
            "id": 266
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/2?namespace=static-10.0.5_47621-us"
            },
            "name": "Orc",
            "id": 2
          },
          "equipped_item_level": 402
        },
        {
          "character": {
            "name": "Adaxion",
            "id": 234345345,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/1468?namespace=static-10.0.5_47621-us"
            },
            "name": "Preservation",
            "id": 1468
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/70?namespace=static-10.0.5_47621-us"
            },
            "name": "Dracthyr",
            "id": 70
          },
          "equipped_item_level": 406
        },
        {
          "character": {
            "name": "Precize",
            "id": 244641244,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/61?namespace=dynamic-us"
              },
              "id": 61,
              "slug": "zuljin"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/66?namespace=static-10.0.5_47621-us"
            },
            "name": "Protection",
            "id": 66
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/10?namespace=static-10.0.5_47621-us"
            },
            "name": "Blood Elf",
            "id": 10
          },
          "equipped_item_level": 406
        },
        {
          "character": {
            "name": "Akatsura",
            "id": 151281575,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/13?namespace=dynamic-us"
              },
              "id": 13,
              "slug": "doomhammer"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/577?namespace=static-10.0.5_47621-us"
            },
            "name": "Havoc",
            "id": 577
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/4?namespace=static-10.0.5_47621-us"
            },
            "name": "Night Elf",
            "id": 4
          },
          "equipped_item_level": 410
        },
        {
          "character": {
            "name": "Ragka",
            "id": 162732120,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/13?namespace=dynamic-us"
              },
              "id": 13,
              "slug": "doomhammer"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/72?namespace=static-10.0.5_47621-us"
            },
            "name": "Fury",
            "id": 72
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/3?namespace=static-10.0.5_47621-us"
            },
            "name": "Dwarf",
            "id": 3
          },
          "equipped_item_level": 403
        }
      ],
      "dungeon": {
        "key": {
          "href": "https://us.api.blizzard.com/data/wow/mythic-keystone/dungeon/402?namespace=dynamic-us"
        },
        "name": "Algeth'ar Academy",
        "id": 402
      },
      "is_completed_within_time": false,
      "mythic_rating": {
        "color": {
          "r": 255,
          "g": 128,
          "b": 0,
          "a": 1.0
        },
        "rating": 141.34766
      },
      "map_rating": {
        "color": {
          "r": 255,
          "g": 128,
          "b": 0,
          "a": 1.0
        },
        "rating": 280.484
      }
    },
    {
      "completed_timestamp": 1675034367000,
      "duration": 1882219,
      "keystone_level": 17,
      "keystone_affixes": [
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/10?namespace=static-10.0.5_47621-us"
          },
          "name": "Fortified",
          "id": 10
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/7?namespace=static-10.0.5_47621-us"
          },
          "name": "Bolstering",
          "id": 7
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/124?namespace=static-10.0.5_47621-us"
          },
          "name": "Storming",
          "id": 124
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/132?namespace=static-10.0.5_47621-us"
          },
          "name": "Thundering",
          "id": 132
        }
      ],
      "members": [
        {
          "character": {
            "name": "Adaxion",
            "id": 234345345,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/1468?namespace=static-10.0.5_47621-us"
            },
            "name": "Preservation",
            "id": 1468
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/70?namespace=static-10.0.5_47621-us"
            },
            "name": "Dracthyr",
            "id": 70
          },
          "equipped_item_level": 402
        },
        {
          "character": {
            "name": "Hadron",
            "id": 250980683,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/60?namespace=dynamic-us"
              },
              "id": 60,
              "slug": "stormrage"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/72?namespace=static-10.0.5_47621-us"
            },
            "name": "Fury",
            "id": 72
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/4?namespace=static-10.0.5_47621-us"
            },
            "name": "Night Elf",
            "id": 4
          },
          "equipped_item_level": 403
        },
        {
          "character": {
            "name": "Asstaa",
            "id": 226700484,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/59?namespace=dynamic-us"
              },
              "id": 59,
              "slug": "malganis"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/252?namespace=static-10.0.5_47621-us"
            },
            "name": "Unholy",
            "id": 252
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/2?namespace=static-10.0.5_47621-us"
            },
            "name": "Orc",
            "id": 2
          },
          "equipped_item_level": 405
        },
        {
          "character": {
            "name": "Dentyo",
            "id": 241041773,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/61?namespace=dynamic-us"
              },
              "id": 61,
              "slug": "zuljin"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/266?namespace=static-10.0.5_47621-us"
            },
            "name": "Demonology",
            "id": 266
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/9?namespace=static-10.0.5_47621-us"
            },
            "name": "Goblin",
            "id": 9
          },
          "equipped_item_level": 405
        },
        {
          "character": {
            "name": "Precize",
            "id": 244641244,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/61?namespace=dynamic-us"
              },
              "id": 61,
              "slug": "zuljin"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/66?namespace=static-10.0.5_47621-us"
            },
            "name": "Protection",
            "id": 66
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/10?namespace=static-10.0.5_47621-us"
            },
            "name": "Blood Elf",
            "id": 10
          },
          "equipped_item_level": 401
        }
      ],
      "dungeon": {
        "key": {
          "href": "https://us.api.blizzard.com/data/wow/mythic-keystone/dungeon/2?namespace=dynamic-us"
        },
        "name": "Temple of the Jade Serpent",
        "id": 2
      },
      "is_completed_within_time": false,
      "mythic_rating": {
        "color": {
          "r": 255,
          "g": 128,
          "b": 0,
          "a": 1.0
        },
        "rating": 143.42903
      },
      "map_rating": {
        "color": {
          "r": 255,
          "g": 128,
          "b": 0,
          "a": 1.0
        },
        "rating": 296.15704
      }
    },
    {
      "completed_timestamp": 1675039479000,
      "duration": 1624316,
      "keystone_level": 15,
      "keystone_affixes": [
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/10?namespace=static-10.0.5_47621-us"
          },
          "name": "Fortified",
          "id": 10
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/7?namespace=static-10.0.5_47621-us"
          },
          "name": "Bolstering",
          "id": 7
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/124?namespace=static-10.0.5_47621-us"
          },
          "name": "Storming",
          "id": 124
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/132?namespace=static-10.0.5_47621-us"
          },
          "name": "Thundering",
          "id": 132
        }
      ],
      "members": [
        {
          "character": {
            "name": "Precize",
            "id": 244641244,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/61?namespace=dynamic-us"
              },
              "id": 61,
              "slug": "zuljin"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/66?namespace=static-10.0.5_47621-us"
            },
            "name": "Protection",
            "id": 66
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/10?namespace=static-10.0.5_47621-us"
            },
            "name": "Blood Elf",
            "id": 10
          },
          "equipped_item_level": 401
        },
        {
          "character": {
            "name": "Adaxion",
            "id": 234345345,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/1468?namespace=static-10.0.5_47621-us"
            },
            "name": "Preservation",
            "id": 1468
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/70?namespace=static-10.0.5_47621-us"
            },
            "name": "Dracthyr",
            "id": 70
          },
          "equipped_item_level": 402
        },
        {
          "character": {
            "name": "Hadron",
            "id": 250980683,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/60?namespace=dynamic-us"
              },
              "id": 60,
              "slug": "stormrage"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/72?namespace=static-10.0.5_47621-us"
            },
            "name": "Fury",
            "id": 72
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/4?namespace=static-10.0.5_47621-us"
            },
            "name": "Night Elf",
            "id": 4
          },
          "equipped_item_level": 403
        },
        {
          "character": {
            "name": "Cheegee",
            "id": 234688651,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/269?namespace=static-10.0.5_47621-us"
            },
            "name": "Windwalker",
            "id": 269
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/2?namespace=static-10.0.5_47621-us"
            },
            "name": "Orc",
            "id": 2
          },
          "equipped_item_level": 401
        },
        {
          "character": {
            "name": "Yakuza",
            "id": 178025913,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/121?namespace=dynamic-us"
              },
              "id": 121,
              "slug": "azjolnerub"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/260?namespace=static-10.0.5_47621-us"
            },
            "name": "Outlaw",
            "id": 260
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/1?namespace=static-10.0.5_47621-us"
            },
            "name": "Human",
            "id": 1
          },
          "equipped_item_level": 399
        }
      ],
      "dungeon": {
        "key": {
          "href": "https://us.api.blizzard.com/data/wow/mythic-keystone/dungeon/402?namespace=dynamic-us"
        },
        "name": "Algeth'ar Academy",
        "id": 402
      },
      "is_completed_within_time": true,
      "mythic_rating": {
        "color": {
          "r": 163,
          "g": 53,
          "b": 238,
          "a": 1.0
        },
        "rating": 136.92503
      },
      "map_rating": {
        "color": {
          "r": 255,
          "g": 128,
          "b": 0,
          "a": 1.0
        },
        "rating": 280.484
      }
    },
    {
      "completed_timestamp": 1675627708000,
      "duration": 1718359,
      "keystone_level": 18,
      "keystone_affixes": [
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/9?namespace=static-10.0.5_47621-us"
          },
          "name": "Tyrannical",
          "id": 9
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/123?namespace=static-10.0.5_47621-us"
          },
          "name": "Spiteful",
          "id": 123
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/14?namespace=static-10.0.5_47621-us"
          },
          "name": "Quaking",
          "id": 14
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/132?namespace=static-10.0.5_47621-us"
          },
          "name": "Thundering",
          "id": 132
        }
      ],
      "members": [
        {
          "character": {
            "name": "Garrisondorf",
            "id": 233006481,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/59?namespace=dynamic-us"
              },
              "id": 59,
              "slug": "malganis"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/251?namespace=static-10.0.5_47621-us"
            },
            "name": "Frost",
            "id": 251
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/10?namespace=static-10.0.5_47621-us"
            },
            "name": "Blood Elf",
            "id": 10
          },
          "equipped_item_level": 409
        },
        {
          "character": {
            "name": "Pahp",
            "id": 185917900,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/57?namespace=dynamic-us"
              },
              "id": 57,
              "slug": "illidan"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/73?namespace=static-10.0.5_47621-us"
            },
            "name": "Protection",
            "id": 73
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/6?namespace=static-10.0.5_47621-us"
            },
            "name": "Tauren",
            "id": 6
          },
          "equipped_item_level": 412
        },
        {
          "character": {
            "name": "Adaxion",
            "id": 234345345,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/1468?namespace=static-10.0.5_47621-us"
            },
            "name": "Preservation",
            "id": 1468
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/70?namespace=static-10.0.5_47621-us"
            },
            "name": "Dracthyr",
            "id": 70
          },
          "equipped_item_level": 406
        },
        {
          "character": {
            "name": "Neighbor",
            "id": 219176514,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/57?namespace=dynamic-us"
              },
              "id": 57,
              "slug": "illidan"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/71?namespace=static-10.0.5_47621-us"
            },
            "name": "Arms",
            "id": 71
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/31?namespace=static-10.0.5_47621-us"
            },
            "name": "Zandalari Troll",
            "id": 31
          },
          "equipped_item_level": 411
        },
        {
          "character": {
            "name": "Maphestro",
            "id": 214240840,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/57?namespace=dynamic-us"
              },
              "id": 57,
              "slug": "illidan"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/266?namespace=static-10.0.5_47621-us"
            },
            "name": "Demonology",
            "id": 266
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/2?namespace=static-10.0.5_47621-us"
            },
            "name": "Orc",
            "id": 2
          },
          "equipped_item_level": 412
        }
      ],
      "dungeon": {
        "key": {
          "href": "https://us.api.blizzard.com/data/wow/mythic-keystone/dungeon/210?namespace=dynamic-us"
        },
        "name": "Court of Stars",
        "id": 210
      },
      "is_completed_within_time": true,
      "mythic_rating": {
        "color": {
          "r": 255,
          "g": 128,
          "b": 0,
          "a": 1.0
        },
        "rating": 156.56696
      },
      "map_rating": {
        "color": {
          "r": 255,
          "g": 128,
          "b": 0,
          "a": 1.0
        },
        "rating": 311.75772
      }
    },
    {
      "completed_timestamp": 1675506590000,
      "duration": 1776394,
      "keystone_level": 17,
      "keystone_affixes": [
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/9?namespace=static-10.0.5_47621-us"
          },
          "name": "Tyrannical",
          "id": 9
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/123?namespace=static-10.0.5_47621-us"
          },
          "name": "Spiteful",
          "id": 123
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/14?namespace=static-10.0.5_47621-us"
          },
          "name": "Quaking",
          "id": 14
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/132?namespace=static-10.0.5_47621-us"
          },
          "name": "Thundering",
          "id": 132
        }
      ],
      "members": [
        {
          "character": {
            "name": "Tamki",
            "id": 174642036,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/3209?namespace=dynamic-us"
              },
              "id": 3209,
              "slug": "azralon"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/581?namespace=static-10.0.5_47621-us"
            },
            "name": "Vengeance",
            "id": 581
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/10?namespace=static-10.0.5_47621-us"
            },
            "name": "Blood Elf",
            "id": 10
          },
          "equipped_item_level": 411
        },
        {
          "character": {
            "name": "Adaxion",
            "id": 234345345,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/1468?namespace=static-10.0.5_47621-us"
            },
            "name": "Preservation",
            "id": 1468
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/70?namespace=static-10.0.5_47621-us"
            },
            "name": "Dracthyr",
            "id": 70
          },
          "equipped_item_level": 406
        },
        {
          "character": {
            "name": "Utherpally",
            "id": 167671462,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/3725?namespace=dynamic-us"
              },
              "id": 3725,
              "slug": "frostmourne"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/70?namespace=static-10.0.5_47621-us"
            },
            "name": "Retribution",
            "id": 70
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/1?namespace=static-10.0.5_47621-us"
            },
            "name": "Human",
            "id": 1
          },
          "equipped_item_level": 407
        },
        {
          "character": {
            "name": "Imstat",
            "id": 180655825,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/102?namespace=static-10.0.5_47621-us"
            },
            "name": "Balance",
            "id": 102
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/8?namespace=static-10.0.5_47621-us"
            },
            "name": "Troll",
            "id": 8
          },
          "equipped_item_level": 404
        },
        {
          "character": {
            "name": "Rpatato",
            "id": 201748788,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/3723?namespace=dynamic-us"
              },
              "id": 3723,
              "slug": "barthilas"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/253?namespace=static-10.0.5_47621-us"
            },
            "name": "Beast Mastery",
            "id": 253
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/9?namespace=static-10.0.5_47621-us"
            },
            "name": "Goblin",
            "id": 9
          },
          "equipped_item_level": 407
        }
      ],
      "dungeon": {
        "key": {
          "href": "https://us.api.blizzard.com/data/wow/mythic-keystone/dungeon/2?namespace=dynamic-us"
        },
        "name": "Temple of the Jade Serpent",
        "id": 2
      },
      "is_completed_within_time": true,
      "mythic_rating": {
        "color": {
          "r": 255,
          "g": 128,
          "b": 0,
          "a": 1.0
        },
        "rating": 149.16393
      },
      "map_rating": {
        "color": {
          "r": 255,
          "g": 128,
          "b": 0,
          "a": 1.0
        },
        "rating": 296.15704
      }
    },
    {
      "completed_timestamp": 1675575136000,
      "duration": 1993186,
      "keystone_level": 15,
      "keystone_affixes": [
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/9?namespace=static-10.0.5_47621-us"
          },
          "name": "Tyrannical",
          "id": 9
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/123?namespace=static-10.0.5_47621-us"
          },
          "name": "Spiteful",
          "id": 123
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/14?namespace=static-10.0.5_47621-us"
          },
          "name": "Quaking",
          "id": 14
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/132?namespace=static-10.0.5_47621-us"
          },
          "name": "Thundering",
          "id": 132
        }
      ],
      "members": [
        {
          "character": {
            "name": "Baekon",
            "id": 148066120,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/581?namespace=static-10.0.5_47621-us"
            },
            "name": "Vengeance",
            "id": 581
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/10?namespace=static-10.0.5_47621-us"
            },
            "name": "Blood Elf",
            "id": 10
          },
          "equipped_item_level": 397
        },
        {
          "character": {
            "name": "Adaxion",
            "id": 234345345,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/1468?namespace=static-10.0.5_47621-us"
            },
            "name": "Preservation",
            "id": 1468
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/70?namespace=static-10.0.5_47621-us"
            },
            "name": "Dracthyr",
            "id": 70
          },
          "equipped_item_level": 406
        },
        {
          "character": {
            "name": "Scumtotem",
            "id": 116365879,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/263?namespace=static-10.0.5_47621-us"
            },
            "name": "Enhancement",
            "id": 263
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/9?namespace=static-10.0.5_47621-us"
            },
            "name": "Goblin",
            "id": 9
          },
          "equipped_item_level": 379
        },
        {
          "character": {
            "name": "Korghan",
            "id": 116532500,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/71?namespace=static-10.0.5_47621-us"
            },
            "name": "Arms",
            "id": 71
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/36?namespace=static-10.0.5_47621-us"
            },
            "name": "Mag'har Orc",
            "id": 36
          },
          "equipped_item_level": 393
        },
        {
          "character": {
            "name": "Phunkstarz",
            "id": 175739996,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/72?namespace=static-10.0.5_47621-us"
            },
            "name": "Fury",
            "id": 72
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/31?namespace=static-10.0.5_47621-us"
            },
            "name": "Zandalari Troll",
            "id": 31
          },
          "equipped_item_level": 383
        }
      ],
      "dungeon": {
        "key": {
          "href": "https://us.api.blizzard.com/data/wow/mythic-keystone/dungeon/165?namespace=dynamic-us"
        },
        "name": "Shadowmoon Burial Grounds",
        "id": 165
      },
      "is_completed_within_time": false,
      "mythic_rating": {
        "color": {
          "r": 163,
          "g": 53,
          "b": 238,
          "a": 1.0
        },
        "rating": 129.91675
      },
      "map_rating": {
        "color": {
          "r": 255,
          "g": 128,
          "b": 0,
          "a": 1.0
        },
        "rating": 301.92255
      }
    },
    {
      "completed_timestamp": 1674977683000,
      "duration": 1381352,
      "keystone_level": 17,
      "keystone_affixes": [
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/10?namespace=static-10.0.5_47621-us"
          },
          "name": "Fortified",
          "id": 10
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/7?namespace=static-10.0.5_47621-us"
          },
          "name": "Bolstering",
          "id": 7
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/124?namespace=static-10.0.5_47621-us"
          },
          "name": "Storming",
          "id": 124
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/132?namespace=static-10.0.5_47621-us"
          },
          "name": "Thundering",
          "id": 132
        }
      ],
      "members": [
        {
          "character": {
            "name": "Yacthzee",
            "id": 229382951,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/254?namespace=static-10.0.5_47621-us"
            },
            "name": "Marksmanship",
            "id": 254
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/10?namespace=static-10.0.5_47621-us"
            },
            "name": "Blood Elf",
            "id": 10
          },
          "equipped_item_level": 405
        },
        {
          "character": {
            "name": "Adaxion",
            "id": 234345345,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/1468?namespace=static-10.0.5_47621-us"
            },
            "name": "Preservation",
            "id": 1468
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/70?namespace=static-10.0.5_47621-us"
            },
            "name": "Dracthyr",
            "id": 70
          },
          "equipped_item_level": 402
        },
        {
          "character": {
            "name": "Tumidickit",
            "id": 215435404,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/70?namespace=static-10.0.5_47621-us"
            },
            "name": "Retribution",
            "id": 70
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/10?namespace=static-10.0.5_47621-us"
            },
            "name": "Blood Elf",
            "id": 10
          },
          "equipped_item_level": 407
        },
        {
          "character": {
            "name": "Rezillo",
            "id": 237449694,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/61?namespace=dynamic-us"
              },
              "id": 61,
              "slug": "zuljin"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/71?namespace=static-10.0.5_47621-us"
            },
            "name": "Arms",
            "id": 71
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/10?namespace=static-10.0.5_47621-us"
            },
            "name": "Blood Elf",
            "id": 10
          },
          "equipped_item_level": 401
        },
        {
          "character": {
            "name": "Vvinrawr",
            "id": 231040947,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/73?namespace=static-10.0.5_47621-us"
            },
            "name": "Protection",
            "id": 73
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/10?namespace=static-10.0.5_47621-us"
            },
            "name": "Blood Elf",
            "id": 10
          },
          "equipped_item_level": 408
        }
      ],
      "dungeon": {
        "key": {
          "href": "https://us.api.blizzard.com/data/wow/mythic-keystone/dungeon/165?namespace=dynamic-us"
        },
        "name": "Shadowmoon Burial Grounds",
        "id": 165
      },
      "is_completed_within_time": true,
      "mythic_rating": {
        "color": {
          "r": 255,
          "g": 128,
          "b": 0,
          "a": 1.0
        },
        "rating": 152.77934
      },
      "map_rating": {
        "color": {
          "r": 255,
          "g": 128,
          "b": 0,
          "a": 1.0
        },
        "rating": 301.92255
      }
    },
    {
      "completed_timestamp": 1675659806000,
      "duration": 3410958,
      "keystone_level": 18,
      "keystone_affixes": [
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/9?namespace=static-10.0.5_47621-us"
          },
          "name": "Tyrannical",
          "id": 9
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/123?namespace=static-10.0.5_47621-us"
          },
          "name": "Spiteful",
          "id": 123
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/14?namespace=static-10.0.5_47621-us"
          },
          "name": "Quaking",
          "id": 14
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/132?namespace=static-10.0.5_47621-us"
          },
          "name": "Thundering",
          "id": 132
        }
      ],
      "members": [
        {
          "character": {
            "name": "Adaxion",
            "id": 234345345,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/1468?namespace=static-10.0.5_47621-us"
            },
            "name": "Preservation",
            "id": 1468
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/70?namespace=static-10.0.5_47621-us"
            },
            "name": "Dracthyr",
            "id": 70
          },
          "equipped_item_level": 406
        },
        {
          "character": {
            "name": "Precize",
            "id": 244641244,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/61?namespace=dynamic-us"
              },
              "id": 61,
              "slug": "zuljin"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/66?namespace=static-10.0.5_47621-us"
            },
            "name": "Protection",
            "id": 66
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/10?namespace=static-10.0.5_47621-us"
            },
            "name": "Blood Elf",
            "id": 10
          },
          "equipped_item_level": 406
        },
        {
          "character": {
            "name": "Jhinra",
            "id": 233603779,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/269?namespace=static-10.0.5_47621-us"
            },
            "name": "Windwalker",
            "id": 269
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/7?namespace=static-10.0.5_47621-us"
            },
            "name": "Gnome",
            "id": 7
          },
          "equipped_item_level": 402
        },
        {
          "character": {
            "name": "Jonboyy",
            "id": 203805303,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/57?namespace=dynamic-us"
              },
              "id": 57,
              "slug": "illidan"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/266?namespace=static-10.0.5_47621-us"
            },
            "name": "Demonology",
            "id": 266
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/2?namespace=static-10.0.5_47621-us"
            },
            "name": "Orc",
            "id": 2
          },
          "equipped_item_level": 413
        },
        {
          "character": {
            "name": "Klêd",
            "id": 230375458,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/11?namespace=dynamic-us"
              },
              "id": 11,
              "slug": "tichondrius"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/253?namespace=static-10.0.5_47621-us"
            },
            "name": "Beast Mastery",
            "id": 253
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/35?namespace=static-10.0.5_47621-us"
            },
            "name": "Vulpera",
            "id": 35
          },
          "equipped_item_level": 412
        }
      ],
      "dungeon": {
        "key": {
          "href": "https://us.api.blizzard.com/data/wow/mythic-keystone/dungeon/399?namespace=dynamic-us"
        },
        "name": "Ruby Life Pools",
        "id": 399
      },
      "is_completed_within_time": false,
      "mythic_rating": {
        "color": {
          "r": 255,
          "g": 255,
          "b": 255,
          "a": 0.0
        },
        "rating": 0.0
      },
      "map_rating": {
        "color": {
          "r": 163,
          "g": 53,
          "b": 238,
          "a": 1.0
        },
        "rating": 267.43018
      }
    },
    {
      "completed_timestamp": 1674861891000,
      "duration": 1735119,
      "keystone_level": 15,
      "keystone_affixes": [
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/10?namespace=static-10.0.5_47621-us"
          },
          "name": "Fortified",
          "id": 10
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/7?namespace=static-10.0.5_47621-us"
          },
          "name": "Bolstering",
          "id": 7
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/124?namespace=static-10.0.5_47621-us"
          },
          "name": "Storming",
          "id": 124
        },
        {
          "key": {
            "href": "https://us.api.blizzard.com/data/wow/keystone-affix/132?namespace=static-10.0.5_47621-us"
          },
          "name": "Thundering",
          "id": 132
        }
      ],
      "members": [
        {
          "character": {
            "name": "Spreadout",
            "id": 234876321,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/263?namespace=static-10.0.5_47621-us"
            },
            "name": "Enhancement",
            "id": 263
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/2?namespace=static-10.0.5_47621-us"
            },
            "name": "Orc",
            "id": 2
          },
          "equipped_item_level": 399
        },
        {
          "character": {
            "name": "Eiffel",
            "id": 232306399,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/103?namespace=static-10.0.5_47621-us"
            },
            "name": "Feral",
            "id": 103
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/6?namespace=static-10.0.5_47621-us"
            },
            "name": "Tauren",
            "id": 6
          },
          "equipped_item_level": 400
        },
        {
          "character": {
            "name": "Ninjitaa",
            "id": 232752997,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/269?namespace=static-10.0.5_47621-us"
            },
            "name": "Windwalker",
            "id": 269
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/2?namespace=static-10.0.5_47621-us"
            },
            "name": "Orc",
            "id": 2
          },
          "equipped_item_level": 401
        },
        {
          "character": {
            "name": "Zzwaard",
            "id": 169908775,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/5?namespace=dynamic-us"
              },
              "id": 5,
              "slug": "proudmoore"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/104?namespace=static-10.0.5_47621-us"
            },
            "name": "Guardian",
            "id": 104
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/4?namespace=static-10.0.5_47621-us"
            },
            "name": "Night Elf",
            "id": 4
          },
          "equipped_item_level": 401
        },
        {
          "character": {
            "name": "Adaxion",
            "id": 234345345,
            "realm": {
              "key": {
                "href": "https://us.api.blizzard.com/data/wow/realm/1566?namespace=dynamic-us"
              },
              "id": 1566,
              "slug": "area-52"
            }
          },
          "specialization": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-specialization/1468?namespace=static-10.0.5_47621-us"
            },
            "name": "Preservation",
            "id": 1468
          },
          "race": {
            "key": {
              "href": "https://us.api.blizzard.com/data/wow/playable-race/70?namespace=static-10.0.5_47621-us"
            },
            "name": "Dracthyr",
            "id": 70
          },
          "equipped_item_level": 402
        }
      ],
      "dungeon": {
        "key": {
          "href": "https://us.api.blizzard.com/data/wow/mythic-keystone/dungeon/399?namespace=dynamic-us"
        },
        "name": "Ruby Life Pools",
        "id": 399
      },
      "is_completed_within_time": true,
      "mythic_rating": {
        "color": {
          "r": 163,
          "g": 53,
          "b": 238,
          "a": 1.0
        },
        "rating": 135.45056
      },
      "map_rating": {
        "color": {
          "r": 163,
          "g": 53,
          "b": 238,
          "a": 1.0
        },
        "rating": 267.43018
      }
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
  "mythic_rating": {
    "color": {
      "r": 163,
      "g": 53,
      "b": 238,
      "a": 1.0
    },
    "rating": 2323.952
  }
}
JSON;
    }

}
