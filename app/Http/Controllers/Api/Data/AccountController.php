<?php

namespace App\Http\Controllers\Api\Data;

use App\Http\Controllers\Api\BaseController;
use App\Http\Controllers\Controller;
use App\Models\data\Rekening;
use Illuminate\Http\Request;

class AccountController extends BaseController
{
    //
    public function index() {
        $data = Rekening::all();
        return $this->sendResponse($data, "success-get");
    }

    public function store(Request $request) {
        $validate = $this->validateData($request->all(), $this->rules);

        if ($validate->fails()) {
            return $this->sendError('validate-fail', $validate->errors(), 200);
        }

        $rekening = new Rekening();
        $rekening['id_user'] = $request['id_user'];
        $rekening['bank'] = $request['bank'];
        $rekening['no_rekening'] = $request['no_rekening'];
        if(!$rekening->save()) {
            return $this->sendError('error-get');
        }
        return $this->sendResponse(true, 'success');
    }
}
