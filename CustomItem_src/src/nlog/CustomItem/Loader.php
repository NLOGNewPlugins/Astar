<?php

namespace nlog\CustomItem;

use nlog\CustomItem\items\ItemManager;
use nlog\CustomItem\items\weapons\ChangSung;
use nlog\CustomItem\items\weapons\GuWonSword;
use nlog\CustomItem\items\weapons\MaeHwaSword;
use nlog\CustomItem\items\weapons\MagicMearakSword;
use nlog\CustomItem\items\weapons\MusinGreatSword;
use nlog\CustomItem\items\weapons\RapidMomenTamSword;
use nlog\CustomItem\items\weapons\ReConstructionSword;
use nlog\CustomItem\items\weapons\SolDoRosSword;
use nlog\CustomItem\items\weapons\SungMulSword;
use nlog\CustomItem\items\weapons\TeraGreatSword;
use nlog\CustomItem\items\weapons\XKalibarSword;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\Config;

class Loader extends PluginBase {

    public const WEAPON_Durability = 50000;
	
	public function onEnable() {
		@mkdir($this->getDataFolder());
		$this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);

		//TODO: register all of custom weapons/armors
        //TODO: 밑에 적은 아이템들 id 뭐적을지 몰라서 비워둠
        ItemManager::registerWeapon(new ChangSung());
        ItemManager::registerWeapon(new SolDoRosSword());
        ItemManager::registerWeapon(new XKalibarSword());
        ItemManager::registerWeapon(new MusinGreatSword());
        ItemManager::registerWeapon(new GuWonSword());
        ItemManager::registerWeapon(new MaeHwaSword());
        ItemManager::registerWeapon(new TeraGreatSword());
        ItemManager::registerWeapon(new RapidMomenTamSword());
        ItemManager::registerWeapon(new ReConstructionSword());
        ItemManager::registerWeapon(new SungMulSword());
        ItemManager::registerWeapon(new MagicMearakSword());
	}

}//클래스 괄호

?>