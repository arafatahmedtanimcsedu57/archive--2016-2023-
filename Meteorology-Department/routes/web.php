<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;


Route::get('/', function () {
    $notices = App\Notice::all();
    $teachers = App\Teacher::all();
    $videos = App\Video::all();
    $students = App\Student::all();
    return view('welcome')->with('notices',$notices)->with('teachers',$teachers)->with('videos', $videos)->with('students', $students);
});

Route::get('/prospectus', function(){
    $file_path = public_path('uploads/prospectus/Prospectus.docx');
    return response()->download($file_path);
});

Route::get('/get_started', function(){
    $file_path = public_path('uploads/application_form/Application form.docx');
    return response()->download($file_path);
});

Route::get('/syllabus', function(){
    $file_path = public_path('uploads/syllabus/Syllabus.docx');
    return response()->download($file_path);
});

Route::get('/about_us', function () {
    return view('about_us');
});

Route::get('/c_staff', function () {
    $staffs = App\Staff::all();
    return view('c_staff')->with('staffs',$staffs);
});

Route::get('/payment', function(){
    return view('payment');
});

Route::get('/live_stream', function () {
    return view('live_stream');
});

Route::get('/c_contact', function () {
    return view('c_contact');
});


Route::get('/c_event', function () {
    $events = App\Event::all();
    $sponsers = App\SponserImages::all();
    return view('c_event')->with('events',$events)->with('sponsers', $sponsers);
});

Route::post('/c_event', function (Request $request) {

    $events = App\Event::all();
    $sponsers = App\SponserImages::all();
    $member=App\Member::create([
            'name' => $request->eve_mem_name,
            'des' => $request->eve_mem_designation,
            'ins' => $request->eve_mem_institute,
            'country' => $request->eve_mem_country,
            'email' => $request->eve_mem_mail,
            'member_id' => $request->event_id,
        ]);

    echo "<script>alert('Successfull')</script>";
    return view('c_event')->with('events',$events)->with('sponsers', $sponsers)->with('member',$member);

});

Route::post('/c_cv', function (Request $request) {

    $teachers = App\Teacher::all();
    $extension = $request->file('filename');
    $extension = $request->file('filename')->getClientOriginalExtension(); 
    $dir = 'uploads/files/';
    $filename = $request->name.'.'.$extension;
    $request->file('filename')->move($dir, $filename);

    
    $cv=App\CV::create([
            'name' => $request->name,
            'sub' => $request->sub,
            'email' => $request->email,
            'filename' => $filename,
        ]);

    



    echo "<script>alert('Successfull')</script>";
    return view('c_faculty')->with('teachers',$teachers);

});


Route::post('/c_message', function (Request $request) {



    
        $messages=App\Message::create([
            'name' => $request->name,
            'sub' => $request->sub,
            'email' => $request->email,
            'mes' => $request->mes,
        ]);
    


    echo "<script>alert('Successfull')</script>";
    return view('c_contact');

});


Route::get('/ms_course', function () {
    $courses = App\Course::all();
    return view('ms_course')->with('courses',$courses);
});

Route::get('/dept_library', function () {
    $departmentlibrarys = App\DepartmentLibrary::all();
    return view('dept_library')->with('departmentlibrarys',$departmentlibrarys);
});

Route::get('/paper_submit', function () {
    //$departmentlibrarys = App\DepartmentLibrary::all();
    return view('paper_submit');
});

Route::get('/pdf_book', function () {
    $books = App\Book::all();
    return view('pdf_book')->with('books',$books);
});

Route::get('/google_scholar', function () {
    $papers = App\Paper::all();
    return view('google_scholar')->with('papers',$papers);
});

Route::get('/c_faculty', function () {
    $teachers = App\Teacher::all();
    return view('c_faculty')->with('teachers',$teachers);
});

Route::get('/c_research', function () {
     //$papers = App\Paper::all();
    return view('c_research');//->with('papers',$papers);
});

