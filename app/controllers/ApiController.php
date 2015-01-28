<?php

class ApiController extends BaseController {
    # Avatar Upload
    public function upload_silabas()
    {
        $file = Input::file('file');
        $destinationPath = public_path() . '/uploads/primer-grado/silabas/';
        $filename = str_random(16)."_".$file->getClientOriginalName();
        $upload_success = Input::file('file')->move($destinationPath, $filename);

        if ($upload_success) {
            $imagen = '/uploads/primer-grado/silabas/' . $filename;

            Session::put('imagen', $imagen);
            $response = ['imagen' => $imagen, 'success' => 200];

            return Response::json($response);
        } else {
            return Response::json('error', 400);
        }
    }

    public function upload_figuras()
    {
        $file = Input::file('file');
        $destinationPath = public_path() . '/uploads/primer-grado/figuras/';
        $filename = str_random(16)."_".$file->getClientOriginalName();
        $upload_success = Input::file('file')->move($destinationPath, $filename);

        if ($upload_success) {
            $imagen = '/uploads/primer-grado/figuras/' . $filename;

            Session::put('imagen', $imagen);
            $response = ['imagen' => $imagen, 'success' => 200];

            return Response::json($response);
        } else {
            return Response::json('error', 400);
        }
    }

    public function upload_sorp()
    {
        $file = Input::file('file');
        $destinationPath = public_path() . '/uploads/primer-grado/sorp/';
        $filename = str_random(16)."_".$file->getClientOriginalName();
        $upload_success = Input::file('file')->move($destinationPath, $filename);

        if ($upload_success) {
            $imagen = '/uploads/primer-grado/sorp/' . $filename;

            Session::put('imagen', $imagen);
            $response = ['imagen' => $imagen, 'success' => 200];

            return Response::json($response);
        } else {
            return Response::json('error', 400);
        }
    }



    public function camino_de_letras()
    {
        $caminos = Palabra::type('camino')->get();

        $opciones = [];

        foreach ($caminos as $key => $camino) {
            $current = [];
            $current['palabra'] = $camino->palabra;
            $current['letra'] = $camino->silabas;   
            array_push($opciones, $current);             
        }

        return Response::json(["opciones" => $opciones]);
    }


    public function cada_palabra()
    {
        $caminos = Palabra::cada()->get();

        $opciones = [];

        foreach ($caminos as $key => $camino) {
            $current = [];
            $current['palabra'] = $camino->sustituir();
            $current['tipo'] = $camino->imagen;   
            array_push($opciones, $current);             
        }

        return Response::json(["opciones" => $opciones]);
    }
   
}