<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fes1;

class fes1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fes1 = fes1::all();
        return $fes1;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fes1 = new fes1();
        $fes1->CVE_INC = $request->CVE_INC;
        $fes1->Sitio_ID = $request->Sitio_ID;
        $fes1->CAT = $request->CAT;
        $fes1->responsable = $request->responsable;
        $fes1->Paraje = $request->Paraje;
        $fes1->Predio = $request->Predio;
        $fes1->Municipio = $request->Municipio;
        $fes1->Estado = $request->Estado;
        $fes1->Altitud = $request->Altitud;
        $fes1->Waypoint_ID = $request->Waypoint_ID;
        $fes1->CoordX = $request->CoordX;
        $fes1->CoordY = $request->CoordY;
        $fes1->Precision_ = $request->Precision_;
        $fes1->Exposicion = $request->Exposicion;
        $fes1->Pendiente = $request->Pendiente;
        $fes1->DPF = $request->DPF;
        $fes1->Fecha = $request->Fecha;
        $fes1->Hr_Inicio = $request->Hr_Inicio;
        $fes1->Hr_Termino = $request->Hr_Termino;
        $fes1->CGE_CAR = $request->CGE_CAR;
        $fes1->CGE_CHE = $request->CGE_CHE;
        $fes1->CGE_CRE = $request->CGE_CRE;
        $fes1->CGE_CSE = $request->CGE_CSE;
        $fes1->CGE_CRO = $request->CGE_CRO;
        $fes1->Observaciones = $request->Observaciones;
        $fes1->OnServer = $request->OnServer;

        $fes1->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //$fes1 = fes1::findOrFail($request->CVE_INC);
        //$fes1 = fes1::where('CVE_INC', $request->CVE_INC)->firstOrFail();
//
        //$fes1->Sitio_ID = $request->Sitio_ID;
        //$fes1->CAT = $request->CAT;
        //$fes1->responsable = $request->responsable;
        //$fes1->Paraje = $request->Paraje;
        //$fes1->Predio = $request->Predio;
        //$fes1->Municipio = $request->Municipio;
        //$fes1->Estado = $request->Estado;
        //$fes1->Altitud = $request->Altitud;
        //$fes1->Waypoint_ID = $request->Waypoint_ID;
        //$fes1->CoordX = $request->CoordX;
        //$fes1->CoordY = $request->CoordY;
        //$fes1->Precision_ = $request->Precision_;
        //$fes1->Exposicion = $request->Exposicion;
        //$fes1->Pendiente = $request->Pendiente;
        //$fes1->DPF = $request->DPF;
        //$fes1->Fecha = $request->Fecha;
        //$fes1->Hr_Inicio = $request->Hr_Inicio;
        //$fes1->Hr_Termino = $request->Hr_Termino;
        //$fes1->CGE_CAR = $request->CGE_CAR;
        //$fes1->CGE_CHE = $request->CGE_CHE;
        //$fes1->CGE_CRE = $request->CGE_CRE;
        //$fes1->CGE_CSE = $request->CGE_CSE;
        //$fes1->CGE_CRO = $request->CGE_CRO;
        //$fes1->Observaciones = $request->Observaciones;
        //$fes1->OnServer = $request->OnServer;

        $fes1 = fes1::where('CVE_INC', $request->CVE_INC)
                ->update([
                    'Sitio_ID' => $request->Sitio_ID,
                    'CAT' => $request->CAT,
                    'responsable' => $request->responsable,
                    'Paraje' => $request->Paraje,
                    'Predio' => $request->Predio,
                    'Municipio' => $request->Municipio,
                    'Estado' => $request->Estado,
                    'Altitud' => $request->Altitud,
                    'Waypoint_ID' => $request->Waypoint_ID,
                    'CoordX' => $request->CoordX,
                    'CoordY' => $request->CoordY,
                    'Precision_' => $request->Precision_,
                    'Exposicion' => $request->Exposicion,
                    'Pendiente' => $request->Pendiente,
                    'DPF' => $request->DPF,
                    'Fecha' => $request->Fecha,
                    'Hr_Inicio' => $request->Hr_Inicio,
                    'Hr_Termino' => $request->Hr_Termino,
                    'CGE_CAR' => $request->CGE_CAR,
                    'CGE_CHE' => $request->CGE_CHE,
                    'CGE_CRE' => $request->CGE_CRE,
                    'CGE_CSE' => $request->CGE_CSE,
                    'CGE_CRO' => $request->CGE_CRO,
                    'Observaciones' => $request->Observaciones,
                    'OnServer' => $request->OnServer
                ]);

        return $fes1;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $fes1 = fes1::where('CVE_INC', $request->CVE_INC)
                ->delete();
        //$fes1 = fes1::destroy($request->CVE_INC);
        return $fes1;
    }
}
