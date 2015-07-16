<?php
namespace Vine\Component\View;

/**
 * This is view base
 */
abstract class Base implements \Vine\Component\View\ViewInterface
{/*{{{*/

    /**
     * view root
     * 
     * @var string
     */
    protected $viewRoot = '';

    /**
     * {@inheritdoc}
     */
	public function setViewRoot($viewRoot)
    {
        $this->viewRoot = rtrim($viewRoot, '/') . '/';
    }
    
    /**
     * get template file
     * 
     * @param string $tplName
     * 
     * @throws \Exception
     * @return string
     */
    protected function getTplFile($tplName)
    {
        $tplFile = $this->viewRoot . ltrim($tplName, '/');
        if (! file_exists($tplFile)) {
            throw new \Exception('template file ' . $tplFile . ' not exists');
        }
        return $tplFile;
    }
}
