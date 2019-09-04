<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
 
$parametrComp = array(
    'PARAMETERS' => array(
        'FILTER_NAME' => array(
            'NAME' => 'TEST', // название параметра
            'TYPE' => 'STRING', // тип нашего элемента
            'MULTIPLE' => 'N', // множественность
            'PARENT' => 'BASE', // родитель 
            ),
        'ELEMENT_ID' => array(
            'NAME' => '',
            'TYPE' => 'INT',
            'MULTIPLE' => 'N',
            'PARENT' => 'BASE',
            ),
        'PROPERTY_NAME' => array(
            'NAME' => '',
            'TYPE' => 'STRING',
            'MULTIPLE' => 'N',
            'PARENT' => 'BASE',
            ),
        'CACHE_TIME'  =>  array('DEFAULT'=>3600),
    ),
);
?>