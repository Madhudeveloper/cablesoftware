<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'user_id' => 1,
                'company_id' => 'Lorem ips',
                'role_id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'mobile' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'is_deleted' => 1,
                'status' => 1,
                'last_login' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-10-19 07:29:08',
                'modified' => '2024-10-19 07:29:08',
            ],
        ];
        parent::init();
    }
}
