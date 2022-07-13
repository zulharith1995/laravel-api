<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use Validator;
class DeviceController extends Controller
{
    //
    function list($id=null)
    {
        return $id?Device::find($id):Device::all();
    }
    function add(Request $req)
    {
        $devices = new Device;
        $devices->name = $req->name;
        $devices->member_id = $req->member_id;
        $result = $devices->save();
        if($result)
        {   
            return["Result"=>"Data has been saved"];
        }
        else
        {
            return["Result"=>"Data has not been saved"];
        }
        
    }

    function update(Request $req)
    {
        $device= Device::find($req->id);
        $device->name=$req->name;
        $device->member_id=$req->member_id;
        $result = $device->save();
        if($result)
        {   
            return["Result"=>"Data has been updated"];
        }
        else
        {
            return["Result"=>"Data has not been updated"];
        }
    }
    function search($name)
    {
        return Device::where("name","like","%".$name."%")->get();
    }
    function delete($id)
    {
        $device= Device::find($id);
        $result = $device->delete();
        if($result)
        {   
            return["Result"=>"Data has been deleted"];
        }
        else
        {
            return["Result"=>"Data has not been deleted"];
        }
    }
    function testData(Request $req)
    {
        $rules = array(
            "member_id"=>"required|min:2|max:4"
        );
        $validator= Validator::make($req->all(),$rules);
        if($validator->fails())
        {   
        }
        else
        {
            $devices = new Device;
            $devices->name = $req->name;
            $devices->member_id = $req->member_id;
            $result = $devices->save();
            if($result)
            {   
                return["Result"=>"Data has been saved"];
            }
            else
            {
                return["Result"=>"Data has not been saved"];
            }
        }
    }
    
}
