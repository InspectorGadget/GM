<?php

/**
 * All rights reserved RTGNetworkkk
 * GitHub: https://github.com/RTGNetworkkk
 * Copyrights (c)
*/

namespace RTG\GMP;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat as TF;

class GM extends PluginBase implements Listener {
	
	public function onEnable() {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->warning("
		* Enabling GM Shorcut!
		* InspectorGadget
		");
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, $label, array $args) {
		switch(strtolower(cmd->getName())) {
			
			case "gmc":
				if($sender->hasPermission("gmc.command")) {
					$sender->setGamemode(1);
					$sender->sendMessage("Your GameMode has been changed to GMC!")
				}
				else {
					$sender->sendMessage(TF::RED . "You have no permission to use this command!");
				}
				return true;
			break;
			
			case "gma":
				if($sender->hasPermission("gma.command")) {
					$sender->setGamemode(2);
					$sender->setMessage("Your GameMode has been changed to GMA!");
				}
				else {
					$sender->sendMessage(TF::RED . "You have no permission to use this command!");
				}
				return true;
			break;
			
			case "gmsp";
				if($sender->hasPermission("gmsp.command")) {
					$sender->setGamemode(3);
					$sender->sendMessage("Your GameMode has been changed to GMSpectator!");
				}
				else {
					$sender->sendMessage(TF::RED . "You have no permission to use this command!");
				}
				return true;
			break;
			
			case "gms";
				if($sender->hasPermission("gms.command")) {
					$sender->setGamemode(0);
					$sender->sendMessage("Your GameMode has been changed to GMS!")
				}
				else {
					$sender->sendMessage(TF::RED . "You have no permission to use this command!");
				}
				return true;
			break;
		}
	}
	
	public function onDisable() {
		
	}
	
}
