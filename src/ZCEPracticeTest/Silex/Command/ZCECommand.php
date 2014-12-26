<?php

namespace ZCEPracticeTest\Silex\Core\Command;

use Symfony\Component\Console\Command\Command;

class ZCECommand extends Command
{
    /**
     * @return ZCEAppConsole
     */
    public function getApplication()
    {
        return parent::getApplication();
    }
    
    /**
     * @return \ZCEPracticeTest\Silex\ZCEApp
     */
    public function getSilexApplication()
    {
        return $this->getApplication()->getSilexApplication();
    }
}