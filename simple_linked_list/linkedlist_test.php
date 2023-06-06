<?php

require_once 'LinkedList.php';

class LinkedListTest extends PHPUnit_Framework_TestCase
{
    public function testLinkedList()
    {
        $list = new LinkedList();
        $data = array('foo','bar');
        foreach ($data as $k => $v) {
            $list->append($k, $v);
        }

        $this->assertEquals($data[0], $list->first->value);
        $this->assertEquals($data[1], $list->last->value);
        $this->assertNull($list->last->next());

        // Prepend data
        $prepend = array('a','b');
        foreach (array_reverse($prepend) as $k => $v) {
            $list->prepend($k, $v);
        }

        $item = $list->first;
        foreach (array_merge($prepend, $data) as $value) {
            $this->assertEquals($value, $item->value);
            $item = $item->next();
        }
    }
}
