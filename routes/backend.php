<?php
use Illuminate\Support\Facades\Route;
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', [\App\Http\Controllers\Backend\BackendController::class,'index'])->name('admin.index');
    Route::get('/user/edit_profile/{id}', ['as' => 'admin.user.index_profile', 'uses' => 'Backend\UserController@editProfile']);
    /* Quản lý user */
    Route::get('/user',[\App\Http\Controllers\Backend\UserController::class,'index'])->name('admin.user.index');
    Route::get('/user/create',[\App\Http\Controllers\Backend\UserController::class,'create'])->name('admin.user.create');
    Route::post('/user/store',[\App\Http\Controllers\Backend\UserController::class,'store'])->name('admin.user.store');
    Route::get('/user/edit/{id}',[\App\Http\Controllers\Backend\UserController::class,'edit'])->name('admin.user.edit');
    Route::post('/user/update/{id}',[\App\Http\Controllers\Backend\UserController::class,'update'])->name('admin.user.update');
    /* Quản lý role */
    Route::get('/role',[\App\Http\Controllers\Backend\RoleController::class,'index'])->name('admin.role.index');
    Route::get('/role/create',[\App\Http\Controllers\Backend\RoleController::class,'create'])->name('admin.role.create');
    Route::post('/role/store',[\App\Http\Controllers\Backend\RoleController::class,'store'])->name('admin.role.store');
    Route::get('/role/edit/{id}',[\App\Http\Controllers\Backend\RoleController::class,'edit'])->name('admin.role.edit');
    Route::post('/role/update/{id}',[\App\Http\Controllers\Backend\RoleController::class,'update'])->name('admin.role.update');
    /*Quản lý sản phẩm*/
    Route::get('/product',[\App\Http\Controllers\Backend\ProductController::class,'index'])->name('admin.product.index');
    Route::get('/product/create',[\App\Http\Controllers\Backend\ProductController::class,'create'])->name('admin.product.create');
    Route::post('/product/store',[\App\Http\Controllers\Backend\ProductController::class,'store'])->name('admin.product.store');
    Route::get('/product/edit/{id}',[\App\Http\Controllers\Backend\ProductController::class,'edit'])->name('admin.product.edit');
    Route::post('/product/update/{id}',[\App\Http\Controllers\Backend\ProductController::class,'update'])->name('admin.product.update');
    Route::delete('/product/delete/{id}',[\App\Http\Controllers\Backend\ProductController::class,'destroy'])->name('admin.product.destroy');
    /*Quản lý danh mục*/
    Route::get('/category/{type}',[\App\Http\Controllers\Backend\CategoryController::class,'index'])->name('admin.category.index');
    Route::get('/category/{type}/create',[\App\Http\Controllers\Backend\CategoryController::class,'create'])->name('admin.category.create');
    Route::post('/category/{type}/store',[\App\Http\Controllers\Backend\CategoryController::class,'store'])->name('admin.category.store');
    Route::get('/category/{type}/edit/{id}',[\App\Http\Controllers\Backend\CategoryController::class,'edit'])->name('admin.category.edit');
    Route::post('/category/{type}/update/{id}',[\App\Http\Controllers\Backend\CategoryController::class,'update'])->name('admin.category.update');
    Route::delete('/category/{type}/delete/{id}',[\App\Http\Controllers\Backend\CategoryController::class,'destroy'])->name('admin.category.destroy');

    /*Quản lý tin tức*/
    Route::get('/new',[\App\Http\Controllers\Backend\NewsController::class,'index'])->name('admin.news.index');
    Route::get('/new/create',[\App\Http\Controllers\Backend\NewsController::class,'create'])->name('admin.news.create');
    Route::post('/new/store',[\App\Http\Controllers\Backend\NewsController::class,'store'])->name('admin.news.store');
    Route::get('/new/edit/{id}',[\App\Http\Controllers\Backend\NewsController::class,'edit'])->name('admin.news.edit');
    Route::post('/new/update/{id}',[\App\Http\Controllers\Backend\NewsController::class,'update'])->name('admin.news.update');
    Route::delete('/new/delete/{id}',[\App\Http\Controllers\Backend\NewsController::class,'destroy'])->name('admin.news.destroy');

    /* Đơn hàng*/
    Route::get('/order',[\App\Http\Controllers\Backend\OrderController::class,'index'])->name('admin.order.index');
    Route::delete('/order/delete/{id}',[\App\Http\Controllers\Backend\OrderController::class,'destroy'])->name('admin.order.destroy');
    Route::get('/order/show/{id}',[\App\Http\Controllers\Backend\OrderController::class,'show'])->name('admin.order.edit');

    /* Người đăng kí*/
    Route::get('/subscriber',[\App\Http\Controllers\Backend\SubscriberController::class,'index'])->name('admin.subscriber.index');
    Route::delete('/subscriber/delete/{id}',[\App\Http\Controllers\Backend\SubscriberController::class,'destroy'])->name('admin.subscriber.destroy');

    /* Liên hệ*/
    Route::get('/contact',[\App\Http\Controllers\Backend\ContactController::class,'index'])->name('admin.contact.index');
    Route::delete('/contact/delete/{id}',[\App\Http\Controllers\Backend\ContactController::class,'destroy'])->name('admin.contact.destroy');
    Route::get('/contact/show/{id}',[\App\Http\Controllers\Backend\ContactController::class,'show'])->name('admin.contact.edit');

    /* Thành viên*/
    Route::get('/member',[\App\Http\Controllers\Backend\MemberController::class,'index'])->name('admin.member.index');
    Route::delete('/member/delete/{id}',[\App\Http\Controllers\Backend\MemberController::class,'destroy'])->name('admin.member.destroy');
    Route::get('/member/show/{id}',[\App\Http\Controllers\Backend\MemberController::class,'show'])->name('admin.member.edit');

    /* Quản lý attribute */
    Route::get('/attribute',[\App\Http\Controllers\Backend\AttributeController::class,'index'])->name('admin.attribute.index');
    Route::get('/attribute/create',[\App\Http\Controllers\Backend\AttributeController::class,'create'])->name('admin.attribute.create');
    Route::post('/attribute/store',[\App\Http\Controllers\Backend\AttributeController::class,'store'])->name('admin.attribute.store');
    Route::get('/attribute/edit/{id}',[\App\Http\Controllers\Backend\AttributeController::class,'edit'])->name('admin.attribute.edit');
    Route::post('/attribute/update/{id}',[\App\Http\Controllers\Backend\AttributeController::class,'update'])->name('admin.attribute.update');
    Route::delete('/attribute/delete/{id}',[\App\Http\Controllers\Backend\AttributeController::class,'destroy'])->name('admin.attribute.destroy');

    /* Quản lý danh mục cấp bậc */
    Route::get('/marketing',[\App\Http\Controllers\Backend\MarketingController::class,'index'])->name('admin.marketing.index');
    Route::get('/marketing/edit/{id}',[\App\Http\Controllers\Backend\MarketingController::class,'edit'])->name('admin.marketing.edit');
    Route::post('/marketing/update/{id}',[\App\Http\Controllers\Backend\MarketingController::class,'update'])->name('admin.marketing.update');
    Route::delete('/marketing/delete/{id}',[\App\Http\Controllers\Backend\MarketingController::class,'destroy'])->name('admin.marketing.destroy');
    /* Quản lý danh mục cấp bậc */
    Route::get('/rank',[\App\Http\Controllers\Backend\RankController::class,'index'])->name('admin.rank.index');
    Route::get('/rank/create',[\App\Http\Controllers\Backend\RankController::class,'create'])->name('admin.rank.create');
    Route::post('/rank/store',[\App\Http\Controllers\Backend\RankController::class,'store'])->name('admin.rank.store');
    Route::get('/rank/edit/{id}',[\App\Http\Controllers\Backend\RankController::class,'edit'])->name('admin.rank.edit');
    Route::post('/rank/update/{id}',[\App\Http\Controllers\Backend\RankController::class,'update'])->name('admin.rank.update');
    Route::delete('/rank/delete/{id}',[\App\Http\Controllers\Backend\RankController::class,'destroy'])->name('admin.rank.destroy');
    /* Menu */
    Route::get('/menu',[\App\Http\Controllers\Backend\MenuController::class,'index'])->name('admin.menu.index');
    Route::get('/menu/create',[\App\Http\Controllers\Backend\MenuController::class,'create'])->name('admin.menu.create');
    Route::post('/menu/store',[\App\Http\Controllers\Backend\MenuController::class,'store'])->name('admin.menu.store');
    Route::get('/menu/edit/{id}',[\App\Http\Controllers\Backend\MenuController::class,'edit'])->name('admin.menu.edit');
    Route::post('/menu/update/{id}',[\App\Http\Controllers\Backend\MenuController::class,'update'])->name('admin.menu.update');
    Route::delete('/menu/delete/{id}',[\App\Http\Controllers\Backend\MenuController::class,'destroy'])->name('admin.menu.destroy');
    /* Cấu hình website */
    Route::get('/config',[\App\Http\Controllers\Backend\ConfigController::class,'index'])->name('admin.config.index');
    Route::post('/config/update/{id}',[\App\Http\Controllers\Backend\ConfigController::class,'update'])->name('admin.config.update');
    /* Bộ sưu tập */
    Route::get('/gallery',[\App\Http\Controllers\Backend\GalleryController::class,'index'])->name('admin.gallery.index');
    Route::get('/gallery/create',[\App\Http\Controllers\Backend\GalleryController::class,'create'])->name('admin.gallery.create');
    Route::post('/gallery/store',[\App\Http\Controllers\Backend\GalleryController::class,'store'])->name('admin.gallery.store');
    Route::get('/gallery/edit/{id}',[\App\Http\Controllers\Backend\GalleryController::class,'edit'])->name('admin.gallery.edit');
    Route::post('/gallery/update/{id}',[\App\Http\Controllers\Backend\GalleryController::class,'update'])->name('admin.gallery.update');
    Route::delete('/gallery/delete/{id}',[\App\Http\Controllers\Backend\GalleryController::class,'destroy'])->name('admin.gallery.destroy');


});


