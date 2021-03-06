<?php

/*
 * This file is part of the ddd-symfony package.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Infrastructure\Persistence\Sql\Repository\User;

/**
 * Interface SqlPostSpecification.
 */
interface SqlUserSpecification
{
    /**
     * Returns the sql criteria to complete the query.
     *
     * @return string
     */
    public function toSqlClauses();
}
