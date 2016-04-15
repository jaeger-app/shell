<?php
/**
 * Jaeger
 *
 * @author		Eric Lamb <eric@mithra62.com>
 * @copyright	Copyright (c) 2015-2016, mithra62, Eric Lamb
 * @link		http://jaeger-app.com
 * @version		1.0
 * @filesource 	./tests/ShellTest.php
 */
namespace JaegerApp\tests;

use JaegerApp\Shell;

/**
 * Jaeger - Shell object Unit Tests
 *
 * Contains all the unit tests for the \mithra62\Shell object
 *
 * @package Jaeger\Tests
 * @author Eric Lamb <eric@mithra62.com>
 */
class ShellTest extends \PHPUnit_Framework_TestCase
{

    public function testProperties()
    {
        $this->assertClassHasAttribute('cmd', '\Jaeger\Shell');
        $this->assertClassHasAttribute('command', '\Jaeger\Shell');
        
        $shell = new Shell();
        $this->assertObjectHasAttribute('cmd', $shell);
        $this->assertObjectHasAttribute('command', $shell);
    }
}