<?php
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
if(!isset($arParams["CACHE_TIME"]))
	$arParams["CACHE_TIME"] = 36000000;


if ($this->StartResultCache(false, array()))
{
    if(!CModule::IncludeModule('iblock')){
        $this->abortResultCache();
        return;
    }
    $arFilter = array('ID'=>$arParams['ELEMENT_ID'], "ACTIVE"=>"Y");
    // фильтруем по нужному нам id и извлекаем нужные нам элементы
    $list = CIBlockElement::GetList(array(), $arFilter, false,false, array("IBLOCK_ID", "ID", "PROPERTY_".$arParams["PROPERTY_NAME"]));
    if($result = $list->GetNextElement())
    {
        $arResult[$arParams["FILTER_NAME"]] = array(
                    "PROPERTY_".$arParams["PROPERTY_NAME"] =>  "PROPERTY_".$arParams["PROPERTY_NAME"]."_VALUE"
                   );
    }
    $resultCacheKeys = array($arParams["FILTER_NAME"]);
    $this->setResultCacheKeys($resultCacheKeys);
    $this->IncludeComponentTemplate();
}
?>