<?php
/**
 * Created by PhpStorm.
 * User: NLOG
 * Date: 2018-06-13
 * Time: 오후 7:10
 */

namespace nlog\CustomItem\items\weapons;

use nlog\CustomItem\items\CustomWeapon;
use nlog\CustomItem\items\ItemGrade;
use nlog\CustomItem\Loader;


/**
 * 성검:엑스칼리버
 */
class XKalibarSword extends CustomWeapon {

    public function getWeaponName(): int {
        return "성검:엑스칼리버";
    }

    public function getGrade(): int {
        return ItemGrade::GRADE_EPIC;
    }

    public function getDefaultDamage(): int {
        return 8;
    }

    public function getAdditionalDamage(): int {
        return 18;
    }

    public function getPower(): int {
        return 75;
    }

    public function getExtraDamage(): int {
        return 0;
    }

    public function getMaxDurability(): int {
        return Loader::WEAPON_Durability;
    }
}