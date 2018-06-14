<?php
/**
 * Created by PhpStorm.
 * User: NLOG
 * Date: 2018-06-14
 * Time: 오후 9:50
 */

namespace nlog\CustomItem\tasks;


use pocketmine\entity\Entity;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\Player;
use pocketmine\scheduler\Task;

class ExtraDamageTask extends Task {

    /** @var EntityDamageByEntityEvent */
    private $event;

    public function __construct(EntityDamageByEntityEvent $event) {
        $this->event = $event;
    }

    public function onRun(int $currentTick) {
        if ($this->event->getEntity() instanceof Entity && $this->event->getDamager() instanceof Player) {
            if ($this->event->getEntity()->isAlive()) {
                $this->event->getEntity()->attack($this->event);
            }
        }
    }

}