<?php

/*
 * This file is part of the ddd-symfony package.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->notName('*.yml')
    ->notName('*.xml')
    ->notName('*Spec.php')
    ->exclude('var');

$config = Symfony\CS\Config\Config::create()
    ->level(Symfony\CS\FixerInterface::SYMFONY_LEVEL)
    ->fixers([
        'concat_with_spaces',
        'multiline_spaces_before_semicolon',
        'short_array_syntax',
        '-remove_lines_between_uses',
    ]);

return $config->finder($finder);
