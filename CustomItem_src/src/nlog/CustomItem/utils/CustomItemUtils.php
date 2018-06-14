<?php
/**
 * Created by PhpStorm.
 * User: NLOG
 * Date: 2018-06-11
 * Time: 오후 9:09
 */

namespace nlog\CustomItem\utils;


use nlog\CustomItem\items\CustomArmor;
use pocketmine\Player;

class CustomItemUtils {

    public static function getSumMath(int $default, int $int1, int $int2 = 0) {
        return (1 + $int1 + $int2) * $default;
    }

    public static function getMultiplicationMath(int $default, int $int1, int $int2 = 0) {
        return (1 + $int1) * (1 + $int2) * $default;
    }

    public static function getArmorPower(Player $player): int{
        $armorInv = $player->getArmorInventory();
        /** @var CustomArmor $head */
        /** @var CustomArmor $chest */
        /** @var CustomArmor $leng */
        /** @var CustomArmor $boot */
        $dmg = ($head = $armorInv->getHelmet()) instanceof CustomArmor ? $head->getPower() : 0;
        $dmg += ($chest = $armorInv->getChestplate()) instanceof CustomArmor ? $chest->getPower() : 0;
        $dmg += ($leng = $armorInv->getLeggings()) instanceof CustomArmor ? $leng->getPower() : 0;
        $dmg += ($leng = $armorInv->getBoots()) instanceof CustomArmor ? $leng->getPower() : 0;

        return $dmg;
    }

}