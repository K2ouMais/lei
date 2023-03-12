<?php

namespace K2ouMais\Lei;

final class Lei
{
    private const INITIAL_CHECKSUM = '00';

    private array $letters = [
        'A' => '10',
        'B' => '11',
        'C' => '12',
        'D' => '13',
        'E' => '14',
        'F' => '15',
        'G' => '16',
        'H' => '17',
        'I' => '18',
        'J' => '19',
        'K' => '20',
        'L' => '21',
        'M' => '22',
        'N' => '23',
        'O' => '24',
        'P' => '25',
        'Q' => '26',
        'R' => '27',
        'S' => '28',
        'T' => '29',
        'U' => '30',
        'V' => '31',
        'W' => '32',
        'X' => '33',
        'Y' => '34',
        'Z' => '35',
    ];

    private array $numbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

    public function generate(): string
    {
        $genericLei = config('lei.lou_code').config('lei.reserved').$this->randomize();

        $calculatedChecksum = (98 - $this->convert($genericLei.self::INITIAL_CHECKSUM)['checksum']);

        $validate = $this->convert($genericLei.str_pad($calculatedChecksum, 2, '0'));

        if ($validate['checksum'] !== 1) {
            $this->generate();
        }

        return $validate['unconverted'];
    }

    private function randomize(): string
    {
        $lettersAndNumbers = array_merge(array_keys($this->letters), $this->numbers);
        $lettersAndNumbersLength = count($lettersAndNumbers) - 1;
        $genericString = '';

        for ($i = 1; $i <= 12; $i++) {
            $genericString .= $lettersAndNumbers[rand(0, $lettersAndNumbersLength)];
        }

        return $genericString;
    }

    private function convert(string $lei): array
    {
        return [
            'unconverted' => strtoupper($lei),
            'converted' => $convertedLEI = str_replace(array_keys($this->letters), array_values($this->letters), strtoupper($lei)),
            'checksum' => (int) bcmod($convertedLEI, '97'),
        ];
    }

    public function validate(string $lei): bool
    {
        return $this->convert($lei)['checksum'] === 1;
    }
}
