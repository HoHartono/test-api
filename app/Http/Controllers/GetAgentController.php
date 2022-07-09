<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agents;


class GetAgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents=Agents::all();

        foreach($agents as $key => $agent){
            $data['data'][$key]['id'] = $agent->id;
            $data['data'][$key]['name'] = $agent->name;
            $data['data'][$key]['code'] = $agent->code;
            $data['data'][$key]['status'] = $agent->status;
        }
        
        $result = json_encode($data);
        return $result;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agent=new Agents();
        $agent->name = $request->get('agentname');
        $agent->code = $request->get('code');
        $agent->status = $request->get('status');        
        $agent->save();
        return redirect('car')->with('success', 'Car has been successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
