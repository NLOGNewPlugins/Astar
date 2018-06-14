<?php
/**
 * Created by PhpStorm.
 * User: NLOG
 * Date: 2018-06-13
 * Time: 오후 7:10
 */

namespace nlog\CustomItem\items;

use nlog\CustomItem\Loader;


/**
 * Class SpearSword
 * @package nlog\CustomItem\items
 *
 * 창성의 구원자-검
 */
class ChangSung extends CustomWeapon {

    public function getGrade(): int {
        return self::GRADE_EPIC;
    }

    public function getDefaultDamage(): int {
        return 8;
    }

    public function getAdditionalDamage(): int {
        return 40;
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