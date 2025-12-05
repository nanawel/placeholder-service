<?php

namespace App\Service\ImageGenerator;

use App\Model\ImageResponse;

interface GeneratorInterface
{
    public function generate(
        int $width,
        int $height,
        ?string $text,
        int $textSize,
        string $colorText,
        string $colorBg
    ): ImageResponse;
}
