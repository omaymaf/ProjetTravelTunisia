<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
   {

        $testreviews=[
            [
                'stars'=>5,
                'content'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, dolorem quo? Reiciendis illum vero ex, laudantium incidunt quasi dolorem architecto nulla mollitia, quidem corrupti repellendus eaque accusantium aliquid ipsum optio.',
                'name'=>'Alex Depon',
                'role' => 'traveler',
                'review-image' => 'images/alex_portrait.avif',
            ],

            [
                'stars'=>4,
                'content'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Maiores natus facilis voluptates eveniet in, eos laboriosam vel porro nulla veniam ipsum error corrupti ea harum rem exercitationem cupiditate! Ipsa, 
                aliquam recusandae suscipit modi delectus cumque velit autem tempora necessitatibus animi?',
                'name'=>'Emily Thomas',
                'role' => 'traveler',
                'review-image' => 'images/emily_portrait.webp',
            ],

            [
                'stars'=>3,
                'content'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Facilis asperiores beatae praesentium hic sit recusandae veniam provident dignissimos? 
                Voluptas, deserunt!',
                'name'=>'Jake Olivier',
                'role' => 'traveler',
                'review-image' => 'images/jake_portrait.jpeg',
            ],

            [
                'stars'=>5,
                'content'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Facilis asperiores beatae praesentium hic sit recusandae veniam provident dignissimos? 
                Voluptas, deserunt!',
                'name'=>'Jessica Lauren',
                'role' => 'traveler',
                'review-image' => 'images/jessica_portrait.avif',
            ],

            [
                'stars'=>4,
                'content'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Magnam reprehenderit sunt recusandae, dolor consequuntur eligendi nobis non laborum accusantium rerum voluptas doloremque maiores eum distinctio, quia, nostrum aut alias cupiditate? 
                Est, accusamus? Rem, dolores culpa?',
                'name'=>'Jacob Damian',
                'role' => 'traveler',
                'review-image' => 'images/jacob_portrait.jpeg',
            ],

            [
                'stars'=>5,
                'content'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Doloremque, dicta possimus? Alias illo provident ipsam minus.
                Unde iste quas dignissimos.',
                'name'=>'Isabella Victoria',
                'role' => 'traveler',
                'review-image' => 'images/isabella_portrait.jpg',
            ],
        ];

        return view('about', compact('testreviews'));
    
   }
}
