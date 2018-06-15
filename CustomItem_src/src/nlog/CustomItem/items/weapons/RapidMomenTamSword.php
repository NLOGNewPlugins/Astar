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
 * 레피드 모멘텀
 */
class RapidMomenTamSword extends CustomWeapon {

    public function getWeaponName(): int {
        return "레피드 모멘텀";
    }

    public function getGrade(): int {
        return ItemGrade::GRADE_UNIQUE;
    }

    public function getDefaultDamage(): int {
        return 6;
    }

    public function getAdditionalDamage(): int {
        return 0;
    }

    public function getPower(): int {
        return 67;
    }

    public function getExtraDamage(): int {
        return 0;
    }

    public function getMaxDurability(): int {
        return Loader::WEAPON_Durability;
    }

    public function getCriticalPercent(): int {
        return 0;
    }
}