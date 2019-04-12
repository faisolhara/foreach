<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Gallery;

class GalleryController extends Controller
{
    const RESOURCE = 'Hrm\Master\MasterApplicantStatus';
    const URL      = 'hrm/master/master-applicant-status';
    protected $now;

    public function __construct()
    {
        // $this->middleware('auth');
        $this->now = new \DateTime();
    }

    public function index(Request $request)
    {

        return view('gallery', [
            // 'models'     => $model->paginate(3),
            'models'     => Gallery::distinct()->get(),
            ]);

    }

}
