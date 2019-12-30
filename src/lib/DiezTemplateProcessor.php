<?php


namespace merax\docparser;


use PhpOffice\PhpWord\TemplateProcessor;

class MeraxTemplateProcessor extends TemplateProcessor
{
    protected function indexClonedVariables($count, $xmlBlock)
    {
        $results = array();
        for ($i = 1; $i <= $count; $i++) {
            $results[] = preg_replace('/\$\{(.*?)\}/', '\##\\1#' . $i . '#', $xmlBlock);
        }

        return $results;
    }

}
