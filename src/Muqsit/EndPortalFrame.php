<?php

namespace Muqsit;

use pocketmine\block\EndPortalFrame as PmEndPortalFrame;

class Bedrock extends PmEndPortalFrame{
	
	public function getResistance(){
		return 10;
	}
}
