<?php

/**
 * Displays site name.
 */
function site_name()
{
    echo config('name');
}

function api_url()
{
    echo config('api_url');
}

function split_data($data)
{
    $splitted_array = explode(';',$data);
    return $splitted_array;
}
/**
 * Displays page content. It takes the data from
 * the api url 
 */
function parsing_json(){

    $json = file_get_contents(config("api_url"));
    $data = json_decode($json); 
    foreach ($data as $d){
        
        echo "<div class='card'>";
        echo "<div class='container'>";
        echo "<h4>Title : $d->title</b></h4>";
        echo "<p>Type:  $d->type</b></p>";
        echo "<p>Author:  $d->author</b></p>";
        echo "<p>Subjects:";
        echo "<div class='tag-wrapper'>";
        $subject =array_unique(split_data($d->Subjects));
        foreach($subject as $subs)
        {
            echo "<span class='badge'>";
            echo "$subs";
            echo "</span>";
        }
        echo "</div>";
        echo "</b></p>";
        echo "<p>Copyrightdate:  $d->copyrightdate | Isbn:  $d->isbn | Biblionumber:  $d->biblionumber</p>";
        echo "</div>";
        echo "</div>";
        
    }

}


/**
 * Starts everything and displays the template.
 */
function init()
{
    require config('template_path') . '/template.php';
}
