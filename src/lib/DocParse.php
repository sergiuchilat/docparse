<?php

namespace merax\docparser;

use PhpOffice\PhpWord\TemplateProcessor;

class DocParse
{
    private $standarPath = 'data/';
    public function extractKeywords($filename = ''){
        $source = $this->getStandarPath().$filename;
        $templateProcessor = new TemplateProcessor($source);
        return $templateProcessor->getVariables();
    }

    public function setKeywordsValue($filename= '', $data = []){
        $source = $this->getStandarPath().$filename;
        $templateProcessor = new TemplateProcessor($source);
        foreach($data as $key => $value){
            $templateProcessor->setValue($key, $value);
        }
        $templateProcessor->saveAs($this->getStandarPath().'/result/result.docx');
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
}
