<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MainAreasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MainAreasTable Test Case
 */
class MainAreasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MainAreasTable
     */
    protected $MainAreas;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.MainAreas',
        'app.Companies',
        'app.SubAreas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('MainAreas') ? [] : ['className' => MainAreasTable::class];
        $this->MainAreas = $this->getTableLocator()->get('MainAreas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->MainAreas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MainAreasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\MainAreasTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
