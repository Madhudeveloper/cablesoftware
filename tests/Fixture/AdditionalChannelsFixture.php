<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AdditionalChannelsFixture
 */
class AdditionalChannelsFixture extends TestFixture
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
                'amount' => 1.5,
                'company_id' => 1,
                'user_id' => 1,
                'created' => '2024-10-24 15:44:29',
                'modified' => '2024-10-24 15:44:29',
            ],
        ];
        parent::init();
    }
}
