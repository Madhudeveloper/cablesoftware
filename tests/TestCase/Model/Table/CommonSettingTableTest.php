<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CommonSettingTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CommonSettingTable Test Case
 */
class CommonSettingTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CommonSettingTable
     */
    protected $CommonSetting;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.CommonSetting',
        'app.Companies',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CommonSetting') ? [] : ['className' => CommonSettingTable::class];
        $this->CommonSetting = $this->getTableLocator()->get('CommonSetting', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CommonSetting);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CommonSettingTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CommonSettingTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
