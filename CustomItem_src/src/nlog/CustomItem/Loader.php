<?php

namespace nlog\CustomItem;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\Config;

class Loader extends PluginBase {

    public const WEAPON_Durability = 50000;
	
	public function onEnable() {
		@mkdir($this->getDataFolder());
		$this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
	}

}//클래스 괄호

?>