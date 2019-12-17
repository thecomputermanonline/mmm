<?php

use Illuminate\Database\Seeder;

class ChatterTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {

        // CREATE THE USER

        if (!\DB::table('users')->find(1)) {
            \DB::table('users')->insert([
                0 => [
                    'id'             => 1,
                    'name'           => 'Tony Lea',
                    'email'          => 'tony@hello.com',
                    'password'       => '$2y$10$9ED4Exe2raEeaeOzk.EW6uMBKn3Ib5Q.7kABWaf4QHagOgYHU8ca.',
                    'remember_token' => 'RvlORzs8dyG8IYqssJGcuOY2F0vnjBy2PnHHTX2MoV7Hh6udjJd6hcTox3un',
                    'created_at'     => '2016-07-29 15:13:02',
                    'updated_at'     => '2016-08-18 14:33:50',
                ],
            ]);
        }

        // CREATE THE CATEGORIES

        \DB::table('categories')->delete();

        \DB::table('categories')->insert([
            0 => [
                'id'         => 1,
                'order'      => 1,
                'name'       => 'Student Visa',
                'color'      => '#3498DB',
                'slug'       => 'student-visa',
                'created_at' => null,
                'updated_at' => null,
            ],
            1 => [
                'id'         => 2,
                'order'      => 2,
                'name'       => 'Working Visa',
                'color'      => '#2ECC71',
                'slug'       => 'working-visa',
                'created_at' => null,
                'updated_at' => null,
            ],
            2 => [
                'id'         => 3,
                'order'      => 3,
                'name'       => 'PR Visa',
                'color'      => '#9B59B6',
                'slug'       => 'pr-visa',
                'created_at' => null,
                'updated_at' => null,
            ],
            3 => [
                'id'         => 4,
                'order'      => 4,
                'name'       => 'General',
                'color'      => '#E67E22',
                'slug'       => 'general',
                'created_at' => null,
                'updated_at' => null,
            ],

        ]);


        // CREATE THE Article


        \DB::table('post')->delete();

        \DB::table('post')->insert([
            0 => [
                'id'                    => 1,
                'user_id'               => 1,
                'category_id' => 3,
                'excerpt'               => 1,
                'body'                  => '<p>My name is Tony and I\'m a student at  and I also work with an awesome company in PB called The Control Group: </p>
        <p>You can check me out on twitter </p>
        <p>or you can subscribe to me on YouTube </p>',
                'created_at' => '2019-08-18 14:27:56',
                'updated_at' => '2019-08-18 14:27:56',
            ],
            1 => [
                'id'                    => 5,
                'excerpt' => 6,
                'category_id' => 3,
                'user_id'               => 1,
                'body'                  => '<p>Hey!</p>
        <p>Thanks again for checking us out. If you want to login with the default user you can login with the following credentials:</p>
       
        <p>You\'ll probably want to delete this , but if for some reason you want to keep it... Go ahead :)</p>',
                'created_at' => '2016-08-18 14:39:36',
                'updated_at' => '2016-08-18 14:39:36',
            ],
            2 => [
                'id'                    => 6,
                'excerpt' => 7,
                'category_id' => 3,
                'user_id'               => 1,
                'body'                  => '<p>If you would like to leave some feedback or have any issues be sure to visit the github page here: &nbsp;and I\'m sure I can help out.</p>
        <p>Let\'s make this forum the go to  Forum for ietls. Feel free to contribute and share your ideas :)</p>',
                'created_at' => '2016-08-18 14:42:29',
                'updated_at' => '2016-08-18 14:42:29',
            ],
            3 => [
                'id'                    => 7,
                'excerpt' => 8,
                'category_id' => 3,
                'user_id'               => 1,
                'body'                  => '<p>This is just a random post to show you some of the formatting that you can do in the WYSIWYG editor. You can make your text <strong>bold</strong>, <em>italic</em>, or <span style="text-decoration: underline;">underlined</span>.</p>
        <p style="text-align: center;">Additionally, you can center align text.</p>
        <p style="text-align: right;">You can align the text to the right!</p>
        <p>Or by default it will be aligned to the left.</p>
        <ul>
        <li>We can also</li>
        <li>add a bulleted</li>
        <li>list</li>
        </ul>
        <ol>
        <li><span style="line-height: 1.6;">or we can</span></li>
        <li><span style="line-height: 1.6;">add a numbered list</span></li>
        </ol>
        <p style="padding-left: 30px;"><span style="line-height: 1.6;">We can choose to indent our text</span></p>
        <p><span style="line-height: 1.6;">Post links: <a href="https://google.com" target="_blank">https://google.com</a></span></p>
        <p><span style="line-height: 1.6;">and add images:</span></p>
        <p><span style="line-height: 1.6;"><img src="https://media.giphy.com/media/o0vwzuFwCGAFO/giphy.gif" alt="" width="300" height="300" /></span></p>',
                'created_at' => '2016-08-18 14:46:38',
                'updated_at' => '2016-08-18 14:46:38',
            ],
            4 => [
                'id'                    => 8,
                'excerpt' => 8,
                'category_id' => 3,
                'user_id'               => 1,
                'body'                      => '<p>Haha :) Cats!</p>
        <p><img src="https://media.giphy.com/media/5Vy3WpDbXXMze/giphy.gif" alt="" width="250" height="141" /></p>
        <p><img src="https://media.giphy.com/media/XNdoIMwndQfqE/200.gif" alt="" width="200" height="200" /></p>',
                'created_at' => '2016-08-18 14:55:42',
                'updated_at' => '2016-08-18 15:45:13',
            ],
            5 => [
                'id'                    => 9,
                'excerpt' => 9,
                'category_id' => 3,
                'user_id'               => 1,
                'body'                  => '<p>Hey There!</p>
        <p>My name is Trish and I\'m the founder of this trish academy . Thanks for checking out it out and if you have any questions or want to contribute be sure to leave a reply here: </p>
        <p>Happy testing!</p>',
                'created_at' => '2016-08-18 14:59:37',
                'updated_at' => '2016-08-18 14:59:37',
            ],
            6 => [
                'id'                    => 10,
                'excerpt' => 9,
                'category_id' => 3,
                'user_id'               => 1,
                'body'                  => '<p>Hell yeah Bro Sauce!</p>
        <p><img src="https://media.giphy.com/media/j5QcmXoFWl4Q0/giphy.gif" alt="" width="366" height="229" /></p>',
                'created_at' => '2016-08-18 15:01:25',
                'updated_at' => '2016-08-18 15:01:25',
            ],
        ]);

