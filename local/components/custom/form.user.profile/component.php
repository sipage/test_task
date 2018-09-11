<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arResult = [
    'USER_FIELDS' => [

        'NAME' => $arParams['NAME'],
        'PERSONAL_BIRTHDATE' => $arParams['PERSONAL_BIRTHDATE'],
        'PERSONAL_PHONE' => $arParams['PERSONAL_PHONE']
    ],

    'DIC' => [
        'NAME' => GetMessage('NAME'),
        'PERSONAL_BIRTHDATE' => GetMessage('PERSONAL_BIRTHDATE'),
        'PERSONAL_PHONE' => GetMessage('PERSONAL_PHONE')
    ]
];
if (!empty($_REQUEST)) {
    var_dump($_REQUEST);
    exit();
}
$this->includeComponentTemplate();
?>