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
 * 진:무신의 기운이 담긴 그레이트 소드
 */
class MusinGreatSword extends CustomWeapon {

    public function getWeaponName(): int {
        return "진:무신의 기운이 담긴 그레이트 소드";
    }

    public function getGrade(): int {
        return ItemGrade::GRADE_EPIC;
    }

    public function getDefaultDamage(): int {
        return 8;
    }

    public function getAdditionalDamage(): int {
        return 0;
    }

    public function getPower(): int {
        return 75;
    }

    public function getExtraDamage(): int {
        return 18;
    }

    public function getMaxDurability(): int {
        return Loader::WEAPON_Durability;
    }
}