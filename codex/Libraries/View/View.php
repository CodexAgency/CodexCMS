<?php
namespace Codex\Libraries\View;

use CodeIgniter\CodeIgniter;
use CodeIgniter\Controller;

class View
{
    /**
     * @var string
     */
    private $appName = '';

    /**
     * @var string
     */
    protected $endType = '';

    /**
     * @var string
     */
    protected $moduleName = '';

    /**
     * @var string
     */
    protected $pageName = '';
    
    /**
     * @var array
     */
    protected $data = [];

    /**
     * @var string
     */
    protected $view = '';

    protected $viewClass;

    /**
     * Initialize
     *
     * @param array $args
     */
    public function __construct(array $args = [])
    {
        foreach ($args as $key => $val) {
            if (isset($this->$key)) {
                $this->$key = $val;
            }
        }
    }


    public function create(array $args = []) : View
    {
        return new $this->__construct($args);
    }

    /**
     * View
     * Return html view
     *
     * @return string
     */
    public function view() : View
    {
        $this->view = view("\\$this->appName\\Views\\$this->endType\\$this->moduleName\\$this->pageName", $this->data);
        return $this;
    }

    /**
     * Print view
     *
     * @return integer 1
     */
    public function print() : View
    {
        echo $this->view;
        return $this;
    }

    /**
     * Set App Name
     *
     * @param string $appName es.: Codex
     * @return void
     */
    public function setAppName(string $appName) : View
    {
        $this->appName = $appName;
        return $this;
    }

    /**
     * Set End Type
     *
     * @param string $endType es.: Backend or Frontend
     * @return void
     */
    public function setEndType(string $endType) : View
    {
        $this->endType = $endType;
        return $this;
    }

    /**
     * Set Module Name
     *
     * @param string $moduleName es.: Auth
     * @return void
     */
    public function setModuleName(string $moduleName): View
    {
        $this->moduleName = $moduleName;
        return $this;
    }

    /**
     * Set Page Name
     *
     * @param string $pageName es.: Login
     * @return void
     */
    public function setPageName(string $pageName) : View
    {
        $this->pageName = $pageName;
        return $this;
    }

    /**
     * Set Data
     *
     * @param array $data
     * @return void
     */
    public function setData(array $data) : View
    {
        $this->data = $data;
        return $this;
    }
}