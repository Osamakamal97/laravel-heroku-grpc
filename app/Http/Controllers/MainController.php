<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Cloud\Firestore\FirestoreClient;
use Kreait\Firebase\Firestore;

class MainController extends Controller
{
    public function fire()
    {
        $firestore = app('firebase.firestore');
        $rows = $firestore->database()->collection('users')->documents()->rows();
        dd($rows[0]->data());
//
    }

    function firestoreCollection($collection_name): Firestore
    {
        return app('firebase.firestore')->database()->collection($collection_name);
    }
}
