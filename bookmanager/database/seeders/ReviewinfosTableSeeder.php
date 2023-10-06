<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewinfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviewinfos')->insert([
            'user_id' => 1,
            'book_id' => 1,
            'recommend' => 3,
            'comment' => 'この本は、話す力を高めるためのコツやテクニックを紹介しています。著者は、コミュニケーションの専門家であり、多くの人に話し方の指導をしてきた経験があります。本書では、話す前に考えるべきことや、話すときに気をつけるべきことなどが具体的に説明されています。私は、この本を読んで、話す力に自信がつきました。話す前に考えることが多くなり、話すときにも相手の反応や感情に配慮するようになりました。この本は、話す力を向上させたい人におすすめです。',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('reviewinfos')->insert([
            'user_id' => 2,
            'book_id' => 1,
            'recommend' => 4,
            'comment' => '話す力は、人生において重要なスキルです。しかし、話す力を身につけるのは簡単ではありません。この本は、話す力を身につけるための方法をわかりやすく教えてくれます。著者は、自分の話し方の失敗談や成功談を交えながら、話す前に考えるべきことや、話すときに注意するべきことなどを紹介しています。この本を読んで、私は話す力に関する知識や意識が高まりました。話す前に自分の目的やメッセージを明確にし、話すときには相手の立場や興味に合わせるように心がけるようになりました。この本は、話す力を身につけたい人や向上させたい人におすすめです。',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('reviewinfos')->insert([
            'user_id' => 3,
            'book_id' => 1,
            'recommend' => 2,
            'comment' => 'この本は、話す力を高めるための本です。著者は、コミュニケーションのプロであり、多くの人に話し方を教えてきた人です。本書では、話す前に考えるべきことや、話すときに使うべき言葉や表現などが紹介されています。私は、この本を読んで、話す力が少し上達したと感じました。話す前に自分の目的や相手の状況を考えるようになり、話すときにも相手に伝わりやすい言葉やトーンを選ぶようになりました。この本は、話す力が苦手な人や改善したい人におすすめです。',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('reviewinfos')->insert([
            'user_id' => 4,
            'book_id' => 1,
            'recommend' => 5,
            'comment' => '話す力は、仕事やプライベートで必要な能力です。しかし、話す力は生まれつきではなく、習得するものです。この本は、話す力を習得するためのガイドブックです。著者は、コミュニケーションのエキスパートであり、自分の経験や実例をもとに話し方のコツやポイントを教えてくれます。本書では、話す前に考えるべきことや、話すときに工夫するべきことなどが詳しく解説されています。私は、この本を読んで、話す力が向上したと思います。話す前に自分の意図や相手のニーズを考慮するようになり、話すときにも相手に理解しやすい言葉や声を使うようになりました。この本は、話す力を磨きたい人におすすめです。',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('reviewinfos')->insert([
            'user_id' => 5,
            'book_id' => 1,
            'recommend' => 4,
            'comment' => 'この本は、話す力を鍛えるための本です。著者は、コミュニケーションのスペシャリストであり、多くの人に話し方をレクチャーしてきた人です。本書では、話す前に考えるべきことや、話すときに効果的な言葉やジェスチャーなどが紹介されています。私は、この本を読んで、話す力に関する知見が深まりました。話す前に自分の目標や相手の特徴を把握するようになり、話すときにも相手に興味や感動を与えるような言葉や表情を使うようになりました。この本は、話す力を強化したい人におすすめです。',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('reviewinfos')->insert([
            'user_id' => 1,
            'book_id' => 2,
            'recommend' => 4,
            'comment' => 'この本は、料理家の志麻さんが教えるお助けレシピ100品を紹介しています。忙しい日や冷蔵庫の残り物で作れる簡単で美味しい料理が満載です。写真も多くて見やすく、材料や作り方も分かりやすく説明されています。私は、この本を読んで、料理のレパートリーが増えました。家族や友人にも好評で、料理が楽しくなりました。この本は、料理が苦手な人や忙しい人におすすめです。',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('reviewinfos')->insert([
            'user_id' => 2,
            'book_id' => 2,
            'recommend' => 4,
            'comment' => 'この本は、料理家の志麻さんが教えるお助けレシピ100品を紹介しています。手軽に作れるのに美味しい料理がたくさんあります。写真も鮮やかで食欲をそそります。材料や作り方もシンプルでわかりやすく説明されています。私は、この本を読んで、料理のスキルが上がったと感じました。家族や友人からも褒められました。料理が楽しくなりました。この本は、料理が好きな人や上達したい人におすすめです。',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('reviewinfos')->insert([
            'user_id' => 3,
            'book_id' => 2,
            'recommend' => 3,
            'comment' => 'この本は、料理家の志麻さんが教えるお助けレシピ100品を紹介しています。簡単で美味しい料理がいろいろあります。写真もきれいで参考になります。材料や作り方も簡潔でわかりやすく説明されています。私は、この本を読んで、料理のバリエーションが増えました。家族や友人とも楽しく食事ができました。料理が好きになりました。この本は、料理に興味がある人や挑戦したい人におすすめです。',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('reviewinfos')->insert([
            'user_id' => 4,
            'book_id' => 2,
            'recommend' => 3,
            'comment' => 'この本は、料理家の志麻さんが教えるお助けレシピ100品を紹介しています。手間がかからないのに美味しい料理が沢山あります。写真も明るくて美味しそうです。材料や作り方もシンプルでわかりやすく説明されています。私は、この本を読んで、料理の知識が深まりました。',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('reviewinfos')->insert([
            'user_id' => 5,
            'book_id' => 2,
            'recommend' => 3,
            'comment' => 'とても参考になった。',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('reviewinfos')->insert([
            'user_id' => 1,
            'book_id' => 3,
            'recommend' => 3,
            'comment' => '17年ぶりの百鬼夜行シリーズの新作は、日光を舞台に複雑に絡み合う事件を描く。京極堂一座の面々が活躍する様は見応えがあるし、鵼という謎めいた存在にも興味がそそられる。最後の憑き物落としは圧巻だった。',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('reviewinfos')->insert([
            'user_id' => 2,
            'book_id' => 3,
            'recommend' => 3,
            'comment' => '久しぶりに読んだ京極夏彦さんの作品だが、相変わらずの文体と構成に感動した。日光の歴史や風土にまつわる話題が豊富で、読んでいて勉強になる。登場人物たちの掛け合いも楽しいし、鵼というテーマも深く考察されている。',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('reviewinfos')->insert([
            'user_id' => 3,
            'book_id' => 3,
            'recommend' => 3,
            'comment' => 'この本は、鵼という不思議な生き物をめぐる物語である。日光で起こったさまざまな事件が、鵼に関係していることが次第に明らかになっていく。京極堂や榎木津などおなじみのキャラクターが登場し、読者を引き込む。鵼の正体や意味についても興味深い。',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('reviewinfos')->insert([
            'user_id' => 4,
            'book_id' => 3,
            'recommend' => 3,
            'comment' => '日光で発見された古文書から始まる一連の事件を、京極堂や関口巽などが解決していくストーリー。鵼という伝説上の生物が重要な役割を果たす。著者独特の文体や蘊蓄が満載で、読みごたえがある。登場人物たちの人間味も感じられる一冊だった。',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('reviewinfos')->insert([
            'user_id' => 5,
            'book_id' => 3,
            'recommend' => 3,
            'comment' => '長らく待ち望んだ百鬼夜行シリーズの新作である。日光という舞台設定が素晴らしく、その風景や歴史を生かした物語が展開される。鵼という存在も不可思議で魅力的だった。京極堂や榎木津などのキャラクターも健在で、読んでいて楽しかった。',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('reviewinfos')->insert([
            'user_id' => 1,
            'book_id' => 4,
            'recommend' => 4,
            'comment' => 'この本は、自分の心と体を浄化するための様々な方法を紹介してくれます。自然や色彩、音や言霊など、身近なものを使って簡単にできる浄化法が満載です。神人さんの体験談も興味深く読めました。靈的なことに興味がある人におすすめです',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('reviewinfos')->insert([
            'user_id' => 2,
            'book_id' => 4,
            'recommend' => 4,
            'comment' => '自分の靈的な体質に気づいてから、どうしたらいいかわからなかった私にとって、この本は救世主でした。神人さんが実践してきた浄化の仕方が詳しく書かれていて、参考になりました。切り取って使えるマークも便利です。靈媒体質の人には必読の本だと思います。',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('reviewinfos')->insert([
            'user_id' => 3,
            'book_id' => 4,
            'recommend' => 4,
            'comment' => '浄化というと難しそうに感じますが、この本はとてもわかりやすく説明してくれます。五感やチャクラ、瞑想など、様々な角度から浄化の方法を紹介してくれます。神人さんの異次元世界との対話も興味深いです。自分の心と体を清めたい人におすすめの本です。',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('reviewinfos')->insert([
            'user_id' => 4,
            'book_id' => 4,
            'recommend' => 2,
            'comment' => 'この本は、靈的なことに敏感な人に向けて、自分でできる浄化の方法を教えてくれます。神人さんは幼少期から数多くの神靈体験を重ねてきた方で、その話も本に書かれています。自然や色彩、音や言霊など、さまざまな浄化法が紹介されています。靈的なことに悩んでいる人に役立つ本だと思います。',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('reviewinfos')->insert([
            'user_id' => 5,
            'book_id' => 4,
            'recommend' => 2,
            'comment' => '自分の心と体を浄化することで、より良い人生を送ることができるということを教えてくれる本です。神人さんは靈媒体質の方で、異次元世界との対話を通して浄化の仕方を学んできたそうです。その経験が詳しく書かれています。五感やチャクラ、瞑想など、様々な浄化法が紹介されています。靈的なことに興味がある人におすすめの本です。',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('reviewinfos')->insert([
            'user_id' => 1,
            'book_id' => 5,
            'recommend' => 3,
            'comment' => '人生の危機に直面した人たちの生き方に感動しました。自分も前向きになれる一冊です。',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('reviewinfos')->insert([
            'user_id' => 2,
            'book_id' => 5,
            'recommend' => 4,
            'comment' => '魂の感覚や魂の重心という言葉が心に響きました。自分の人生を見つめ直すきっかけになりました。',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('reviewinfos')->insert([
            'user_id' => 3,
            'book_id' => 5,
            'recommend' => 5,
            'comment' => 'コロナ禍で自分の人生がどこか遠くへ行ってしまったように感じていたときに読みました。この本に出会えてよかったです。',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('reviewinfos')->insert([
            'user_id' => 4,
            'book_id' => 5,
            'recommend' => 3,
            'comment' => '７人の登場人物のそれぞれの物語がとてもリアルで、自分の姿を重ねて読みました。社会問題にも目を向けることができました。',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('reviewinfos')->insert([
            'user_id' => 5,
            'book_id' => 5,
            'recommend' => 3,
            'comment' => '人生=XxYという考え方が印象的でした。Yが0だと人生も0になるということは、忘れてはいけないことだと思いました。',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
