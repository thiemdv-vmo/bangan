<?php

namespace App\Http\Controllers\Frontend;

use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Repositories\CategoryRepository;
use Repositories\ConstructionRepository;
use Repositories\KeywordRepository;

class FrontendController extends Controller {

    public function __construct(CategoryRepository $categoryRepo, KeywordRepository $keywordRepo,ProductRepository $productRepo) {
        $this->categoryRepo = $categoryRepo;
        $this->keywordRepo = $keywordRepo;
        $this->productRepo = $productRepo;
    }

    public function index() {
        $category_arr = $this->categoryRepo->readHomeProductCategory();
        $gallery_arr = $this->categoryRepo->readHomeGalleryCategory($limit = 8);
        $keyword_arr = $this->keywordRepo->readHomeRecentKeyword($limit = 6);
        $products = $this->productRepo->readNewProduct(10);
        return view('frontend/home/index', compact('category_arr', 'construction_arr', 'keyword_arr','gallery_arr','products'));

    }

}
