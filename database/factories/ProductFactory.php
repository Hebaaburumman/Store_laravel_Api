<?php

// database/factories/ProductFactory.php

// database/factories/ProductFactory.php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        $imageUrl = $this->faker->imageUrl();

        $imageContent = Http::get($imageUrl)->body();
        $imageName = 'product_image_' . time() . '.jpg';

        if (!File::exists(public_path('storage/images'))) {
            File::makeDirectory(public_path('storage/images'), 0777, true, true);
        }

        file_put_contents(public_path('storage/images/' . $imageName), $imageContent);

        return [
            'name' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'quantity' => $this->faker->numberBetween(1, 100),
            'price' => $this->faker->randomFloat(2, 1, 100),
            'image' => 'storage/images/' . $imageName,
            'user_id' => null, // Set the default user_id to null
        ];
    }
}
