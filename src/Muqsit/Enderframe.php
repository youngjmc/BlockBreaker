<?php

namespace Muqsit;

use pocketmine\block\Bedrock as PmBedrock;

class Bedrock extends PmBedrock{
	
	public function getResistance(){
		return 10;
	}
}
