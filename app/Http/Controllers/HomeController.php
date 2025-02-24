<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
      $items = [
         'التشطيبات' => 'تشطيبات عالية الجودة',
         'الديكورات' => 'ديكورات متميزة',
         'التصميم الداخلي' => 'تصميم داخلي متميز',
         'التصميم الخارجي' => 'تصميم خارجي متميز',
         'التصميم المعماري' => 'تصميم معماري متميز',
         'التصميم الهندسي' => 'تصميم هندسي متميز',
     ];
     $services = [
      [
          'label' => 'التشطيبات',
          'image' => asset('/storage/images/1.jpg'),
          'items' => [
              'دهانات' => 'دهانات عالية الجودة ومقاومة للعوامل الجوية',
              'أرضيات' => 'توفير وتركيب جميع أنواع الأرضيات',
              'أسقف معلقة' => 'تصميم وتركيب الأسقف المعلقة بأحدث التقنيات',
          ],
      ],
      [
          'label' => 'الديكورات',
          'image' => asset('/storage/images/2.jpg'),
          'items' => [
              'ديكورات جبس' => 'تصميم ديكورات جبسية مميزة',
              'إضاءة ديكورية' => 'توفير حلول إضاءة ديكورية جذابة',
              'ورق جدران' => 'توفير وتركيب ورق جدران عالي الجودة',
          ],
      ],
      [
          'label' => 'التصميم الداخلي',
          'image' => asset('/storage/images/3.jpg'),
          'items' => [
              'تصميم غرف' => 'تصميم غرف عصرية تتناسب مع المساحات المتوفرة',
              'تصميم مطابخ' => 'تصميم مطابخ عملية بأحدث الأساليب',
              'تصميم حمامات' => 'تصميم حمامات بأفكار مبتكرة',
          ],
      ],
  ];
    
    return view('pages.index')->with('items',$items)->with('services',$services);
   }
   public function services(){
    
      return view('pages.services');
     }
     public function gallery(){
    
      $heroData = [
        '1' => [
            'title' => 'Structural Design',
            'description' => 'Our structural designs ensure safe and durable buildings.',
            
        ],
        '2' => [
            'title' => 'Foundation Work',
            'description' => 'Solid foundation work is the cornerstone of every great building project.',
        
        ],
        '3' => [
            'title' => 'Construction Services',
            'description' => 'Building your vision with top-quality construction services.',
           
        ],
        '4' => [
            'title' => 'Painting & Finishing',
            'description' => 'Bringing color and finishing touches to your projects.',
           
        ]
    ];
    $pathes=[
        'nothing',
        'struct',
        'build',
        'paint',
        'smoth'
    ];
    $arrayOfIndexes=[
        '1'=>22,
        '2'=>22,
        '3'=>8,
        '4'=>3
    ];

    return view('pages.gallery', compact('heroData'))->with('pathes',$pathes)->with('arrayOfIndexes',$arrayOfIndexes);
     }
     public function about(){
    
      return view('pages.about');
     }
     public function contact(){
    
      return view('pages.contact');
     }

   }
   
