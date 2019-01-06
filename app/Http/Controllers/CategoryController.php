<?php
namespace App\Http\Controllers;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Cat;
use App\User;
//use App\Http\Controllers\Controller; //added cuz not same folder with this file
use DB;


class CategoryController extends Controller
{	
	public function index()
	{
		//$user=DB::select('select * from user where name=?',["amir"]');
		//var_dump($user[0]->email);
		//$users=DB::insert('insert into user (name,email) values(?,?)' , ['ali' , 'ali@gmail.com'] );
 		
 		//return view()->file($pathToFile, $data);
		//return view('category.admin');
		//return view('category.index');
       // $Cat=Cat::paginate(1);
        return View('category.create');
	}
	
	public function store(CategoryRequest $request) //validation using CategoryRequest
	{
		var_dump($request->all());//check
        $Cat=new Cat($request->all());
        if($request->hasFile('pic'))
        {
            $file_name=$Cat->cat_ename.time().'.'.$request->file('pic')->getClientOriginalExtension();
            if($request->file('pic')->move('upload',$file_name))
                $Cat->img=$file_name;
        }
        $Cat->saveOrFail();
        $url='admin/category/'.$Cat->id.'/edit';
        return redirect($url);

    }
    public function edit($id)
    {
       $Cat=Cat::findOrFail($id);
       $cat_list=Cat::get_cat_list();
       return View('category.edit',['cat_list'=>$cat_list,'Cat'=>$Cat]);
       // echo $id;
        //var_dump($Cat);
    }
    public function userStore(Request $request)
	{

		var_dump($request->all());

        $this->validate($request, [
                'name'=>'required|max:255',
                'email'=>'required',
            ]
        );

        $User=new User($request->all());
        $User->save();

    }


	public function create()
	{
        $cat_list=Cat::get_cat_list();
        return View('category.create', ['cat_list'=>$cat_list]);
	}
	public function user()
	{
		return View('category.user');
	}

	public function learn()
    {
        return view('test.learn');
    }
    public function foo()
    {
        return view('test.foo');
    }
}