<?php
namespace Ccm\Helper\Facades;

use Illuminate\Support\Facades\Facade;

class APIHandlerFacade extends Facade {
	protected static function getFacadeAccessor() { 
		return 'APIHandler';
	} 
}