Route::get('/download/{link}', function($file_name){
    $file_path = public_path('uploads/files/'.$file_name);
    return response()->download($file_path);
});






Auth::routes();

Route::get('/home',  function () {
    $members = App\Member::all();
    $events = App\Event::all();
    $cvs = App\CV::all();
    $messages = App\Message::all();
    return view('home')->with('members',$members)->with('events', $events)->with('cvs', $cvs)->with('messages', $messages);
})->middleware('auth');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );



Route::get('courses', function () {
    $courses = App\Course::all();
    return view('courses')->with('courses',$courses);
})->middleware('auth');

Route::get('courses/{course_id?}',function($course_id){
    $course = App\Course::find($course_id);
    return response()->json($course);
})->middleware('auth');

Route::post('courses',function(Request $request){   
    $course = App\Course::create($request->input());
    return response()->json($course);
})->middleware('auth');

Route::put('courses/{course_id?}',function(Request $request,$course_id){
    $course = App\Course::find($course_id);
    $course->term = $request->term;
    $course->type = $request->type;
    $course->title = $request->title;
    $course->name = $request->name;
    $course->credit = $request->credit;
    $course->save();
    return response()->json($course);
})->middleware('auth');

Route::delete('courses/{course_id?}',function($course_id){
    $course = App\Course::destroy($course_id);
    return response()->json($course);
})->middleware('auth');









Route::get('departmentlibrary', function () {
    $departmentlibrarys = App\DepartmentLibrary::all();
    return view('department_library')->with('departmentlibrarys',$departmentlibrarys);
})->middleware('auth');

Route::get('departmentlibrary/{departmentlibrary_id?}',function($departmentlibrary_id){
    $departmentlibrary = App\DepartmentLibrary::find($departmentlibrary_id);
    return response()->json($departmentlibrary);
})->middleware('auth');

Route::post('departmentlibrary',function(Request $request){   
    $departmentlibrary = App\DepartmentLibrary::create($request->input());
    return response()->json($departmentlibrary);
})->middleware('auth');


Route::put('departmentlibrary/{departmentlibrary_id?}',function(Request $request,$departmentlibrary_id){
    $departmentlibrary = App\DepartmentLibrary::find($departmentlibrary_id);
    $departmentlibrary->book_name = $request->book_name;
    $departmentlibrary->author = $request->author;
    $departmentlibrary->edition = $request->edition;
    $departmentlibrary->publication = $request->publication;
    $departmentlibrary->save();
    return response()->json($departmentlibrary);
})->middleware('auth');

Route::delete('departmentlibrary/{departmentlibrary_id?}',function($departmentlibrary_id){
    $departmentlibrary = App\DepartmentLibrary::destroy($departmentlibrary_id);
    return response()->json($departmentlibrary);
})->middleware('auth');












Route::get('book', function () {
    $books = App\Book::all();
    return view('study')->with('books',$books);
})->middleware('auth');

Route::get('book/{book_id?}',function($book_id){
    $book = App\Book::find($book_id);
    return response()->json($book);
})->middleware('auth');

Route::post('book',function(Request $request){
    $extension = $request->file('link');
    $extension = $request->file('link')->getClientOriginalExtension(); 
    $dir = 'uploads/files/';
    $filename = $request->book_name.'.'.$extension;
    $request->file('link')->move($dir, $filename);


    $book=App\Book::create([
            'book_name' => $request->book_name,
            'author' => $request->author,
            'link' => $filename,
        ]);

    return response()->json($book);   
})->middleware('auth');


Route::put('book/{book_id?}',function(Request $request,$book_id){
    $book = App\Book::find($book_id);
    $book->book_name = $request->book_name;
    $book->author = $request->author;
    $book->save();
    return response()->json($book);
})->middleware('auth');

Route::delete('book/{book_id?}',function($book_id){
    $book = App\Book::destroy($book_id);
    return response()->json($book);
})->middleware('auth');









