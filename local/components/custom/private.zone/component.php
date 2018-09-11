<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
var_dump($arParams);

$arUserData = [];

$requiredUserData = [
    'NAME',
    'PERSONAL_BIRTHDATE',
    'PERSONAL_PHONE'
];

$error = 0;

if (!$USER->IsAuthorized()) {
    echo 'нужно авторизоваться';
} else {
    $by = 'ID';
    $order='desc';
    $arFilter = [
        '=ID' => $USER->GetID(),
    ];

    $resUser = $USER->GetList($by,$order, $arFilter);

    while ($arUser = $resUser->Fetch()) {

        for($i = 0, $count = count($requiredUserData); $i < $count; $i++) {

            if (empty($arUser[$requiredUserData[$i]])) {

                $error++;
            }

            $arUserData[$requiredUserData[$i]] = $arUser[$requiredUserData[$i]];
        }
    }
}

if ($error === 0) {

    $APPLICATION->IncludeComponent(
        "custom:form.user.file",
        ""
    );
} else {

    $APPLICATION->IncludeComponent(
        "custom:form.user.profile",
        "",
        Array(
            'NAME' => $arUserData['NAME'],
            'PERSONAL_BIRTHDATE' => $arUserData['PERSONAL_BIRTHDATE'],
            'PERSONAL_PHONE' => $arUserData['PERSONAL_PHONE']
        )
    );
}

?>