<?php


namespace App\classes;


class Product
{

    public $products = [], $data = [];

    public function __construct()
    {
        $this->products = [
          0 => [
              'id' => 1,
              'category_id' => 2,
              'name' => 'New Fashionable t Shirt',
              'price' => 'Tk.'. 1500,
              'description' => '',
              'image' => 'assets/img/product/1.jpg',
          ],
          1 => [
              'id' => 2,
              'category_id' => 2,
              'name' => 'Smart Jeans Pant',
              'price' => 'Tk.'. 2200,
              'description' => '',
              'image' => 'assets/img/product/2.jpg',
          ],
          2 => [
              'id' => 3,
              'category_id' => 2,
              'name' => 'Formal Shirt for Man',
              'price' => 'Tk.'. 3000,
              'description' => '',
              'image' => 'assets/img/product/3.jpg',
          ],
          3 => [
              'id' => 4,
              'category_id' => 1,
              'name' => 'New Sony Mobile',
              'price' => 'Tk.'. 45000,
              'description' => '',
              'image' => 'assets/img/product/4.jpg',
          ],
          4 => [
              'id' => 5,
              'category_id' => 1,
              'name' => 'New Samsung Mobile',
              'price' => 'Tk.'. 35000,
              'description' => '',
              'image' => 'assets/img/product/5.jpg',
          ],
          5 => [
              'id' => 6,
              'category_id' => 3,
              'name' => 'Cricket Bat',
              'price' => 'Tk.'. 2000,
              'description' => '',
              'image' => 'assets/img/product/6.jpg',
          ],
          6 => [
              'id' => 7,
              'category_id' => 4,
              'name' => 'New Woman Bag',
              'price' => 'Tk.'. 3000,
              'description' => '',
              'image' => 'assets/img/product/7.jpg',
          ],
          7 => [
              'id' => 8,
              'category_id' => 4,
              'name' => 'New Woman Dress',
              'price' => 'Tk.'. 5000,
              'description' => '',
              'image' => 'assets/img/product/8.jpg',
          ],
        ];
    }

    public function getAllProduct()
    {
        return $this->products;
    }

    public function getCategoryProduct($id)
    {
        foreach ($this->products as $product)
        {
            if ($product['category_id'] == $id)
            {
                array_push($this->data, $product);
            }
        }

        return $this->data;
    }

    public function getProductById($id)
    {
        foreach ($this->products as $product)
        {
            if ($product['id'] == $id)
            {
                return $product;
            }
        }
    }

}