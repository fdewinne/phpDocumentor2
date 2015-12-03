<?php
/**
 * phpDocumentor
 *
 * PHP Version 5.5
 *
 * @copyright 2010-2015 Mike van Riel / Naenius (http://www.naenius.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Project\Version;

use phpDocumentor\Project\VersionNumber;
use phpDocumentor\Project\Version;

/**
 * Test case for Factory
 * @coversDefaultClass phpDocumentor\Project\Version\Factory
 */
class FactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Factory
     */
    private $fixture;

    protected function setUp()
    {
        $this->fixture = new Factory();
    }

    /**
     * @covers ::create
     */
    public function testCreate()
    {
        $versionDefinition = new Definition(new VersionNumber('1.0.0'));
        $version = $this->fixture->create($versionDefinition);

        $this->assertInstanceOf(Version::class, $version);
        $this->assertEquals(new Version(new VersionNumber('1.0.0')), $version);
    }
}
