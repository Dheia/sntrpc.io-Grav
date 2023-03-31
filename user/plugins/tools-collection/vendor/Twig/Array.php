<?php

/**
 * This file is part of Twig.
 *
 * (c) 2009 Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Ricard Clau <ricard.clau@gmail.com>
 */
class Twig_Extensions_Extension_Array extends Twig_Extension
{
    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        $filters = array(
             new Twig_SimpleFilter('shuffle', 'twig_shuffle_filter'),
        );

        return $filters;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'array';
    }
}

/**
 * Shuffles an array.
 *
 * @param array|Traversable $array An array
 *
 * @return array
 */
function twig_shuffle_filter($array, $associative = false)
{
    if ($array instanceof Traversable) {
        $array = iterator_to_array($array, false);
    }

    if($associative) {
        $keys = array_keys($array);
        shuffle($keys);

        foreach($keys as $key) {
            $new[$key] = $array[$key];
        }
        $array = $new;
    }
    else {
        shuffle($array);
    }

    return $array;
}