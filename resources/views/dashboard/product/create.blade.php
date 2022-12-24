@extends('dashboard.master.master')


@section('master')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Products</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                            <li class="breadcrumb-item active">Products</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex mb-3">
                            <div class="flex-grow-1">
                                <h5 class="fs-16">Filters</h5>
                            </div>
                            <div class="flex-shrink-0">
                                <a href="#" class="text-decoration-underline" id="clearall">Clear All</a>
                            </div>
                        </div>

                        <div class="filter-choices-input">
                            <input class="form-control" data-choices="" data-choices-removeitem="" type="text" id="filter-choices-input" value="T-Shirts">
                        </div>
                    </div>

                    <div class="accordion accordion-flush filter-accordion">

                        <div class="card-body border-bottom">
                            <div>
                                <p class="text-muted text-uppercase fs-12 fw-medium mb-2">Products</p>
                                <ul class="list-unstyled mb-0 filter-list">
                                    <li>
                                        <a href="#" class="d-flex py-1 align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-13 mb-0 listname">Grocery</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex py-1 align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-13 mb-0 listname">Fashion</h5>
                                            </div>
                                            <div class="flex-shrink-0 ms-2">
                                                <span class="badge bg-light text-muted">5</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex py-1 align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-13 mb-0 listname">Watches</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex py-1 align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-13 mb-0 listname">Electronics</h5>
                                            </div>
                                            <div class="flex-shrink-0 ms-2">
                                                <span class="badge bg-light text-muted">5</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex py-1 align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-13 mb-0 listname">Furniture</h5>
                                            </div>
                                            <div class="flex-shrink-0 ms-2">
                                                <span class="badge bg-light text-muted">6</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex py-1 align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-13 mb-0 listname">Automotive Accessories</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex py-1 align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-13 mb-0 listname">Appliances</h5>
                                            </div>
                                            <div class="flex-shrink-0 ms-2">
                                                <span class="badge bg-light text-muted">7</span>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="d-flex py-1 align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-13 mb-0 listname">Kids</h5>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="card-body border-bottom">
                            <p class="text-muted text-uppercase fs-12 fw-medium mb-4">Price</p>

                            <div id="product-price-range" data-slider-color="primary" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"><div class="noUi-base"><div class="noUi-connects"><div class="noUi-connect noUi-draggable" style="transform: translate(0%, 0px) scale(1, 1);"></div></div><div class="noUi-origin" style="transform: translate(-100%, 0px); z-index: 5;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="1980.0" aria-valuenow="0.0" aria-valuetext="$ 0"><div class="noUi-touch-area"></div></div></div><div class="noUi-origin" style="transform: translate(0%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="20.0" aria-valuemax="2000.0" aria-valuenow="2000.0" aria-valuetext="$ 2000"><div class="noUi-touch-area"></div></div></div></div></div>
                            <div class="formCost d-flex gap-2 align-items-center mt-3">
                                <input class="form-control form-control-sm" type="text" id="minCost" value="0"> <span class="fw-semibold text-muted">to</span> <input class="form-control form-control-sm" type="text" id="maxCost" value="1000">
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingBrands">
                                <button class="accordion-button bg-transparent shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseBrands" aria-expanded="true" aria-controls="flush-collapseBrands">
                                    <span class="text-muted text-uppercase fs-12 fw-medium">Brands</span> <span class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                                </button>
                            </h2>

                            <div id="flush-collapseBrands" class="accordion-collapse collapse show" aria-labelledby="flush-headingBrands">
                                <div class="accordion-body text-body pt-0">
                                    <div class="search-box search-box-sm">
                                        <input type="text" class="form-control bg-light border-0" id="searchBrandsList" placeholder="Search Brands...">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                    <div class="d-flex flex-column gap-2 mt-3 filter-check">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Boat" id="productBrandRadio5" checked="">
                                            <label class="form-check-label" for="productBrandRadio5">Boat</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="OnePlus" id="productBrandRadio4">
                                            <label class="form-check-label" for="productBrandRadio4">OnePlus</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Realme" id="productBrandRadio3">
                                            <label class="form-check-label" for="productBrandRadio3">Realme</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Sony" id="productBrandRadio2">
                                            <label class="form-check-label" for="productBrandRadio2">Sony</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="JBL" id="productBrandRadio1" checked="">
                                            <label class="form-check-label" for="productBrandRadio1">JBL</label>
                                        </div>

                                        <div>
                                            <button type="button" class="btn btn-link text-decoration-none text-uppercase fw-medium p-0">1,235
                                                More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end accordion-item -->

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingDiscount">
                                <button class="accordion-button bg-transparent shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseDiscount" aria-expanded="true" aria-controls="flush-collapseDiscount">
                                    <span class="text-muted text-uppercase fs-12 fw-medium">Discount</span> <span class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                                </button>
                            </h2>
                            <div id="flush-collapseDiscount" class="accordion-collapse collapse" aria-labelledby="flush-headingDiscount">
                                <div class="accordion-body text-body pt-1">
                                    <div class="d-flex flex-column gap-2 filter-check">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="50% or more" id="productdiscountRadio6">
                                            <label class="form-check-label" for="productdiscountRadio6">50% or more</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="40% or more" id="productdiscountRadio5">
                                            <label class="form-check-label" for="productdiscountRadio5">40% or more</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="30% or more" id="productdiscountRadio4">
                                            <label class="form-check-label" for="productdiscountRadio4">
                                                30% or more
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="20% or more" id="productdiscountRadio3" checked="">
                                            <label class="form-check-label" for="productdiscountRadio3">
                                                20% or more
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="10% or more" id="productdiscountRadio2">
                                            <label class="form-check-label" for="productdiscountRadio2">
                                                10% or more
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Less than 10%" id="productdiscountRadio1">
                                            <label class="form-check-label" for="productdiscountRadio1">
                                                Less than 10%
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end accordion-item -->

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingRating">
                                <button class="accordion-button bg-transparent shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseRating" aria-expanded="false" aria-controls="flush-collapseRating">
                                    <span class="text-muted text-uppercase fs-12 fw-medium">Rating</span> <span class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                                </button>
                            </h2>

                            <div id="flush-collapseRating" class="accordion-collapse collapse" aria-labelledby="flush-headingRating">
                                <div class="accordion-body text-body">
                                    <div class="d-flex flex-column gap-2 filter-check">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="4 &amp; Above Star" id="productratingRadio4" checked="">
                                            <label class="form-check-label" for="productratingRadio4">
                                                <span class="text-muted">
                                                    <i class="mdi mdi-star text-warning"></i>
                                                    <i class="mdi mdi-star text-warning"></i>
                                                    <i class="mdi mdi-star text-warning"></i>
                                                    <i class="mdi mdi-star text-warning"></i>
                                                    <i class="mdi mdi-star"></i>
                                                </span> 4 &amp; Above
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="3 &amp; Above Star" id="productratingRadio3">
                                            <label class="form-check-label" for="productratingRadio3">
                                                <span class="text-muted">
                                                    <i class="mdi mdi-star text-warning"></i>
                                                    <i class="mdi mdi-star text-warning"></i>
                                                    <i class="mdi mdi-star text-warning"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                </span> 3 &amp; Above
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="2 &amp; Above Star" id="productratingRadio2">
                                            <label class="form-check-label" for="productratingRadio2">
                                                <span class="text-muted">
                                                    <i class="mdi mdi-star text-warning"></i>
                                                    <i class="mdi mdi-star text-warning"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                </span> 2 &amp; Above
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1 Star" id="productratingRadio1">
                                            <label class="form-check-label" for="productratingRadio1">
                                                <span class="text-muted">
                                                    <i class="mdi mdi-star text-warning"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                </span> 1
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end accordion-item -->
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->

            <div class="col-xl-9 col-lg-8">
                <div>
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="row g-4">
                                <div class="col-sm-auto">
                                    <div>
                                        <a href="apps-ecommerce-add-product.html" class="btn btn-primary" id="addproduct-btn"><i class="ri-add-line align-bottom me-1"></i> Add Product</a>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="d-flex justify-content-sm-end">
                                        <div class="search-box ms-2">
                                            <input type="text" class="form-control" id="searchProductList" placeholder="Search Products...">
                                            <i class="ri-search-line search-icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link fw-semibold active" data-bs-toggle="tab" href="#productnav-all" role="tab" aria-selected="true">
                                                All <span class="badge badge-soft-danger align-middle rounded-pill ms-1">12</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#productnav-published" role="tab" aria-selected="false" tabindex="-1">
                                                Published <span class="badge badge-soft-danger align-middle rounded-pill ms-1">5</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#productnav-draft" role="tab" aria-selected="false" tabindex="-1">
                                                Draft
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-auto">
                                    <div id="selection-element" style="display: none;">
                                        <div class="my-n1 d-flex align-items-center text-muted">
                                            Select <div id="select-content" class="text-body fw-semibold px-1"></div> Result <button type="button" class="btn btn-link link-danger p-0 ms-3" data-bs-toggle="modal" data-bs-target="#removeItemModal">Remove</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card header -->
                        <div class="card-body">

                            <div class="tab-content text-muted">
                                <div class="tab-pane active show" id="productnav-all" role="tabpanel">
                                    <div id="table-product-list-all" class="table-card gridjs-border-none"><div role="complementary" class="gridjs gridjs-container" style="width: 100%;"><div class="gridjs-wrapper" style="height: auto;"><table role="grid" class="gridjs-table" style="height: auto;"><thead class="gridjs-thead"><tr class="gridjs-tr"><th data-column-id="#" class="gridjs-th text-muted" style="width: 40px;"><div class="gridjs-th-content">#</div></th><th data-column-id="product" class="gridjs-th gridjs-th-sort text-muted" tabindex="0" style="width: 360px;"><div class="gridjs-th-content">Product</div><button tabindex="-1" aria-label="Sort column descending" title="Sort column descending" class="gridjs-sort gridjs-sort-asc"></button></th><th data-column-id="stock" class="gridjs-th gridjs-th-sort text-muted" tabindex="0" style="width: 94px;"><div class="gridjs-th-content">Stock</div><button tabindex="-1" aria-label="Sort column ascending" title="Sort column ascending" class="gridjs-sort gridjs-sort-neutral"></button></th><th data-column-id="price" class="gridjs-th gridjs-th-sort text-muted" tabindex="0" style="width: 101px;"><div class="gridjs-th-content">Price</div><button tabindex="-1" aria-label="Sort column ascending" title="Sort column ascending" class="gridjs-sort gridjs-sort-neutral"></button></th><th data-column-id="orders" class="gridjs-th gridjs-th-sort text-muted" tabindex="0" style="width: 84px;"><div class="gridjs-th-content">Orders</div><button tabindex="-1" aria-label="Sort column ascending" title="Sort column ascending" class="gridjs-sort gridjs-sort-neutral"></button></th><th data-column-id="rating" class="gridjs-th gridjs-th-sort text-muted" tabindex="0" style="width: 105px;"><div class="gridjs-th-content">Rating</div><button tabindex="-1" aria-label="Sort column ascending" title="Sort column ascending" class="gridjs-sort gridjs-sort-neutral"></button></th><th data-column-id="published" class="gridjs-th gridjs-th-sort text-muted" tabindex="0" style="width: 220px;"><div class="gridjs-th-content">Published</div><button tabindex="-1" aria-label="Sort column ascending" title="Sort column ascending" class="gridjs-sort gridjs-sort-neutral"></button></th><th data-column-id="action" class="gridjs-th text-muted" style="width: 80px;"><div class="gridjs-th-content">Action</div></th></tr></thead><tbody class="gridjs-tbody"><tr class="gridjs-tr"><td data-column-id="#" class="gridjs-td"><span><div class="form-check checkbox-product-list">					<input class="form-check-input" type="checkbox" value="1" id="checkbox-1">					<label class="form-check-label" for="checkbox-1"></label>				  </div></span></td><td data-column-id="product" class="gridjs-td"><span><div class="d-flex align-items-center"><div class="flex-shrink-0 me-3"><div class="avatar-sm bg-light rounded p-1"><img src="assets/images/products/img-1.png" alt="" class="img-fluid d-block"></div></div><div class="flex-grow-1"><h5 class="fs-14 mb-1"><a href="apps-ecommerce-product-details.html" class="text-dark">Half Sleeve Round Neck T-Shirts</a></h5><p class="text-muted mb-0">Category : <span class="fw-medium">Fashion</span></p></div></div></span></td><td data-column-id="stock" class="gridjs-td">12</td><td data-column-id="price" class="gridjs-td"><span>$215.00</span></td><td data-column-id="orders" class="gridjs-td">48</td><td data-column-id="rating" class="gridjs-td"><span><span class="badge bg-light text-body fs-12 fw-medium"><i class="mdi mdi-star text-warning me-1"></i>4.2</span></span></td><td data-column-id="published" class="gridjs-td"><span>12 Oct, 2021<small class="text-muted ms-1">10:05 AM</small></span></td><td data-column-id="action" class="gridjs-td"><span><div class="dropdown"><button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-fill"></i></button><ul class="dropdown-menu dropdown-menu-end"><li><a class="dropdown-item" href="apps-ecommerce-product-details.html"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li><li><a class="dropdown-item edit-list" data-edit-id="1" href="apps-ecommerce-add-product.html"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li><li class="dropdown-divider"></li><li><a class="dropdown-item remove-list" href="#" data-id="1" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li></ul></div></span></td></tr><tr class="gridjs-tr"><td data-column-id="#" class="gridjs-td"><span><div class="form-check checkbox-product-list">					<input class="form-check-input" type="checkbox" value="2" id="checkbox-2">					<label class="form-check-label" for="checkbox-2"></label>				  </div></span></td><td data-column-id="product" class="gridjs-td"><span><div class="d-flex align-items-center"><div class="flex-shrink-0 me-3"><div class="avatar-sm bg-light rounded p-1"><img src="assets/images/products/img-2.png" alt="" class="img-fluid d-block"></div></div><div class="flex-grow-1"><h5 class="fs-14 mb-1"><a href="apps-ecommerce-product-details.html" class="text-dark">Urban Ladder Pashe Chair</a></h5><p class="text-muted mb-0">Category : <span class="fw-medium">Furniture</span></p></div></div></span></td><td data-column-id="stock" class="gridjs-td">06</td><td data-column-id="price" class="gridjs-td"><span>$160.00</span></td><td data-column-id="orders" class="gridjs-td">30</td><td data-column-id="rating" class="gridjs-td"><span><span class="badge bg-light text-body fs-12 fw-medium"><i class="mdi mdi-star text-warning me-1"></i>4.3</span></span></td><td data-column-id="published" class="gridjs-td"><span>06 Jan, 2021<small class="text-muted ms-1">01:31 PM</small></span></td><td data-column-id="action" class="gridjs-td"><span><div class="dropdown"><button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-fill"></i></button><ul class="dropdown-menu dropdown-menu-end"><li><a class="dropdown-item" href="apps-ecommerce-product-details.html"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li><li><a class="dropdown-item edit-list" data-edit-id="2" href="apps-ecommerce-add-product.html"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li><li class="dropdown-divider"></li><li><a class="dropdown-item remove-list" href="#" data-id="2" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li></ul></div></span></td></tr><tr class="gridjs-tr"><td data-column-id="#" class="gridjs-td"><span><div class="form-check checkbox-product-list">					<input class="form-check-input" type="checkbox" value="3" id="checkbox-3">					<label class="form-check-label" for="checkbox-3"></label>				  </div></span></td><td data-column-id="product" class="gridjs-td"><span><div class="d-flex align-items-center"><div class="flex-shrink-0 me-3"><div class="avatar-sm bg-light rounded p-1"><img src="assets/images/products/img-3.png" alt="" class="img-fluid d-block"></div></div><div class="flex-grow-1"><h5 class="fs-14 mb-1"><a href="apps-ecommerce-product-details.html" class="text-dark">350 ml Glass Grocery Container</a></h5><p class="text-muted mb-0">Category : <span class="fw-medium">Grocery</span></p></div></div></span></td><td data-column-id="stock" class="gridjs-td">10</td><td data-column-id="price" class="gridjs-td"><span>$125.00</span></td><td data-column-id="orders" class="gridjs-td">48</td><td data-column-id="rating" class="gridjs-td"><span><span class="badge bg-light text-body fs-12 fw-medium"><i class="mdi mdi-star text-warning me-1"></i>4.5</span></span></td><td data-column-id="published" class="gridjs-td"><span>26 Mar, 2021<small class="text-muted ms-1">11:40 AM</small></span></td><td data-column-id="action" class="gridjs-td"><span><div class="dropdown"><button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-fill"></i></button><ul class="dropdown-menu dropdown-menu-end"><li><a class="dropdown-item" href="apps-ecommerce-product-details.html"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li><li><a class="dropdown-item edit-list" data-edit-id="3" href="apps-ecommerce-add-product.html"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li><li class="dropdown-divider"></li><li><a class="dropdown-item remove-list" href="#" data-id="3" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li></ul></div></span></td></tr><tr class="gridjs-tr"><td data-column-id="#" class="gridjs-td"><span><div class="form-check checkbox-product-list">					<input class="form-check-input" type="checkbox" value="4" id="checkbox-4">					<label class="form-check-label" for="checkbox-4"></label>				  </div></span></td><td data-column-id="product" class="gridjs-td"><span><div class="d-flex align-items-center"><div class="flex-shrink-0 me-3"><div class="avatar-sm bg-light rounded p-1"><img src="assets/images/products/img-4.png" alt="" class="img-fluid d-block"></div></div><div class="flex-grow-1"><h5 class="fs-14 mb-1"><a href="apps-ecommerce-product-details.html" class="text-dark">Fabric Dual Tone Living Room Chair</a></h5><p class="text-muted mb-0">Category : <span class="fw-medium">Furniture</span></p></div></div></span></td><td data-column-id="stock" class="gridjs-td">15</td><td data-column-id="price" class="gridjs-td"><span>$340.00</span></td><td data-column-id="orders" class="gridjs-td">40</td><td data-column-id="rating" class="gridjs-td"><span><span class="badge bg-light text-body fs-12 fw-medium"><i class="mdi mdi-star text-warning me-1"></i>4.2</span></span></td><td data-column-id="published" class="gridjs-td"><span>19 Apr, 2021<small class="text-muted ms-1">02:51 PM</small></span></td><td data-column-id="action" class="gridjs-td"><span><div class="dropdown"><button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-fill"></i></button><ul class="dropdown-menu dropdown-menu-end"><li><a class="dropdown-item" href="apps-ecommerce-product-details.html"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li><li><a class="dropdown-item edit-list" data-edit-id="4" href="apps-ecommerce-add-product.html"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li><li class="dropdown-divider"></li><li><a class="dropdown-item remove-list" href="#" data-id="4" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li></ul></div></span></td></tr><tr class="gridjs-tr"><td data-column-id="#" class="gridjs-td"><span><div class="form-check checkbox-product-list">					<input class="form-check-input" type="checkbox" value="5" id="checkbox-5">					<label class="form-check-label" for="checkbox-5"></label>				  </div></span></td><td data-column-id="product" class="gridjs-td"><span><div class="d-flex align-items-center"><div class="flex-shrink-0 me-3"><div class="avatar-sm bg-light rounded p-1"><img src="assets/images/products/img-5.png" alt="" class="img-fluid d-block"></div></div><div class="flex-grow-1"><h5 class="fs-14 mb-1"><a href="apps-ecommerce-product-details.html" class="text-dark">Crux Motorsports Helmet</a></h5><p class="text-muted mb-0">Category : <span class="fw-medium">Automotive Accessories</span></p></div></div></span></td><td data-column-id="stock" class="gridjs-td">08</td><td data-column-id="price" class="gridjs-td"><span>$175.00</span></td><td data-column-id="orders" class="gridjs-td">55</td><td data-column-id="rating" class="gridjs-td"><span><span class="badge bg-light text-body fs-12 fw-medium"><i class="mdi mdi-star text-warning me-1"></i>4.4</span></span></td><td data-column-id="published" class="gridjs-td"><span>30 Mar, 2021<small class="text-muted ms-1">09:42 AM</small></span></td><td data-column-id="action" class="gridjs-td"><span><div class="dropdown"><button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-fill"></i></button><ul class="dropdown-menu dropdown-menu-end"><li><a class="dropdown-item" href="apps-ecommerce-product-details.html"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li><li><a class="dropdown-item edit-list" data-edit-id="5" href="apps-ecommerce-add-product.html"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li><li class="dropdown-divider"></li><li><a class="dropdown-item remove-list" href="#" data-id="5" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li></ul></div></span></td></tr><tr class="gridjs-tr"><td data-column-id="#" class="gridjs-td"><span><div class="form-check checkbox-product-list">					<input class="form-check-input" type="checkbox" value="6" id="checkbox-6">					<label class="form-check-label" for="checkbox-6"></label>				  </div></span></td><td data-column-id="product" class="gridjs-td"><span><div class="d-flex align-items-center"><div class="flex-shrink-0 me-3"><div class="avatar-sm bg-light rounded p-1"><img src="assets/images/products/img-6.png" alt="" class="img-fluid d-block"></div></div><div class="flex-grow-1"><h5 class="fs-14 mb-1"><a href="apps-ecommerce-product-details.html" class="text-dark">Half Sleeve T-Shirts (Blue)</a></h5><p class="text-muted mb-0">Category : <span class="fw-medium">Fashion</span></p></div></div></span></td><td data-column-id="stock" class="gridjs-td">15</td><td data-column-id="price" class="gridjs-td"><span>$225.00</span></td><td data-column-id="orders" class="gridjs-td">48</td><td data-column-id="rating" class="gridjs-td"><span><span class="badge bg-light text-body fs-12 fw-medium"><i class="mdi mdi-star text-warning me-1"></i>4.2</span></span></td><td data-column-id="published" class="gridjs-td"><span>12 Oct, 2021<small class="text-muted ms-1">04:55 PM</small></span></td><td data-column-id="action" class="gridjs-td"><span><div class="dropdown"><button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-fill"></i></button><ul class="dropdown-menu dropdown-menu-end"><li><a class="dropdown-item" href="apps-ecommerce-product-details.html"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li><li><a class="dropdown-item edit-list" data-edit-id="6" href="apps-ecommerce-add-product.html"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li><li class="dropdown-divider"></li><li><a class="dropdown-item remove-list" href="#" data-id="6" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li></ul></div></span></td></tr><tr class="gridjs-tr"><td data-column-id="#" class="gridjs-td"><span><div class="form-check checkbox-product-list">					<input class="form-check-input" type="checkbox" value="7" id="checkbox-7">					<label class="form-check-label" for="checkbox-7"></label>				  </div></span></td><td data-column-id="product" class="gridjs-td"><span><div class="d-flex align-items-center"><div class="flex-shrink-0 me-3"><div class="avatar-sm bg-light rounded p-1"><img src="assets/images/products/img-7.png" alt="" class="img-fluid d-block"></div></div><div class="flex-grow-1"><h5 class="fs-14 mb-1"><a href="apps-ecommerce-product-details.html" class="text-dark">Noise Evolve Smartwatch</a></h5><p class="text-muted mb-0">Category : <span class="fw-medium">Watches</span></p></div></div></span></td><td data-column-id="stock" class="gridjs-td">12</td><td data-column-id="price" class="gridjs-td"><span>$105.00</span></td><td data-column-id="orders" class="gridjs-td">45</td><td data-column-id="rating" class="gridjs-td"><span><span class="badge bg-light text-body fs-12 fw-medium"><i class="mdi mdi-star text-warning me-1"></i>4.3</span></span></td><td data-column-id="published" class="gridjs-td"><span>15 May, 2021<small class="text-muted ms-1">03:40 PM</small></span></td><td data-column-id="action" class="gridjs-td"><span><div class="dropdown"><button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-fill"></i></button><ul class="dropdown-menu dropdown-menu-end"><li><a class="dropdown-item" href="apps-ecommerce-product-details.html"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li><li><a class="dropdown-item edit-list" data-edit-id="7" href="apps-ecommerce-add-product.html"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li><li class="dropdown-divider"></li><li><a class="dropdown-item remove-list" href="#" data-id="7" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li></ul></div></span></td></tr><tr class="gridjs-tr"><td data-column-id="#" class="gridjs-td"><span><div class="form-check checkbox-product-list">					<input class="form-check-input" type="checkbox" value="8" id="checkbox-8">					<label class="form-check-label" for="checkbox-8"></label>				  </div></span></td><td data-column-id="product" class="gridjs-td"><span><div class="d-flex align-items-center"><div class="flex-shrink-0 me-3"><div class="avatar-sm bg-light rounded p-1"><img src="assets/images/products/img-8.png" alt="" class="img-fluid d-block"></div></div><div class="flex-grow-1"><h5 class="fs-14 mb-1"><a href="apps-ecommerce-product-details.html" class="text-dark">Sweatshirt for Men (Pink)</a></h5><p class="text-muted mb-0">Category : <span class="fw-medium">Fashion</span></p></div></div></span></td><td data-column-id="stock" class="gridjs-td">20</td><td data-column-id="price" class="gridjs-td"><span>$120.00</span></td><td data-column-id="orders" class="gridjs-td">48</td><td data-column-id="rating" class="gridjs-td"><span><span class="badge bg-light text-body fs-12 fw-medium"><i class="mdi mdi-star text-warning me-1"></i>4.2</span></span></td><td data-column-id="published" class="gridjs-td"><span>21 Jun, 2021<small class="text-muted ms-1">12:18 PM</small></span></td><td data-column-id="action" class="gridjs-td"><span><div class="dropdown"><button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-fill"></i></button><ul class="dropdown-menu dropdown-menu-end"><li><a class="dropdown-item" href="apps-ecommerce-product-details.html"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li><li><a class="dropdown-item edit-list" data-edit-id="8" href="apps-ecommerce-add-product.html"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li><li class="dropdown-divider"></li><li><a class="dropdown-item remove-list" href="#" data-id="8" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li></ul></div></span></td></tr><tr class="gridjs-tr"><td data-column-id="#" class="gridjs-td"><span><div class="form-check checkbox-product-list">					<input class="form-check-input" type="checkbox" value="9" id="checkbox-9">					<label class="form-check-label" for="checkbox-9"></label>				  </div></span></td><td data-column-id="product" class="gridjs-td"><span><div class="d-flex align-items-center"><div class="flex-shrink-0 me-3"><div class="avatar-sm bg-light rounded p-1"><img src="assets/images/products/img-9.png" alt="" class="img-fluid d-block"></div></div><div class="flex-grow-1"><h5 class="fs-14 mb-1"><a href="apps-ecommerce-product-details.html" class="text-dark">Reusable Ecological Coffee Cup</a></h5><p class="text-muted mb-0">Category : <span class="fw-medium">Grocery</span></p></div></div></span></td><td data-column-id="stock" class="gridjs-td">14</td><td data-column-id="price" class="gridjs-td"><span>$325.00</span></td><td data-column-id="orders" class="gridjs-td">55</td><td data-column-id="rating" class="gridjs-td"><span><span class="badge bg-light text-body fs-12 fw-medium"><i class="mdi mdi-star text-warning me-1"></i>4.3</span></span></td><td data-column-id="published" class="gridjs-td"><span>15 Jan, 2021<small class="text-muted ms-1">10:29 PM</small></span></td><td data-column-id="action" class="gridjs-td"><span><div class="dropdown"><button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-fill"></i></button><ul class="dropdown-menu dropdown-menu-end"><li><a class="dropdown-item" href="apps-ecommerce-product-details.html"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li><li><a class="dropdown-item edit-list" data-edit-id="9" href="apps-ecommerce-add-product.html"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li><li class="dropdown-divider"></li><li><a class="dropdown-item remove-list" href="#" data-id="9" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li></ul></div></span></td></tr><tr class="gridjs-tr"><td data-column-id="#" class="gridjs-td"><span><div class="form-check checkbox-product-list">					<input class="form-check-input" type="checkbox" value="10" id="checkbox-10">					<label class="form-check-label" for="checkbox-10"></label>				  </div></span></td><td data-column-id="product" class="gridjs-td"><span><div class="d-flex align-items-center"><div class="flex-shrink-0 me-3"><div class="avatar-sm bg-light rounded p-1"><img src="assets/images/products/img-10.png" alt="" class="img-fluid d-block"></div></div><div class="flex-grow-1"><h5 class="fs-14 mb-1"><a href="apps-ecommerce-product-details.html" class="text-dark">Travel Carrying Pouch Bag</a></h5><p class="text-muted mb-0">Category : <span class="fw-medium">Kids</span></p></div></div></span></td><td data-column-id="stock" class="gridjs-td">20</td><td data-column-id="price" class="gridjs-td"><span>$180.00</span></td><td data-column-id="orders" class="gridjs-td">60</td><td data-column-id="rating" class="gridjs-td"><span><span class="badge bg-light text-body fs-12 fw-medium"><i class="mdi mdi-star text-warning me-1"></i>4.3</span></span></td><td data-column-id="published" class="gridjs-td"><span>15 Jun, 2021<small class="text-muted ms-1">03:51 PM</small></span></td><td data-column-id="action" class="gridjs-td"><span><div class="dropdown"><button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-fill"></i></button><ul class="dropdown-menu dropdown-menu-end"><li><a class="dropdown-item" href="apps-ecommerce-product-details.html"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li><li><a class="dropdown-item edit-list" data-edit-id="10" href="apps-ecommerce-add-product.html"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li><li class="dropdown-divider"></li><li><a class="dropdown-item remove-list" href="#" data-id="10" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li></ul></div></span></td></tr></tbody></table></div><div class="gridjs-footer"><div class="gridjs-pagination"><div role="status" aria-live="polite" class="gridjs-summary" title="Page 1 of 2">Showing <b>1</b> to <b>10</b> of <b>12</b> results</div><div class="gridjs-pages"><button tabindex="0" role="button" disabled="" title="Previous" aria-label="Previous" class="">Previous</button><button tabindex="0" role="button" class="gridjs-currentPage" title="Page 1" aria-label="Page 1">1</button><button tabindex="0" role="button" class="" title="Page 2" aria-label="Page 2">2</button><button tabindex="0" role="button" title="Next" aria-label="Next" class="">Next</button></div></div></div><div id="gridjs-temp" class="gridjs-temp"></div></div></div>
                                </div>
                                <!-- end tab pane -->

                                <div class="tab-pane" id="productnav-published" role="tabpanel">
                                    <div id="table-product-list-published" class="table-card gridjs-border-none"><div role="complementary" class="gridjs gridjs-container" style="width: 100%;"><div class="gridjs-wrapper" style="height: auto;"><table role="grid" class="gridjs-table" style="height: auto;"><thead class="gridjs-thead"><tr class="gridjs-tr"><th data-column-id="#" class="gridjs-th text-muted" style="width: 40px;"><div class="gridjs-th-content">#</div></th><th data-column-id="product" class="gridjs-th gridjs-th-sort text-muted" tabindex="0" style="width: 360px;"><div class="gridjs-th-content">Product</div><button tabindex="-1" aria-label="Sort column ascending" title="Sort column ascending" class="gridjs-sort gridjs-sort-neutral"></button></th><th data-column-id="stock" class="gridjs-th gridjs-th-sort text-muted" tabindex="0" style="width: 94px;"><div class="gridjs-th-content">Stock</div><button tabindex="-1" aria-label="Sort column ascending" title="Sort column ascending" class="gridjs-sort gridjs-sort-neutral"></button></th><th data-column-id="price" class="gridjs-th gridjs-th-sort text-muted" tabindex="0" style="width: 101px;"><div class="gridjs-th-content">Price</div><button tabindex="-1" aria-label="Sort column ascending" title="Sort column ascending" class="gridjs-sort gridjs-sort-neutral"></button></th><th data-column-id="orders" class="gridjs-th gridjs-th-sort text-muted" tabindex="0" style="width: 84px;"><div class="gridjs-th-content">Orders</div><button tabindex="-1" aria-label="Sort column ascending" title="Sort column ascending" class="gridjs-sort gridjs-sort-neutral"></button></th><th data-column-id="rating" class="gridjs-th gridjs-th-sort text-muted" tabindex="0" style="width: 105px;"><div class="gridjs-th-content">Rating</div><button tabindex="-1" aria-label="Sort column ascending" title="Sort column ascending" class="gridjs-sort gridjs-sort-neutral"></button></th><th data-column-id="published" class="gridjs-th gridjs-th-sort text-muted" tabindex="0" style="width: 220px;"><div class="gridjs-th-content">Published</div><button tabindex="-1" aria-label="Sort column ascending" title="Sort column ascending" class="gridjs-sort gridjs-sort-neutral"></button></th><th data-column-id="action" class="gridjs-th text-muted" style="width: 80px;"><div class="gridjs-th-content">Action</div></th></tr></thead><tbody class="gridjs-tbody"><tr class="gridjs-tr"><td data-column-id="#" class="gridjs-td"><span><div class="form-check checkbox-product-list">					<input class="form-check-input" type="checkbox" value="undefined" id="checkboxpublished-undefined">					<label class="form-check-label" for="checkbox-undefined"></label>				  </div></span></td><td data-column-id="product" class="gridjs-td"><span><div class="d-flex align-items-center"><div class="flex-shrink-0 me-3"><div class="avatar-sm bg-light rounded p-1"><img src="assets/images/products/img-2.png" alt="" class="img-fluid d-block"></div></div><div class="flex-grow-1"><h5 class="fs-14 mb-1"><a href="apps-ecommerce-product-details.html" class="text-dark">Urban Ladder Pashe Chair</a></h5><p class="text-muted mb-0">Category : <span class="fw-medium">Furniture</span></p></div></div></span></td><td data-column-id="stock" class="gridjs-td">06</td><td data-column-id="price" class="gridjs-td"><span>$160.00</span></td><td data-column-id="orders" class="gridjs-td">30</td><td data-column-id="rating" class="gridjs-td"><span><span class="badge bg-light text-body fs-12 fw-medium"><i class="mdi mdi-star text-warning me-1"></i>4.3</span></span></td><td data-column-id="published" class="gridjs-td"><span>06 Jan, 2021<small class="text-muted ms-1">01:31 PM</small></span></td><td data-column-id="action" class="gridjs-td"><span><div class="dropdown"><button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-fill"></i></button><ul class="dropdown-menu dropdown-menu-end"><li><a class="dropdown-item" href="apps-ecommerce-product-details.html"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li><li><a class="dropdown-item" href="apps-ecommerce-add-product.html"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li><li class="dropdown-divider"></li><li><a class="dropdown-item remove-list" href="#" data-id="undefined" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li></ul></div></span></td></tr><tr class="gridjs-tr"><td data-column-id="#" class="gridjs-td"><span><div class="form-check checkbox-product-list">					<input class="form-check-input" type="checkbox" value="undefined" id="checkboxpublished-undefined">					<label class="form-check-label" for="checkbox-undefined"></label>				  </div></span></td><td data-column-id="product" class="gridjs-td"><span><div class="d-flex align-items-center"><div class="flex-shrink-0 me-3"><div class="avatar-sm bg-light rounded p-1"><img src="assets/images/products/img-6.png" alt="" class="img-fluid d-block"></div></div><div class="flex-grow-1"><h5 class="fs-14 mb-1"><a href="apps-ecommerce-product-details.html" class="text-dark">Half Sleeve T-Shirts (Blue)</a></h5><p class="text-muted mb-0">Category : <span class="fw-medium">Fashion</span></p></div></div></span></td><td data-column-id="stock" class="gridjs-td">15</td><td data-column-id="price" class="gridjs-td"><span>$125.00</span></td><td data-column-id="orders" class="gridjs-td">48</td><td data-column-id="rating" class="gridjs-td"><span><span class="badge bg-light text-body fs-12 fw-medium"><i class="mdi mdi-star text-warning me-1"></i>4.2</span></span></td><td data-column-id="published" class="gridjs-td"><span>12 Oct, 2021<small class="text-muted ms-1">04:55 PM</small></span></td><td data-column-id="action" class="gridjs-td"><span><div class="dropdown"><button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-fill"></i></button><ul class="dropdown-menu dropdown-menu-end"><li><a class="dropdown-item" href="apps-ecommerce-product-details.html"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li><li><a class="dropdown-item" href="apps-ecommerce-add-product.html"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li><li class="dropdown-divider"></li><li><a class="dropdown-item remove-list" href="#" data-id="undefined" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li></ul></div></span></td></tr><tr class="gridjs-tr"><td data-column-id="#" class="gridjs-td"><span><div class="form-check checkbox-product-list">					<input class="form-check-input" type="checkbox" value="undefined" id="checkboxpublished-undefined">					<label class="form-check-label" for="checkbox-undefined"></label>				  </div></span></td><td data-column-id="product" class="gridjs-td"><span><div class="d-flex align-items-center"><div class="flex-shrink-0 me-3"><div class="avatar-sm bg-light rounded p-1"><img src="assets/images/products/img-4.png" alt="" class="img-fluid d-block"></div></div><div class="flex-grow-1"><h5 class="fs-14 mb-1"><a href="apps-ecommerce-product-details.html" class="text-dark">Fabric Dual Tone Living Room Chair</a></h5><p class="text-muted mb-0">Category : <span class="fw-medium">Furniture</span></p></div></div></span></td><td data-column-id="stock" class="gridjs-td">15</td><td data-column-id="price" class="gridjs-td"><span>$140.00</span></td><td data-column-id="orders" class="gridjs-td">40</td><td data-column-id="rating" class="gridjs-td"><span><span class="badge bg-light text-body fs-12 fw-medium"><i class="mdi mdi-star text-warning me-1"></i>4.2</span></span></td><td data-column-id="published" class="gridjs-td"><span>19 Apr, 2021<small class="text-muted ms-1">02:51 PM</small></span></td><td data-column-id="action" class="gridjs-td"><span><div class="dropdown"><button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-fill"></i></button><ul class="dropdown-menu dropdown-menu-end"><li><a class="dropdown-item" href="apps-ecommerce-product-details.html"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li><li><a class="dropdown-item" href="apps-ecommerce-add-product.html"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li><li class="dropdown-divider"></li><li><a class="dropdown-item remove-list" href="#" data-id="undefined" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li></ul></div></span></td></tr><tr class="gridjs-tr"><td data-column-id="#" class="gridjs-td"><span><div class="form-check checkbox-product-list">					<input class="form-check-input" type="checkbox" value="undefined" id="checkboxpublished-undefined">					<label class="form-check-label" for="checkbox-undefined"></label>				  </div></span></td><td data-column-id="product" class="gridjs-td"><span><div class="d-flex align-items-center"><div class="flex-shrink-0 me-3"><div class="avatar-sm bg-light rounded p-1"><img src="assets/images/products/img-4.png" alt="" class="img-fluid d-block"></div></div><div class="flex-grow-1"><h5 class="fs-14 mb-1"><a href="apps-ecommerce-product-details.html" class="text-dark">350 ml Glass Grocery Container</a></h5><p class="text-muted mb-0">Category : <span class="fw-medium">Grocery</span></p></div></div></span></td><td data-column-id="stock" class="gridjs-td">10</td><td data-column-id="price" class="gridjs-td"><span>$125.00</span></td><td data-column-id="orders" class="gridjs-td">48</td><td data-column-id="rating" class="gridjs-td"><span><span class="badge bg-light text-body fs-12 fw-medium"><i class="mdi mdi-star text-warning me-1"></i>4.5</span></span></td><td data-column-id="published" class="gridjs-td"><span>26 Mar, 2021<small class="text-muted ms-1">11:40 AM</small></span></td><td data-column-id="action" class="gridjs-td"><span><div class="dropdown"><button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-fill"></i></button><ul class="dropdown-menu dropdown-menu-end"><li><a class="dropdown-item" href="apps-ecommerce-product-details.html"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li><li><a class="dropdown-item" href="apps-ecommerce-add-product.html"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li><li class="dropdown-divider"></li><li><a class="dropdown-item remove-list" href="#" data-id="undefined" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li></ul></div></span></td></tr><tr class="gridjs-tr"><td data-column-id="#" class="gridjs-td"><span><div class="form-check checkbox-product-list">					<input class="form-check-input" type="checkbox" value="undefined" id="checkboxpublished-undefined">					<label class="form-check-label" for="checkbox-undefined"></label>				  </div></span></td><td data-column-id="product" class="gridjs-td"><span><div class="d-flex align-items-center"><div class="flex-shrink-0 me-3"><div class="avatar-sm bg-light rounded p-1"><img src="assets/images/products/img-5.png" alt="" class="img-fluid d-block"></div></div><div class="flex-grow-1"><h5 class="fs-14 mb-1"><a href="apps-ecommerce-product-details.html" class="text-dark">Crux Motorsports Helmet</a></h5><p class="text-muted mb-0">Category : <span class="fw-medium">Automotive Accessories</span></p></div></div></span></td><td data-column-id="stock" class="gridjs-td">08</td><td data-column-id="price" class="gridjs-td"><span>$135.00</span></td><td data-column-id="orders" class="gridjs-td">55</td><td data-column-id="rating" class="gridjs-td"><span><span class="badge bg-light text-body fs-12 fw-medium"><i class="mdi mdi-star text-warning me-1"></i>4.4</span></span></td><td data-column-id="published" class="gridjs-td"><span>30 Mar, 2021<small class="text-muted ms-1">09:42 AM</small></span></td><td data-column-id="action" class="gridjs-td"><span><div class="dropdown"><button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-fill"></i></button><ul class="dropdown-menu dropdown-menu-end"><li><a class="dropdown-item" href="apps-ecommerce-product-details.html"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li><li><a class="dropdown-item" href="apps-ecommerce-add-product.html"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li><li class="dropdown-divider"></li><li><a class="dropdown-item remove-list" href="#" data-id="undefined" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li></ul></div></span></td></tr></tbody></table></div><div class="gridjs-footer"><div class="gridjs-pagination"><div role="status" aria-live="polite" class="gridjs-summary" title="Page 1 of 1">Showing <b>1</b> to <b>5</b> of <b>5</b> results</div><div class="gridjs-pages"><button tabindex="0" role="button" disabled="" title="Previous" aria-label="Previous" class="">Previous</button><button tabindex="0" role="button" class="gridjs-currentPage" title="Page 1" aria-label="Page 1">1</button><button tabindex="0" role="button" disabled="" title="Next" aria-label="Next" class="">Next</button></div></div></div><div id="gridjs-temp" class="gridjs-temp"></div></div></div>
                                </div>
                                <!-- end tab pane -->

                                <div class="tab-pane" id="productnav-draft" role="tabpanel">
                                    <div class="py-4 text-center">
                                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:72px;height:72px">
                                        </lord-icon>
                                        <h5 class="mt-4">Sorry! No Result Found</h5>
                                    </div>
                                </div>
                                <!-- end tab pane -->
                            </div>
                            <!-- end tab content -->

                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

    </div>
    <!-- container-fluid -->
</div>



@endsection
