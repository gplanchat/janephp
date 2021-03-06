<?php

namespace Github\Model;

class PrivateUserPlan
{
    /**
     * 
     *
     * @var int
     */
    protected $collaborators;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var int
     */
    protected $space;
    /**
     * 
     *
     * @var int
     */
    protected $privateRepos;
    /**
     * 
     *
     * @return int
     */
    public function getCollaborators() : int
    {
        return $this->collaborators;
    }
    /**
     * 
     *
     * @param int $collaborators
     *
     * @return self
     */
    public function setCollaborators(int $collaborators) : self
    {
        $this->collaborators = $collaborators;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSpace() : int
    {
        return $this->space;
    }
    /**
     * 
     *
     * @param int $space
     *
     * @return self
     */
    public function setSpace(int $space) : self
    {
        $this->space = $space;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPrivateRepos() : int
    {
        return $this->privateRepos;
    }
    /**
     * 
     *
     * @param int $privateRepos
     *
     * @return self
     */
    public function setPrivateRepos(int $privateRepos) : self
    {
        $this->privateRepos = $privateRepos;
        return $this;
    }
}