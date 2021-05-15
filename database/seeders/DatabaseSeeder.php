<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quizzes')->insert([
            'id' => 1,
            'quizname' => "Perspective",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);

        $questions = [  // Question,Dimension,Direction,Meaning
        ['You find it takes effort to introduce yourself to other people.','EI',1,'I'],
        ['You consider yourself more practical than creative.','SN',-1,'S'],
        ['Winning a debate matters less to you than making sure no one gets upset.','TF',1,'F'],
        ['You get energized going to social events that involve many interactions.','EI',-1,'E'],
        ['You often spend time exploring unrealistic and impractical yet intriguing ideas.','SN',1,'N'],
        ['Deadlines seem to you to be of relative rather than absolute importance.','JP',1,'P'],
        ['Logic is usually more important than heart when it comes to making important decisions.','TF',-1,'T'],
        ['Your home and work environments are quite tidy.','JP',-1,'J'],
        ['You do not mind being at the center of attention.','EI',-1,'E'],
        ['Keeping your options open is more important than having a to-do list.','JP',1,'P']
        ];

        foreach ($questions as $question) {
            DB::table('questions')->insert([
                'quizid' => 1,
                'question' => $question[0],
                'dimension' => $question[1],
                'direction' => $question[2],
                'meaning' => $question[3],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                
            ]);
        }
    }
}

        // \App\Models\User::factory(10)->create();

        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => bcrypt('secret'),
        // ]);


        // DB::table('answers')->insert([
        //     'questionid' => ,
        //     'userid' => ,
        //     'answer' => ,
        // ]);