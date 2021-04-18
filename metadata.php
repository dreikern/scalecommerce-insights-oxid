<?php

$sMetadataVersion = '2.0';

$aModule = [
    'id'            => 'dreikern_scalecommerce_insights',
    'title'         => 'dreikern ScaleCommerce Insights',
    'description'   => 'ScaleCommerce Insights module by dreikern GmbH',
    'thumbnail'   => '/logo.png',
    'version'     => '1.0.0',
    'author'      => 'dreikern GmbH',
    'url'         => 'https://github.com/dreikern/scalecommerce-insights-oxid',
    'email'       => 'oxid@dreikern.io',
    'extend'      => [
        \OxidEsales\Eshop\Core\Output::class => \Dreikern\ScalecommerceInsights\Core\Output::class,
    ],
    'controllers' => [],
    'templates'   => [],
    'blocks'      => [],
    'settings'    => [],
];
