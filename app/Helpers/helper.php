<?php
function managePagination($obj)
{
    $serial=1;
    if($obj->currentPage()>1)
    {
        $serial=(($obj->currentPage()-1)*$obj->perPage())+1;
    }
    return $serial;
}