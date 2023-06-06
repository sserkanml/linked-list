<?php



class Item
{
    /**
     * Summary of value
     * @var
     */
    private $value;
    /**
     * Summary of key
     * @var
     */
    private $key;
    /**
     * Summary of next
     * @var
     */
    public $next;
    /**
     * Summary of __construct
     * @param mixed $var
     * @param mixed $key
     */
    public function __construct($var, $key)
    {
        $this->value = $var;
        $this->key=$key;
    }


    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     * @return self
     */
    public function setValue($value): self
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Summary of next
     * @return mixed
     */
    public function next()
    {
        return $this->next;
    }
}
