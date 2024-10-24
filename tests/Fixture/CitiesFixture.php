<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CitiesFixture
 */
class CitiesFixture extends TestFixture
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
                'id' => 1,
                'state_id' => 1,
                'city_name' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'company_id' => 1,
                'user_id' => 1,
                'created' => '2024-10-24 15:44:38',
                'modified' => '2024-10-24 15:44:38',
            ],
        ];
        parent::init();
    }
}
