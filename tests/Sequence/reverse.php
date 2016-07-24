<?php
namespace Ds\Tests\Sequence;

trait reverse
{
    public function reverseDataProvider()
    {
        return array_map(function($a) { return [$a[0], array_reverse($a[1])]; },
            $this->basicDataProvider()
        );
    }

    /**
     * @dataProvider reverseDataProvider
     */
    public function testReverse(array $values, array $expected)
    {
        $instance = $this->getInstance($values);
        $instance->reverse();

        $this->assertToArray($expected, $instance);
    }
}
