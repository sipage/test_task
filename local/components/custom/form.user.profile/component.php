<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arResult = [
    'NAME' => $arParams['NAME'],
    'PERSONAL_BIRTHDATE' => $arParams['PERSONAL_BIRTHDATE'],
    'PERSONAL_PHONE' => $arParams['PERSONAL_PHONE'],

    'DIC' => [
        'NAME' => 'Имя',
        'PERSONAL_BIRTHDATE' => 'Дата рождения',
        'PERSONAL_PHONE' => 'Номер телефона'
    ]
];

$this -> includeComponentTemplate();
?>