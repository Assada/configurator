<?php

namespace Assada\Dumper;


/**
 * Class PhpDumper
 *
 * @package Assada\Dumper
 *
 * @author  Aleksey Ilyenko <assada.ua@gmail.com>
 */
class PhpDumper implements DumperInterface
{

    /**
     * @param array $data
     *
     * @return string
     */
    public function dump(array $data): string
    {
        $export = '<?php return' . PHP_EOL;
        $export .= var_export($data, true);
        $export .= ';';

        return $export;
    }
}