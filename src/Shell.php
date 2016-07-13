<?php
/**
 * Jaeger
 *
 * @copyright	Copyright (c) 2015-2016, mithra62
 * @link		http://jaeger-app.com
 * @version		1.0
 * @filesource 	./Shell.php
 */
namespace JaegerApp;

use mikehaertl\shellcommand\Command;

/**
 * Jaeger - Shell Object
 *
 * Wrapper for a simple command line interface
 *
 * @package Shell
 * @author Eric Lamb <eric@mithra62.com>
 */
class Shell
{

    /**
     * The Cmd object
     * 
     * @var \mikehaertl\shellcommand\Command
     */
    protected $cmd = null;

    /**
     * The command we want to execute
     * 
     * @var string
     */
    protected $command = null;

    /**
     * Returns the Cmd object
     * 
     * @param string $refresh            
     */
    protected function getCmd($refresh = false)
    {
        if (is_null($this->cmd) || $refresh) {
            $this->cmd = new Command();
        }
        
        return $this->cmd;
    }

    /**
     * Executes the command
     * 
     * @return boolean
     */
    public function execute()
    {
        return $this->getCmd(true)
            ->setCommand($this->getCommand())
            ->execute();
    }

    /**
     * The command output (stdout).
     * Empty if none
     * 
     * @return mixed
     */
    public function getOutput()
    {
        return $this->getCmd()->getOutput();
    }

    /**
     * The error message, either stderr or internal message.
     * Empty if none.
     * 
     * @return string
     */
    public function getError()
    {
        return $this->getCmd()->getError();
    }

    /**
     * Sets the command to execute
     * 
     * @param string $command            
     * @return \mithra62\Shell
     */
    public function setCommand($command)
    {
        $this->command = $command;
        return $this;
    }

    /**
     * Returns the command to execute
     * 
     * @return string
     */
    public function getCommand()
    {
        return $this->command;
    }
}
