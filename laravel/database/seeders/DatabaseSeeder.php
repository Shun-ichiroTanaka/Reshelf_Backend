<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'aaa',
            'nickname' => 'はむさんのオンラインスクール',
            'email' => 'aaa@aaa.com',
            'password' => bcrypt('password'),
            'description' => '
                みなさん、こんにちは！

                僕は、はむさんのオンラインスクールを運営しています、はむさん、と申します。

                僕は、プログラミング歴は長いものの、初めた頃はみなさんと同じ初学者でした。その修得には非常に苦労したのを覚えています。

                しかし、今では、動画コンテンツという、プロの考える思考の導線に触れながら、最短経路で学習できる素晴らしいツールが存在します。これを用いることで、これからの初学者は、僕と同じ様な苦労はせず、スムーズに成長していけると信じています。

                「僕の知っているノウハウをお伝えしながら、プログラミングができる人を一人でも多く輩出し、幸せな生活が送れるようになって欲しい。」

                これが僕の生きがいです！

                一緒に頑張りましょう！

                はむさん
            ',
            'own_url' => 'https://diveintohacking.com/plans/',
            'twitter_url' => 'https://twitter.com/diveintohacking',
            'youtube_url' => 'https://www.youtube.com/AtsushiIshida',
            'facebook_url' => '',
            'linked_in_url' => 'https://www.linkedin.com/in/diveintohacking/'
        ]);

        User::create([
            'name' => 'bbb',
            'nickname' => 'bbbのオンラインスクール',
            'email' => 'bbb@bbb.com',
            'password' => bcrypt('password'),
            'description' => '
                みなさん、こんにちは！

                僕は、はむさんのオンラインスクールを運営しています、はむさん、と申します。

                僕は、プログラミング歴は長いものの、初めた頃はみなさんと同じ初学者でした。その修得には非常に苦労したのを覚えています。

                しかし、今では、動画コンテンツという、プロの考える思考の導線に触れながら、最短経路で学習できる素晴らしいツールが存在します。これを用いることで、これからの初学者は、僕と同じ様な苦労はせず、スムーズに成長していけると信じています。

                「僕の知っているノウハウをお伝えしながら、プログラミングができる人を一人でも多く輩出し、幸せな生活が送れるようになって欲しい。」

                これが僕の生きがいです！

                一緒に頑張りましょう！

                はむさん
            ',
            'own_url' => 'https://diveintohacking.com/plans/',
            'twitter_url' => 'https://twitter.com/diveintohacking',
            'youtube_url' => 'https://www.youtube.com/AtsushiIshida',
            'facebook_url' => '',
            'linked_in_url' => 'https://www.linkedin.com/in/diveintohacking/'
        ]);

        User::create([
            'name' => 'ccc',
            'nickname' => 'cccのオンラインスクール',
            'email' => 'ccc@ccc.com',
            'password' => bcrypt('password'),
            'description' => '
                みなさん、こんにちは！

                僕は、はむさんのオンラインスクールを運営しています、はむさん、と申します。

                僕は、プログラミング歴は長いものの、初めた頃はみなさんと同じ初学者でした。その修得には非常に苦労したのを覚えています。

                しかし、今では、動画コンテンツという、プロの考える思考の導線に触れながら、最短経路で学習できる素晴らしいツールが存在します。これを用いることで、これからの初学者は、僕と同じ様な苦労はせず、スムーズに成長していけると信じています。

                「僕の知っているノウハウをお伝えしながら、プログラミングができる人を一人でも多く輩出し、幸せな生活が送れるようになって欲しい。」

                これが僕の生きがいです！

                一緒に頑張りましょう！

                はむさん
            ',
            'own_url' => 'https://diveintohacking.com/plans/',
            'twitter_url' => 'https://twitter.com/diveintohacking',
            'youtube_url' => 'https://www.youtube.com/AtsushiIshida',
            'facebook_url' => '',
            'linked_in_url' => 'https://www.linkedin.com/in/diveintohacking/'
        ]);

        User::create([
            'name' => 'ddd',
            'nickname' => 'dddさんのオンラインスクール',
            'email' => 'ddd@ddd.com',
            'password' => bcrypt('password'),
            'description' => '
                みなさん、こんにちは！

                僕は、はむさんのオンラインスクールを運営しています、はむさん、と申します。

                僕は、プログラミング歴は長いものの、初めた頃はみなさんと同じ初学者でした。その修得には非常に苦労したのを覚えています。

                しかし、今では、動画コンテンツという、プロの考える思考の導線に触れながら、最短経路で学習できる素晴らしいツールが存在します。これを用いることで、これからの初学者は、僕と同じ様な苦労はせず、スムーズに成長していけると信じています。

                「僕の知っているノウハウをお伝えしながら、プログラミングができる人を一人でも多く輩出し、幸せな生活が送れるようになって欲しい。」

                これが僕の生きがいです！

                一緒に頑張りましょう！

                はむさん
            ',
            'own_url' => 'https://diveintohacking.com/plans/',
            'twitter_url' => 'https://twitter.com/diveintohacking',
            'youtube_url' => 'https://www.youtube.com/AtsushiIshida',
            'facebook_url' => '',
            'linked_in_url' => 'https://www.linkedin.com/in/diveintohacking/'
        ]);

        Post::create([
            'title' => 'タイトル1',
            'price' => '2500',
            'body' => '本文です。',
            'describe' => 'コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。',
            'user_id' => '1',
        ]);

        Post::create([
            'title' => 'タイトル2',
            'price' => '500',
            'body' => '本文です。',
            'describe' => 'コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。',
            'user_id' => '2',
        ]);

        Post::create([
            'title' => 'タイトル3',
            'price' => '5000',
            'body' => '本文です。',
            'describe' => 'コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。',
            'user_id' => '3',
        ]);

        Post::create([
            'title' => 'タイトル4',
            'price' => '10000',
            'body' => '本文です。',
            'describe' => 'コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。',
            'user_id' => '4',
        ]);
    }
}
