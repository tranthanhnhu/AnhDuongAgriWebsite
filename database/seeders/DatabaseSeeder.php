<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\BlogCategory;
use App\Models\Blog;
use App\Models\ProdCategory;
use App\Models\Product;
use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin user
        User::create([
            'name' => 'Admin',
            'email' => 'admin@anhduongagri.com',
            'password' => Hash::make('password'),
        ]);

        // Create blog categories
        $blogCategories = [
            ['name' => 'Phân bón hữu cơ', 'slug' => 'phan-bon-huu-co', 'description' => 'Các bài viết về phân bón hữu cơ và cách sử dụng'],
            ['name' => 'Kỹ thuật canh tác', 'slug' => 'ky-thuat-canh-tac', 'description' => 'Hướng dẫn kỹ thuật canh tác hiệu quả'],
            ['name' => 'Tin tức nông nghiệp', 'slug' => 'tin-tuc-nong-nghiep', 'description' => 'Tin tức mới nhất về ngành nông nghiệp'],
        ];

        foreach ($blogCategories as $category) {
            BlogCategory::create($category);
        }

        // Create product categories
        $prodCategories = [
            ['name' => 'Phân bón NPK', 'slug' => 'phan-bon-npk', 'description' => 'Các loại phân bón NPK chất lượng cao'],
            ['name' => 'Phân bón hữu cơ', 'slug' => 'phan-bon-huu-co', 'description' => 'Phân bón hữu cơ tự nhiên'],
            ['name' => 'Phân bón vi sinh', 'slug' => 'phan-bon-vi-sinh', 'description' => 'Phân bón vi sinh vật có lợi'],
        ];

        foreach ($prodCategories as $category) {
            ProdCategory::create($category);
        }

        // Create sample blogs
        Blog::create([
            'title' => 'Cách sử dụng phân bón NPK hiệu quả',
            'slug' => 'cach-su-dung-phan-bon-npk-hieu-qua',
            'short_description' => 'Hướng dẫn chi tiết cách sử dụng phân bón NPK để đạt năng suất cao nhất',
            'content' => '<h2>Giới thiệu</h2><p>Phân bón NPK là một trong những loại phân bón quan trọng nhất trong nông nghiệp...</p>',
            'featured_image' => 'blog1.jpg',
            'blog_category_id' => 1,
            'is_featured' => true,
        ]);

        Blog::create([
            'title' => 'Kỹ thuật canh tác lúa hiện đại',
            'slug' => 'ky-thuat-canh-tac-lua-hien-dai',
            'short_description' => 'Những phương pháp canh tác lúa tiên tiến giúp tăng năng suất',
            'content' => '<h2>Giới thiệu</h2><p>Canh tác lúa hiện đại đòi hỏi những kỹ thuật chuyên sâu...</p>',
            'featured_image' => 'blog2.jpg',
            'blog_category_id' => 2,
            'is_featured' => true,
        ]);

        // Create sample products
        Product::create([
            'name' => 'Phân bón NPK 20-20-20',
            'slug' => 'phan-bon-npk-20-20-20',
            'short_description' => 'Phân bón NPK cân bằng dinh dưỡng cho mọi loại cây trồng',
            'descriptions' => 'Phân bón NPK 20-20-20 là sản phẩm cao cấp với tỷ lệ dinh dưỡng cân bằng, phù hợp cho hầu hết các loại cây trồng...',
            'img_1' => 'product1.jpg',
            'img_2' => 'product1_2.jpg',
            'img_3' => 'product1_3.jpg',
            'original_price' => 150000,
            'sale_price' => 120000,
            'prod_category_id' => 1,
            'is_featured' => true,
        ]);

        Product::create([
            'name' => 'Phân bón hữu cơ vi sinh',
            'slug' => 'phan-bon-huu-co-vi-sinh',
            'short_description' => 'Phân bón hữu cơ vi sinh vật có lợi cho đất và cây trồng',
            'descriptions' => 'Sản phẩm phân bón hữu cơ vi sinh được sản xuất từ nguyên liệu tự nhiên, chứa nhiều vi sinh vật có lợi...',
            'img_1' => 'product2.jpg',
            'img_2' => 'product2_2.jpg',
            'img_3' => 'product2_3.jpg',
            'original_price' => 200000,
            'sale_price' => 180000,
            'prod_category_id' => 3,
            'is_featured' => true,
        ]);

        // Create sample contacts
        Contact::create([
            'name' => 'Nguyễn Văn A',
            'email' => 'nguyenvana@gmail.com',
            'phone' => '0123456789',
            'subject' => 'Tư vấn phân bón',
            'message' => 'Tôi muốn được tư vấn về loại phân bón phù hợp cho cây lúa',
        ]);

        Contact::create([
            'name' => 'Trần Thị B',
            'email' => 'tranthib@gmail.com',
            'phone' => '0987654321',
            'subject' => 'Đặt hàng',
            'message' => 'Tôi muốn đặt mua phân bón NPK 20-20-20',
        ]);
    }
}
