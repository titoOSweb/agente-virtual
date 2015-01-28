<?php

class BackendController extends BaseController {

	public function dashboard()
	{
		return View::make('backend.dashboard');
	}
	/* SILABAS */
	public function silabas()
	{
		$silabas = Palabra::type('silabas')->get();
		//echo $silabas->toJson(); exit;
		return View::make('backend.silabas.index', compact('silabas'));
	}

	public function silabas_create()
	{
		return View::make('backend.silabas.create');
	}

	public function silabas_delete($id)
	{
		$silaba = Palabra::find($id);
		if(isset($silaba->id)){
			$silaba->destroy($id);
		}
		return Redirect::to('/dashboard/silabas')->with('alert', ['type' => 'info', 'message' => 'La palabra ha sido eliminada.']);;
	}

	public function silabas_post()
	{
		$inputs = Input::all();
		$inputs['imagen'] = (Session::has('imagen')) ? Session::get('imagen') : '';
		$inputs['type'] = 'silabas';

		$palabra = new Palabra($inputs);
		if ($palabra->save())
		{
			return Redirect::to('/dashboard/silabas')->with('alert', ['type' => 'success', 'message' => 'La palabra ha sido guardada.']);;			
		}        
        return Redirect::to('/dashboard/silabas')->with('alert', ['type' => 'danger', 'message' => 'Ocurrio un error, intenta mas tarde.']);;

	}



	/* FIGURAS */
	public function figuras()
	{
		$figuras = Palabra::type('figura')->get();
		//echo $silabas->toJson(); exit;
		return View::make('backend.figuras.index', compact('figuras'));
	}

	public function figuras_create()
	{
		return View::make('backend.figuras.create');
	}

	public function figuras_delete($id)
	{
		$figura = Palabra::find($id);
		if(isset($figura->id)){
			$figura->destroy($id);
		}
		return Redirect::to('/dashboard/figuras')->with('alert', ['type' => 'info', 'message' => 'La palabra ha sido eliminada.']);;
	}

	public function figuras_post()
	{
		$inputs = Input::all();
		$inputs['imagen'] = (Session::has('imagen')) ? Session::get('imagen') : '';
		$inputs['type'] = 'figura';

		$palabra = new Palabra($inputs);
		if ($palabra->save())
		{
			return Redirect::to('/dashboard/figuras')->with('alert', ['type' => 'success', 'message' => 'La palabra ha sido guardada.']);;			
		}        
        return Redirect::to('/dashboard/figuras')->with('alert', ['type' => 'danger', 'message' => 'Ocurrio un error, intenta mas tarde.']);;

	}



	/* SORP */
	public function sorp()
	{
		$sorps = Palabra::type('sorp')->get();
		//echo $silabas->toJson(); exit;
		return View::make('backend.sorp.index', compact('sorps'));
	}

	public function sorp_create()
	{
		return View::make('backend.sorp.create');
	}

	public function sorp_delete($id)
	{
		$figura = Palabra::find($id);
		if(isset($figura->id)){
			$figura->destroy($id);
		}
		return Redirect::to('/dashboard/sorp')->with('alert', ['type' => 'info', 'message' => 'La palabra ha sido eliminada.']);;
	}

	public function sorp_post()
	{
		$inputs = Input::all();
		$inputs['imagen'] = (Session::has('imagen')) ? Session::get('imagen') : '';
		$inputs['type'] = 'sorp';

		$palabra = new Palabra($inputs);
		if ($palabra->save())
		{
			return Redirect::to('/dashboard/sorp')->with('alert', ['type' => 'success', 'message' => 'La palabra ha sido guardada.']);;			
		}        
        return Redirect::to('/dashboard/sorp')->with('alert', ['type' => 'danger', 'message' => 'Ocurrio un error, intenta mas tarde.']);;

	}


	/* CAMINO */
	public function camino()
	{
		$caminos = Palabra::type('camino')->get();
		return View::make('backend.camino.index', compact('caminos'));
	}

	public function camino_create()
	{
		return View::make('backend.camino.create');
	}

	public function camino_delete($id)
	{
		$figura = Palabra::find($id);
		if(isset($figura->id)){
			$figura->destroy($id);
		}
		return Redirect::to('/dashboard/camino')->with('alert', ['type' => 'info', 'message' => 'La palabra ha sido eliminada.']);;
	}

	public function camino_post()
	{
		$inputs = Input::all();
		$inputs['type'] = 'camino';

		$palabra = new Palabra($inputs);
		if ($palabra->save())
		{
			return Redirect::to('/dashboard/camino')->with('alert', ['type' => 'success', 'message' => 'La palabra ha sido guardada.']);;			
		}        
        return Redirect::to('/dashboard/camino')->with('alert', ['type' => 'danger', 'message' => 'Ocurrio un error, intenta mas tarde.']);;

	}

}