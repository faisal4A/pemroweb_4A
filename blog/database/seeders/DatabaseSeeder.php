<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Faisal',
            'email' => 'faisal@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => ' ajojing',
            'email' => 'ajojing@gmail.com',
            'password' => bcrypt('12345')
        ]);


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero sunt accusamus voluptas eaque totam eos voluptatum aperiam dolorem',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero sunt accusamus voluptas eaque totam eos voluptatum aperiam dolorem reprehenderit minima ab, libero, inventore quibusdam! Voluptatem ut quasi eius architecto odio porro modi delectus, dolorem libero doloremque eveniet molestiae! Placeat, soluta quisquam? Aspernatur libero, pariatur blanditiis quae dignissimos eaque vero unde, quidem vitae molestiae sequi eligendi fuga culpa! Laboriosam non eos corporis autem iste similique sed ea atque quasi soluta eveniet repellat harum nobis esse voluptatibus, recusandae doloremque, dolor quae obcaecati impedit quia animi! Nihil saepe necessitatibus mollitia aspernatur commodi tempora, et sequi esse labore accusantium veniam quidem sit. Ut, nis',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero sunt accusamus voluptas eaque totam eos voluptatum aperiam dolorem',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero sunt accusamus voluptas eaque totam eos voluptatum aperiam dolorem reprehenderit minima ab, libero, inventore quibusdam! Voluptatem ut quasi eius architecto odio porro modi delectus, dolorem libero doloremque eveniet molestiae! Placeat, soluta quisquam? Aspernatur libero, pariatur blanditiis quae dignissimos eaque vero unde, quidem vitae molestiae sequi eligendi fuga culpa! Laboriosam non eos corporis autem iste similique sed ea atque quasi soluta eveniet repellat harum nobis esse voluptatibus, recusandae doloremque, dolor quae obcaecati impedit quia animi! Nihil saepe necessitatibus mollitia aspernatur commodi tempora, et sequi esse labore accusantium veniam quidem sit. Ut, nis',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero sunt accusamus voluptas eaque totam eos voluptatum aperiam dolorem',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero sunt accusamus voluptas eaque totam eos voluptatum aperiam dolorem reprehenderit minima ab, libero, inventore quibusdam! Voluptatem ut quasi eius architecto odio porro modi delectus, dolorem libero doloremque eveniet molestiae! Placeat, soluta quisquam? Aspernatur libero, pariatur blanditiis quae dignissimos eaque vero unde, quidem vitae molestiae sequi eligendi fuga culpa! Laboriosam non eos corporis autem iste similique sed ea atque quasi soluta eveniet repellat harum nobis esse voluptatibus, recusandae doloremque, dolor quae obcaecati impedit quia animi! Nihil saepe necessitatibus mollitia aspernatur commodi tempora, et sequi esse labore accusantium veniam quidem sit. Ut, nis',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-Empat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero sunt accusamus voluptas eaque totam eos voluptatum aperiam dolorem',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero sunt accusamus voluptas eaque totam eos voluptatum aperiam dolorem reprehenderit minima ab, libero, inventore quibusdam! Voluptatem ut quasi eius architecto odio porro modi delectus, dolorem libero doloremque eveniet molestiae! Placeat, soluta quisquam? Aspernatur libero, pariatur blanditiis quae dignissimos eaque vero unde, quidem vitae molestiae sequi eligendi fuga culpa! Laboriosam non eos corporis autem iste similique sed ea atque quasi soluta eveniet repellat harum nobis esse voluptatibus, recusandae doloremque, dolor quae obcaecati impedit quia animi! Nihil saepe necessitatibus mollitia aspernatur commodi tempora, et sequi esse labore accusantium veniam quidem sit. Ut, nis',
            'category_id' => 2,
            'user_id' => 2
        ]);
        


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
