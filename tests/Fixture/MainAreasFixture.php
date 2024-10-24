<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MainAreasFixture
 */
class MainAreasFixture extends TestFixture
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
                'status' => 1,
                'company_id' => 1,
                'created' => '2024-10-24 15:45:54',
                'modified' => '2024-10-24 15:45:54',
            ],
        ];
        parent::init();
    }
}
