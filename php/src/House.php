<?php declare(strict_types=1);

namespace Kata\Jack;

class House
{
    private array $parts = [
        'the house that jack built',
        'the malt that lay in',
        'the rat that ate',
        'the cat that killed',
        'the dog that worried',
        'the cow with the crumpled horn that tossed',
        'the maiden all forlorn that milked',
        'the man all tattered and torn that kissed',
        'the priest all shaven and shorn that married',
        'the rooster that crowed in the morn that woke',
        'the farmer sowing his corn that kept',
        'the horse and the hound and the horn that belonged to',
    ];

    public function recite(): string
    {
        return 'This is...';
    }
}
