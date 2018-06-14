<?php
/**
 * Created by PhpStorm.
 * User: NLOG
 * Date: 2018-06-14
 * Time: 오후 9:29
 */

namespace nlog\CustomItem;


use nlog\CustomItem\items\CustomWeapon;
use nlog\CustomItem\tasks\ExtraDamageTask;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\Player;

class EventListener implements \pocketmine\event\Listener {

    /** @var Loader */
    private $plugin;

    public function __construct(Loader $plugin) {
        $this->plugin = $plugin;
    }

    /**
     * @param EntityDamageEvent $event
     * @priority HIGH
     */
    public function onDamageEvent(EntityDamageEvent $event) {
        if ($event->isCancelled()) {
            return;
        }
        if ($event instanceof EntityDamageByEntityEvent) {
            $damager = $event->getDamager();
            if ($damager instanceof Player) {
                $orgin = $event->getBaseDamage();
                /** @var CustomWeapon $item */
                if (($item = $damager->getInventory()->getItemInHand()) instanceof CustomWeapon) {
                    $orgin *= (1 + $item->getAdditonalDamage()) * (1 + $item->getAdditonalDamage() + $item->getExtraDamage());
                    $event->setBaseDamage($orgin);
                    if ($item->getExtraDamage() > 0) {
                        $this->plugin->getScheduler()->scheduleTask(new ExtraDamageTask(new EntityDamageByEntityEvent($damager, $event->getEntity(), $event->getCause(), $event->getOriginalBaseDamage() * (1 + $item->getExtraDamage()), $event->getModifiers(), 0)));
                    }
                }
            }
        }
    }

}