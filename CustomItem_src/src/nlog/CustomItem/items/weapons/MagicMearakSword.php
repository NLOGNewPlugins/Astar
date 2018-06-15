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
 * 마법의 메라크
 */
class MagicMearakSword extends CustomWeapon {

    public function getWeaponName(): int {
        return "마법의 메라크";
    }

    public function getGrade(): int {
        return ItemGrade::GRADE_RARE;
    }

    public function getDefaultDamage(): int {
        return 5;
    }

    public function getAdditionalDamage(): int {
        return 0;
    }

    public function getPower(): int {
        return 63;
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