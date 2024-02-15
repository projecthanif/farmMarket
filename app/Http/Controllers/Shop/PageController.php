<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function faq()
    {
        $pageTitle = "FAQ";
        $pageDescription = "Our marketplace is dedicated to supporting local agriculture and providing fresh, high-quality
        farm produce to individuals and businesses in our community";

        return view('shop.faq', compact('pageTitle', 'pageDescription'));
    }

    public function return_policy()
    {
        $pageTitle = "Return privacy";
        $pageDescription = "Our marketplace is dedicated to supporting local agriculture and providing fresh, high-quality
        farm produce to individuals and businesses in our community";

        return view('shop.return_privacy', compact('pageTitle', 'pageDescription'));
    }

    public function privacy_policy()
    {
        $pageTitle = "Privacy policy";
        $pageDescription = "Our marketplace is dedicated to supporting local agriculture and providing fresh, high-quality
        farm produce to individuals and businesses in our community";

        return view('shop.privacy_policy', compact('pageTitle', 'pageDescription'));
    }

    public function terms_condition()
    {
        $pageTitle = "Terms Condtion";
        $pageDescription = "Our marketplace is dedicated to supporting local agriculture and providing fresh, high-quality
        farm produce to individuals and businesses in our community";

        return view('shop.terms_condition', compact('pageTitle', 'pageDescription'));
    }

}
