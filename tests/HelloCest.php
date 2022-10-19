<?php

class HelloCest
{
    public function top(AcceptanceTester $I)
    {
        $I->loginAsAdmin();
        $I->amOnPage('/admin');
        $I->see('ホーム');
    }
}