<?php

namespace testplugin;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\Server;

class testplugin extends PluginBase implements Listener{
   public function onEnable(){
      $this->getServer()->getPluginManager()->registerEvents($this, $this);
   }
   
}
