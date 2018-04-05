<?php

return [

	'' => [
		'controller' => 'main',
		'action' => 'index',
	],

	'account/login' => [
		'controller' => 'account',
		'action' => 'login',
	],

	'account/register' => [
		'controller' => 'account',
		'action' => 'register',
	],
///-------------------------

	'auto/getAuto' => [
		'controller' => 'auto',
		'action' => 'getAuto',
	],
    
	'auto/indexAuto' => [
		'controller' => 'auto',
		'action' => 'indexAuto',
	],
    'auto/addAuto' => [
		'controller' => 'auto',
		'action' => 'addAuto',
	],

	//-------------------------
	'price/indexPrice' => [
		'controller' => 'price',
		'action' => 'indexPrice',
	],
	'price/getPrice' => [
		'controller' => 'price',
		'action' => 'getPrice',
	],
		'spare/indexSpare' => [
		'controller' => 'spare',
		'action' => 'indexSpare',
	],
	'spare/getSpare' => [
		'controller' => 'spare',
		'action' => 'getSpare',
	],
//----------------------------
	'master/getMaster' => [
		'controller' => 'master',
		'action' => 'getMaster',
	],
	'client/getClient' => [
		'controller' => 'client',
		'action' => 'getClient',
        
	],
    'client/indexClient' => [
		'controller' => 'client',
		'action' => 'indexClient',
        
	],
     'client/addClient' => [
		'controller' => 'client',
		'action' => 'addClient',
        
	],
     'client/permClient' => [
		'controller' => 'client',
		'action' => 'permClient',
        
	],
     'client/lostClient' => [
		'controller' => 'client',
		'action' => 'lostClient',
        
	],
    //-------------------
    'work/indexWork' => [
		'controller' => 'work',
		'action' => 'indexWork',
	],
    'work/addWork' => [
		'controller' => 'work',
		'action' => 'addWork',
	],
    'work/getWork' => [
		'controller' => 'work',
		'action' => 'getWork',
	],
	//-------------------
	'money/indexMoney' => [
		'controller' => 'money',
		'action' => 'indexMoney',
	],
	'money/getMoneyAction' => [
		'controller' => 'money',
		'action' => 'getMoney',
	],
    //-------------------
];
