<?php

if (!function_exists('cartCountItem')) {
    function cartCountItem()
    {
        return Cart::count();
    }
}

if (!function_exists('cartContentSideShow')) {
    function cartContentSideShow()
    {
        return Cart::content();
    }
}
