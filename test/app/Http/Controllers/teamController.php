<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;


class teamController extends Controller
{
    //
    protected $Member;
    public function __construct(Member $member) {
    	$this->member = $member;
    }
    public function add(Request $request) {
    	$newMember = [
    		"username" => $request->username,
    		"email" => $request->email,
    		"password" => md5($request->password)
    	];

    	$newMember = $this->member->create($newMember); //hasil create akan disimpan di newMember

    	if($newMember != null) {
    		var_dump($newMember);
    	}else{
    		echo "FAILED!!";
    	}

    //echo $request->username; "<br>"
    //echo $request->email; "<br>"
    //echo md5($request->password);
	}
}
