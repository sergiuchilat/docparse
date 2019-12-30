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
        echo '<pre>';
        print_r($keywords);
        echo '</pre>';
        return $filename;
    }
}
