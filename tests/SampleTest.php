<?php

class SampleTest extends WP_UnitTestCase {

    public function test_languageがjapanseならこんにちは() {
        // ショートコードを実行して結果を取得しますよ
        $greeting = do_shortcode('[greeting language="japanese"]');

        // $greetingがこんちはならOKですよ
        $this->assertEquals('こんにちは',$greeting);
    }

    public function test_languageがenglishならHello() {
        // ショートコードを実行して結果を取得しますよ
        $greeting = do_shortcode('[greeting language="english"]');

        // $greetingがこんちはならOKですよ
        $this->assertEquals('Hello',$greeting);

    }
}
