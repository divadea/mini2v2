{"filter":false,"title":"UsersTableSeeder.php","tooltip":"/database/seeds/UsersTableSeeder.php","undoManager":{"mark":18,"position":18,"stack":[[{"start":{"row":13,"column":9},"end":{"row":13,"column":10},"action":"remove","lines":["/"],"id":2},{"start":{"row":13,"column":8},"end":{"row":13,"column":9},"action":"remove","lines":["/"]}],[{"start":{"row":13,"column":8},"end":{"row":13,"column":9},"action":"insert","lines":["$"],"id":3},{"start":{"row":13,"column":9},"end":{"row":13,"column":10},"action":"insert","lines":["t"]},{"start":{"row":13,"column":10},"end":{"row":13,"column":11},"action":"insert","lines":["h"]},{"start":{"row":13,"column":11},"end":{"row":13,"column":12},"action":"insert","lines":["i"]},{"start":{"row":13,"column":12},"end":{"row":13,"column":13},"action":"insert","lines":["s"]}],[{"start":{"row":13,"column":13},"end":{"row":13,"column":14},"action":"insert","lines":["-"],"id":4},{"start":{"row":13,"column":14},"end":{"row":13,"column":15},"action":"insert","lines":[">"]}],[{"start":{"row":13,"column":15},"end":{"row":13,"column":16},"action":"insert","lines":["c"],"id":5},{"start":{"row":13,"column":16},"end":{"row":13,"column":17},"action":"insert","lines":["a"]},{"start":{"row":13,"column":17},"end":{"row":13,"column":18},"action":"insert","lines":["l"]},{"start":{"row":13,"column":18},"end":{"row":13,"column":19},"action":"insert","lines":["l"]}],[{"start":{"row":13,"column":19},"end":{"row":13,"column":21},"action":"insert","lines":["()"],"id":6}],[{"start":{"row":13,"column":20},"end":{"row":13,"column":21},"action":"insert","lines":["c"],"id":7},{"start":{"row":13,"column":21},"end":{"row":13,"column":22},"action":"insert","lines":["l"]},{"start":{"row":13,"column":22},"end":{"row":13,"column":23},"action":"insert","lines":["a"]},{"start":{"row":13,"column":23},"end":{"row":13,"column":24},"action":"insert","lines":["s"]},{"start":{"row":13,"column":24},"end":{"row":13,"column":25},"action":"insert","lines":["s"]}],[{"start":{"row":13,"column":25},"end":{"row":13,"column":26},"action":"insert","lines":[":"],"id":8}],[{"start":{"row":13,"column":26},"end":{"row":13,"column":27},"action":"insert","lines":["U"],"id":9},{"start":{"row":13,"column":27},"end":{"row":13,"column":28},"action":"insert","lines":["s"]},{"start":{"row":13,"column":28},"end":{"row":13,"column":29},"action":"insert","lines":["r"]}],[{"start":{"row":13,"column":28},"end":{"row":13,"column":29},"action":"remove","lines":["r"],"id":10}],[{"start":{"row":13,"column":26},"end":{"row":13,"column":28},"action":"remove","lines":["Us"],"id":11},{"start":{"row":13,"column":26},"end":{"row":13,"column":42},"action":"insert","lines":["UsersTableSeeder"]}],[{"start":{"row":13,"column":42},"end":{"row":13,"column":43},"action":"insert","lines":[":"],"id":12},{"start":{"row":13,"column":43},"end":{"row":13,"column":44},"action":"insert","lines":[":"]}],[{"start":{"row":13,"column":44},"end":{"row":13,"column":45},"action":"insert","lines":["c"],"id":13},{"start":{"row":13,"column":45},"end":{"row":13,"column":46},"action":"insert","lines":["l"]},{"start":{"row":13,"column":46},"end":{"row":13,"column":47},"action":"insert","lines":["a"]},{"start":{"row":13,"column":47},"end":{"row":13,"column":48},"action":"insert","lines":["s"]},{"start":{"row":13,"column":48},"end":{"row":13,"column":49},"action":"insert","lines":["s"]}],[{"start":{"row":13,"column":50},"end":{"row":13,"column":51},"action":"insert","lines":[";"],"id":14}],[{"start":{"row":13,"column":25},"end":{"row":13,"column":26},"action":"remove","lines":[":"],"id":15},{"start":{"row":13,"column":24},"end":{"row":13,"column":25},"action":"remove","lines":["s"]},{"start":{"row":13,"column":23},"end":{"row":13,"column":24},"action":"remove","lines":["s"]},{"start":{"row":13,"column":22},"end":{"row":13,"column":23},"action":"remove","lines":["a"]},{"start":{"row":13,"column":21},"end":{"row":13,"column":22},"action":"remove","lines":["l"]},{"start":{"row":13,"column":20},"end":{"row":13,"column":21},"action":"remove","lines":["c"]}],[{"start":{"row":14,"column":5},"end":{"row":14,"column":6},"action":"insert","lines":["p"],"id":16},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"insert","lines":["h"]}],[{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"remove","lines":["h"],"id":17},{"start":{"row":14,"column":5},"end":{"row":14,"column":6},"action":"remove","lines":["p"]}],[{"start":{"row":13,"column":7},"end":{"row":13,"column":45},"action":"remove","lines":[" $this->call(UsersTableSeeder::class);"],"id":18},{"start":{"row":13,"column":7},"end":{"row":17,"column":11},"action":"insert","lines":[" DB::table('users')->insert([","            'name' => Str::random(10),","            'email' => Str::random(10).'@gmail.com',","            'password' => bcrypt('secret'),","        ]);"]}],[{"start":{"row":13,"column":7},"end":{"row":17,"column":11},"action":"remove","lines":[" DB::table('users')->insert([","            'name' => Str::random(10),","            'email' => Str::random(10).'@gmail.com',","            'password' => bcrypt('secret'),","        ]);"],"id":19},{"start":{"row":13,"column":7},"end":{"row":15,"column":7},"action":"insert","lines":["factory(App\\User::class, 50)->create()->each(function ($user) {","        $user->posts()->save(factory(App\\Post::class)->make());","    });"]}],[{"start":{"row":14,"column":8},"end":{"row":14,"column":9},"action":"insert","lines":["/"],"id":20},{"start":{"row":14,"column":9},"end":{"row":14,"column":10},"action":"insert","lines":["/"]}]]},"ace":{"folds":[],"scrolltop":103.5,"scrollleft":0,"selection":{"start":{"row":15,"column":7},"end":{"row":15,"column":7},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":6,"state":"php-doc-start","mode":"ace/mode/php"}},"timestamp":1555193685000,"hash":"c62bc8e0f0f88fb15f1b3d81f4fe5d2b0b61c453"}