<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
<div>
    <p>Есть не заполненные поля профиля</p>
</div>
<form method="post" id="update_user_data" action="/local/php_interface/process.php">
    <? foreach ($arResult['USER_FIELDS'] as $key => $value): ?>
        <label for="<?=$key?>"><?= $arResult['DIC'][$key]?></label>
        <input type="text" id="<?=$key?>" required value="<?= !empty($value)? $value : '' ?>"> <br>
    <? endforeach;?>
    <button>сохранить</button>
</form>
<?if (!empty($_REQUEST)) {
    var_dump($_REQUEST);
    exit();
}?>