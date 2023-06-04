<?php

namespace App\Http\Controllers;

use App\Models\administrativePerson;
use Illuminate\Http\Request;

class AdministrativeController extends Controller
{
    public $administrativeperson, $image, $imageName,$directory,$imgUrl;
    public function addPerson(){
        return view('admin.administrativeBody.add-person');
    }
    public function managePerson(){
        return view('admin.administrativeBody.manage-person',[
            'administrativepersons'=>administrativePerson::all()
        ]);
    }
    public function saveNewPerson(Request $request){
    $this->administrativeperson = new administrativePerson();
    $this->administrativeperson->name = $request->name;
    $this->administrativeperson->designation = $request->designation;
    $this->administrativeperson->image = $this->saveImage($request);
    $this->administrativeperson->save();
    return redirect('add-person')->with('message','Data insert successfully');
    }
    private function saveImage($request){
        $this->image = $request->file('image');
        $this->imageName = rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory = 'frontEndAsset/administrative-body-img/';
        $this->imgUrl = $this->directory.$this->imageName;
        $this->image->move($this->directory,$this->imageName);
        return $this->imgUrl;
    }
    public function editPerson($id){
        return view('admin.administrativeBody.edit-person',[
            'administrativeperson'=>administrativePerson::find($id)
        ]);
    }
    public function updatePerson(Request $request){
        $this->administrativeperson = administrativePerson::find($request->person_id);
        $this->administrativeperson->name = $request->name;
        $this->administrativeperson->designation = $request->designation;
        if ($request->file('image')){
            if ($this->administrativeperson->image){
                unlink($this->administrativeperson->image);
            }
            $this->administrativeperson->image = $this->saveImage($request);
        }
        $this->administrativeperson->save();
        return redirect('manage-person')->with('message','Data update successfully');
    }
    public function deletePerson(Request $request){
        $this->administrativeperson = administrativePerson::find($request->person_id);
        if ($this->administrativeperson->image){
            unlink($this->administrativeperson->image);
        }
        $this->administrativeperson->delete();
        return redirect('manage-person')->with('message','Data delete successfully');
    }
}
