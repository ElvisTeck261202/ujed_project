<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fes1 extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['CVE_INC', 'Sitio_ID', 'CAT',
    'responsable', 'Paraje', 'Predio',
    'Municipio', 'Estado', 'Altitud', 
    'Waypoint_ID', 'CoordX', 'CoordY',
    'Precision_', 'Exposicion', 'Pendiente', 
    'DPF', 'Fecha', 'Hr_Inicio', 'Hr_Termino', 
    'CGE_CAR', 'CGE_CHE', 'CGE_CRE', 'CGE_CSE', 
    'CGE_CRO', 'Observaciones', 'OnServer'];
}
