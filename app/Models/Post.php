<?php

namespace App\Models;

class Post
{
    // Function
    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

    }

    // Database
    private static $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "M. Fawwaz Dzaky",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam deserunt asperiores cum expedita iure quod eos, quas est excepturi nobis reiciendis nihil autem aliquam earum dicta, porro doloremque quae. Expedita quis totam sunt id perspiciatis accusamus, fugit suscipit veritatis quae, debitis architecto! Ea aut ipsam nisi, dignissimos optio iusto ut, nostrum odit quibusdam dicta error consectetur veritatis recusandae cumque eveniet impedit nulla obcaecati officia amet illo minus. Expedita fugiat provident ipsam, impedit odio praesentium consequatur aperiam libero voluptatum nesciunt velit eveniet harum, quod suscipit, dignissimos sed ullam molestias esse et alias commodi voluptates maxime excepturi quos. Ex eveniet quia temporibus. Dolor minima earum ipsam ipsa a totam animi consequatur harum eius, laboriosam quibusdam omnis recusandae blanditiis et veniam, placeat ducimus corporis, modi similique! Quae voluptatibus minima commodi dolorum nam ipsam esse doloremque rem non. Veritatis harum minus laborum recusandae facilis, non culpa consectetur magni itaque! Laudantium aliquam modi debitis assumenda!",
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Athallah Yassar Firdaus",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt possimus aspernatur, facilis praesentium minima at autem libero voluptatum sunt aliquid laudantium voluptates dignissimos natus a provident dolorem vel ut consectetur, molestiae aut assumenda unde nulla. Nobis doloribus excepturi dignissimos non optio cumque deleniti pariatur fugit a? Sint deserunt illo assumenda laudantium nulla sequi, cupiditate suscipit, reiciendis ipsum laboriosam ducimus nostrum deleniti, quas cumque quibusdam voluptate at molestiae corporis amet totam provident excepturi atque expedita? Sapiente dicta voluptatum excepturi quia adipisci nobis, esse nesciunt rem doloribus nostrum at aspernatur ut quaerat ipsa ratione dolores, iusto, quisquam repellat! Numquam, ab. Aperiam vero voluptate totam, corporis quidem molestiae at tenetur temporibus veniam architecto. At vel cum praesentium perferendis, dolore facilis architecto nobis aliquid vitae vero quidem pariatur commodi excepturi consequuntur voluptatem laboriosam aut modi, suscipit iure. Aperiam ipsam veritatis, fuga voluptatem repudiandae sint perspiciatis obcaecati omnis consectetur nam officiis sit, hic eum est illum aut asperiores. Consequuntur, sapiente id! Inventore, nostrum quisquam reiciendis est accusantium molestiae dicta cum tenetur facilis ut alias harum neque reprehenderit nihil, aspernatur similique sapiente et, enim at nulla!",
        ],
    ];
}
