<?php

class Items{
	  private $items = [
              [
	              'itemNo'=>'001',
	              'itemName'=>"Assasin's Creed",
	              'itemPrice'=>1650.00  
			  ],
              [
	              'itemNo'=>'002',
	              'itemName'=>"Assasin's Creed 2",
	              'itemPrice'=>1995.00  
			  ],
              [
	              'itemNo'=>'003',
	              'itemName'=>'Skyrim',
	              'itemPrice'=>1580.00  
			  ],
              [
	              'itemNo'=>'004',
	              'itemName'=>'Borderlands',
	              'itemPrice'=>1995.00  
			  ],
              [
	              'itemNo'=>'005',
	              'itemName'=>'Diablo III',
	              'itemPrice'=>1450.00  
			  ],
              [
	              'itemNo'=>'006',
	              'itemName'=>'Borderlands 2',
	              'itemPrice'=>2080.00  
			  ],
              [
	              'itemNo'=>'007',
	              'itemName'=>'Battlefield 4',
	              'itemPrice'=>1800.00  
			  ],
              [
	              'itemNo'=>'008',
	              'itemName'=>'League of Legends',
	              'itemPrice'=>995.00  
			  ],              
              [
	              'itemNo'=>'009',
	              'itemName'=>'Guild Wars II',
	              'itemPrice'=>980.00  
			  ],      
              [
	              'itemNo'=>'010',
	              'itemName'=>'X-Com:Enemy Unknown',
	              'itemPrice'=>1450.00  
			  ],
              [
				'itemNo'=>'011',
				'itemName'=>'Destiny 2',
				'itemPrice'=>2300.00  
			  ],			                                                                                              
              [
				'itemNo'=>'012',
				'itemName'=>'God of War',
				'itemPrice'=>2800.75  
			  ],			  
              [
				'itemNo'=>'013',
				'itemName'=>'Almost Human',
				'itemPrice'=>2465.50  
			  ],			  
		]; 

	public function getItems()
	{
		return $this->items;
	}
}