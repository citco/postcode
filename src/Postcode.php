<?php namespace Citco;

class Postcode {

    private $postcode;

    public function __construct($postcode = null)
    {
        $this->setPostcode($postcode);
    }

    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
    }

    public function isValid()
    {
        $postcode = $this->postcode;

        return $this->checkPostcode($postcode);
    }

    public function refactor()
    {
        $postcode = $this->postcode;

        if ($this->checkPostcode($postcode))
        {
            return $postcode;
        }
        else
        {
            throw new InvalidPostcodeException('Invalid postcode: ' . $this->postcode);
        }
    }

    private function checkPostcode(&$postcode)
    {
        if (strcasecmp($postcode, 'ai-2640') == 0)
        {
            return false;
        }

        return checkPostcode($postcode);
    }
}
