<?php

class KakisoftPractice01Hooks {
    public static function renderHello( Parser $parser ) {
        return [ self::buildOutput(), 'noparse' => true ];
    }

    private static function buildOutput(): string {
        return 'Hello World';
    }

}
