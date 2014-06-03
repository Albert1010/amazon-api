<?php

/* Example usage of the Amazon Product Advertising API */
include("amazon_api_class.php");

$obj = new AmazonProductAPI();

try {
    $result = $obj->searchProducts("X-Men Origins", AmazonProductAPI::DVD, "TITLE");
} catch (Exception $e) {
    echo $e->getMessage();
}

print_r($result);

echo "Sales Rank : {$result->Items->Item->SalesRank}<br>";
echo "ASIN : {$result->Items->Item->ASIN}<br>";
echo "<br><img src=\"" . $result->Items->Item->MediumImage->URL . "\" /><br>";

echo 'example.php';


echo 'hello test line 2';

// Solution 1

//$arr1 = array('Operation' => 'BrowseNodeLookup', 'BrowseNodeId' => '1025616', 'ResponseGroup' => 'TopSellers');

//$arr2 = array(
//    'Operation' => 'ItemLookup',
//    'ItemId' => 'LIST OF ASIN\'s HERE (UPTO 10)',
//    'IdType' => 'ASIN',
//    'ResponseGroup' => 'Images, ItemAttributes, Offers'
//);

//Solution 2

//defined('AWS_API_KEY') or define('AWS_API_KEY', 'AGGAVZCVASDG123A');
//defined('AWS_API_SECRET_KEY') or define('AWS_API_SECRET_KEY', '132131235151asdfaGFfasdf');
//defined('AWS_ASSOCIATE_TAG') or define('AWS_ASSOCIATE_TAG', 'test05-12');
//$amazonEcs = new AmazonECS(AWS_API_KEY, AWS_API_SECRET_KEY, 'com', AWS_ASSOCIATE_TAG);
//$amazonEcs->associateTag(AWS_ASSOCIATE_TAG);
//$amazonEcs->returnType(AmazonECS::RETURN_TYPE_ARRAY);
//
//$response = $amazonEcs->responseGroup('TopSellers')->browseNodeLookup($node);



?>
