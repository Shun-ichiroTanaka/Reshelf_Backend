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
            'title' => 'そろそろ確定申告しないと',
            'price' => '2500',
            'body' =>
            '
                <h1>はじめに</h1>
                <p>今年（2022年）1月から、久々に個人でスマホアプリ配信の副業を再開してみました。</p>
                <p><strong>脱税（違法）は絶対ダメですが節税（合法）は限界までしたい</strong>&nbsp;と思っているタイプなので、以前副業でやっていた時に税関連のこと（所得税法）をそこそこ調べておいたつもりですが、かなり久々なので現行ルールの確認がてら、主にスマホアプリで副業した際の確定申告の要点をまとめてみます。</p>
                <p>ストーリー（ポエム？）として文章を書きたかったので、グダグダと長文を書いてますが、要点は最後の「まとめ」で簡潔に書いてあります。</p>
                <hr />
                <p>エンジニアとして働いている私たちには少し縁遠い「経理」に関する話題ですが、</p>
                <ul>
                <li>趣味でスマホアプリを出しつつ、ついでにマネタイズしているエンジニアは多いハズ</li>
                <li>サラリーマンはどうしても確定申告と縁遠い</li>
                <li>スマホアプリで確定申告が必要な水準まで収益を上げる事は困難である（個人の場合99%以上の人は確定申告不要で、私自身もその可能性が高い）ため、やはり確定申告と縁遠い</li>
                <li>幸運にもバズって一夜にして確定申告が必要になってしまい伝票処理で地獄を見るか、諦めて過剰納税する</li>
                </ul>
                <p>なんてことも、割とありそうだなと。</p>
                <p>また、私の経験上の感触ですが、税の話が好きなエンジニアは結構多い気がするので、それなりにニーズがあるかも？と思っています。昔、海外のホームドラマで奥さんと良い感じになっている所に子供が入ってきて「何しているの？」と聞かれて咄嗟に「税金の計算をしていたんだ」みたいなことを言っていたので、エンジニアに限らず大人はみんな税の話が大好きなのかもしれません。</p>
                <p>私見ですが、確定申告が必要な程度稼げるかどうかに関係なく、マネタイズする以上、確定申告の準備も平行して進めておいた方が良いと思います。</p>
                <p>キャッシュフローを把握すること（経理）は、商売の基本中の基本なので、非間接部門や管理職でない方でも基礎を理解しておくことが望ましいです。高専や商業高校を卒業していれば知識として学んだことがあると思いますが、実際に経理処理をした上で確定申告が出来るようになることで、その知識が「実践の伴ったスキル」にレベルアップします。</p>
                <p>なお、本書は私自身の2022年度（2022年1月〜12月）確定申告向けに準備中の内容を元に書いているので、現時点（2022年2月時点）では「これで確定申告が通った」という訳ではありません。また、過去に副業していた時も、帳簿付けはしていたものの確定申告をしたことは<em>（多くても年間売上4〜5万円ほどだったので）</em>ありません。2022年度分についても目算では必要にならない可能性が高いと予測しています。</p>
                <blockquote>
                <p>ちなみに、過去確定申告をしたことがあるのは、リーマンショックの時に株で損をした時（1回）だけです。</p>
                </blockquote>
                <p>つまり、私自身まだ実践を伴っていない知識のみ（しかも独学）の状態で、且つ間接部門や管理職の経験が無いしがないエンジニアなので、色々と間違っている部分もあると思います。そのため、実際に確定申告したら2023年に本記事をアップデートする予定です。<em>（アップデートが無かった場合はお察しください）</em></p>
                <p>また、私は法曹や税理士でもないので、もしかすると法律法令の解釈に色々と間違っている所があるかもしれません。</p>
                <h1><span id="前提条件の定義" class="fragment"></span>前提条件の定義</h1>
                <h3><span id="1-事業主体となる人の種類" class="fragment"></span>(1) 事業主体となる人の種類</h3>
                <p>事業主体が法人（法人税）か自然人（所得税）かで税法が異なりますが、本書では自然人が事業主体であることを前提とします。</p>
                <p>国税庁の定義では副業の納税は所得税であることを前提としているように見えますが、副業で法人を作ることも無いとは言えないので念の為。</p>
                <p>自然人の税（所得税）は、日本の現在の所得税法（89条）によると課税所得が900万円以上なら法人を作った方が多分リーズナブルかもしれませんし、法人税が安い国で法人を作ればもっと節税できるかと思われます。<em>（※他国比については単純な税率の比較だけでは見えてこない部分もありますが）</em></p>
                <blockquote>
                <p><em>私はルールブックに反する脱税は絶対ダメだと思っていますが、合法な範囲での節税（タックスヘイブンでの法人設立など）は経営努力の一環だから問題ないという認識です。ただし、パナマ文書が流出した時に（私は何が問題なのかよく分からなかったのですが）思っていたよりも大きな騒ぎになっていたので、少しズレているかもしれません。</em></p>
                </blockquote>
                <p>「限界まで節税」を目指すのであれば法人を作ることも視野に入れるべきですが、私には自然人でなければならない契約上の事由があるので、仮に一定以上の所得規模があっても事業法人は作らない予定です。<em>（そもそも、私は私が得られる余剰所得の全てを開発投資に回す方針で行動しているので、一定以上の所得なる可能性は低いと想定してます）</em></p>
                <blockquote>
                <p><em>余談ですが、所得税は基本的にどこの国でも高いですが、シンガポールなら所得税がMAXでも日本の法人税並みに安いので、テレワーク移住が出来る高給サラリーマンの方は、シンガポール移住するのが一番お得かもしれません。（低給サラリーマンの私には縁が無い話なので、あまり詳しく調べた訳ではないですが）</em></p>
                </blockquote>
                <h3><span id="2-所得の種類" class="fragment"></span>(2) 所得の種類</h3>
                <p>収益を「事業所得」or「雑所得」のどちらにするかによって、確定申告の方法が変わってきます。</p>
                <p>会社員として給与所得を得ながら事業所得として確定申告（青色申告）することもできなくもないですが、本書では雑所得として確定申告（白色申告）することを前提とします。</p>
                <blockquote>
                <p>事業所得と雑所得の違いは色々あり、事業所得の方がメリットが多くありますが、個人的に最大の違いは&nbsp;<strong>赤字申告ができる（事業）</strong>&nbsp;か&nbsp;<strong>できない（雑）</strong>&nbsp;か...という点だと思います。赤字申告ができれば所得を減らせる（節税できる）メリットがあるので、可能であれば雑所得ではなく事業所得として確定申告をした方が良いと思います。ただし、事業実体の証明と一定の経理・税務知識が必要だし、行政への届け出も必要で、且つ特別控除額を大きくするには複式簿記での記帳も必要になるので、少しだけ面倒です。</p>
                </blockquote>
                <p>会社との雇用契約や就業規則で青色NGとなっている事が多く、大企業だと白色（副業）すらNGのところも多くあったり、副業OKでも事前に届け出が必要なところもよくあるので、まずは各自で雇用契約書や就業規則をご確認することもお忘れなく。</p>
                <h3><span id="3-会計ソフト" class="fragment"></span>(3) 会計ソフト</h3>
                <p>freeeとかを使えば簡単に仕分け、複式簿記、B/S出力などが出来るらしいですが、確定申告が必要かも分からない段階で使うものではない（月額が掛かる）ので、一旦そういった有料ツールは使わず、Google Driveとスプレッドシートで帳簿を付けることを前提とします。</p>
                <h1><span id="雑所得の確定申告" class="fragment"></span>雑所得の確定申告</h1>
                <p>雑所得は、1年間（1月〜12月）で得た副業の収益から&nbsp;<strong>経費を差し引いた</strong>&nbsp;金額が20万円以下なら原則確定申告が不要ですが、20万円を超える場合は翌年2月中旬〜3月中旬の間に確定申告しなければなりません。</p>
                <blockquote>
                <p>ただし、次の何れかの条件に該当する場合、副業収益が20万円以下でも確定申告が必要です:</p>
                <ul>
                <li>ふるさと納税をして確定申告している場合</li>
                <li>医療費控除を受けて確定申告している場合</li>
                <li>給与所得が2,000万円を超えている場合</li>
                </ul>
                <p>また、「20万円」というのは正確には雑所得のみの金額ではなく、その年分の利子所得の金額、配当所得の金額、不動産所得の金額、事業所得の金額、山林所得の金額、譲渡所得の金額、一時所得の金額及び雑所得の金額の合計額のことです。（所得税法121条1項）</p>
                </blockquote>
                <p>「20万円超えたら確定申告が必要」ということは何となく知っているかもしれませんが、それは「売上」ではなく、<strong>売上から経費を差し引いた「利益」</strong>のことです。そのことは、所得税法35条2項で規定されています。</p>
                <blockquote>
                <p>２　雑所得の金額は、次の各号に掲げる金額の合計額とする。<br />一 その年中の公的年金等の収入金額から公的年金等控除額を控除した残額<br />二 その年中の雑所得（公的年金等に係るものを除く。）に係る&nbsp;<strong>総収入金額から必要経費を控除</strong>&nbsp;した金額</p>
                </blockquote>
                <p>雑所得の法律解釈については、国税庁が公開している下記URLにも分かりやすく書かれています。</p>
                <div>
                <div>
                <div>No.1500&emsp;雑所得｜国税庁</div>
                https://www.nta.go.jp</div>
                </div>
                <p>国税庁のWebサイトの方が法律の条文よりも分かりやすいので、以下、法律解釈は国税庁のWebサイトの方を参酌します。私は疑問が生じたら都度所得税法の方をチェックしていたのですが、大体の人が疑問に思うポイントは概ね国税庁のWebサイトで解説されています。</p>
                <p>確定申告をするための準備とは、<strong>副業のキャッシュフロー（収入と経費）を把握する作業</strong>&nbsp;と言い換えることができます。もちろん、経費は&yen;0として売上を丸々雑所得扱い（＝過剰に納税）にしても、誰からも怒られることはありません。</p>
                <p>なので、</p>
                <p><em>「どうせ、大した額じゃないから損（過剰納税）でもいいよ」</em></p>
                <p>という考え方でも問題無いと思います。</p>
                <p>ただし、仮に給与の課税所得金額がジャスト &yen;3,299,000 なら所得税額 &yen;232,400 ですが、</p>
                <div class="code-frame" data-lang="text">
                <div class="code-copy">&nbsp;</div>
                <div class="highlight">
                <pre><code>&yen;3,299,000 &times; 10% - &yen;97,500 = &yen;232,400
                </code></pre>
                </div>
                </div>
                <p>そこに雑所得 &yen;200,001 が加算されると所得税額 &yen;272,300 となるので、</p>
                <div class="code-frame" data-lang="text">
                <div class="code-copy">&nbsp;</div>
                <div class="highlight">
                <pre><code>&yen;3,499,001 &times; 20% - &yen;427,500 = &yen;272,300
                </code></pre>
                </div>
                </div>
                <p>確定申告すると、その差額（&yen;39,900）の納税が必要になるかと思われます。</p>
                <p>経費を計算した上で雑所得が20万1円だったのであれば、その &yen;39,900 は納税しなければ脱税になります。しかし、1円でも計上が漏れている経費があれば、それは「法律上支払う必要が無い税金」です。約4万もあれば、結構豪華な温泉旅行とかに行けるので、無駄な納税なんかせず温泉旅行へ行った方が有益だと私は考えます。</p>
                <p>キャッシュフロー（収益や経費などのお金の流れ）を把握すること（経理）は会社を経営する上で必須のスキルであり、商業と投資の基本です。サラリーマン（※間接部門と管理職を除く）をしていると、その点の意識が希薄になっている方が大半だと思います。本書を読んでいるあなたは（その時点で恐らく税についてのアンテナが高いので）そんなことは無いと思いますが、少なくとも私は副業で実際に帳簿を付けるようになる前までは希薄でした。将来的に独立などを考えている方は、副業の内からちゃんと経理の基礎を抑えておくことで、無駄に会社を潰すリスクを抑えられるかもしれません。軍の世界では「素人は戦略を語り、プロは兵站を語る」などというような事が言われているらしいですが、経理とは会社経営における兵站のようなものだと言い換えることができるかもしれません。</p>
                <p>副業の収益が幾らあったのかは当然把握していると思われるので、本書では主に経費についての私の解釈を詳述します。</p>
                <h2><span id="副業で認められる経費の種類" class="fragment"></span>副業で認められる経費の種類</h2>
                <p>国税庁の手引に書かれていますが、</p>
                <div>
                <div>
                <div>https://www.nta.go.jp/taxes/shiraberu/shinkoku/tebiki/2019/kisairei/sp/pdf/03.pdf</div>
                https://www.nta.go.jp</div>
                </div>
                <p>以下②〜⑯の15科目が副業の経費として認められています。</p>
                <table>
                <thead>
                <tr>
                <th>科目</th>
                <th>例</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td>②旅費交通費</td>
                <td>取引先へ移動するのに掛かった費用<br />交通費（電⾞・バス・タクシー・⾼速道路料⾦）・出張旅費や宿泊費など</td>
                </tr>
                <tr>
                <td>③通信費</td>
                <td>業務で使用する携帯電話・固定電話・切手・はがき代など</td>
                </tr>
                <tr>
                <td>④接待交際費</td>
                <td>取引先との打合せのための飲⾷代<br />取引先に対する慶弔⾒舞⾦・お土産代など</td>
                </tr>
                <tr>
                <td>⑤損害保険料</td>
                <td>業務で使用する⾞などの保険料など</td>
                </tr>
                <tr>
                <td>⑥消耗品費</td>
                <td><strong>※詳しく後述します</strong></td>
                </tr>
                <tr>
                <td>⑦会議・研修費</td>
                <td>打合せ等で使用したレンタルスペース料<br />会議に伴い支出する費用<br />業務で使用する書籍・地図、資格試験料など</td>
                </tr>
                <tr>
                <td>⑧⾞両・燃料費</td>
                <td>業務で使用する⾞の費用<br />ガソリン代・駐⾞場代、⾃動⾞修理代、⾞検費用など</td>
                </tr>
                <tr>
                <td>⑨事務所経費</td>
                <td><strong>※詳しく後述します</strong></td>
                </tr>
                <tr>
                <td>⑩租税公課</td>
                <td>業務で使用する⾞の⾃動⾞税、⾃動⾞取得税、⾃動⾞重量税、組合費など</td>
                </tr>
                <tr>
                <td>⑪広告宣伝費</td>
                <td><strong>※詳しく後述します</strong></td>
                </tr>
                <tr>
                <td>⑫仕入</td>
                <td>販売用の商品の購入費用や原材料費</td>
                </tr>
                <tr>
                <td>⑬外注工賃</td>
                <td>知⼈に仕事を依頼したときの依頼料など</td>
                </tr>
                <tr>
                <td>⑭修繕費</td>
                <td>業務で使用するパソコンの修理費用など</td>
                </tr>
                <tr>
                <td>⑮減価償却費</td>
                <td><strong>※詳しく後述します</strong></td>
                </tr>
                <tr>
                <td>⑯雑費</td>
                <td>上記②〜⑮に当てはまらない費用&nbsp;<em>（※簡単な補足を後述します）</em></td>
                </tr>
                </tbody>
                </table>
                <p>以下、上記の中から代表的な幾つかについて、経費計上するための準備方法を（私の独自解釈を含みつつ）解説します。</p>
                <h3><span id="消耗品費安いモノ" class="fragment"></span>⑥消耗品費（≒安いモノ）</h3>
                <p>10万円未満で買った業務に関係するものは、消耗品として申告できます。</p>
                <p>私は、スプレッドシート（年単位）で収入と経費科目毎にシートを分け、計算表でSUMする形で記録してます。以下が消耗品の科目シートの内容です。</p>
                <p><a href="https://camo.qiitausercontent.com/bbe1815b6f91b0f25f6a6a168a262d4cb20da775/68747470733a2f2f71696974612d696d6167652d73746f72652e73332e61702d6e6f727468656173742d312e616d617a6f6e6177732e636f6d2f302f323136313431372f35353039666438352d656562352d646230642d326633312d3464643532333031306164642e706e67" target="_blank" rel="nofollow noopener"><img src="https://qiita-user-contents.imgix.net/https%3A%2F%2Fqiita-image-store.s3.ap-northeast-1.amazonaws.com%2F0%2F2161417%2F5509fd85-eeb5-db0d-2f31-4dd523010add.png?ixlib=rb-4.0.0&amp;auto=format&amp;gif-q=60&amp;q=75&amp;s=24b4072771d7f7c3fc0fdef3083f3060" srcset="https://qiita-user-contents.imgix.net/https%3A%2F%2Fqiita-image-store.s3.ap-northeast-1.amazonaws.com%2F0%2F2161417%2F5509fd85-eeb5-db0d-2f31-4dd523010add.png?ixlib=rb-4.0.0&amp;auto=format&amp;gif-q=60&amp;q=75&amp;w=1400&amp;fit=max&amp;s=79e9c6908e75696d1aa64a241cf23c8d 1x" alt="image.png" loading="lazy" data-canonical-src="https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/2161417/5509fd85-eeb5-db0d-2f31-4dd523010add.png" /></a></p>
                <blockquote>
                <p>補足: 上図だと「Apple Developer Program - 1年間のメンバーシップ」を消耗品にしていますが、どちらかというと AppStore のショバ代という認識なので、最新の帳簿では「仕入」科目に移動してます。<em>（どの経費をどの科目にすべきかという明確な基準が無いものについては、自分でちゃんと説明できる形になるように都度アップデートしています）</em></p>
                </blockquote>
                <p>他の経費（と収入）についても同じことが言えますが、「品目」「取引先」「取引日」「金額」が分かる帳簿に記帳（上図のような簡易簿記）しつつ、エビデンスもセットで保持する必要があります。</p>
                <p>エビデンスは領収書や請求書があればそれが一番良いですが、無いもの（事務所家賃の引き落としなど）の場合は口座引き落としやクレカ明細のスクショでも良いという話しをフリーランスの方から聞いたことがあるので、それをエビデンスとして保持します。</p>
                <p>私は経費と収入が発生した都度、4桁の伝票番号（年次）をふって、台帳と同じ Google Drive のフォルダに格納する形で保持しています。</p>
                <p><a href="https://camo.qiitausercontent.com/e2c2de915fd054ca98051009133c84d6422dd2cd/68747470733a2f2f71696974612d696d6167652d73746f72652e73332e61702d6e6f727468656173742d312e616d617a6f6e6177732e636f6d2f302f323136313431372f36633337326138612d316565652d373762382d346139622d3763313434323735366364372e706e67" target="_blank" rel="nofollow noopener"><img src="https://qiita-user-contents.imgix.net/https%3A%2F%2Fqiita-image-store.s3.ap-northeast-1.amazonaws.com%2F0%2F2161417%2F6c372a8a-1eee-77b8-4a9b-7c1442756cd7.png?ixlib=rb-4.0.0&amp;auto=format&amp;gif-q=60&amp;q=75&amp;s=d6c018b16d6f4d8bda76060ca15b2390" srcset="https://qiita-user-contents.imgix.net/https%3A%2F%2Fqiita-image-store.s3.ap-northeast-1.amazonaws.com%2F0%2F2161417%2F6c372a8a-1eee-77b8-4a9b-7c1442756cd7.png?ixlib=rb-4.0.0&amp;auto=format&amp;gif-q=60&amp;q=75&amp;w=1400&amp;fit=max&amp;s=d1761184da4ab7441c1d2a3ab6c41a29 1x" alt="image.png" loading="lazy" data-canonical-src="https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/2161417/6c372a8a-1eee-77b8-4a9b-7c1442756cd7.png" /></a></p>
                <p>こうしておけば、青色に切り替える時などにも有利になる筈です。（freeeなどに移行しやすい &amp; 事業実体として証明するためのエビデンスにもなるのではないかと想像してます）</p>
                <h3><span id="減価償却費高いモノ" class="fragment"></span>⑮減価償却費（≒高いモノ）</h3>
                <p>10万円以上の業務に関係するモノは、経費ではなく資産として計上する必要があり、資産は使い始めた月から&nbsp;<strong>月単位の定額法</strong>&nbsp;などで減価償却した金額を経費として計上できます。</p>
                <ul>
                <li>月単位の定額法:&nbsp;<code>金額 &divide; 耐用月数</code>&nbsp;で使い始めた月から&nbsp;<code>1ヶ月毎</code>&nbsp;に減価償却していく</li>
                <li>年単位の定額法:&nbsp;<code>金額 &divide; 耐用年数</code>&nbsp;で使い始めた年から&nbsp;<code>1年毎</code>&nbsp;に減価償却していく</li>
                </ul>
                <blockquote>
                <p>定額法ではなく定率法で減価償却することもできますが、多分スマホアプリでの副業では使わないと思うので解説を省略します。（今回、減価償却の説明を簡単にするために定額法を使ってますが、高額の資産の場合は定率法を使う事の方が多いかもしれません）</p>
                </blockquote>
                <p>耐用期間は、資産の種類によって異なります。（<a href="https://www.nta.go.jp/taxes/shiraberu/taxanswer/shotoku/pdf/2100_01.pdf" target="_blank" rel="nofollow noopener">参考</a>）</p>
                <blockquote>
                <p><em>「有名YouTuberがブルガリの高級腕時計を購入！」みたいな動画を見ると、「減価償却面倒くさそうだなぁ」と思ったりします。（※時計は耐用期間10年）</em></p>
                </blockquote>
                <p>なお、10万円以上20万円未満のものは、耐用期間に関係無く&nbsp;<strong>年単位 &amp; 3年間で原価償却</strong>&nbsp;することもできます。</p>
                <p>つまり、モノを調達する必要が生じた時、なるべく10万円未満（消耗品）になるように値切るか、中古品やレンタル・リースで済ませるようにして、どうしても買わなければならない時もなるべく20万円未満のモノを探すようにしましょう。</p>
                <blockquote>
                <p>多分、会社で備品調達をする時も、10万未満は課長承認、10万以上20万未満は部長承認、20万以上は事業部長承認みたいな形で、値段によって承認フローが違っていると思いますが、資産計上が面倒だからそうなっている訳です。そして、四半期ごとに決算の開示が必要な上場企業だと、パソコンの資産計上がすごく面倒だから、多少割高でも全部リースにしている会社も多いです。</p>
                <p>ちなみに、私は私物パソコンで副業している（ことにしている）ので、パソコンは経費計上してません。</p>
                </blockquote>
                <p>例１: 15万円の業務用のパソコンを購入した場合:</p>
                <ol>
                <li>購入した年に5万円を減価償却（残10万円）</li>
                <li>翌年に5万円を減価償却（残5万円）</li>
                <li>翌々年に4万9,999円を減価償却（残1円）</li>
                </ol>
                <p>例2: 24万円の業務用の非サーバー・パソコン（※48ヶ月で減価償却）を購入して6月から使い始めた場合:</p>
                <ol>
                <li>購入した年に35,000円（6月〜12月分）を減価償却（残:20.5万円）</li>
                <li>翌年に6万円（1月〜12月分）を減価償却（残:14.5万円）</li>
                <li>翌々年に6万円（1月〜12月分）を減価償却（残:8.5万円）</li>
                <li>3年後に6万円（1月〜12月分）を減価償却（残:2.5万円）</li>
                <li>4年後に24,999円（1月〜5月分）を減価償却（残:1円）</li>
                </ol>
                <p>※パソコンがサーバ用途の場合、耐用期間が60ヶ月になります。</p>
                <p>減価償却は、資産を購入した月ではなく、使い始めた月から始まります。<em>（モノは使わないとボロくならないですよね）</em></p>
                <p>また、資産は原則的に耐用期間を過ぎても1円の価値（残存簿価）を残す必要があります。<em>（ソフトウェアなどの無形資産の場合は0円にできます）</em></p>
                <p>資産の取得タイミングによって特例があったり計算方法が違ったりすることがあるので、原価償却が必要な設備投資を行った都度、<a href="https://www.nta.go.jp/taxes/shiraberu/taxanswer/shotoku/2100.htm" target="_blank" rel="nofollow noopener">「減価償却のあらまし」（国税庁）</a>を確認すると良いです。</p>
                <blockquote>
                <p>要するに減価償却は面倒くさいです。なので、10万円以上の設備投資は控えた方が良さそうです。スマホアプリの副業なら設備はほぼ不要で全て消耗品で賄えるかと思いますが、何も考えずにパソコンを経費で落とそうとするとハマる可能性が高いので注意する必要があります。</p>
                </blockquote>
                <h3><span id="事務所経費" class="fragment"></span>⑨事務所経費</h3>
                <p>多分、ここが一番重要です。</p>
                <p>何故なら、この経費額が一番大きくなるケースが多いと思われるので。</p>
                <p>自宅で副業している場合、家賃や光熱水道費の一部を事務所経費として計上できます。ただし、全額を計上することはできないので、「妥当な理屈に基づく按分」をする必要があります。</p>
                <p>私は稼働区画面積率と稼働時間率から求めた按分率を掛けた家賃金額を、事務所経費としています。</p>
                <p>例として、次の条件下での事務所経費を算出してみます:</p>
                <ul>
                <li>30平米（9.075坪）のワンルームマンションで副業を行っている</li>
                <li>マンション賃料: 月額8万円</li>
                <li>非業務使用区画（ベッドスペース+独立型バスルーム※): 合計2坪（事務所面積: 77.96%）</li>
                <li>副業に1週間（168時間）あたり平均30時間稼働（平均稼働率: 17.857%）</li>
                </ul>
                <blockquote>
                <p>トイレは業務中にも使うので、ユニットバスタイプの物件であればバスルームも業務区画にして良いと思います。この辺は物件の種類によりけりで比率が変わってくる筈ですし、「ベッドで寝っ転がって仕事もしていることもあるのでベッドスペースも業務区画である」という理屈もあり得るかもしれません。</p>
                </blockquote>
                <p>この場合、80,000円 &times; 12ヶ月 &times; 77.96% &times; 17.857% ≒&nbsp;<strong>133,644円</strong>&nbsp;を事務所家賃として計上します。（更新料を支払った場合、それは前払費用として契約月数で割った額に按分率を掛けた金額を毎月経費計上する減価償却みたいな形にします）</p>
                <p>また、光熱水道費については、「勤務日数相当分を日割り計算した上で、その２分の１を業務使用部分とみなす」という簡便法が国税庁から認められているので、上記の例では光熱水道費の 8.9285%（17.857%&divide;2）を経費計上します。</p>
                <blockquote>
                <p>国税庁の見解では「日数の日割り計算」でOKなので、按分率8.9285%（17.857%&divide;2）だと経費額として過小になりますが、経費調整が必要なタイミングで国税庁見解を上限に按分率調整するバッファ用に若干過小に倒しておきます。決算のタイミングではもう追加費用を計上できないので、こういったバッファリングが結構役に立ちそうだと考えています。もちろん、最初から費用上限MAXを狙う姿勢でも良いと思います。</p>
                </blockquote>
                <p>当然ですがエビデンスも記録する必要があります。</p>
                <p>私は家賃と水道費については口座引き落とし時の通帳アプリのスクショ、クレジットカード決済している電気代とガス代についてはクレジットカードのWeb明細のスクショをエビデンスにしています。</p>
                <p>かなり、細かいこと（どこまでを業務区画とするかetc）を言っているように見えるかもしれませんが、恐らくアプリ副業だと事務所経費が一番高い経費になり、高いということは税務署から質問される可能性があるかもしれないので、質問された時に客観的に妥当性のある理屈をよどみなく説明できるように理論武装しておくことで、スムースな確定申告が可能になるものと想定しています。</p>
                <p>なお、賃貸住宅の場合、「事務所不可」「SOHO不可」という物件が多いですが、大半の賃貸住宅は「近隣住民に迷惑が掛からない」「法人登記しない」「ポストに商号等を設置しない」「不特定多数の人が出入りしない」「住宅としての利用実体が主」あたりの条件を満たすことができれば、事務所とすることが出来るものと思われます。（<a href="https://sumai-kyokasho.net/home-office-rent/" target="_blank" rel="nofollow noopener">参考</a>）</p>
                <blockquote>
                <p><em>というか、そうじゃないと賃貸勢はそもそもテレワークすらできない事になる筈。</em></p>
                <p>なお、給与所得者がテレワークして自宅を週40時間程度事務所として使用している実態があっても、自宅の家賃や光熱水道費の一部（40/168）を事務所経費とすることはできません。（<a href="https://news.yahoo.co.jp/byline/ozawazenya/20210118-00217821" target="_blank" rel="nofollow noopener">参考</a>）</p>
                <p>もちろん、給与所得者ではなくてフリーランス（自営型テレワーク）であれば、厚生労働省の見解によると按分家賃を事務所経費として申告できます。（<a href="https://homeworkers.mhlw.go.jp/faq/faq_tax.html" target="_blank" rel="nofollow noopener">参考</a>）</p>
                </blockquote>
                <h3><span id="広告宣伝費" class="fragment"></span>⑪広告宣伝費</h3>
                <p>確定申告するのも中々面倒ですが、雑所得がギリギリ20万円を超えてしまいそうな場合や総所得額を調整したい場合、無理に接待交際費や消耗品で調整するのはナンセンスというか、少なくとも将来の売上upには寄与しない（と断言はできないかもしれませんが少なくとも合理的ではない）と思われます。</p>
                <p>という訳で、Google広告やFacebook広告なら少額からでも広告出稿できるので、アプリを広告出稿して宣伝広告費を積めば簡単＆合理的に経費コントロールできると思われます。</p>
                <p>なお、当然期中（1月〜12月）の間に経費発生させなければいけないですし、広告も出してすぐに予算消化できないこともある（且つ12月は年末セールで大口の広告出稿も多くオークションに負けやすいかもしれない）ので、決算タイミングでの所得を予測して2〜11月あたりで（決算直前直後の月を避けて）広告出稿するのが良いかもしれません。</p>
                <h3><span id="雑費" class="fragment"></span>⑯雑費</h3>
                <p>定義が中途半端な<em>（〜以外の全て...みたいな）</em>科目は基本的にトラップだと思います。</p>
                <p>なので、不可避な理由が無い限り、雑費での経費計上は避けた方が良いと思われます。（恐らく税務署からリジェクトされます）</p>
                <p>雑費は、減価償却が終わった有形資産を破棄（除去）する時の残存簿価（1円）を計上する時などに使います。（※減価償却中の資産を破棄する時には使えません）</p>
                <h1><span id="まとめ" class="fragment"></span>まとめ</h1>
                <ul>
                <li>副業は雑所得として確定申告
                <ul>
                <li>雑所得 = 収益 -&nbsp;<strong>経費</strong></li>
                <li>確定申告が必要なケース =&nbsp;<strong>雑所得</strong>（利益）が20万円を超える場合</li>
                <li>赤字申告はできない（給与所得の所得税還付は出来ない）</li>
                </ul>
                </li>
                <li>経費の把握が肝要
                <ul>
                <li>経費は発生したタイミングでエビデンスとセットで帳簿に記載＆保持</li>
                <li>10万円未満の備品は消耗品（全額経費で落とせる）</li>
                <li>10万円以上の備品は資産（減価償却が必要なので面倒くさい）</li>
                <li>個人がスマホアプリで副業する場合、恐らく最大の経費は事務所（自宅）家賃</li>
                <li>利益コントロールしたい場合は、広告出稿して宣伝広告費で調整</li>
                <li>雑費は原則計上しない</li>
                </ul>
                </li>
                </ul>
            ',
            'describe' => 'コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。',
            'user_id' => '1',
        ]);

        Post::create([
            'title' => 'GitHub Actionsで複数のPHPのバージョンとOSでまとめてPHPUnitを動かしてみる',
            'price' => '500',
            'body' =>
            '<p>PHPのライブラリなどを開発しているとPHP7.4 / 8.0 / 8.1 on Linux / macOS / Windowsのように複数の環境の組み合わせでテストを実行したい事があると思います。<br />手元でこれらの環境を作って毎回テストするのはあまりにも効率が悪いので、今回はGitHub Actionsを使って複数の環境でまとめてテストを実行できるようにしてみました。</p>
            <h2><span id="用意するもの" class="fragment"></span>用意するもの</h2>
            <ul>
            <li>手元でPHPUnitが動くようになっているプロジェクト</li>
            <li>GitHubのレポジトリ(publicでもprivateでもよい)</li>
            <li><code>composer.json</code>が存在して<code>composer install</code>で必要なライブラリが揃う状態になっているプロジェクト</li>
            </ul>
            <h2><span id="github-actionsの設定を入れる" class="fragment"></span>GitHub Actionsの設定を入れる</h2>
            <p><code>.github/workflows/phpunit.yml</code>&nbsp;に以下のYAMLファイルを配置します。おしまい！</p>
            <p><strong>とても簡単ですね。</strong></p>
            <p>今回は、Ubuntu(Linux)とWindowsとmacOSでPHP7.4と8.0と8.1を動かす設定を入れてみます。</p>
            <div class="code-frame" data-lang="yml">
            <div class="code-lang"><span class="bold">.github/workflows/phpunit.yml</span></div>
            <div class="code-copy">&nbsp;</div>
            <div class="highlight">
            <pre><code><span class="na">name</span><span class="pi">:</span> <span class="s">tests</span>
            <span class="na">on</span><span class="pi">:</span>
              <span class="na">push</span><span class="pi">:</span>
                <span class="na">branches</span><span class="pi">:</span>
                  <span class="pi">-</span> <span class="s">main</span>
              <span class="na">pull_request</span><span class="pi">:</span>
                <span class="na">types</span><span class="pi">:</span>
                  <span class="pi">-</span> <span class="s">opened</span>
                  <span class="pi">-</span> <span class="s">synchronize</span>
                  <span class="pi">-</span> <span class="s">reopened</span>
            <span class="na">jobs</span><span class="pi">:</span>
              <span class="na">phpunit</span><span class="pi">:</span>
                <span class="na">name</span><span class="pi">:</span> <span class="s">PHPUnit (PHP ${{ matrix.php-versions }} on ${{ matrix.operating-system }})</span>
                <span class="na">runs-on</span><span class="pi">:</span> <span class="s">${{ matrix.operating-system }}</span>
                <span class="na">strategy</span><span class="pi">:</span>
                  <span class="na">fail-fast</span><span class="pi">:</span> <span class="no">false</span>
                  <span class="na">matrix</span><span class="pi">:</span>
                    <span class="na">operating-system</span><span class="pi">:</span> <span class="pi">[</span> <span class="nv">ubuntu-latest</span><span class="pi">,</span> <span class="nv">windows-latest</span><span class="pi">,</span> <span class="nv">macos-latest</span> <span class="pi">]</span>
                    <span class="na">php-versions</span><span class="pi">:</span> <span class="pi">[</span> <span class="s1">\'</span><span class="s">7.4\'</span><span class="pi">,</span> <span class="s1">\'</span><span class="s">8.0\</span><span class="pi">,</span> <span class="s1">\'</span><span class="s">8.1\'</span> <span class="pi">]</span>
                <span class="na">steps</span><span class="pi">:</span>
                  <span class="pi">-</span> <span class="na">name</span><span class="pi">:</span> <span class="s">Checkout</span>
                    <span class="na">uses</span><span class="pi">:</span> <span class="s">actions/checkout@v2</span>

                  <span class="c1"># Docs: https://github.com/shivammathur/setup-php</span>
                  <span class="pi">-</span> <span class="na">name</span><span class="pi">:</span> <span class="s">Setup PHP</span>
                    <span class="na">uses</span><span class="pi">:</span> <span class="s">shivammathur/setup-php@v2</span>
                    <span class="na">with</span><span class="pi">:</span>
                      <span class="na">php-version</span><span class="pi">:</span> <span class="s">${{ matrix.php-versions }}</span>
                      <span class="na">extensions</span><span class="pi">:</span> <span class="s">mbstring, dom, fileinfo, simplexml</span>
                      <span class="na">coverage</span><span class="pi">:</span> <span class="s">xdebug</span>

                  <span class="pi">-</span> <span class="na">name</span><span class="pi">:</span> <span class="s">Get composer cache directory</span>
                    <span class="na">id</span><span class="pi">:</span> <span class="s">composer-cache</span>
                    <span class="na">run</span><span class="pi">:</span> <span class="s">echo "::set-output name=dir::$(composer config cache-files-dir)"</span>

                  <span class="pi">-</span> <span class="na">name</span><span class="pi">:</span> <span class="s">Cache composer dependencies</span>
                    <span class="na">uses</span><span class="pi">:</span> <span class="s">actions/cache@v2</span>
                    <span class="na">with</span><span class="pi">:</span>
                      <span class="na">path</span><span class="pi">:</span> <span class="s">${{ steps.composer-cache.outputs.dir }}</span>
                      <span class="na">key</span><span class="pi">:</span> <span class="s">${{ runner.os }}-composer-${{ hashFiles(\'**/composer.lock\') }}</span>
                      <span class="na">restore-keys</span><span class="pi">:</span> <span class="s">${{ runner.os }}-composer-</span>

                  <span class="pi">-</span> <span class="na">name</span><span class="pi">:</span> <span class="s">Install Composer dependencies</span>
                    <span class="na">run</span><span class="pi">:</span> <span class="s">composer install --no-progress --prefer-dist --optimize-autoloader</span>

                  <span class="pi">-</span> <span class="na">name</span><span class="pi">:</span> <span class="s">Test with PHPUnit</span>
                    <span class="na">run</span><span class="pi">:</span> <span class="s">vendor/bin/phpunit --testdox --colors=always</span>
            </code></pre>
            </div>
            </div>
            <p>実際に動かしてみると、このような形で実行されます。</p>
            <p><a href="https://camo.qiitausercontent.com/3819321d795312c9e1819dc729c469faa36a2542/68747470733a2f2f71696974612d696d6167652d73746f72652e73332e61702d6e6f727468656173742d312e616d617a6f6e6177732e636f6d2f302f34313734332f64633664613630352d626636302d643134322d636462392d3134383535363665316533302e706e67" target="_blank" rel="nofollow noopener"><img src="https://qiita-user-contents.imgix.net/https%3A%2F%2Fqiita-image-store.s3.ap-northeast-1.amazonaws.com%2F0%2F41743%2Fdc6da605-bf60-d142-cdb9-1485566e1e30.png?ixlib=rb-4.0.0&amp;auto=format&amp;gif-q=60&amp;q=75&amp;s=066a9cdac1d769e3c101e0295aed8bc1" srcset="https://qiita-user-contents.imgix.net/https%3A%2F%2Fqiita-image-store.s3.ap-northeast-1.amazonaws.com%2F0%2F41743%2Fdc6da605-bf60-d142-cdb9-1485566e1e30.png?ixlib=rb-4.0.0&amp;auto=format&amp;gif-q=60&amp;q=75&amp;w=1400&amp;fit=max&amp;s=1738a17e4510a7a92814270ad49c0679 1x" alt="image.png" loading="lazy" data-canonical-src="https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/41743/dc6da605-bf60-d142-cdb9-1485566e1e30.png" /></a></p>
            <h2><span id="さいごに" class="fragment"></span>さいごに</h2>
            <p>Public Repositoryの場合はActionsを無料で使用する事ができますが、Privateの場合は無料枠を超える場合は追加で課金が必要なので注意が必要です。</p>
            <p><a href="https://camo.qiitausercontent.com/863c4979a84aaf5c867b2b4dcb8f0be1b2e9a034/68747470733a2f2f71696974612d696d6167652d73746f72652e73332e61702d6e6f727468656173742d312e616d617a6f6e6177732e636f6d2f302f34313734332f30666432386439302d646333342d633736312d623764332d3963333039656332653463392e706e67" target="_blank" rel="nofollow noopener"><img src="https://qiita-user-contents.imgix.net/https%3A%2F%2Fqiita-image-store.s3.ap-northeast-1.amazonaws.com%2F0%2F41743%2F0fd28d90-dc34-c761-b7d3-9c309ec2e4c9.png?ixlib=rb-4.0.0&amp;auto=format&amp;gif-q=60&amp;q=75&amp;s=08f6aa025ec8c96a29216873c4df67a2" srcset="https://qiita-user-contents.imgix.net/https%3A%2F%2Fqiita-image-store.s3.ap-northeast-1.amazonaws.com%2F0%2F41743%2F0fd28d90-dc34-c761-b7d3-9c309ec2e4c9.png?ixlib=rb-4.0.0&amp;auto=format&amp;gif-q=60&amp;q=75&amp;w=1400&amp;fit=max&amp;s=3cee903d9407739bbe4a039e281fd11c 1x" alt="image.png" loading="lazy" data-canonical-src="https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/41743/0fd28d90-dc34-c761-b7d3-9c309ec2e4c9.png" /></a></p>
            <p><a class="autolink" href="https://github.com/settings/billing" target="_blank" rel="nofollow noopener">https://github.com/settings/billing</a>&nbsp;から見ることが出来るので、使いすぎてないかよく見ておきましょう！(特にこのように複数環境で同時に実行する場合は)</p>
            <p>ちなみに、macOSとWindows環境は少々割高(クォータの消費時間はWindowsの場合は2倍で、macOSの場合は10倍でカウントなので)使いすぎには注意が必要です。</p>
            ',
            'describe' => 'コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。',
            'user_id' => '2',
        ]);

        Post::create([
            'title' => 'JavaScriptの繰り返し処理（for,map）',
            'price' => '5000',
            'body' => '
                <h2>JavaScriptの繰り替え処理について</h2>
                <h3><span id="for文とは" class="fragment"></span>　for文とは</h3>
                <p>for文によるループは指定された条件がfalseと評価されるまで繰り返されます。JavaScriptのforループはJavaやC言語のforループと同じです。</p>
                <div class="code-frame" data-lang="js">
                <div class="code-copy">&nbsp;</div>
                <div class="highlight">
                <pre><code>
                <span class="kd">const</span> <span class="nx">arr</span> <span class="o">=</span> <span class="p">[</span><span class="dl">"</span><span class="s2">日本</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">米国</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">英国</span><span class="dl">"</span><span class="p">];</span>
                <span class="k">for</span> <span class="p">(</span><span class="kd">let</span> <span class="nx">i</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span> <span class="nx">i</span> <span class="o">&lt;</span> <span class="nx">arr</span><span class="p">.</span><span class="nx">length</span><span class="p">;</span> <span class="nx">i</span><span class="o">++</span><span class="p">)</span> <span class="p">{</span>
                <span class="nx">console</span><span class="p">.</span><span class="nx">log</span><span class="p">(</span><span class="nx">arr</span><span class="p">[</span><span class="nx">i</span><span class="p">]);</span>
                <span class="p">}</span>
                <span class="c1">//=&gt; "日本"</span>
                <span class="c1">//=&gt; "米国"</span>
                <span class="c1">//=&gt; "英国"</span>
                </code></pre>
                </div>
                </div>
                <p>forループが実行されるときに次の処理が行われます。</p>
                <div class="code-frame" data-lang="text">
                <div class="code-copy">&nbsp;</div>
                <div class="highlight">
                <pre><code>for([初期化式];[条件式];[加算式])
                </code></pre>
                </div>
                </div>
                <ul>
                <li>初期化式が実行されます。この式は通常、一個またはそれ以上のループカウンターを初期化しますが、この構文ではいかなるレベルの複雑な式を入れることができます。初期化式で変数を宣言することができます。</li>
                <li>条件式が評価されます。条件式の値がtrueの場合、ループ文が実行されます。条件式の値がfalseの場合、for ループは終了します。条件式がすべて省略されている場合、条件式は真であると仮定されます。</li>
                <li>文が実行されます。複数の文を実行するには、それらの文をグループ化するためにブロック文 ({ ... }) を使用します。</li>
                <li>もしあれば、加算式が実行されます。</li>
                </ul>
                <h2><span id="for-in" class="fragment"></span>for-in</h2>
                <p>次はfor-inで、これはあまり使ったことがないのですがオブジェクトの中身などを取り出したいときに使用されるみたいです。</p>
                <div class="code-frame" data-lang="js">
                <div class="code-copy">&nbsp;</div>
                <div class="highlight">
                <pre><code><span class="kd">const</span> <span class="nx">obj</span> <span class="o">=</span> <span class="p">{</span>
                <span class="na">name</span><span class="p">:</span> <span class="dl">"</span><span class="s2">Luffy</span><span class="dl">"</span><span class="p">,</span>
                <span class="na">age</span><span class="p">:</span> <span class="mi">19</span>
                <span class="p">}</span>

                <span class="k">for</span><span class="p">(</span><span class="kd">let</span> <span class="nx">key</span> <span class="k">in</span> <span class="nx">obj</span><span class="p">)</span> <span class="p">{</span>
                <span class="nx">console</span><span class="p">.</span><span class="nx">log</span><span class="p">(</span><span class="nx">key</span> <span class="o">+</span> <span class="dl">"</span><span class="s2">:</span><span class="dl">"</span> <span class="o">+</span> <span class="nx">obj</span><span class="p">[</span><span class="nx">key</span><span class="p">]);</span>
                <span class="p">}</span>
                <span class="c1">//=&gt; "name:Luffy"</span>
                <span class="c1">//=&gt; "age:19"</span>
                </code></pre>
                </div>
                </div>
                <p>for (変数 in オブジェクト)とすれば<br />オブジェクトのプロパティの数だけ繰り返してくれます。</p>
                <h2><span id="for-of" class="fragment"></span>for-of</h2>
                <p>for...of 文は、反復可能オブジェクト、たとえば組込みの String, Array, 配列状オブジェクト (例えば arguments や NodeList), TypedArray, Map, Set, およびユーザー定義の反復可能オブジェクトなどに対して、反復的な処理をするループを作成します。これはオブジェクトのそれぞれの識別可能なプロパティの値に対して、実行される文を表す独自の反復フックを呼び出します。</p>
                <div class="code-frame" data-lang="js">
                <div class="code-copy">&nbsp;</div>
                <div class="highlight">
                <pre><code><span class="kd">const</span> <span class="nx">numbers</span> <span class="o">=</span> <span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">2</span><span class="p">,</span><span class="mi">3</span><span class="p">,</span><span class="mi">4</span><span class="p">,</span><span class="mi">5</span><span class="p">,</span><span class="mi">6</span><span class="p">];</span>

                <span class="k">for</span> <span class="p">(</span><span class="kd">let</span> <span class="nx">number</span> <span class="k">of</span> <span class="nx">numbers</span><span class="p">)</span> <span class="p">{</span>
                <span class="nx">console</span><span class="p">.</span><span class="nx">log</span><span class="p">(</span><span class="nx">number</span><span class="p">);</span>
                <span class="p">}</span>

                <span class="c1">//=&gt; 1</span>
                <span class="c1">//=&gt; 2</span>
                <span class="c1">//=&gt; 3</span>
                <span class="c1">//=&gt; 4</span>
                <span class="c1">//=&gt; 5</span>
                <span class="c1">//=&gt; 6</span>
                </code></pre>
                </div>
                </div>
                <h2><span id="foreach" class="fragment"></span>forEach</h2>
                <p>最後はforeachですがこれは配列に対してつかえます。</p>
                <div class="code-frame" data-lang="js">
                <div class="code-copy">&nbsp;</div>
                <div class="highlight">
                <pre><code>
                <span class="kd">const</span> <span class="nx">obj</span> <span class="o">=</span> <span class="p">[</span>
                <span class="p">{</span>
                    <span class="na">id</span><span class="p">:</span> <span class="mi">1</span><span class="p">,</span>
                    <span class="na">name</span><span class="p">:</span> <span class="dl">"</span><span class="s2">zoro</span><span class="dl">"</span>
                <span class="p">},</span>
                <span class="p">{</span>
                    <span class="na">id</span><span class="p">:</span> <span class="mi">2</span><span class="p">,</span>
                    <span class="na">name</span><span class="p">:</span> <span class="dl">"</span><span class="s2">sanzi</span><span class="dl">"</span>
                <span class="p">}</span>
                <span class="p">];</span>

                <span class="nx">obj</span><span class="p">.</span><span class="nx">forEach</span><span class="p">(</span> <span class="kd">function</span><span class="p">(</span> <span class="nx">value</span> <span class="p">)</span> <span class="p">{</span>
                    <span class="nx">console</span><span class="p">.</span><span class="nx">log</span><span class="p">(</span> <span class="nx">value</span><span class="p">.</span><span class="nx">name</span> <span class="p">);</span>
                <span class="p">});</span>

                <span class="c1">//=&gt; zoro</span>
                <span class="c1">//=&gt; sanzi</span>
                </code></pre>
                </div>
                </div>
                <h2><span id="map" class="fragment"></span>map</h2>
                <p>決まった繰り返し処理はforですが、JavaScriptのES6以降ではmap関数を使用することでコードの短縮ができます。<br />map()メソッドは、与えられた関数を配列の全ての要素に対して呼び出し、その結果からなる新しい配列を生成します。</p>
                <p>mapは、与えられたcallback関数（注意として、コールバックは 非同期 命令が完了した後に続いてコードが実行されます）を配列の順番通りに、各要素に対して一度ずつ呼び出し、その結果から新しい配列を生成します。callbackは、値が代入されている配列の要素に対してのみ呼び出されます。<br />mapは新しい配列を生成するので、返された配列を使わない場合、mapを使うのはパターンに合いません。代わりに、forEachまたは、for-ofを使用してください。</p>
                <div class="code-frame" data-lang="js">
                <div class="code-copy">&nbsp;</div>
                <div class="highlight">
                <pre><code><span class="kd">const</span> <span class="nx">array</span> <span class="o">=</span> <span class="p">[</span><span class="mi">1</span><span class="p">,</span> <span class="mi">4</span><span class="p">,</span> <span class="mi">9</span><span class="p">,</span> <span class="mi">16</span><span class="p">].</span><span class="nx">map</span><span class="p">(</span><span class="nx">x</span> <span class="o">=&gt;</span> <span class="nx">x</span> <span class="o">*</span> <span class="mi">2</span><span class="p">);</span>

                <span class="nx">console</span><span class="p">.</span><span class="nx">log</span><span class="p">(</span><span class="nx">array</span><span class="p">);</span>

                <span class="c1">//=&gt; [2, 8, 18, 32]</span>
                </code></pre>
                </div>
                </div>
                <h2><span id="まとめ" class="fragment"></span>　まとめ</h2>
                <p>今日は繰り返し処理の一部について書かせて頂きました。明日はFindについて書こうと思います。</p>
            ',
            'describe' => 'コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。',
            'user_id' => '3',
        ]);

        Post::create([
            'title' => '懐かしさ全開の初代ポケモンガチャアプリを Next.js で作ってみた',
            'price' => '10000',
            'body' => '
            20代後半から40代ぐらいの人は心がホカホカすること請け合いです！

                ゲームボーイの UI でポケモンをガチャガチャしたり、ポケモン図鑑機能があったりするアプリを作りました！

                完成物

                URL : https://poke-gacha-ver-2-0.vercel.app
                GitHub : https://github.com/mitochon9/poke-gacha-ver.2.0

                作った経緯

                Next.js で API を叩いて何か作りたいなーと思っていたところ、 PokeAPI なんてものがあるよ！って聞いて作りました。

                1回目の制作はディスプレイ部分だけで、なおかつバグだらけだったのですが、色々学習・開発して今ならもっとうまく作れるんじゃないかとカムバック制作しました。

                仕様・画面遷移図
                ゲームボーイのボタンのみで全操作ができる
                ゲームボーイのデザインは CSS で実装（ローカルの画像はトップのレッドとヒトカゲ、モンスターボールのみ）
                ガチャ中は他の操作を受け付けない
                ガチャ結果画面で A ボタンを押すことで再度ガチャ実行する
                抽選で選ばれたポケモンのデータは localStorage に保存され、ユーザーが削除できるようにする
                ポケモン図鑑は十字キーを押すことで画面スクロールできる
                画面遷移図のルート以外での意図しない動作をしない

                素材画像はひこちゃんず！から使用させていただきました。

                使用技術
                Next.js ( React )
                TypeScript
                Tailwind CSS
                見た目部分の実装

                こだわった部分を抜粋して紹介します！

                デザインは CSS で実装しました。 用意した画像はトップ画面のレッド、ヒトカゲ、モンスターボールのみです。

                ホンモノのゲームボーイ画像（ Nintendo のサイトに飛びます）

                フォント

                Google Fonts で DotGothic16 といったフォントを採用しました。

                レトロなゲームボーイの世界観にぴったりなフォントです。

                Tailwind CSS でのフォントの設定は下記のようにすればできます。

                tailwind.config.js



                module.exports = {
                ...
                theme: {
                    extend: {
                    fontFamily: {
                        kalam: ["Kalam"],
                        dot: ["DotGothic16, sans-serif"],
                    },
                    },
                },
                ...
                };

                globals.css



                @import url("https://fonts.googleapis.com/css2?family=Kalam:wght@700&display=swap");
                @import url("https://fonts.googleapis.com/css2?family=DotGothic16&display=swap");

                @tailwind base;
                @tailwind components;
                @tailwind utilities;

                ...

                GAMEBOY COLOR のロゴ部分

                色んな人に「画像だと思った！」と言われた部分です。

                自分でも良くできたんじゃないかとニヤニヤしています。

                GAME BOY の部分は italic でそれっぽくしています。

                COLOR の部分は Kalam といったフォントを採用しました。



                //DisplayLogo.tsx

                export const DisplayLogo = () => (
                <div className="flex relative z-10 justify-center -mt-11 text-2xl italic font-bold text-gray-200">
                    <span className="mr-2">GAME BOY</span>
                    <div className="mt-1 font-karam">
                    <span className="text-[#FB4E8B]">C</span>
                    <span className="text-[#AE97F1]">O</span>
                    <span className="text-[#BBE880]">L</span>
                    <span className="text-[#FAEB67]">O</span>
                    <span className="text-[#8CD0FF]">R</span>
                    </div>
                </div>
                );

                ゲームボーイ右下のスピーカー部分

                こんな細かい部分いっか…と最初は思っていたのですが、やるんならしっかりやるか！と作りました。

                最初は60個の空文字配列を手書きで作っていたのですが、効率的じゃないな…と感じて変更しました。

                画面表示時に for 文で60個の空文字配列 → [ ’’ , ’’ , ’’ , ... ] を作り map() 関数で並べています。



                // Speaker.tsx

                import { useCallback, useEffect, useState } from "react";

                export const Speaker = () => {
                const [volumeHole, setVolumeHole] = useState<string[]>([]);

                // 60個の空文字の配列を作る
                const createVolumeHole = useCallback(() => {
                    for (let index = 0; index < 60; index++) {
                    setVolumeHole((volumeHole) => [...volumeHole, ""]);
                    }
                }, []);

                // 画面表示時に空文字の配列を作る関数を実行
                useEffect(() => {
                    createVolumeHole();
                }, []);

                return (
                    <div className="absolute right-3 -bottom-2 -rotate-12">
                    <div className="grid grid-cols-8 grid-rows-[8] gap-[2px] w-20 h-20">
                        {volumeHole.map((item, index) => (
                        <div
                            key={index}
                            className={`w-1 h-1 rounded-full bg-gray-600 ${
                            index === 0 || index === 54
                                ? // 左上角、左下角の場合
                                "col-start-2"
                                : index === 5 || index === 59
                                ? // 右上角、左下角の場合
                                "col-span-2"
                                : // それ以外
                                "col-span-1"
                            }`}
                        >
                            {item}
                        </div>
                        ))}
                    </div>
                    </div>
                );
                };

                モンスターボールのアニメーション

                CSS アニメーションで作りました。

                あまり CSS アニメーションに慣れていなかったので地道に設定していきましたが、動きを想像して作れる人はすごいですね…。

                globals.css



                .ball-animation {
                animation: shake 2s linear;
                }

                @keyframes shake {
                0% {
                    transform: rotate(-30deg);
                }
                10% {
                    transform: rotate(30deg);
                }
                20% {
                    transform: rotate(-30deg);
                }
                30% {
                    transform: rotate(-30deg);
                }
                40% {
                    transform: rotate(30deg);
                }
                50% {
                    transform: rotate(-30deg);
                }
                60% {
                    transform: rotate(-30deg);
                }
                65% {
                    transform: rotate(0deg);
                }
                70% {
                    transform: rotate(30deg);
                }
                75% {
                    transform: rotate(-30deg);
                }
                80% {
                    transform: rotate(-30deg);
                }
                100% {
                    transform: rotate(-30deg);
                }
                }

                ガチャ結果画面

                ポケモン図鑑はなるべく本家に近づけるように作りました！

                ホンモノの画像（ Gigazine のポケモン図鑑ジェネレーター紹介ページ）

                ↑ ポケモン図鑑ジェネレーター、アイデアがすごいなと思いました！（現在はリンクが切れているようです）

                Gigazine は職場の近くに会社があって、いつも憧れの眼差しを向けながら前を通るので、Gigazine に掲載されるようなプロダクトを作りたいです！（欲を言うならこのアプリで掲載されたい）

                配置に関しては grid で配置するのが便利でした。

                grid は Internet Explorer 以外のブラウザで全て対応しているんですね！（さよなら IE ）

                参考： grid #ブラウザーの互換性

                grid で実装するとコード量が減って構造が把握しやすいのもいいですね。（ FlexBox の場合、どうしても div が増えてしまう）



                <div className="grid grid-cols-7">
                <div className="col-span-3">
                    画像
                </div>

                <div className="col-span-4">
                    データ
                </div>

                <div className="col-span-7">
                    区切り線
                </div>

                <div className="col-span-7">
                    説明文
                </div>
                </div>


                真ん中の線の上の “□” は空文字の配列を map() 関数で並べて position: absolute で位置調節しました！



                <div className="relative col-span-7 mt-2 w-full border-2 border-gray-600">
                    <div className="flex absolute top-[-7px] col-span-7 justify-around w-full">
                        {["", "", "", "", "", "", "", "", ""].map((item, index) => (
                            <div
                                key={index}
                                className={`z-10 w-[14px] h-[14px]  ${index === 4 ? "" : "bg-amber-50 border border-gray-700"} `}
                            >
                                {item}
                            </div>
                        ))}
                    </div>
                </div>

                機能の実装
                画面遷移

                useState の boolean によって画面の出し分けをしています。

                props のバケツリレーにならないように recoil での状態管理をしています。



                // Display.tsx

                ...

                {isAnimation ? (
                <MonsterBallAnimation />
                ) : isPokedex ? (
                <Pokedex />
                ) : isResultDisplay ? (
                <ResultDisplay />
                ) : isDeletionConfirmation ? (
                <DeletionConfirmation />
                ) : isDeletionCompleted ? (
                <DeletionCompleted />
                ) : (
                <TopDisplay />
                )}

                ...

                ボタンクリック時の挙動

                ゲームボーイのボタンごとに機能を持たせています

                A ボタン
                ガチャ実行画面へ遷移
                図鑑削除決定
                B ボタン
                キャンセル・画面バック
                Select ボタン
                ポケモン図鑑へ遷移
                Start ボタン
                削除確認画面へ遷移
                十字キー上下
                ポケモン図鑑でのディスプレイ上下スクロール

                B ボタン・ Select ボタン・Start ボタンの機能は boolean の切り替えです。

                十字キーボタンの機能についてはポケモン図鑑機能部分で後述します。

                A ボタンの機能の出し分け

                削除確認画面、削除完了画面、それ以外と状態によって機能を切り替えています。



                const handlePressA = useCallback(() => {
                    if (isDeletionConfirmation) {
                    // localStorage のデータ削除の処理
                            ...
                    return;
                    }

                    if (isDeletionConfirmation) {
                    // 「削除しました」のレスポンスとしての挙動。トップ画面へ遷移する
                            ...
                    return;
                    }

                    // isDeletionConfirmation , isDeletionConfirmation のどちらでもない場合に、モンスターボールのアニメーション画面へ遷移する
                        ...
                    }, [...]);

                ガチャ機能

                アニメーション

                A ボタンクリック後、

                1〜151 の数値抽選 + 2秒間のアニメーション（ isAnimation === true ）

                ↓

                setTimeout() でアニメーション後、結果を表示（ isAnimation === false , isResultDisplay === true ）

                といった流れで実装しています。

                Math.random() 部分の書き方は MDN で2つの値の間のランダムな整数を得るを参考にしました。



                const handlePressA = useCallback(() => {
                    ...

                    // モンスターボールのアニメーション画面へ遷移
                    setIsAnimation(true);
                    // 1 〜 151 の数値をランダムに抽選
                    const lotteryNumber = Math.floor(Math.random() * (151 - 1) + 1);
                    setPokemonId(lotteryNumber);

                    // 2秒後にガチャ結果画面を表示
                    const timer = setTimeout(() => {
                    setIsAnimation(false);
                    setIsResultDisplay(true);
                    }, 2000);
                    return () => clearTimeout(timer);

                PokeAPI の API を叩いてデータ取得

                抽選で選ばれた数値を受け取ってデータを返すカスタムフックを SWR で作成しました。

                PokeAPI では英語と日本語でそれぞれ API の URL が違ったので2つ分作りました。



                // usePokeApi.tsx

                import { fetcher } from "src/utils/fetcher";
                import useSWR from "swr";

                export const usePokeApi = (pokemonId: number | undefined) => {
                const { data, error } = useSWR(
                    `https://pokeapi.co/api/v2/pokemon/
                ${pokemonId}`,
                    fetcher
                );

                if (!pokemonId) {
                    return [];
                }
                return {
                    data,
                    error,
                    isLoading: !data && !error,
                };
                };

                export const useJapanesePokeApi = (pokemonId: number | undefined) => {
                const { data, error } = useSWR(
                    `https://pokeapi.co/api/v2/pokemon-species/
                ${pokemonId}`,
                    fetcher
                );

                if (!pokemonId) {
                    return [];
                }
                return {
                    data,
                    error,
                    isLoading: !data && !error,
                };
                };


                カスタムフックで取得したデータを表示させます。



                // ResultDisplay.tsx

                const pokemonId = useRecoilValue(pokemonIdState);

                // TypeScript 学習中で any 残存です…
                // カスタムフックでデータを取得
                const { data, error, isLoading }: any = usePokeApi(pokemonId);
                const {
                    data: japaneseData,
                    error: japaneseDataError,
                    isLoading: isJapaneseDataLoading,
                }: any = useJapanesePokeApi(pokemonId);

                const pokeImg = `https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/${pokemonId}.png`;

                ...

                // モンスターボールのアニメーションが終わってもデータ取得ができていない場合にモンスターボールの画像を表示する
                if (isLoading || isJapaneseDataLoading) {
                    return (
                    <div className="flex justify-center items-center w-auto h-60">
                        <Image src="/monsterBall.png" alt="モンスターボール" width={60} height={60} className="rotate-[-30deg]" />
                    </div>
                    );
                }

                if (error || japaneseDataError) {
                    return <div className="w-auto h-60">データの取得に失敗しました</div>;
                }

                return (
                    // データ取得できていたら表示

                ガチャ抽選後の localStorage へのデータ保存

                最初は Cookie にデータを保存しようとしたのですが、 Cookie では保存容量が 4KB ということでデータが数個しか保存できなかったので localStorage に変更しました。



                // ResultDisplay.tsx

                // localStorage のデータを取得
                const storageData = localStorage.getItem("storageData");
                // JSON 形式に変換
                const parsedStorageData = storageData ? JSON.parse(storageData) : [];

                const [pokemonData, setPokemonData] = useState(parsedStorageData ? parsedStorageData : []);

                const setFields = useCallback(() => {
                    if (data && japaneseData && pokemonId) {
                    // pokemonData に抽選で選ばれたデータを配列に追加する処理
                    setPokemonData((pokemonData: PokemonData) => [
                        ...pokemonData,
                        {
                        id: data?.id,
                        name: japaneseData?.names[0]?.name,
                        genus: japaneseData?.genera[0]?.genus,
                        height: data?.height,
                        weight: data?.weight,
                        flavorText: japaneseData?.flavor_text_entries[38]?.flavor_text,
                        img: pokeImg,
                        },
                    ]);
                    }
                }, [data, japaneseData, setPokemonData, pokemonId, pokeImg]);

                // setFields() を実行
                useEffect(() => {
                    setFields();
                }, [setFields]);

                // localStorage にセット
                useEffect(() => {
                    if (data && japaneseData && pokemonId) {
                    localStorage.setItem("storageData", JSON.stringify(pokemonData));
                    }
                }, [pokemonData, data, japaneseData, pokemonId]);


                localStorage に関しては下記を参考にさせていただきました。

                Local Storageを使ってみる

                ポケモン図鑑機能

                localStorage に保存したデータを取得して表示


                // Pokedex.tsx

                export const Pokedex = () => {
                const storageData = localStorage.getItem("storageData");
                const parsedStorageData: PokemonData = storageData ? JSON.parse(storageData) : [];

                ...

                <div>
                    {parsedStorageData?.length === 0 ? (
                    <div></div>
                ) : (
                    parsedStorageData?.map((data, index) => (
                        ...

                十字キーでのポケモン図鑑スクロール

                ポケモン図鑑の十字キーでのスクロール機能は少し苦戦しました。

                ポケモン図鑑のデータ数によって要素の高さをセット



                // CrossKey.tsx

                ...

                const [displayHeight, setDisplayHeight] = useState(0);
                const storageDataLength = useRecoilValue(storageDataLengthState);

                useEffect(() => {
                    // 見出しの高さ + 配列の数 * 要素一つあたりの高さ - 画面の高さ
                    const calcDisplayHeight = 16 + storageDataLength * 216 - 240;
                    setDisplayHeight(calcDisplayHeight < 0 ? 0 : calcDisplayHeight);
                }, [storageDataLength]);

                ...


                スクロールアップ、スクロールダウンの機能



                // CrossKey.tsx

                ...

                const isPokedex = useRecoilValue(isPokedexState);
                const [scrollY, setScrollY] = useRecoilState(scrollYState);

                const scrollUp = useCallback(() => {
                    // マイナスの数値になったら0をセット
                    if (scrollY - 40 <= 0 || !isPokedex) {
                    setScrollY(0);
                    return;
                    }
                    setScrollY(scrollY - 40);
                }, [isPokedex, scrollY, setScrollY]);

                const scrollDown = useCallback(() => {
                    // 要素の高さ以上にならないようにする
                    if (scrollY + 40 >= displayHeight) {
                    setScrollY(displayHeight);
                    return;
                    }
                    setScrollY(scrollY + 40);
                }, [displayHeight, scrollY, setScrollY]);

                ...


                再度ポケモン図鑑を開いたときに中途半端な位置にスクロールがセットされていないように、ポケモン図鑑画面以外の画面では scrollY に0をセットするようにします。

                また、 scrollY の値がマイナスになったり要素の高さ以上にならないように制御します。（制御できてないと十字キーを押しても動作しないような挙動になってしまう）

                ポケモン図鑑画面で scrollY を受け取ってスクロールする



                // Pokedex.tsx

                ...

                const ref: LegacyRef<HTMLDivElement> | undefined = useRef(null);

                const scrollY = useRecoilValue(scrollYState);

                useEffect(() => {
                    ref.current?.scrollTo({ top: scrollY, behavior: "smooth" });
                }, [scrollY]);

                return (
                    <div ref={ref} className="overflow-auto w-auto h-60">

                ...

                図鑑データ削除機能

                localStorage に保存したデータは永久に消えないということで削除機能もしっかり実装しました。



                const handlePressA = useCallback(() => {
                    // Start ボタンを押した後の削除するかの確認画面の場合の動作
                    if (isDeletionConfirmation) {
                    // localStorage のデータ削除
                    localStorage.clear();
                    setIsDeletionConfirmation(false);
                    setIsDeletionCompleted(true);
                    return;
                    }

                    if (isDeletionCompleted) {
                    // トップ画面へ遷移
                    setIsDeletionCompleted(false);
                    return;
                    }
                        ...

                ボタンクリック時の意図しない動作を防ぐ

                アニメーション中にボタンクリックで別画面にいってしまったり、削除確認画面からガチャ実行画面に遷移したりするのを防ぐために button に disabled の設定を書いて制御します。



                <button
                    type="button"
                // アニメーション中またはポケモン図鑑画面ではボタンを無効化する
                disabled={isAnimation || isPokedex}
                onClick={handlePressA}
                className="flex justify-center items-center w-16 h-16 text-2xl text-gray-700 bg-gray-800 rounded-full shadow-sm active:shadow-none shadow-black"
                >
                    A
                </button>

                おまけ

                十字キーの左右ボタンに特に機能が割り当てられていなかったのでカラーチェンジ機能をつけました。



                // CrossKey.tsx

                const colorNumUp = useCallback(() => {
                        // number が3の場合は0にセット
                    if (gameBoyColorNum === 3) {
                    setGameBoyColorNum(0);
                    return;
                    }
                    setGameBoyColorNum(gameBoyColorNum + 1);
                }, [gameBoyColorNum, setGameBoyColorNum]);

                const colorNumDown = useCallback(() => {
                        // number が0の場合は3にセット
                    if (gameBoyColorNum === 0) {
                    setGameBoyColorNum(3);
                    return;
                    }
                    setGameBoyColorNum(gameBoyColorNum - 1);
                }, [gameBoyColorNum, setGameBoyColorNum]);



                <div
                    className={`relative pt-1 pb-2 mx-auto max-w-md min-h-[704px] rounded-xl rounded-b-3xl shadow ${
                    gameBoyColorNum === 0
                        ? "bg-[#C83031]"
                    : gameBoyColorNum === 1
                    ? "bg-[#FED20D]"
                    : gameBoyColorNum === 2
                    ? "bg-[#543DB8]"
                    : "bg-[#1C9ACD]"
                }`}
                >

                まとめ

                最後まで読んでいただきありがとうございました！

                一回作ってみてうまくできなかったものを、いろいろな勉強をした後に再度作ってみるというのはとても勉強になりました！

                まだ命名の仕方や設計など課題はたくさんありますが、ひとつひとつ学習していきます！！

                もし、バグがあったりもっとこうした方が良いんじゃないのかとかありましたら教えていただけると嬉しいです！
            ',
            'describe' => 'コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。コースの説明が入ります。',
            'user_id' => '4',
        ]);
    }
}
