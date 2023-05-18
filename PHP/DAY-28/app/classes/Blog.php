<?php


namespace App\classes;


class Blog
{
    public $blogs =[];

    public function __construct()
    {
        $this->blogs = [
          0 => [
              'id'              => 1,
              'title'           => 'This is blog title one',
              'description_one' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, perferendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, libero!',
              'description_two' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, perferendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, libero! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, perferendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, libero!',
              'image'           =>'blog-1.jpg',
          ],
          1 => [
              'id'              => 2,
              'title'           => 'This is blog title two',
              'description_one' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, perferendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, libero!',
              'description_two' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, perferendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, libero! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, perferendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, libero!',
              'image'           =>'blog-2.jpg',
          ],
          2 => [
              'id'              => 3,
              'title'           => 'This is blog title three',
              'description_one' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, perferendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, libero!',
              'description_two' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, perferendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, libero! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, perferendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, libero!',
              'image'           =>'about.jpg',
          ],
            3 => [
                'id'              => 4,
                'title'           => 'This is blog title four',
                'description_one' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, perferendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, libero!',
                'description_two' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, perferendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, libero! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, perferendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, libero!',
                'image'           =>'about.jpg',
            ],

        ];
    }

    /**
     * @return array|array[]
     */
    public function getBlogs()
    {
        return $this->blogs;
    }
}