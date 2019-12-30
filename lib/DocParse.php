<?php


namespace merax\DocParse;


class Parser
{
    public function extractKeywords($filename = ''){
        $keywords = [
            'город',
            'date',
            'должность'
        ];
        return $keywords;
    }

    public function setKeywordsValue($filename= '', $keywords = []){
        print_r($keywords);
        return $filename;
    }
}
