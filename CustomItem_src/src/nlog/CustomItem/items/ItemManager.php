<?php
/**
 * Created by PhpStorm.
 * User: NLOG
 * Date: 2018-06-14
 * Time: 오후 10:05
 */

namespace nlog\CustomItem\items;


class ItemManager {

    private function __construct() {
    }

    /** @var CustomWeapon[] */
    private static $weapons = [];

    /** @var CustomArmor[] */
    private static $armors = [];

    public static function registerWeapon(CustomWeapon $weapon) {
        self::$weapons[$weapon->getId() . ":" . $weapon->getDamage()] = clone $weapon;
    }

    public static function registerArmor(CustomArmor $armor) {
        self::$armors[$armor->getId() . ":" . $armor->getDamage()] = clone $armor;
    }

    public static function getCustomItemByCode(int $id, int $dmg = 0) {
        return self::$weapons[$id . ":" . $dmg] ?? (self::$armors[$id . ":" . $dmg] ?? null);
    }

}