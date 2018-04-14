<?php

namespace App\Application\Controllers\Admin;

use App\Application\Requests\Admin\Region\AddRequestRegion;
use App\Application\Requests\Admin\Region\UpdateRequestRegion;
use App\Application\Controllers\AbstractController;
use App\Application\DataTables\RegionsDataTable;
use App\Application\Model\Region;
use Yajra\Datatables\Request;
use Alert;

class RegionController extends AbstractController
{
    public function __construct(Region $model)
    {
        parent::__construct($model);
    }

    public function index(RegionsDataTable $dataTable){
        return $dataTable->render('admin.region.index');
    }

    public function show($id = null){
        return $this->createOrEdit('admin.region.edit' , $id);
    }

     public function store(AddRequestRegion $request){
          $item =  $this->storeOrUpdate($request , null , true);
          return redirect('admin/region');
     }

     public function update($id , UpdateRequestRegion $request){
          $item =  $this->storeOrUpdate($request , $id , true);
          return redirect()->back();
     }


    public function getById($id){
        $fields = $this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable());
        return $this->createOrEdit('admin.region.show' , $id , ['fields' =>  $fields]);
    }

    public function destroy($id){
        return $this->deleteItem($id , 'admin/region')->with('sucess' , 'Done Delete region From system');
    }
}
