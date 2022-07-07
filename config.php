<?php
return [
	//全局账号相关配置
	'client_id'=>'',
	'tenant_id'=>'',
	'client_secret'=>'',
	'domain'=>'',
	'sku_id'=>'',
	//网站标题等文字
	'page_config'=>[
		'title'=>'Microsoft 365 正版账号在线申请',
		'line1'=>'此全局订阅为 A1P',
	    'line2'=>'(5TB Onedrive 空间 + Windows 端正版 Office 套件)',
	    'line3'=>''
	],
	
	
	
	/*         如果不需要邀请码功能,以上配置足以           */
	
	
	
	//是否开启邀请码才可申请账号
	'is_invitation_code'=>false,//true为开启 false为关闭
	//后台相关配置
	'admin'=>[
		'username'=>'',
		'password'=>'',//密码为 MD5 加密，请将想要设置的密码转写为 MD5 后再输入到这里。
		'invitation_code_num'=>'8',//随机生成的邀请码位数
	],
	//数据库配置
	'db'=>[
		'host'=>'127.0.0.1',
		'username'=>'',
		'password'=>'',
		'database'=>'',
	],
];