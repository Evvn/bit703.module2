<?php 
use \BIT703\Models\UserModel as UserModel;

class ModelCest
{

    private $model;

    public function _before(UnitTester $I)
    {
        $this->model = new UserModel();
    }

    // tests
    public function testGetUser(UnitTester $I)
    {
        $user = $this->model->getUser(1);
        $this->assertInstanceOf('\BIT703\Models\UserModel', $user);
    }
}
