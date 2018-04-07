<?php

namespace Password;

use PHPUnit\Framework\TestCase;

class GeneratePasswordTest extends TestCase
{
    public function testGeneratePasswordShouldReturnPassword()
    {
        $this->assertInternalType('string', GeneratePassword::run());
        $this->assertSame(9, strlen(GeneratePassword::run()));
    }

    public function testGeneratePasswordWithAddDashes()
    {
        $this->assertSame(11, strlen(GeneratePassword::run(9, true, 'luds')));
    }
}
