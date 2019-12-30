<?php
return [
    '${TEXT}' => [
        'start' => '${',
        'end' => '}',
        'getVariablesForPart' => '/\$\{(.*?)}/i',
        'indexClonedVariables' => [
            'pattern' => '/\$\{(.*?)\}/',
            'replacementStart' => '\${\\1#'
        ],
        'textNeedsSplitting' => '/[^>]\${|}[^<]/i'
    ],
    '$[TEXT]' => [
        'start' => '$[',
        'end' => ']',
        'getVariablesForPart' => '/\$\[(.*?)]/i',
        'indexClonedVariables' => [
            'pattern' => '/\$\[(.*?)\]/',
            'replacementStart' => '\$[\\1#'
        ],
        'textNeedsSplitting' => '/[^>]\$[|][^<]/i'
    ]
];
