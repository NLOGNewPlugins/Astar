<?php
/**
 * Created by PhpStorm.
 * User: NLOG
 * Date: 2018-06-11
 * Time: 오후 9:02
 */

namespace nlog\CustomItem\items;


use nlog\CustomItem\utils\CustomItemUtils;
use pocketmine\item\Armor;
use pocketmine\item\Tool;

abstract class CustomArmor extends Armor {

    public const GRADE_RARE = 0;
    public const GRADE_UNIQUE = 1;
    public const GRADE_LEGENDARY = 2;
    public const GRADE_EPIC = 3;

    /** 등급 */
    abstract public function getGrade(): int;

    /** 힘 (무기 힘에 추가) */
    abstract public function getPower(): int;

}