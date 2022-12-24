







Route::get('/categoeries', [blogController::class, 'create'])->name('blog.create');
Route::post('/create/blog', [blogController::class, 'store'])->name('blog.store');
Route::get('/blog/edit/{id}', [blogController::class, 'edit'])->name('blog.edit');
Route::get('/blog/destroy/{id}', [blogController::class, 'destroy'])->name('blog.destroy');
Route::get('/blog/liste', [blogController::class, 'liste'])->name('blog.liste');
Route::patch('/blog/update/{id}', [blogController::class, 'update'])->name('blog.update');
