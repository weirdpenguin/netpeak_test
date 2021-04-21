<?php
    $I = new AcceptanceTester($scenario);
    // $I->wantToTest('front page of my site');
    $I->amOnPage('/');
    $I->click('Карьера');
    $I->switchToNextTab();
    $I->click('Я хочу работать в Netpeak');

    $I->attachFile('input[type="file"]', 'simon-stålenhag-artwork-science-fiction-mech-wallpaper.jpg');
    $I->wait(5);
    $I->see('Ошибка: неверный формат файла');

    $I->fillField('#inputName', 'value');
    $I->fillField('#inputLastname', 'value');
    $I->fillField('#inputEmail', 'value');
    $I->fillField('#inputPhone', 'value');
    $I->selectOption('//select[@name="by"]', '2000');
    $I->selectOption('//select[@name="bm"]', '02');
    $I->selectOption('//select[@name="bd"]', '20');

    $I->click('#submit');
    $I->seeElement('.has-error');
    $I->click('Курсы');
    $I->amOnUrl('https://school.netpeak.group/');
