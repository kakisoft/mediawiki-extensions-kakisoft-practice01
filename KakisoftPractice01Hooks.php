<?php

class KakisoftPractice01Hooks {
    // フックで必要な構文登録処理
    public static function onParserFirstCallInit( Parser $parser ) {
        $parser->setFunctionHook( 'practice01', [ self::class, 'renderPractice01' ] );
        return true;
    }

    // パーサ関数の本体
    public static function renderPractice01( Parser $parser ) {
        return [ self::buildOutput(), 'noparse' => true ];
    }

    // 表示内容を返すメイン処理
    private static function buildOutput(): string {
        return 'Hello World';
    }
}
