{"filter":false,"title":"CheckCarMakeTest.php","tooltip":"/tests/Unit/CheckCarMakeTest.php","undoManager":{"mark":12,"position":12,"stack":[[{"start":{"row":7,"column":0},"end":{"row":8,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":8,"column":0},"end":{"row":9,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":8,"column":0},"end":{"row":8,"column":1},"action":"insert","lines":["u"],"id":3},{"start":{"row":8,"column":1},"end":{"row":8,"column":2},"action":"insert","lines":["s"]},{"start":{"row":8,"column":2},"end":{"row":8,"column":3},"action":"insert","lines":["e"]}],[{"start":{"row":8,"column":0},"end":{"row":8,"column":3},"action":"remove","lines":["use"],"id":4},{"start":{"row":8,"column":0},"end":{"row":8,"column":3},"action":"insert","lines":["use"]}],[{"start":{"row":8,"column":3},"end":{"row":8,"column":4},"action":"insert","lines":[" "],"id":5},{"start":{"row":8,"column":4},"end":{"row":8,"column":5},"action":"insert","lines":["A"]}],[{"start":{"row":8,"column":5},"end":{"row":8,"column":6},"action":"insert","lines":["p"],"id":6},{"start":{"row":8,"column":6},"end":{"row":8,"column":7},"action":"insert","lines":["p"]},{"start":{"row":8,"column":7},"end":{"row":8,"column":8},"action":"insert","lines":["\\"]},{"start":{"row":8,"column":8},"end":{"row":8,"column":9},"action":"insert","lines":["U"]}],[{"start":{"row":8,"column":9},"end":{"row":8,"column":10},"action":"insert","lines":["s"],"id":7}],[{"start":{"row":8,"column":9},"end":{"row":8,"column":10},"action":"remove","lines":["s"],"id":8},{"start":{"row":8,"column":8},"end":{"row":8,"column":9},"action":"remove","lines":["U"]}],[{"start":{"row":8,"column":8},"end":{"row":8,"column":9},"action":"insert","lines":["C"],"id":9},{"start":{"row":8,"column":9},"end":{"row":8,"column":10},"action":"insert","lines":["r"]}],[{"start":{"row":8,"column":9},"end":{"row":8,"column":10},"action":"remove","lines":["r"],"id":10}],[{"start":{"row":8,"column":9},"end":{"row":8,"column":10},"action":"insert","lines":["a"],"id":11},{"start":{"row":8,"column":10},"end":{"row":8,"column":11},"action":"insert","lines":["r"]}],[{"start":{"row":8,"column":11},"end":{"row":8,"column":12},"action":"insert","lines":[";"],"id":12}],[{"start":{"row":18,"column":0},"end":{"row":21,"column":1},"action":"remove","lines":["    {","        $this->assertTrue(true);","    }","}"],"id":13},{"start":{"row":18,"column":0},"end":{"row":32,"column":1},"action":"insert","lines":["{","    /**","     * A basic unit test example.","     *","     * @return void","     */","    public function testExample()","    {","        $makeArray = ['ford','honda' ,'toyota'];","        #factory(Car::class)->create();","        $car =  Car::first();","        $this->assertContains( $car->make, $makeArray );","        $this->assertTrue(true);","    }","}"]}],[{"start":{"row":17,"column":2},"end":{"row":23,"column":7},"action":"remove","lines":["  public function testExample()","{","    /**","     * A basic unit test example.","     *","     * @return void","     */"],"id":14}]]},"ace":{"folds":[],"scrolltop":130.90908813476562,"scrollleft":0,"selection":{"start":{"row":17,"column":2},"end":{"row":17,"column":2},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":2,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1555367054828,"hash":"4755b799a32816ab3f91a04168a2e4a21ad1b0ef"}