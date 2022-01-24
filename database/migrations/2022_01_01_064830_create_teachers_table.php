<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('teacher_id')->comment('教師ID');
            $table->string('name')->comment('氏名');
            $table->string('kana')->comment('ふりがな');
            $table->integer('age')->comment('年齢');
            $table->integer('gender')->comment('性別');
            $table->string('pref')->comment('都道府県');
            $table->string('area')->comment('市区町村');
            $table->string('address')->comment('住所');
            $table->string('tel')->comment('自宅の電話番号');
            $table->string('fax')->comment('FAX');
            $table->string('mobile')->comment('携帯電話');
            $table->string('mail')->comment('メールアドレス');
            $table->string('final')->comment('最終学歴');
            $table->string('senior')->comment('出身高校');
            $table->string('exam')->comment('中学受験の有無');
            $table->string('junior')->comment('出身中学');
            $table->boolean('math')->comment('数学');
            $table->boolean('japanese')->comment('国語');
            $table->boolean('science')->comment('理科');
            $table->boolean('social')->comment('社会');
            $table->boolean('english')->comment('英語');
            $table->boolean('conversation')->comment('英会話');
            $table->boolean('liberalmath')->comment('文系数学');
            $table->boolean('sciencemath')->comment('理系数学');
            $table->boolean('physics')->comment('物理');
            $table->boolean('chemistry')->comment('科学');
            $table->boolean('biochemistry')->comment('生物');
            $table->boolean('earth')->comment('地学');
            $table->boolean('jhistory')->comment('日本史');
            $table->boolean('whistory')->comment('世界史');
            $table->boolean('geography')->comment('地理');
            $table->boolean('ethics')->comment('倫理');
            $table->boolean('politics')->comment('政治経済');
            $table->boolean('bookkeeping')->comment('簿記');
            $table->boolean('computer')->comment('パソコン');
            $table->string('other')->comment('その他');
            $table->integer('payment')->comment('希望時給');
            $table->string('possible_pref')->comment('指導可能地域(都道府県)');
            $table->string('possible_area')->comment('指導可能地域(市区町村)');
            $table->string('rail_1')->comment('鉄道沿線１');
            $table->string('rail_2')->comment('鉄道沿線２');
            $table->string('rail_3')->comment('鉄道沿線３');
            $table->string('station_1')->comment('最寄り駅１');
            $table->string('station_2')->comment('最寄り駅２');
            $table->string('station_3')->comment('最寄り駅３');
            $table->string('datetime')->comment('指導可能時間');
            $table->boolean('tutor')->comment('指導経験(家庭教師)');
            $table->boolean('cram')->comment('指導経験(塾講師)');
            $table->boolean('school')->comment('指導経験(学校の教師)');
            $table->boolean('train')->comment('交通手段(電車)');
            $table->boolean('bus')->comment('交通手段(バス)');
            $table->boolean('car')->comment('交通手段(車)');
            $table->boolean('bike')->comment('交通手段(バイク)');
            $table->boolean('bicycle')->comment('交通手段(自転車)');
            $table->string('sales')->comment('セールスポイント');
            $table->boolean('matter')->comment('他の案件');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
