<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'Coding Assignment',
        'pretty_uri' => false,
        'api_url'=>'https://prosentient.intersearch.com.au/cgi-bin/koha/svc/report?id=1&annotated=1',
        'template_path' => 'template',
        
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
