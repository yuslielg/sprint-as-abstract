<?php

namespace Contrask\Component\Sprint\Manager;

use Contrask\Component\Sprint\Model\Sprint;

/**
 * @author Yusliel Garcia <yuslielg@gmail.com>
 */
interface SprintManagerInterface
{
    /**
     * Picks a sprint using given criteria.
     *
     * @param $criteria
     * @return mixed The project
     */
    public function pick($criteria);

    /**
     * Collects the sprints by given criteria.
     * It returns all sprints if criteria is null.
     *
     * @param mixed $criteria
     * @return array The sprints
     */
    public function collect($criteria = null);

    /**
     * Adds given sprint.
     *
     * @param Sprint $sprint
     * @return void
     */
    public function add(Sprint $sprint);

    /**
     * Updates given sprint.
     *
     * @param Sprint $sprint
     * @return void
     */
    public function update(Sprint $sprint);

    /**
     * Removes given sprint.
     *
     * @param Sprint $sprint
     * @return void
     */
    public function remove(Sprint $sprint);
}