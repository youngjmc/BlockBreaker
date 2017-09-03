<?php

namespace Muqsit;

use pocketmine\block\EndPortalFrame as PmEndPortalFrame;

class EndPortalFrame extends PmEndPortalFrame{
	
	public function getResistance(){
		return 10;
	}
}
