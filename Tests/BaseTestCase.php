<?php
namespace Paystack\Tests;

/**
 * Description of BaseTestCase
 *
 * @author Doctormaliko
 */
class BaseTestCase extends \PHPUnit_Framework_TestCase {
    //put your code here
    protected $transactionRequestArray;

    public function setUp()
    {
        parent::setUp();
        $this->transactionRequestArray = [
            'amount'    => '5000',
            'email'     => "testuser@test.com"
        ];
    }

    public function tearDown()
    {
        parent::tearDown(); // TODO: Change the autogenerated stub
    }

}
