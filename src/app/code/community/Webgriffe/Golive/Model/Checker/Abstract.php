<?php
abstract class Webgriffe_Golive_Model_Checker_Abstract extends Varien_Object
{
    const SEVERITY_ERROR    = 'error';
    const SEVERITY_WARNING  = 'warning';
    const SEVERITY_NONE     = 'passed';

    /**
     * Initialize a Checker
     *
     * @param $name string
     * @param $description string
     * @param $severity string
     */
    public function initialize($code, $name, $description, $severity)
    {
        $this->setCode($code);
        $this->setName($name);
        $this->setDescription($description);
        $this->setDefaultSeverity($severity);
        return $this;
    }

    public abstract function check($parameters = array());

    public function validateParameters(&$parameters)
    {
        if (!isset($parameters['store_id'])) {
            $parameters['store_id'] = null;
        }
    }
}