Route::get('paper', function () {
    $papers = App\Paper::all();
    return view('papers')->with('papers',$papers);
})->middleware('auth');

Route::get('paper/{paper_id?}',function($paper_id){
    $paper = App\Paper::find($paper_id);
    return response()->json($paper);
})->middleware('auth');

Route::post('paper',function(Request $request){  



    $paper = App\Paper::create($request->input());
    return response()->json($paper);
})->middleware('auth');


Route::put('paper/{paper_id?}',function(Request $request,$paper_id){
    $paper = App\Paper::find($paper_id);
    $paper->paper_name = $request->paper_name;
    $paper->link = $request->link;
    $paper->save();
    return response()->json($paper);
})->middleware('auth');

Route::delete('paper/{paper_id?}',function($paper_id){
    $paper = App\Paper::destroy($paper_id);
    return response()->json($book);
})->middleware('auth');














Route::get('notice', function () {
    $notices = App\Notice::all();
    return view('notice')->with('notices',$notices);
})->middleware('auth');

Route::get('notice/{notice_id?}',function($notice_id){
    $notice = App\Notice::find($notice_id);
    return response()->json($notice);
})->middleware('auth');

Route::post('notice',function(Request $request){  
    $extension = $request->file('link');
    $extension = $request->file('link')->getClientOriginalExtension(); 
    $dir = 'uploads/files/';
    $filename = uniqid().'_'.time().'_'.date('Ymd').'.'.$extension;
    $request->file('link')->move($dir, $filename);


    $notice=App\Notice::create([
            'type' => $request->type,
            'heading' => $request->heading,
            'link' => $filename,
        ]);

    return response()->json($notice);
})->middleware('auth');


Route::delete('notice/{notice_id?}',function($notice_id){
    $notice = App\Notice::destroy($notice_id);
    return response()->json($notice_id);
})->middleware('auth');

Route::get('/download/{link}', function($file_name){
    $file_path = public_path('uploads/files/'.$file_name);
    return response()->download($file_path);
});






Route::get('faculty', function () {
    $teachers = App\Teacher::all();
    return view('faculty')->with('teachers',$teachers);
})->middleware('auth');

Route::get('faculty/{teacher_id?}',function($teacher_id){
    $teacher = App\Teacher::find($teacher_id);
    return response()->json($teacher);
})->middleware('auth');

Route::post('faculty',function(Request $request){ 

    $extension = $request->file('image');
    $extension = $request->file('image')->getClientOriginalExtension(); 
    $dir = 'uploads/image/';
    $filename = $request->name.'.'.$extension;
    $request->file('image')->move($dir, $filename);


    $teacher=App\Teacher::create([
            'name' => $request->name,
            'des' => $request->des,
            'deg' => $request->deg,
            'type' => $request->type,
            'image' => $filename,
        ]);

    return response()->json($teacher);
})->middleware('auth');



Route::delete('faculty/{teacher_id?}',function($teacher_id){
    $teacher = App\Teacher::destroy($teacher_id);
    return response()->json($teacher);
})->middleware('auth');




Route::get('video', function () {
    $videos = App\Video::all();
    return view('Video')->with('videos',$videos);
})->middleware('auth');

Route::get('video/{video_id?}',function($video_id){
    $Video = App\Video::find($video_id);
    return response()->json($Video);
})->middleware('auth');

Route::post('video',function(Request $request){   
    $video = App\Video::create($request->input());
    return response()->json($video);
})->middleware('auth');


Route::put('video/{video_id?}',function(Request $request,$video_id){
    $video = App\Video::find($video_id);
    $video->name = $request->name;
    $video->link = $request->link;
    $video->save();
    return response()->json($video);
})->middleware('auth');

Route::delete('video/{video_id?}',function($video_id){
    $video = App\Video::destroy($video_id);
    return response()->json($video);
})->middleware('auth');



