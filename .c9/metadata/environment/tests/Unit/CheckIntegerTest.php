{"filter":false,"title":"CheckIntegerTest.php","tooltip":"/tests/Unit/CheckIntegerTest.php","undoManager":{"mark":2,"position":2,"stack":[[{"start":{"row":7,"column":0},"end":{"row":8,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":8,"column":0},"end":{"row":9,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":8,"column":0},"end":{"row":8,"column":12},"action":"insert","lines":["use App\\Car;"],"id":3}],[{"start":{"row":11,"column":0},"end":{"row":22,"column":0},"action":"remove","lines":["{","    /**","     * A basic unit test example.","     *","     * @return void","     */","    public function testExample()","    {","        $this->assertTrue(true);","    }","}",""],"id":4},{"start":{"row":11,"column":0},"end":{"row":23,"column":1},"action":"insert","lines":["{","    /**","     * A basic unit test example.","     *","     * @return void","     */","    public function testExample()","    {","        #factory(Car::class)->create();","        $car =  Car::first();","        $this->assertTrue(is_int($car->year));","    }","}"]}]]},"ace":{"folds":[],"scrolltop":53,"scrollleft":0,"selection":{"start":{"row":23,"column":1},"end":{"row":23,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":2,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1555302649790,"hash":"f6b0bbb14de2482b02c7d0fd31c2b0f70abb23e6"}