<?php

/*
 * This file is part of the Orchestra project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace RomaricDrigon\ExampleBundle\Repository;

use RomaricDrigon\OrchestraBundle\Domain\RepositoryInterface;
use RomaricDrigon\OrchestraBundle\Annotation\Name;

/**
 * Class CarRepository
 * @author Romaric Drigon <romaric.drigon@gmail.com>
 *
 * @Name("Cars")
 */
class CarRepository implements RepositoryInterface
{
    public function listing()
    {
        return []; // do nothing right now!
    }
} 