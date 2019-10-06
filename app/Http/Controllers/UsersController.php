<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        
        //ユーザの年齢計算
        $today = date("Y-m-d");
        $birthday = $user->birthday;
        $diff = date_diff(date_create($birthday), date_create($today));
        $age = $diff->format('%y');
        
        switch($user->japanese_level){
            case '0':
                $japanese_level = "I can't speak Japanese.";
                break;
            case '1':
                $japanese_level = "Basic conversation";
                break;
            case '2':
                $japanese_level = "Native level";
                break;
            default:
                $japanese_level = null;
        }
        
        return view('users.show', [
            'user' => $user,
            'age' => $age,
            'japanese_level' => $japanese_level,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
