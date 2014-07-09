<?php

namespace Contrask\Test\Component\Project\Model;

use Contrask\Component\Project\Model\Project;
use Contrask\Component\Sprint\Model\Sprint;

/**
 * @author Yusliel Garcia <yuslielg@gmail.com>
 */
class SprintTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers \Contrask\Component\Sprint\Model\Sprint::setStrid
     * @covers \Contrask\Component\Sprint\Model\Sprint::getStrid
     */
    public function testStrid()
    {
        /*Fixtures*/
        $sprint = new Sprint();
        $sprint->setStrid('foo');

        /*Tests*/
        $this->assertEquals('foo', $sprint->getStrid());
    }

    /**
     * @covers \Contrask\Component\Sprint\Model\Sprint::setProject
     * @covers \Contrask\Component\Sprint\Model\Sprint::getProject
     */
    public function testProject()
    {
        /*Fixtures*/
        $sprint = new Sprint();
        $project = new Project();
        $sprint->setProject($project);

        /*Tests*/
        $this->assertEquals($project, $sprint->getProject());
    }

    /**
     * @covers \Contrask\Component\Sprint\Model\Sprint::setName
     * @covers \Contrask\Component\Sprint\Model\Sprint::getName
     */
    public function testName()
    {
        /*Fixtures*/
        $sprint = new Sprint();
        $sprint->setName('foo');

        /*Tests*/
        $this->assertEquals('foo', $sprint->getName());
    }

    /**
     * @covers \Contrask\Component\Sprint\Model\Sprint::setStart
     * @covers \Contrask\Component\Sprint\Model\Sprint::getStart
     */
    public function testStart()
    {
        /*Fixtures*/
        $sprint = new Sprint();
        $start = new \DateTime();
        $sprint->setStart($start);

        /*Tests*/
        $this->assertEquals($start, $sprint->getStart());
    }

    /**
     * @covers \Contrask\Component\Sprint\Model\Sprint::setEnd
     * @covers \Contrask\Component\Sprint\Model\Sprint::getEnd
     */
    public function testEnd()
    {
        /*Fixtures*/
        $sprint = new Sprint();
        $end = new \DateTime();
        $sprint->setEnd($end);

        /*Tests*/
        $this->assertEquals($end, $sprint->getEnd());
    }
}