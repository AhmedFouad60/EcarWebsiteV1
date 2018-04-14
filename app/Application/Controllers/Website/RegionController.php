<?php

namespace App\Application\Controllers\Website;

use App\Application\Controllers\AbstractController;
use Alert;
use App\Application\Model\Region;
use App\Application\Requests\Website\Region\AddRequestRegion;
use App\Application\Requests\Website\Region\UpdateRequestRegion;

class RegionController extends AbstractController
{

     public function __construct(Region $model)
        {
            parent::__construct($model);
        }

        public function index(){
            $items = $this->model->paginate(env('PAGINATE'));
            return view('website.region.index' , compact('items'));
        }

        public function show($id = null){
            return $this->createOrEdit('website.region.edit' , $id);
        }


     public function store(AddRequestRegion $request){
          $item =  $this->storeOrUpdate($request , null , true);
          return redirect('region');
     }

     public function update($id , UpdateRequestRegion $request){
          $item =  $this->storeOrUpdate($request , $id , true);
          return redirect()->back();
     }


        public function getById($id){
            $fields = $this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable());
            return $this->createOrEdit('website.region.show' , $id , ['fields' =>  $fields]);
        }

        public function destroy($id){
            return $this->deleteItem($id , 'region')->with('sucess' , 'Done Delete Region From system');
        }


}
