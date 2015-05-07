<?php
/**
 * @summary Get the id of the page by slug and return the link
 *
 * @param $slug
 * @return string
 */
function get_page_id($slug){
    $page = \Page::whereSlug($slug)->first();
    if(!is_null($page)){
        return "#page_".$page->id;
    }
}

