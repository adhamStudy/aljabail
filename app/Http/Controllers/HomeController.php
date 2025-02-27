<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use App\View\Components\Contact;
use Illuminate\Support\Facades\DB;

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
          'image' => asset('images/1.jpg'),
          'items' => [
              'دهانات' => 'دهانات عالية الجودة ومقاومة للعوامل الجوية',
              'أرضيات' => 'توفير وتركيب جميع أنواع الأرضيات',
              'أسقف معلقة' => 'تصميم وتركيب الأسقف المعلقة بأحدث التقنيات',
          ],
      ],
      [
          'label' => 'الديكورات',
          'image' => asset('images/2.jpg'),
          'items' => [
              'ديكورات جبس' => 'تصميم ديكورات جبسية مميزة',
              'إضاءة ديكورية' => 'توفير حلول إضاءة ديكورية جذابة',
              'ورق جدران' => 'توفير وتركيب ورق جدران عالي الجودة',
          ],
      ],
      [
          'label' => 'التصميم الداخلي',
          'image' => asset('images/3.jpg'),
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
                'title' => 'التصميم الهيكلي',
                'description' => 'تصاميمنا الهيكلية تضمن المباني الآمنة والدائمة.',
            ],
            '2' => [
                'title' => 'أعمال الأساسات',
                'description' => 'أعمال الأساسات القوية هي أساس كل مشروع بناء عظيم.',
            ],
            '3' => [
                'title' => 'خدمات البناء',
                'description' => 'نبني رؤيتك مع خدمات البناء عالية الجودة.',
            ],
            '4' => [
                'title' => 'الدهانات والتشطيبات',
                'description' => 'إضافة الألوان والتشطيبات لمشاريعك.',
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
        // limit the number of messages to 2 
        $messages = ContactUs::latest()->limit(3)->get();
        return view('pages.contact')->with('messages',$messages);
     }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);
        
        $emailExists = DB::table('contact_us')->where('email', request('email'))->exists();
      
        if($emailExists)
        {
            return redirect()->back()->with('error', 'هذا الايميل مدون بالفعل يرجى استخدام بريد الكتروني اخر' );       
        }
    


        ContactUs::create($data);
        return redirect()->back()->with('success', 'تم اضافة استفسارك بنجاح ، شكراُ لك');       
    }
   }
   
