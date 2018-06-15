<?php
/**
 * Created by PhpStorm.
 * User: NLOG
 * Date: 2018-06-15
 * Time: 오후 7:34
 */

namespace nlog\CustomItem\items;


class ItemGrade {

    public const GRADE_RARE = 0;
    public const GRADE_UNIQUE = 1;
    public const GRADE_LEGENDARY = 2;
    public const GRADE_EPIC = 3;

    public static function getPrefixByGrade(int $grade): string {
        switch ($grade) {
            case self::GRADE_RARE:
                return "§5";
            case self::GRADE_UNIQUE:
                return "§d";
            case self::GRADE_LEGENDARY:
                return "§6";
            case self::GRADE_EPIC:
                return "§e";
            default:
                return "";
        }
    }

}