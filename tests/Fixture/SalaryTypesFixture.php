<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SalaryTypesFixture
 */
class SalaryTypesFixture extends TestFixture
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
                'name' => 'Lorem ipsum dolor sit amet',
                'company_id' => 1,
                'modified' => '2024-10-24 15:46:26',
                'created' => '2024-10-24 15:46:26',
            ],
        ];
        parent::init();
    }
}
