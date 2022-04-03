<?php

namespace App\Service\Product;

use Illuminate\Support\Facades\DB;

class ProductService
{
    public function handleNewProduct($request){
        $insertResult = DB::table('products')->insert([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        if($insertResult){
            $tags = explode(",", $request->input('tags'));

            $productId = DB::table('products')->where('name', $request->input('name'))->first()->id;

            foreach ($tags as $tag) {
                $tagLower = strtolower($tag);

                if(DB::table('tags')->where('name', $tagLower)->first() == null){
                    DB::table('tags')->insert([
                        'name' => $tagLower,
                    ]);
                }

                $tagId = DB::table('tags')->where('name', $tagLower)->first()->id;
                DB::table('tag_product')->insert([
                    'tag_id' => $tagId,
                    'product_id' => $productId,
                ]);
            }
            return true;
        }else{
            return false;
        } 
    }

    public function handleDeleteProduct($request){
        return DB::table('products')->delete([
            'id' => $request->input('id')
        ]);
    }

}