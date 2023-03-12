<?php

use K2ouMais\Lei\Lei;

beforeEach(function () {
    $this->leiGenerator = new Lei();
    $this->lei = $this->leiGenerator->generate();
});

test('a lei can be generated', function () {
    expect($this->lei)
        ->toBeString()
        ->toHaveLength(20);
});

test('a lei can be validated', function () {
    expect($this->leiGenerator->validate($this->lei))
        ->toBeTrue();
});

test('a lei is invalid', function () {
    expect($this->leiGenerator->validate('12340013KCVCMU58YY44'))->toBeFalse();
});
