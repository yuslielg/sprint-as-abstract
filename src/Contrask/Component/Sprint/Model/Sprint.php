<?php

namespace Contrask\Component\Sprint\Model;

use Contrask\Component\Project\Model\Project;

/**
 * @author Yusliel Garcia <yuslielg@gmail.com>
 */
class Sprint
{
    /**
     * @var string
     */
    private $strid;

    /**
     * @var Project
     */
    private $project;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \DateTime
     */
    private $start;

    /**
     * @var \DateTime
     */
    private $end;

    /**
     * @param string $strid
     */
    public function setStrid($strid)
    {
        $this->strid = $strid;
    }

    /**
     * @return string
     */
    public function getStrid()
    {
        return $this->strid;
    }

    /**
     * @param Project $project
     */
    public function setProject(Project $project)
    {
        $this->project = $project;
    }

    /**
     * @return Project
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param \DateTime $start
     */
    public function setStart(\DateTime $start)
    {
        $this->start = $start;
    }

    /**
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @param \DateTime $end
     */
    public function setEnd(\DateTime $end)
    {
        $this->end = $end;
    }

    /**
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }
}