Route::get('staff', function () {
    $staffs = App\Staff::all();
    return view('staff')->with('staffs',$staffs);
})->middleware('auth');

Route::get('staff/{staff_id?}',function($staff_id){
    $staff = App\Teacher::find($staff_id);
    return response()->json($staff);
})->middleware('auth');

Route::post('staff',function(Request $request){ 

    $extension = $request->file('image');
    $extension = $request->file('image')->getClientOriginalExtension(); 
    $dir = 'uploads/image/';
    $filename = $request->name.'.'.$extension;
    $request->file('image')->move($dir, $filename);


    $staff=App\Staff::create([
            'name' => $request->name,
            'des' => $request->des,
            'image' => $filename,
        ]);

    return response()->json($staff);
})->middleware('auth');



Route::delete('staff/{staff_id?}',function($staff_id){
    $staff = App\Staff::destroy($staff_id);
    return response()->json($staff);
})->middleware('auth');





Route::get('event', function () {
    $events = App\Event::all();
    return view('event')->with('events',$events);
})->middleware('auth');

Route::get('event/{event_id?}',function($event_id){
    $event = App\Event::find($event_id);
    return response()->json($event);
})->middleware('auth');

Route::post('event',function(Request $request){ 

    $extension = $request->file('image');
    $extension = $request->file('image')->getClientOriginalExtension(); 
    $dir = 'uploads/image/';
    $filename = $request->heading.'.'.$extension;
    $request->file('image')->move($dir, $filename);



        $event=App\Event::create([
            'heading' => $request->heading,
            'body' => $request->body,
            'place' => $request->place,
            'date' => $request->date,
            'image' => $filename,
        ]);

        if($request->file('sponsers'))
        {
            foreach ($request->file('sponsers') as $key => $value) {
            $imageName = time(). $key . '.' . $value->getClientOriginalExtension();

            $sponser=App\SponserImages::create([
                'sponser_id' => $event->id,
                'filename' => $imageName,
            ]);

            $value->move(public_path('images'), $imageName);

            }

        }
        
        
        return response()->json($event);

})->middleware('auth');



Route::delete('event/{event_id?}',function($event_id){
    $event = App\Event::destroy($event_id);
    return response()->json($event);
})->middleware('auth');




Route::get('student', function () {
    $students = App\Student::all();
    return view('student')->with('students',$students);
})->middleware('auth');

Route::get('student/{id?}',function($id){
    $student = App\Student::find($id);
    return response()->json($student);
})->middleware('auth');

Route::put('student/{id?}',function(Request $request,$id){
    $student = App\Student::find($id);
    $student->name = $request->name;
    $student->id_card = $request->id_card;
    $student->session = $request->session;
    $student->save();
    return response()->json($student);
})->middleware('auth');


Route::post('student',function(Request $request){ 
    $student=App\Student::create([
            'name' => $request->name,
            'roll' => $request->roll,
            'email' => $request->email,
            'id_card' => $request->id_card,
            'session' => $request->session,
        ]);

    return response()->json($student);
})->middleware('auth');



Route::delete('student/{id?}',function($id){
    $student = App\Student::destroy($id);
    return response()->json($student);
})->middleware('auth');






Route::post('spaper',function(Request $request){
    $flag = 0;
    $spaper = "nothing";
    $students = App\Student::all();
    foreach ($students as $student) {
        if($student->id_card == $request->paper_id){
            $flag = 1; 
        }
    }

    if ($flag==1) {
        $extension = $request->file('filename');
        $extension = $request->file('filename')->getClientOriginalExtension(); 
        $dir = 'uploads/image/';
        $filename = $request->name.'.'.$extension;
        $request->file('filename')->move($dir, $filename);


        $spaper=App\Submitpaper::create([
            'paper_id' => $request->paper_id,
            'filename' => $filename,
            ]);
        }
 

    return view('paper_submit');
});