        // A post can have several articles
        \DB::table('article')->delete();

        \DB::table('article')->insert([
                    0 => [
                        'id'                    => 1,
                        'post_id' => 3,
                        'user_id'               => 1,
                        'body'                  => '<p>My name is Tony and I\'m a student at  and I also work with an awesome company in PB called The Control Group: </p>
        <p>You can check me out on twitter </p>
        <p>or you can subscribe to me on YouTube </p>',
                        'created_at' => '2019-08-18 14:27:56',
                        'updated_at' => '2019-08-18 14:27:56',
                    ],
                    1 => [
                        'id'                    => 5,
                        'chatter_discussion_id' => 6,
                        'user_id'               => 1,
                        'body'                  => '<p>Hey!</p>
        <p>Thanks again for checking us out. If you want to login with the default user you can login with the following credentials:</p>
       
        <p>You\'ll probably want to delete this , but if for some reason you want to keep it... Go ahead :)</p>',
                    'created_at' => '2016-08-18 14:39:36',
                    'updated_at' => '2016-08-18 14:39:36',
                ],
                2 => [
                    'id'                    => 6,
                    'chatter_discussion_id' => 7,
                    'user_id'               => 1,
                    'body'                  => '<p>If you would like to leave some feedback or have any issues be sure to visit the github page here: &nbsp;and I\'m sure I can help out.</p>
        <p>Let\'s make this forum the go to  Forum for ietls. Feel free to contribute and share your ideas :)</p>',
                'created_at' => '2016-08-18 14:42:29',
                'updated_at' => '2016-08-18 14:42:29',
            ],
            3 => [
                'id'                    => 7,
                'chatter_discussion_id' => 8,
                'user_id'               => 1,
                'body'                  => '<p>This is just a random post to show you some of the formatting that you can do in the WYSIWYG editor. You can make your text <strong>bold</strong>, <em>italic</em>, or <span style="text-decoration: underline;">underlined</span>.</p>
        <p style="text-align: center;">Additionally, you can center align text.</p>
        <p style="text-align: right;">You can align the text to the right!</p>
        <p>Or by default it will be aligned to the left.</p>
        <ul>
        <li>We can also</li>
        <li>add a bulleted</li>
        <li>list</li>
        </ul>
        <ol>
        <li><span style="line-height: 1.6;">or we can</span></li>
        <li><span style="line-height: 1.6;">add a numbered list</span></li>
        </ol>
        <p style="padding-left: 30px;"><span style="line-height: 1.6;">We can choose to indent our text</span></p>
        <p><span style="line-height: 1.6;">Post links: <a href="https://google.com" target="_blank">https://google.com</a></span></p>
        <p><span style="line-height: 1.6;">and add images:</span></p>
        <p><span style="line-height: 1.6;"><img src="https://media.giphy.com/media/o0vwzuFwCGAFO/giphy.gif" alt="" width="300" height="300" /></span></p>',
                'created_at' => '2016-08-18 14:46:38',
                'updated_at' => '2016-08-18 14:46:38',
            ],
            4 => [
                'id'                    => 8,
                'chatter_discussion_id' => 8,
                'user_id'               => 1,
            'body'                      => '<p>Haha :) Cats!</p>
        <p><img src="https://media.giphy.com/media/5Vy3WpDbXXMze/giphy.gif" alt="" width="250" height="141" /></p>
        <p><img src="https://media.giphy.com/media/XNdoIMwndQfqE/200.gif" alt="" width="200" height="200" /></p>',
            'created_at' => '2016-08-18 14:55:42',
            'updated_at' => '2016-08-18 15:45:13',
        ],
        5 => [
            'id'                    => 9,
            'chatter_discussion_id' => 9,
            'user_id'               => 1,
            'body'                  => '<p>Hey There!</p>
        <p>My name is Trish and I\'m the founder of this trish academy . Thanks for checking out it out and if you have any questions or want to contribute be sure to leave a reply here: </p>
        <p>Happy testing!</p>',
            'created_at' => '2016-08-18 14:59:37',
            'updated_at' => '2016-08-18 14:59:37',
        ],
        6 => [
            'id'                    => 10,
            'chatter_discussion_id' => 9,
            'user_id'               => 1,
            'body'                  => '<p>Hell yeah Bro Sauce!</p>
        <p><img src="https://media.giphy.com/media/j5QcmXoFWl4Q0/giphy.gif" alt="" width="366" height="229" /></p>',
            'created_at' => '2016-08-18 15:01:25',
            'updated_at' => '2016-08-18 15:01:25',
        ],
        ]);
    }
}
