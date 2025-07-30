<?php

class KakisoftPractice01Hooks {
  public static function onParserFirstCallInit( Parser $parser ) {
    $parser->setFunctionHook( 'hello', [ self::class, 'renderHello' ] );
    return true;
  }

  public static function renderHello( Parser $parser ) {
    return [ 'Hello World', 'noparse' => true ];
  }
}
