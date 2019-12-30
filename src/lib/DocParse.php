<?php

namespace merax\docparser;

//use PhpOffice\PhpWord\TemplateProcessor;
use merax\docparser\DiezTemplateProcessor as TemplateProcessor;

class DocParse
{
    private $templateProcessor = null;
    private $filename = '';

    public function __construct($filename){
        $this->filename = $filename;
        $source = $this->getStandarPath().$filename;
        $this->templateProcessor = new TemplateProcessor($source);
    }

    private $standarPath = 'data/';

    public function extractKeywords(){
        $source = $this->getStandarPath() . $this->filename;
        return $this->templateProcessor->getVariables();
    }

    public function setKeywordsValue($data = []){
        foreach($data as $key => $value){
            $this->templateProcessor->setValue($key, $value);
        }
        $this->templateProcessor->saveAs($this->getStandarPath().'/result/result.docx');
        return $this->url().'/'.$this->getStandarPath().'result/result.docx';
    }

    /**
     * @return string
     */
    public function getStandarPath()
    {
        return $this->standarPath;
    }

    /**
     * @param string $standarPath
     */
    public function setStandarPath($standarPath)
    {
        $this->standarPath = $standarPath;
    }
    public function url(){
        if(isset($_SERVER['HTTPS'])){
            $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
        }
        else{
            $protocol = 'http';
        }
        return $protocol . "://" . $_SERVER['HTTP_HOST'];
    }

    public function setTagOptions($tags, $selectedTag){
        $this->templateProcessor->setTagOptions($tags, $selectedTag);
    }
}
