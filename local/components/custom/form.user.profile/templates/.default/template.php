<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>

<form id="update_user_data">
    <? foreach ($arResult as $key => $value): ?>
        <? if (empty($value)): ?>
            <label for="<?=$key?>"><?= $arResult['DIC'][$key]?></label>
            <input type="text" id="<?=$key?>" required> <br>
        <? endif; ?>
    <? endforeach;?>
    <button>сохранить</button>
</form>
