<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Session;

class ExperienceController extends Controller
{
    public function experiences(): View
    {
        Session::put('page','experiences');
        $experiences = Experience::get()->toArray();
        return view('admin.experiences.experiences')->with(compact('experiences'));
    }


    public function deleteExperience($id){
        Experience::where('id',$id)->delete();
        return redirect()->back()->with('status','تم حذف الخبرة بنجاح');
      }

      public function addEditExperience(Request $request,$id=null){
       Session::put('page','experiences');
       if($id==""){
       $title = "إضافة خبرة";
       $experience = new Experience;
       $message = "تم إضافة الخبرة بنجاح";
       }else{
           $title = "تعديل خبرة";
           $experience = Experience::find($id);
           $message = "تم تعديل الخبرة بنجاح"; 
       }

    
       if($request->isMethod('post')){
           $data = $request->all();
            $this->validate($request, [
                    'name'=>'required',
                    'theside'=>'required',
                    'from_date' => 'required|date|before_or_equal:to_date',
                    'to_date' => 'required|date|after_or_equal:from_date',
            ],[
                'name.required'=>'اسم الخبرة مطلوب',
                'theside.required'=>'الجهة المسؤولة عن الخبرة مطلوبة',
                'from_date.required'=>'تاريخ بدء الحصول على الخبرة مطلوب',
                'to_date.required'=>'تاريخ الانتهاء من الحصول على الخبرة مطلوب',
                'from_date.date'=>'يجب أن يكون حقل تاريخ البدء تاريخًا صالحًا.',
                'to_date.after_or_equal'=>'يجب أن يكون حقل تاريخ الانتهاء تاريخًا بعد تاريخ البدء أو يساويه.',
                'from_date.before_or_equal'=>'يجب أن يكون حقل تاريخ البدء تاريخًا قبل تاريخ الانتهاء أو يساويه.',
                'to_date.date'=>'يجب أن يكون حقل تاريخ الانتهاء تاريخًا صالحًا.',
            ]);

           $experience->name = $request->name;
           $experience->theside = $request->theside;
           $experience->from_date = $request->from_date;
           $experience->to_date = $request->to_date;
           $experience->notes = $request->notes;
           $experience->save();
           return redirect('admin/experiences')->with('status',$message);
       }
       return view('admin.experiences.add_edit_experience')->with(compact('title','experience','message'));
      }
}
