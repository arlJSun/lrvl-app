<?php

namespace App\Models;



class post 
{
   private static $blog_posts =  [
    [
        "title" => "judul post pertama",
        "slug" => "judul-post-pertama",
        "author" => "aril zakaria",
        "body" => " Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe quasi quaerat libero beatae repellat nulla modi aperiam ipsam eum maiores culpa provident exercitationem, adipisci, placeat magni tempore corrupti, debitis vel. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, nostrum? Necessitatibus quo asperiores neque dolores vero perferendis ut porro, optio nesciunt. Sint fuga ut, dolorem autem at aliquid, iusto similique aut ad libero excepturi animi illum a. Voluptatibus, ipsum autem aliquid, distinctio pariatur aut architecto eligendi perspiciatis, assumenda ea rem nobis adipisci voluptatum? Animi aperiam eius beatae dolor itaque voluptatum esse, culpa laboriosam dicta omnis. Excepturi eaque eius in ratione voluptatem iure ab perferendis, laboriosam cupiditate debitis fuga est tempora porro vitae ad suscipit laborum sequi, quisquam et consequuntur nisi?  "
    ],
    [
        "title" => "judul post kedua",
        "slug" => "judul-post-kedua",
        "author" => "hidaliski",
        "body" => " Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe quasi quaerat libero beatae repellat nulla modi aperiam ipsam eum maiores culpa provident exercitationem, adipisci, placeat magni tempore corrupti, debitis vel. Lorem ipsum dolor sit, amet consectetur adipisicing elit. optio nesciunt. Sint fuga ut, dolorem autem at aliquid, iusto similique aut ad libero excepturi animi illum a. Voluptatibus, ipsum autem aliquid, distinctio pariatur aut architecto eligendi perspiciatis, assumenda ea rem nobis adipisci voluptatum? Animi aperiam eius beatae dolor itaque voluptatum esse.  "
    ],
];

public static function all()
{
    return collect(self::$blog_posts);
}

    public static function find($slug) 
    {
      
   $posts = static::all();   
   
//    $post =[];
//    foreach($posts as $p) {
//     if($p["slug"] === $slug) {
//       $post = $p;
//     }
   

   return $posts->firstWhere('slug', $slug);
    }
}

