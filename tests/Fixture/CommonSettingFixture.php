<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CommonSettingFixture
 */
class CommonSettingFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'common_setting';
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
                'favicon_logo' => 'Lorem ipsum dolor sit amet',
                'powered_txt' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'company_id' => 1,
                'user_id' => 1,
                'created' => '2024-10-24 15:44:56',
                'modified' => '2024-10-24 15:44:56',
            ],
        ];
        parent::init();
    }
}
