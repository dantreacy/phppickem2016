<?php

class IndexCest
{
    public function redirectToLoginPageIfNotLoggedIn(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->seeCurrentUrlEquals('/login.php');
        $I->see("NFL Pick 'Em Login");
        $I->see("Sign in");
        $I->dontSee('Warning');

    }
}
