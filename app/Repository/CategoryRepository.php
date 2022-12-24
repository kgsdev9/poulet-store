<?php

namespace App\Repository  ;

use App\Models\Category;

class  CategoryRepository  {

    protected $category ;
        public function __construct(Category $category)
        {
            $this->category = $category;

        }


        public function getCategoryId($id) {

            return $this->category->find($id);

        }


}
