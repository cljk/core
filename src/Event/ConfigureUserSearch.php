<?php

/*
 * This file is part of Flarum.
 *
 * (c) Toby Zerner <toby.zerner@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flarum\Event;

use Flarum\Core\Search\SearchCriteria;
use Flarum\Core\User\Search\UserSearch;

class ConfigureUserSearch
{
    /**
     * @var \Flarum\Core\User\Search\UserSearch
     */
    public $search;

    /**
     * @var SearchCriteria
     */
    public $criteria;

    /**
     * @param UserSearch $search
     * @param SearchCriteria $criteria
     */
    public function __construct(UserSearch $search, SearchCriteria $criteria)
    {
        $this->search = $search;
        $this->criteria = $criteria;
    }
}
