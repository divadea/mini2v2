{"filter":false,"title":"UpdateSamSTest.php","tooltip":"/tests/Unit/UpdateSamSTest.php","undoManager":{"mark":2,"position":2,"stack":[[{"start":{"row":9,"column":0},"end":{"row":20,"column":0},"action":"remove","lines":["{","    /**","     * A basic unit test example.","     *","     * @return void","     */","    public function testExample()","    {","        $this->assertTrue(true);","    }","}",""],"id":2},{"start":{"row":9,"column":0},"end":{"row":24,"column":1},"action":"insert","lines":["{","    /**","     * A basic test example.","     *","     * @return void","     */","    public function testExample()","    {","        $data['name'] = 'Steve Smith';","        $user = User::first();","        $user->update($data);","        $this->assertInstanceOf(User::class, $user);","        $this->assertEquals($data['name'], $user->name);","        $this->assertTrue(true);","    }","}"]}],[{"start":{"row":7,"column":0},"end":{"row":8,"column":0},"action":"insert","lines":["",""],"id":3},{"start":{"row":8,"column":0},"end":{"row":9,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":7,"column":0},"end":{"row":7,"column":13},"action":"insert","lines":["use App\\User;"],"id":4}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":7,"column":13},"end":{"row":7,"column":13},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1555300480823,"hash":"c04d88619d3f41094a40a18665eefead24f8f9b6"}