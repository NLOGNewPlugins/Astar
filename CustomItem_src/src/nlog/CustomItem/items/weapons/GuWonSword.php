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
 * 구원의 이기-검
 */
class GuWonSword extends CustomWeapon {

    public function getWeaponName(): int {
        return "구원의 이기-검";
    }

    public function getGrade(): int {
        return ItemGrade::GRADE_EPIC;
    }

    public function getDefaultDamage(): int {
        return 8;
    }

    public function getAdditionalDamage(): int {
        return 35;
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