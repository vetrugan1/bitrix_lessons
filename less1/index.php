<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Новости");

?><?$APPLICATION->IncludeComponent("bitrix:news.list", "link", array(
    "IBLOCK_TYPE" => "cards",
    "IBLOCK_ID" => "5",
    "NEWS_COUNT" => "5",

),
    false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>