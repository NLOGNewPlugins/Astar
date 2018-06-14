<?php
/**
 * Created by PhpStorm.
 * User: NLOG
 * Date: 2018-06-11
 * Time: 오후 9:02
 */

namespace nlog\CustomItem\items;


use nlog\CustomItem\utils\CustomItemUtils;
use pocketmine\item\Tool;
use pocketmine\Player;

abstract class CustomWeapon extends Tool {

    public const GRADE_RARE = 0;
    public const GRADE_UNIQUE = 1;
    public const GRADE_LEGENDARY = 2;
    public const GRADE_EPIC = 3;

    /** 등급 */
    abstract public function getGrade(): int;

    /** 데미지 */
    abstract public function getDefaultDamage(): int;

    /** 추가 데미지 n퍼센트 */
    abstract public function getAdditionalDamage(): int;

    /** 공격 시 데미지 추가량  */
    abstract public function getExtraDamage(): int;

    /** 힘 */
    abstract public function getPower(): int;

    public final function applyDamage(int $amount): bool {
        return true;
    }

}