<?php
/**
 * Created by PhpStorm.
 * User: zxl
 * Date: 2019/8/14
 * Time: 11:09
 */

namespace Zxl\Unit\Http\Controllers;


use Illuminate\Http\Request;

class UnitController extends Controllers
{
    public function index()
    {
        return view('zxl::index');
    }

    public function store(Request $request)
    {
        $namespace = $request->input('namespace');
        $classname = $request->input('classname');
        $action    = $request->input('action');
        $params    = $request->input('params');

        $class  = ($classname == "") ? $namespace : $namespace.'\\'.$classname;
        $class  = str_replace("/", "\\", $class);
        $object = new $class();
        $params = ($params == "") ? [] : explode("|",$params);

        $data = call_user_func_array([$object,$action],$params);
        return is_array($data) ? json_encode($data) : dd($data);

    }
}