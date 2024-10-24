<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UserDetailsFixture
 */
class UserDetailsFixture extends TestFixture
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
                'company_id' => 1,
                'user_id' => 1,
                'address1' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'address2' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'landmark' => 'Lorem ipsum dolor sit amet',
                'pincode' => 'Lorem ipsum dolor sit amet',
                'state_id' => 1,
                'city_id' => 1,
                'main_areaid' => 1,
                'sub_areaid' => 1,
                'user_status' => 1,
                'emailaddress' => 'Lorem ips',
                'aadharno' => 'Lorem ipsum dolor sit amet',
                'smartcardno' => 'Lorem ipsum dolor sit amet',
                'rationno' => 'Lorem ipsum dolor sit amet',
                'drivinglicenseno' => 'Lorem ipsum dolor sit amet',
                'landline' => 'Lorem ipsum dolor sit amet',
                'remarks' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'created' => '2024-10-24 15:44:10',
                'modified' => '2024-10-24 15:44:10',
            ],
        ];
        parent::init();
    }
}
