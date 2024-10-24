<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CustomersFixture
 */
class CustomersFixture extends TestFixture
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
                'user_detail_id' => 1,
                'company_id' => 1,
                'user_id' => 1,
                'scnumber' => 'Lorem ipsum dolor sit amet',
                'dateofservice' => 'Lorem ipsum dolor sit amet',
                'erection_charges' => 1.5,
                'connection_status' => 1,
                'wire_status' => 1,
                'connection_type' => 1,
                'no_analogtv' => 'Lorem ipsum dolor sit amet',
                'rent_permonth' => 1.5,
                'node_service' => 1,
                'customer_advance' => 1.5,
                'reconnection_fees' => 1.5,
                'disconnection_date' => 'Lorem ipsum dolor sit amet',
                'customer_remarks' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'disconnection_remarks' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'fix_othercharges' => 1.5,
                'created' => '2024-10-24 15:58:40',
                'modified' => '2024-10-24 15:58:40',
            ],
        ];
        parent::init();
    }
}
