<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StatesFixture
 */
class StatesFixture extends TestFixture
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
                'state_id' => 1,
                'state_name' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'company_id' => 1,
                'user_id' => 1,
                'created' => '2024-10-24 15:46:35',
                'modified' => '2024-10-24 15:46:35',
            ],
        ];
        parent::init();
    }
}
