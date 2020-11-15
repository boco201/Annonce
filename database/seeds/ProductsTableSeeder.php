<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
          'title' => 'Vente Appartement',
          'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas incidunt quisquam officiis quia explicabo mollitia veniam ut ducimus blanditiis quidem. Earum nemo praesentium magni tempora a sunt inventore sint adipisci.
          Quo consequatur excepturi expedita architecto vel similique dolores. Sint omnis nulla deleniti adipisci obcaecati, temporibus blanditiis officiis nostrum ipsum alias quod nobis. Voluptatem alias quas ducimus. Recusandae quas totam veniam?
          Quae doloribus ullam possimus fugit sequi nisi totam laboriosam qui ducimus modi, autem mollitia, nesciunt perferendis vero quod dolor saepe recusandae fugiat in voluptatem. Voluptas sunt error accusamus. Repellat, vitae.
          ',
          'price' => 12309
        ]);

        Product::create([
            'title' => 'Vente Maison',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas incidunt quisquam officiis quia explicabo mollitia veniam ut ducimus blanditiis quidem. Earum nemo praesentium magni tempora a sunt inventore sint adipisci.
            Quo consequatur excepturi expedita architecto vel similique dolores. Sint omnis nulla deleniti adipisci obcaecati, temporibus blanditiis officiis nostrum ipsum alias quod nobis. Voluptatem alias quas ducimus. Recusandae quas totam veniam?
            Quae doloribus ullam possimus fugit sequi nisi totam laboriosam qui ducimus modi, autem mollitia, nesciunt perferendis vero quod dolor saepe recusandae fugiat in voluptatem. Voluptas sunt error accusamus. Repellat, vitae.
            ',
            'price' => 72309
          ]);

          Product::create([
            'title' => 'Vente Bâteau',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas incidunt quisquam officiis quia explicabo mollitia veniam ut ducimus blanditiis quidem. Earum nemo praesentium magni tempora a sunt inventore sint adipisci.
            Quo consequatur excepturi expedita architecto vel similique dolores. Sint omnis nulla deleniti adipisci obcaecati, temporibus blanditiis officiis nostrum ipsum alias quod nobis. Voluptatem alias quas ducimus. Recusandae quas totam veniam?
            Quae doloribus ullam possimus fugit sequi nisi totam laboriosam qui ducimus modi, autem mollitia, nesciunt perferendis vero quod dolor saepe recusandae fugiat in voluptatem. Voluptas sunt error accusamus. Repellat, vitae.
            ',
            'price' => 6230998
          ]);

          Product::create([
            'title' => 'Vente Voiture',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas incidunt quisquam officiis quia explicabo mollitia veniam ut ducimus blanditiis quidem. Earum nemo praesentium magni tempora a sunt inventore sint adipisci.
            Quo consequatur excepturi expedita architecto vel similique dolores. Sint omnis nulla deleniti adipisci obcaecati, temporibus blanditiis officiis nostrum ipsum alias quod nobis. Voluptatem alias quas ducimus. Recusandae quas totam veniam?
            Quae doloribus ullam possimus fugit sequi nisi totam laboriosam qui ducimus modi, autem mollitia, nesciunt perferendis vero quod dolor saepe recusandae fugiat in voluptatem. Voluptas sunt error accusamus. Repellat, vitae.
            ',
            'price' => 42309
          ]);
        //
    }
}
