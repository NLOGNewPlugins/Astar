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

    public function __construct(int $id, int $meta = 0) {
        parent::__construct($id, $meta, $this->getCustomName());
    }

    /** 등급 */
    abstract public function getGrade(): int;

    /** 등급 */
    abstract public function getWeaponName(): int;

    /** 데미지 */
    abstract public function getDefaultDamage(): int;

    /** 추가 데미지 n퍼센트 */
    abstract public function getAdditionalDamage(): int;

    /** 공격 시 데미지 추가량  */
    abstract public function getExtraDamage(): int;

    /** 힘 */
    public function getPower(): int {
        switch ($this->getGrade()) {
            case ItemGrade::GRADE_RARE:
                return 63;
            case ItemGrade::GRADE_UNIQUE:
                return 67;
            case ItemGrade::GRADE_LEGENDARY:
                return 72;
            case ItemGrade::GRADE_EPIC:
                return 75;
            default:
                return 0;
        }
    }

    /** 크리티컬 발동 확률  */
    public function getCriticalPercent(): int {
        return 0;
    }

    public function getCustomName(): string {
        return ItemGrade::getPrefixByGrade($this->getGrade()) . $this->getWeaponName();
    }

    public final function applyDamage(int $amount): bool {
        return true;
    }

    public final function isCritical(): bool {
        return mt_rand(1, 100) <= CustomItemUtils::getSumMath($this->getCriticalPercent(), 3);
    }

}