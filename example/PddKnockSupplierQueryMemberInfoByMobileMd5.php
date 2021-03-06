<?php
/**
 * 示例接口名称：pdd.knock.supplier.query.member.info.by.mobile.md5
*/
require_once dirname(__FILE__).'/Config.php';
require_once dirname(__FILE__)."/../vendor/autoload.php";

use Com\Pdd\Pop\Sdk\PopHttpClient;
use Com\Pdd\Pop\Sdk\Api\Request\PddKnockSupplierQueryMemberInfoByMobileMd5Request;
$client = new PopHttpClient(Config::$clientId, Config::$clientSecret);

$request = new PddKnockSupplierQueryMemberInfoByMobileMd5Request();

$request->setRequest();
try{
	$response = $client->syncInvoke($request);
} catch(Com\Pdd\Pop\Sdk\PopHttpException $e){
	echo $e->getMessage();
	exit;
}
$content = $response->getContent();
if(isset($content['error_response'])){
	echo "异常返回";
}
echo json_encode($content,JSON_UNESCAPED_UNICODE);