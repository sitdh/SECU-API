<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

trait RESTMetaActions {


	public function all()
	{
		$m = self::MODEL;
		$mMeta = self::META_MODEL;
		$resule = [];

		$modelMajor = $m::all();
		foreach ($modelMajor as $key => $row) {
			$tempResult = $row;
			$tempResult['meta'] = $mMeta::where($row->getKeyName(), $row->getKey())->get();
			$resule[] = $tempResult;
		}

		return $this->respond(Response::HTTP_OK, $resule);
	}

	public function get($id)
	{
		$m = self::MODEL;
		$mMeta = self::META_MODEL;

		$model = $m::find($id);
		if(is_null($model)){
			return $this->respond(Response::HTTP_NOT_FOUND);
		}

		$model['meta'] = $mMeta::where($model->getKeyName(), $model->getKey())->get();

		return $this->respond(Response::HTTP_OK, $model);
	}

	public function add(Request $request)
	{
		$m = self::MODEL;
		$this->validate($request, $m::$rules);
		$model = $m::create($request->all());
		if($model){
			// insert meta
			$mMeta = self::META_MODEL;

			if ($request->input('meta')) {			
				$metaInputs = $request->input('meta');			
				foreach ($metaInputs as $key => $value) {				
					$metaRow[$model->getKeyName()] = $model->getKey();
					$metaRow[self::FIELD_METAKEY] = $key;
					$metaRow[self::FIELD_METAVALUE] = $value;

					$dataArr[] = $metaRow;
				}			
				$mMeta::insert($dataArr);
			}

			// get all meta
			$model['meta'] = $mMeta::where($model->getKeyName(), $model->getKey())->get();
		}else{
			return $this->respond(Response::HTTP_NOT_FOUND);			
		}
		
		return $this->respond(Response::HTTP_CREATED, $model);
	}

	public function put(Request $request, $id)
	{
		$m = self::MODEL;
		$mMeta = self::META_MODEL;

		$this->validate($request, $m::$rules);
		$model = $m::find($id);
		if(is_null($model)){
			return $this->respond(Response::HTTP_NOT_FOUND);
		}	
		$model->update($request->all());

		// delete meta 
		$mMeta::where($model->getKeyName(), $model->getKey())->delete();
		
		if ($request->input('meta')) {
			// insert meta
			$metaInputs = $request->input('meta');			
			foreach ($metaInputs as $key => $value) {				
				$metaRow[$model->getKeyName()] = $model->getKey();
				$metaRow[self::FIELD_METAKEY] = $key;
				$metaRow[self::FIELD_METAVALUE] = $value;

				$dataArr[] = $metaRow;
			}			
			$mMeta::insert($dataArr);

			// get all meta
			$model['meta'] = $mMeta::where($model->getKeyName(), $model->getKey())->get();
		}

		return $this->respond(Response::HTTP_OK, $model);
	}

	public function remove($id)
	{
		$m = self::MODEL;
		$model = $m::find($id);
		if(is_null($model)){
			return $this->respond(Response::HTTP_NOT_FOUND);
		}
		
		// delete meta
		$mMeta = self::META_MODEL;
		$mMeta::where($model->getKeyName(), $model->getKey())->delete();

		// delete major
		$m::destroy($id);

		return $this->respond(Response::HTTP_OK, "Deleted");
	}

    protected function respond($status, $data = [])
    {
    	return response()->json($data, $status);
    }

}
